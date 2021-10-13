<?php
/**
 * FeedsApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Feeds.
 *
 * The Selling Partner API for Feeds lets you upload data to Amazon on behalf of a selling partner.
 *
 * OpenAPI spec version: 2020-09-04
 */

namespace SellerLegend\AmazonSellingPartnerAPI\Api;

use DateTime;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Request;
use InvalidArgumentException;
use SellerLegend\AmazonSellingPartnerAPI\ApiException;
use SellerLegend\AmazonSellingPartnerAPI\Configuration;
use SellerLegend\AmazonSellingPartnerAPI\HeaderSelector;
use SellerLegend\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\CancelFeedResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\CreateFeedDocumentResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\CreateFeedDocumentSpecification;
use SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\CreateFeedResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\CreateFeedSpecification;
use SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\GetFeedDocumentResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\GetFeedResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\GetFeedsResponse;
use SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * FeedsApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FeedsApi {
    use SellingPartnerApiRequest;

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    public function __construct(Configuration $config) {
        $this->client = new Client();
        $this->config = $config;
        $this->headerSelector = new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig() {
        return $this->config;
    }

    /**
     * Operation cancelFeed.
     *
     * @param string $feed_id The identifier for the feed. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return CancelFeedResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function cancelFeed($feed_id) {
        [$response] = $this->cancelFeedWithHttpInfo($feed_id);

        return $response;
    }

    /**
     * Operation cancelFeedWithHttpInfo.
     *
     * @param string $feed_id The identifier for the feed. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\CancelFeedResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function cancelFeedWithHttpInfo($feed_id) {
        $returnType = '\SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\CancelFeedResponse';
        $request = $this->cancelFeedRequest($feed_id);

        return $this->sendRequest($request, CancelFeedResponse::class);
    }

    /**
     * Operation cancelFeedAsync.
     *
     * @param string $feed_id The identifier for the feed. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function cancelFeedAsync($feed_id) {
        return $this->cancelFeedAsyncWithHttpInfo($feed_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelFeedAsyncWithHttpInfo.
     *
     * @param string $feed_id The identifier for the feed. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function cancelFeedAsyncWithHttpInfo($feed_id) {
        $request = $this->cancelFeedRequest($feed_id);

        return $this->sendRequestAsync($request, CancelFeedResponse::class);
    }

    /**
     * Create request for operation 'cancelFeed'.
     *
     * @param string $feed_id The identifier for the feed. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function cancelFeedRequest($feed_id) {
        // verify the required parameter 'feed_id' is set
        if (null === $feed_id || (is_array($feed_id) && 0 === count($feed_id))) {
            throw new InvalidArgumentException('Missing the required parameter $feed_id when calling cancelFeed');
        }

        $resourcePath = '/feeds/2020-09-04/feeds/{feedId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $feed_id) {
            $resourcePath = str_replace(
                '{' . 'feedId' . '}',
                ObjectSerializer::toPathValue($feed_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'DELETE', $httpBody);
    }

    /**
     * Operation createFeed.
     *
     * @param CreateFeedSpecification $body body (required)
     *
     * @return CreateFeedResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function createFeed($body) {
        [$response] = $this->createFeedWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation createFeedWithHttpInfo.
     *
     * @param CreateFeedSpecification $body (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\CreateFeedResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function createFeedWithHttpInfo($body) {
        $returnType = '\SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\CreateFeedResponse';
        $request = $this->createFeedRequest($body);

        return $this->sendRequest($request, CreateFeedResponse::class);
    }

    /**
     * Operation createFeedAsync.
     *
     * @param CreateFeedSpecification $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function createFeedAsync($body) {
        return $this->createFeedAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createFeedAsyncWithHttpInfo.
     *
     * @param CreateFeedSpecification $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function createFeedAsyncWithHttpInfo($body) {
        $request = $this->createFeedRequest($body);

        return $this->sendRequestAsync($request, CreateFeedResponse::class);
    }

    /**
     * Create request for operation 'createFeed'.
     *
     * @param CreateFeedSpecification $body (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function createFeedRequest($body) {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new InvalidArgumentException('Missing the required parameter $body when calling createFeed');
        }

        $resourcePath = '/feeds/2020-09-04/feeds';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation createFeedDocument.
     *
     * @param CreateFeedDocumentSpecification $body body (required)
     *
     * @return CreateFeedDocumentResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function createFeedDocument($body) {
        [$response] = $this->createFeedDocumentWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation createFeedDocumentWithHttpInfo.
     *
     * @param CreateFeedDocumentSpecification $body (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\CreateFeedDocumentResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function createFeedDocumentWithHttpInfo($body) {
        $request = $this->createFeedDocumentRequest($body);

        return $this->sendRequest($request, CreateFeedDocumentResponse::class);
    }

    /**
     * Operation createFeedDocumentAsync.
     *
     * @param CreateFeedDocumentSpecification $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function createFeedDocumentAsync($body) {
        return $this->createFeedDocumentAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createFeedDocumentAsyncWithHttpInfo.
     *
     * @param CreateFeedDocumentSpecification $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function createFeedDocumentAsyncWithHttpInfo($body) {
        $request = $this->createFeedDocumentRequest($body);

        return $this->sendRequestAsync($request, CreateFeedDocumentResponse::class);
    }

    /**
     * Create request for operation 'createFeedDocument'.
     *
     * @param CreateFeedDocumentSpecification $body (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function createFeedDocumentRequest($body) {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new InvalidArgumentException('Missing the required parameter $body when calling createFeedDocument');
        }

        $resourcePath = '/feeds/2020-09-04/documents';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation getFeed.
     *
     * @param string $feed_id The identifier for the feed. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return GetFeedResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getFeed($feed_id) {
        [$response] = $this->getFeedWithHttpInfo($feed_id);

        return $response;
    }

    /**
     * Operation getFeedWithHttpInfo.
     *
     * @param string $feed_id The identifier for the feed. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\GetFeedResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getFeedWithHttpInfo($feed_id) {
        $returnType = '\SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\GetFeedResponse';
        $request = $this->getFeedRequest($feed_id);

        return $this->sendRequest($request, GetFeedResponse::class);
    }

    /**
     * Operation getFeedAsync.
     *
     * @param string $feed_id The identifier for the feed. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getFeedAsync($feed_id) {
        return $this->getFeedAsyncWithHttpInfo($feed_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFeedAsyncWithHttpInfo.
     *
     * @param string $feed_id The identifier for the feed. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getFeedAsyncWithHttpInfo($feed_id) {
        $returnType = '\SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\GetFeedResponse';
        $request = $this->getFeedRequest($feed_id);

        return $this->sendRequestAsync($request, GetFeedResponse::class);
    }

    /**
     * Create request for operation 'getFeed'.
     *
     * @param string $feed_id The identifier for the feed. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getFeedRequest($feed_id) {
        // verify the required parameter 'feed_id' is set
        if (null === $feed_id || (is_array($feed_id) && 0 === count($feed_id))) {
            throw new InvalidArgumentException('Missing the required parameter $feed_id when calling getFeed');
        }

        $resourcePath = '/feeds/2020-09-04/feeds/{feedId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $feed_id) {
            $resourcePath = str_replace(
                '{' . 'feedId' . '}',
                ObjectSerializer::toPathValue($feed_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getFeedDocument.
     *
     * @param string $feed_document_id The identifier of the feed document. (required)
     *
     * @return GetFeedDocumentResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getFeedDocument($feed_document_id) {
        [$response] = $this->getFeedDocumentWithHttpInfo($feed_document_id);

        return $response;
    }

    /**
     * Operation getFeedDocumentWithHttpInfo.
     *
     * @param string $feed_document_id The identifier of the feed document. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\GetFeedDocumentResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getFeedDocumentWithHttpInfo($feed_document_id) {
        $request = $this->getFeedDocumentRequest($feed_document_id);

        return $this->sendRequest($request, GetFeedDocumentResponse::class);
    }

    /**
     * Operation getFeedDocumentAsync.
     *
     * @param string $feed_document_id The identifier of the feed document. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getFeedDocumentAsync($feed_document_id) {
        return $this->getFeedDocumentAsyncWithHttpInfo($feed_document_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFeedDocumentAsyncWithHttpInfo.
     *
     * @param string $feed_document_id The identifier of the feed document. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getFeedDocumentAsyncWithHttpInfo($feed_document_id) {
        $request = $this->getFeedDocumentRequest($feed_document_id);

        return $this->sendRequestAsync($request, GetFeedDocumentResponse::class);
    }

    /**
     * Create request for operation 'getFeedDocument'.
     *
     * @param string $feed_document_id The identifier of the feed document. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getFeedDocumentRequest($feed_document_id) {
        // verify the required parameter 'feed_document_id' is set
        if (null === $feed_document_id || (is_array($feed_document_id) && 0 === count($feed_document_id))) {
            throw new InvalidArgumentException('Missing the required parameter $feed_document_id when calling getFeedDocument');
        }

        $resourcePath = '/feeds/2020-09-04/documents/{feedDocumentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $feed_document_id) {
            $resourcePath = str_replace(
                '{' . 'feedDocumentId' . '}',
                ObjectSerializer::toPathValue($feed_document_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getFeeds.
     *
     * @param string[] $feed_types A list of feed types used to filter feeds. When feedTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either feedTypes or nextToken is required. (optional)
     * @param string[] $marketplace_ids A list of marketplace identifiers used to filter feeds. The feeds returned will match at least one of the marketplaces that you specify. (optional)
     * @param int $page_size The maximum number of feeds to return in a single call. (optional, default to 10)
     * @param string[] $processing_statuses A list of processing statuses used to filter feeds. (optional)
     * @param DateTime $created_since The earliest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is 90 days ago. Feeds are retained for a maximum of 90 days. (optional)
     * @param DateTime $created_until The latest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is now. (optional)
     * @param string $next_token A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getFeeds operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. (optional)
     *
     * @return GetFeedsResponse
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     */
    public function getFeeds($feed_types = null, $marketplace_ids = null, $page_size = '10', $processing_statuses = null, $created_since = null, $created_until = null, $next_token = null) {
        [$response] = $this->getFeedsWithHttpInfo($feed_types, $marketplace_ids, $page_size, $processing_statuses, $created_since, $created_until, $next_token);

        return $response;
    }

    /**
     * Operation getFeedsWithHttpInfo.
     *
     * @param string[] $feed_types A list of feed types used to filter feeds. When feedTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either feedTypes or nextToken is required. (optional)
     * @param string[] $marketplace_ids A list of marketplace identifiers used to filter feeds. The feeds returned will match at least one of the marketplaces that you specify. (optional)
     * @param int $page_size The maximum number of feeds to return in a single call. (optional, default to 10)
     * @param string[] $processing_statuses A list of processing statuses used to filter feeds. (optional)
     * @param DateTime $created_since The earliest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is 90 days ago. Feeds are retained for a maximum of 90 days. (optional)
     * @param DateTime $created_until The latest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is now. (optional)
     * @param string $next_token A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getFeeds operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. (optional)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\GetFeedsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     */
    public function getFeedsWithHttpInfo($feed_types = null, $marketplace_ids = null, $page_size = '10', $processing_statuses = null, $created_since = null, $created_until = null, $next_token = null) {
        $request = $this->getFeedsRequest($feed_types, $marketplace_ids, $page_size, $processing_statuses, $created_since, $created_until, $next_token);

        return $this->sendRequest($request, GetFeedsResponse::class);
    }

    /**
     * Operation getFeedsAsync.
     *
     * @param string[] $feed_types A list of feed types used to filter feeds. When feedTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either feedTypes or nextToken is required. (optional)
     * @param string[] $marketplace_ids A list of marketplace identifiers used to filter feeds. The feeds returned will match at least one of the marketplaces that you specify. (optional)
     * @param int $page_size The maximum number of feeds to return in a single call. (optional, default to 10)
     * @param string[] $processing_statuses A list of processing statuses used to filter feeds. (optional)
     * @param DateTime $created_since The earliest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is 90 days ago. Feeds are retained for a maximum of 90 days. (optional)
     * @param DateTime $created_until The latest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is now. (optional)
     * @param string $next_token A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getFeeds operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getFeedsAsync($feed_types = null, $marketplace_ids = null, $page_size = '10', $processing_statuses = null, $created_since = null, $created_until = null, $next_token = null) {
        return $this->getFeedsAsyncWithHttpInfo($feed_types, $marketplace_ids, $page_size, $processing_statuses, $created_since, $created_until, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFeedsAsyncWithHttpInfo.
     *
     * @param string[] $feed_types A list of feed types used to filter feeds. When feedTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either feedTypes or nextToken is required. (optional)
     * @param string[] $marketplace_ids A list of marketplace identifiers used to filter feeds. The feeds returned will match at least one of the marketplaces that you specify. (optional)
     * @param int $page_size The maximum number of feeds to return in a single call. (optional, default to 10)
     * @param string[] $processing_statuses A list of processing statuses used to filter feeds. (optional)
     * @param DateTime $created_since The earliest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is 90 days ago. Feeds are retained for a maximum of 90 days. (optional)
     * @param DateTime $created_until The latest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is now. (optional)
     * @param string $next_token A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getFeeds operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getFeedsAsyncWithHttpInfo($feed_types = null, $marketplace_ids = null, $page_size = '10', $processing_statuses = null, $created_since = null, $created_until = null, $next_token = null) {
        $returnType = '\SellerLegend\AmazonSellingPartnerAPI\Models\Feeds\GetFeedsResponse';
        $request = $this->getFeedsRequest($feed_types, $marketplace_ids, $page_size, $processing_statuses, $created_since, $created_until, $next_token);

        return $this->sendRequestAsync($request, GetFeedsResponse::class);
    }

    /**
     * Create request for operation 'getFeeds'.
     *
     * @param string[] $feed_types A list of feed types used to filter feeds. When feedTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either feedTypes or nextToken is required. (optional)
     * @param string[] $marketplace_ids A list of marketplace identifiers used to filter feeds. The feeds returned will match at least one of the marketplaces that you specify. (optional)
     * @param int $page_size The maximum number of feeds to return in a single call. (optional, default to 10)
     * @param string[] $processing_statuses A list of processing statuses used to filter feeds. (optional)
     * @param DateTime $created_since The earliest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is 90 days ago. Feeds are retained for a maximum of 90 days. (optional)
     * @param DateTime $created_until The latest feed creation date and time for feeds included in the response, in ISO 8601 format. The default is now. (optional)
     * @param string $next_token A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getFeeds operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. (optional)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getFeedsRequest($feed_types = null, $marketplace_ids = null, $page_size = '10', $processing_statuses = null, $created_since = null, $created_until = null, $next_token = null) {
        $resourcePath = '/feeds/2020-09-04/feeds';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($feed_types)) {
            $feed_types = ObjectSerializer::serializeCollection($feed_types, 'csv', true);
        }
        if (null !== $feed_types) {
            $queryParams['feedTypes'] = ObjectSerializer::toQueryValue($feed_types);
        }
        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'csv', true);
        }
        if (null !== $marketplace_ids) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplace_ids);
        }
        // query params
        if (null !== $page_size) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($page_size);
        }
        // query params
        if (is_array($processing_statuses)) {
            $processing_statuses = ObjectSerializer::serializeCollection($processing_statuses, 'csv', true);
        }
        if (null !== $processing_statuses) {
            $queryParams['processingStatuses'] = ObjectSerializer::toQueryValue($processing_statuses);
        }
        // query params
        if (null !== $created_since) {
            $queryParams['createdSince'] = ObjectSerializer::toQueryValue($created_since);
        }
        // query params
        if (null !== $created_until) {
            $queryParams['createdUntil'] = ObjectSerializer::toQueryValue($created_until);
        }
        // query params
        if (null !== $next_token) {
            $queryParams['nextToken'] = ObjectSerializer::toQueryValue($next_token);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }
}
