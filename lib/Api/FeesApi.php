<?php
/**
 * FeesApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Product Fees.
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
 *
 * OpenAPI spec version: v0
 */

namespace SellerLegend\AmazonSellingPartnerAPI\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Promise\PromiseInterface;
use InvalidArgumentException;
use SellerLegend\AmazonSellingPartnerAPI\Api\any;
use SellerLegend\AmazonSellingPartnerAPI\ApiException;
use SellerLegend\AmazonSellingPartnerAPI\Configuration;
use SellerLegend\AmazonSellingPartnerAPI\HeaderSelector;
use SellerLegend\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimateByIdRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimateResult;
use SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\GetMyFeesEstimateRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\GetMyFeesEstimateResponse;
use SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * FeesApi Class Doc Comment
 *
 * @category Class
 * @package  SellerLegend\AmazonSellingPartnerAPI
 */
class FeesApi {
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
     * Operation getMyFeesEstimateForASIN
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param GetMyFeesEstimateRequest $body body (required)
     *
     * @return GetMyFeesEstimateResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getMyFeesEstimateForASIN($asin, $body) {
        [$response] = $this->getMyFeesEstimateForASINWithHttpInfo($asin, $body);

        return $response;
    }

    /**
     * Operation getMyFeesEstimateForASINWithHttpInfo
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param GetMyFeesEstimateRequest $body (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\GetMyFeesEstimateResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getMyFeesEstimateForASINWithHttpInfo($asin, $body) {
        $request = $this->getMyFeesEstimateForASINRequest($asin, $body);

        return $this->sendRequest($request, GetMyFeesEstimateResponse::class);
    }

    /**
     * Operation getMyFeesEstimateForASINAsync
     *
     *
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param GetMyFeesEstimateRequest $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getMyFeesEstimateForASINAsync($asin, $body) {
        return $this->getMyFeesEstimateForASINAsyncWithHttpInfo($asin, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMyFeesEstimateForASINAsyncWithHttpInfo
     *
     *
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param GetMyFeesEstimateRequest $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getMyFeesEstimateForASINAsyncWithHttpInfo($asin, $body) {
        $request = $this->getMyFeesEstimateForASINRequest($asin, $body);

        return $this->sendRequestAsync($request, GetMyFeesEstimateResponse::class);
    }

    /**
     * Create request for operation 'getMyFeesEstimateForASIN'
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param GetMyFeesEstimateRequest $body (required)
     *
     * @return \GuzzleHttp\Psr7\Request
     * @throws InvalidArgumentException
     */
    public function getMyFeesEstimateForASINRequest($asin, $body) {
        // verify the required parameter 'asin' is set
        if ($asin === null || (is_array($asin) && count($asin) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $asin when calling getMyFeesEstimateForASIN'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $body when calling getMyFeesEstimateForASIN'
            );
        }

        $resourcePath = '/products/fees/v0/items/{Asin}/feesEstimate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $asin) {
            $resourcePath = str_replace(
                '{' . 'Asin' . '}',
                ObjectSerializer::toPathValue($asin),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation getMyFeesEstimateForSKU
     *
     * @param string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. (required)
     * @param GetMyFeesEstimateRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return GetMyFeesEstimateResponse
     */
    public function getMyFeesEstimateForSKU($seller_sku, $body) {
        [$response] = $this->getMyFeesEstimateForSKUWithHttpInfo($seller_sku, $body);
        return $response;
    }

    /**
     * Operation getMyFeesEstimateForSKUWithHttpInfo
     *
     * @param string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. (required)
     * @param GetMyFeesEstimateRequest $body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\GetMyFeesEstimateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMyFeesEstimateForSKUWithHttpInfo($seller_sku, $body) {
        $request = $this->getMyFeesEstimateForSKURequest($seller_sku, $body);

        return $this->sendRequest($request, GetMyFeesEstimateResponse::class);
    }

    /**
     * Operation getMyFeesEstimateForSKUAsync
     *
     *
     *
     * @param string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. (required)
     * @param GetMyFeesEstimateRequest $body (required)
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getMyFeesEstimateForSKUAsync($seller_sku, $body) {
        return $this->getMyFeesEstimateForSKUAsyncWithHttpInfo($seller_sku, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMyFeesEstimateForSKUAsyncWithHttpInfo
     *
     *
     *
     * @param string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. (required)
     * @param GetMyFeesEstimateRequest $body (required)
     *
     * @throws InvalidArgumentException
     * @return PromiseInterface
     */
    public function getMyFeesEstimateForSKUAsyncWithHttpInfo($seller_sku, $body) {
        $request = $this->getMyFeesEstimateForSKURequest($seller_sku, $body);

        return $this->sendRequestAsync($request, GetMyFeesEstimateResponse::class);
    }

    /**
     * Create request for operation 'getMyFeesEstimateForSKU'
     *
     * @param string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. (required)
     * @param GetMyFeesEstimateRequest $body (required)
     *
     * @throws InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getMyFeesEstimateForSKURequest($seller_sku, $body) {
        // verify the required parameter 'seller_sku' is set
        if ($seller_sku === null || (is_array($seller_sku) && count($seller_sku) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $seller_sku when calling getMyFeesEstimateForSKU'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $body when calling getMyFeesEstimateForSKU'
            );
        }

        $resourcePath = '/products/fees/v0/listings/{SellerSKU}/feesEstimate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if ($seller_sku !== null) {
            $resourcePath = str_replace(
                '{' . 'SellerSKU' . '}',
                ObjectSerializer::toPathValue($seller_sku),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation getMyFeesEstimates
     *
     * @param FeesEstimateByIdRequest[] $body body (required)
     *
     * @return FeesEstimateResult[]
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     * @throws GuzzleException
     */
    public function getMyFeesEstimates($body) {
        [$response] = $this->getMyFeesEstimatesWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation getMyFeesEstimatesWithHttpInfo
     *
     * @param FeesEstimateByIdRequest[] $body (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimateResult[], HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     * @throws GuzzleException
     */
    public function getMyFeesEstimatesWithHttpInfo($body) {
        $request = $this->getMyFeesEstimatesRequest($body);

        return $this->sendRequest($request, FeesEstimateResult::class);
    }

    /**
     * Operation getMyFeesEstimatesAsync
     *
     *
     *
     * @param FeesEstimateByIdRequest[] $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getMyFeesEstimatesAsync($body) {
        return $this->getMyFeesEstimatesAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMyFeesEstimatesAsyncWithHttpInfo
     *
     *
     *
     * @param FeesEstimateByIdRequest[] $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public function getMyFeesEstimatesAsyncWithHttpInfo($body) {
        $request = $this->getMyFeesEstimatesRequest($body);

        return $this->sendRequestAsync($request, FeesEstimateResult::class);
    }

    /**
     * Create request for operation 'getMyFeesEstimates'
     *
     * @param FeesEstimateByIdRequest[] $body (required)
     *
     * @return \GuzzleHttp\Psr7\Request
     * @throws InvalidArgumentException
     */
    public function getMyFeesEstimatesRequest($body) {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $body when calling getMyFeesEstimates'
            );
        }

        $resourcePath = '/products/fees/v0/feesEstimate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }
}
