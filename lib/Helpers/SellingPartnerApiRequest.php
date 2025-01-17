<?php

namespace SellerLegend\AmazonSellingPartnerAPI\Helpers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Utils;
use RuntimeException;
use SellerLegend\AmazonSellingPartnerAPI\ApiException;
use SellerLegend\AmazonSellingPartnerAPI\LimitException;
use SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;
use SellerLegend\AmazonSellingPartnerAPI\Signature;

/**
 * Trait SellingPartnerApiRequest.
 *
 * @author Stefan Neuhaus / ClouSale
 */
trait SellingPartnerApiRequest {
    private function generateRequest(
        bool   $multipart,
        array  $formParams,
        array  $queryParams,
        string $resourcePath,
        array  $headerParams,
        string $method,
               $httpBody
    ): Request {
        if (null != $formParams) {
            ksort($formParams);
        }
        if (null != $queryParams) {
            ksort($queryParams);
        }
        // body params
        $_tempBody = $httpBody;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ('application/json' === $headers['Content-Type']) {
                $httpBody = Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($httpBody));
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name'     => $formParamName,
                        'contents' => $formParamValue,
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ('application/json' === $headers['Content-Type']) {
                $httpBody = Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }
        $query = Query::build($queryParams);
        $amazonHeader = Signature::calculateSignature(
            $this->config,
            str_replace('https://', '', $this->config->getHost()),
            $method,
            $resourcePath,
            $query,
            (string)$httpBody,
        );
        $headers = array_merge(
            $headerParams,
            $headers,
            $amazonHeader
        );

        return new Request(
            $method,
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * @throws ApiException
     * @throws LimitException
     * @throws GuzzleException
     */
    private function sendRequest(Request $request, string $returnType = null, string $errorType = null): array {
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getCode() == '429') {
                    throw new LimitException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null);
                } else {
                    throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null);
                }
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            if (null === $returnType) {
                $content = null;
            } elseif ('\SplFileObject' === $returnType) {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = $response->getBody()->getContents();
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 503:
                case 500:
                case 429:
                case 404:
                case 403:
                case 401:
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        $errorType ?: $returnType,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        $returnType,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create http client option.
     *
     * @return array of http client options
     * @throws RuntimeException on file opening failure
     *
     */
    protected function createHttpClientOption(): array {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    /**
     * @return mixed
     * @throws ApiException
     *
     */
    private function sendRequestAsync(Request $request, string $returnType = null) {
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if (null === $returnType) {
                        $content = null;
                    } elseif ('\SplFileObject' === $returnType) {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ('string' !== $returnType) {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
                }
            );
    }
}
