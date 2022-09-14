<?php
/**
 * ProductPricingApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * OpenAPI spec version: v0
 */

namespace SellerLegend\AmazonSellingPartnerAPI\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Request;
use InvalidArgumentException;
use SellerLegend\AmazonSellingPartnerAPI\ApiException;
use SellerLegend\AmazonSellingPartnerAPI\Configuration;
use SellerLegend\AmazonSellingPartnerAPI\HeaderSelector;
use SellerLegend\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing\GetItemOffersBatchRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing\GetItemOffersBatchResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing\GetListingOffersBatchRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing\GetListingOffersBatchResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing\GetOffersResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing\GetPricingResponse;
use SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * ProductPricingApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ProductPricingApi {
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
     * Operation getCompetitivePricing.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. (required)
     * @param string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param string $customer_type Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer. (optional)
     *
     * @return GetPricingResponse
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function getCompetitivePricing($marketplace_id, $item_type, $asins = null, $skus = null, $customer_type = null) {
        [$response] = $this->getCompetitivePricingWithHttpInfo($marketplace_id, $item_type, $asins, $skus, $customer_type);

        return $response;
    }

    /**
     * Operation getCompetitivePricingWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. (required)
     * @param string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param string $customer_type Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer. (optional)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing\GetPricingResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function getCompetitivePricingWithHttpInfo($marketplace_id, $item_type, $asins = null, $skus = null, $customer_type = null) {
        $request = $this->getCompetitivePricingRequest($marketplace_id, $item_type, $asins, $skus, $customer_type);

        return $this->sendRequest($request, GetPricingResponse::class);
    }

    /**
     * Operation getCompetitivePricingAsync.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. (required)
     * @param string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param string $customer_type Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getCompetitivePricingAsync($marketplace_id, $item_type, $asins = null, $skus = null, $customer_type = null) {
        return $this->getCompetitivePricingAsyncWithHttpInfo($marketplace_id, $item_type, $asins, $skus, $customer_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCompetitivePricingAsyncWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. (required)
     * @param string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param string $customer_type Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getCompetitivePricingAsyncWithHttpInfo($marketplace_id, $item_type, $asins = null, $skus = null, $customer_type = null) {
        $request = $this->getCompetitivePricingRequest($marketplace_id, $item_type, $asins, $skus, $customer_type);

        return $this->sendRequestAsync($request, GetPricingResponse::class);
    }

    /**
     * Create request for operation 'getCompetitivePricing'.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. (required)
     * @param string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param string $customer_type Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer. (optional)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getCompetitivePricingRequest($marketplace_id, $item_type, $asins = null, $skus = null, $customer_type = null) {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplace_id || (is_array($marketplace_id) && 0 === count($marketplace_id))) {
            throw new InvalidArgumentException('Missing the required parameter $marketplace_id when calling getCompetitivePricing');
        }

        // verify the required parameter 'item_type' is set
        if (null === $item_type || (is_array($item_type) && 0 === count($item_type))) {
            throw new InvalidArgumentException('Missing the required parameter $item_type when calling getCompetitivePricing');
        }

        $resourcePath = '/products/pricing/v0/competitivePrice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams['MarketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id);

        // query params
        $queryParams['ItemType'] = ObjectSerializer::toQueryValue($item_type);

        // query params
        if (is_array($asins)) {
            $asins = ObjectSerializer::serializeCollection($asins, 'csv', true);
        }
        if (null !== $asins) {
            $queryParams['Asins'] = ObjectSerializer::toQueryValue($asins);
        }

        // query params
        if (is_array($skus)) {
            $skus = ObjectSerializer::serializeCollection($skus, 'csv', true);
        }
        if (null !== $skus) {
            $queryParams['Skus'] = ObjectSerializer::toQueryValue($skus);
        }

        // query params
        if (is_array($customer_type)) {
            $customer_type = ObjectSerializer::serializeCollection($customer_type, 'csv', true);
        }
        if (null !== $customer_type) {
            $queryParams['CustomerType'] = ObjectSerializer::toQueryValue($customer_type);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getItemOffers.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @return GetOffersResponse
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function getItemOffers($marketplace_id, $item_condition, $asin, $customer_type = null) {
        [$response] = $this->getItemOffersWithHttpInfo($marketplace_id, $item_condition, $asin, $customer_type);

        return $response;
    }

    /**
     * Operation getItemOffersWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing\GetOffersResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function getItemOffersWithHttpInfo($marketplace_id, $item_condition, $asin, $customer_type = null) {
        $request = $this->getItemOffersRequest($marketplace_id, $item_condition, $asin, $customer_type);

        return $this->sendRequest($request, GetOffersResponse::class);
    }

    /**
     * Operation getItemOffersAsync.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getItemOffersAsync($marketplace_id, $item_condition, $asin, $customer_type = null) {
        return $this->getItemOffersAsyncWithHttpInfo($marketplace_id, $item_condition, $asin, $customer_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getItemOffersAsyncWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getItemOffersAsyncWithHttpInfo($marketplace_id, $item_condition, $asin, $customer_type = null) {
        $request = $this->getItemOffersRequest($marketplace_id, $item_condition, $asin, $customer_type);

        return $this->sendRequestAsync($request, GetOffersResponse::class);
    }

    /**
     * Create request for operation 'getItemOffers'.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getItemOffersRequest($marketplace_id, $item_condition, $asin, $customer_type = null) {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplace_id || (is_array($marketplace_id) && 0 === count($marketplace_id))) {
            throw new InvalidArgumentException('Missing the required parameter $marketplace_id when calling getItemOffers');
        }

        // verify the required parameter 'item_condition' is set
        if (null === $item_condition || (is_array($item_condition) && 0 === count($item_condition))) {
            throw new InvalidArgumentException('Missing the required parameter $item_condition when calling getItemOffers');
        }

        // verify the required parameter 'asin' is set
        if (null === $asin || (is_array($asin) && 0 === count($asin))) {
            throw new InvalidArgumentException('Missing the required parameter $asin when calling getItemOffers');
        }

        $resourcePath = '/products/pricing/v0/items/{Asin}/offers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams['MarketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id);

        // query params
        $queryParams['ItemCondition'] = ObjectSerializer::toQueryValue($item_condition);

        // query params
        if ($customer_type !== null) {
            $queryParams['CustomerType'] = ObjectSerializer::toQueryValue($customer_type);
        }

        // path params
        $resourcePath = str_replace(
            '{' . 'Asin' . '}',
            ObjectSerializer::toPathValue($asin),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getItemOffersBatch
     *
     * @param GetItemOffersBatchRequest $body get_item_offers_batch_request_body (required)
     *
     * @return GetItemOffersBatchResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getItemOffersBatch($body) {
        [$response] = $this->getItemOffersBatchWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation getItemOffersBatchWithHttpInfo
     *
     * @param GetItemOffersBatchRequest $body (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing\GetItemOffersBatchResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getItemOffersBatchWithHttpInfo($body) {
        $request = $this->getItemOffersBatchRequest($body);

        return $this->sendRequest($request, GetItemOffersBatchResponse::class);
    }

    /**
     * Operation getItemOffersBatchAsync
     *
     * @param GetItemOffersBatchRequest $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getItemOffersBatchAsync($body) {
        [$response] = $this->getItemOffersBatchAsyncWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation getItemOffersBatchAsyncWithHttpInfo
     *
     * @param GetItemOffersBatchRequest $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getItemOffersBatchAsyncWithHttpInfo($body) {
        $request = $this->getItemOffersBatchRequest($body);

        return $this->sendRequestAsync($request, GetItemOffersBatchResponse::class);
    }

    /**
     * Create request for operation 'getItemOffersBatch'
     *
     * @param GetItemOffersBatchRequest $body (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getItemOffersBatchRequest($body) {
        // verify the required parameter 'get_item_offers_batch_request_body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling getItemOffersBatch'
            );
        }

        $resourcePath = '/batches/products/pricing/v0/itemOffers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation getListingOffers.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $seller_sku Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     * @param string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @return GetOffersResponse
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function getListingOffers($marketplace_id, $item_condition, $seller_sku, $customer_type = null) {
        [$response] = $this->getListingOffersWithHttpInfo($marketplace_id, $item_condition, $seller_sku, $customer_type);

        return $response;
    }

    /**
     * Operation getListingOffersWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $seller_sku Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     * @param string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing\GetOffersResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function getListingOffersWithHttpInfo($marketplace_id, $item_condition, $seller_sku, $customer_type = null) {
        $request = $this->getListingOffersRequest($marketplace_id, $item_condition, $seller_sku, $customer_type);

        return $this->sendRequest($request, GetOffersResponse::class);
    }

    /**
     * Operation getListingOffersAsync.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $seller_sku Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     * @param string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getListingOffersAsync($marketplace_id, $item_condition, $seller_sku, $customer_type = null) {
        return $this->getListingOffersAsyncWithHttpInfo($marketplace_id, $item_condition, $seller_sku, $customer_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getListingOffersAsyncWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $seller_sku Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     * @param string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getListingOffersAsyncWithHttpInfo($marketplace_id, $item_condition, $seller_sku, $customer_type = null) {
        $request = $this->getListingOffersRequest($marketplace_id, $item_condition, $seller_sku, $customer_type);

        return $this->sendRequestAsync($request, GetOffersResponse::class);
    }

    /**
     * Create request for operation 'getListingOffers'.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $seller_sku Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     * @param string $customer_type Indicates whether to request Consumer or Business offers. Default is Consumer. (optional)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getListingOffersRequest($marketplace_id, $item_condition, $seller_sku, $customer_type = null) {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplace_id || (is_array($marketplace_id) && 0 === count($marketplace_id))) {
            throw new InvalidArgumentException('Missing the required parameter $marketplace_id when calling getListingOffers');
        }

        // verify the required parameter 'item_condition' is set
        if (null === $item_condition || (is_array($item_condition) && 0 === count($item_condition))) {
            throw new InvalidArgumentException('Missing the required parameter $item_condition when calling getListingOffers');
        }

        // verify the required parameter 'seller_sku' is set
        if (null === $seller_sku || (is_array($seller_sku) && 0 === count($seller_sku))) {
            throw new InvalidArgumentException('Missing the required parameter $seller_sku when calling getListingOffers');
        }

        $resourcePath = '/products/pricing/v0/listings/{SellerSKU}/offers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams['MarketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id);

        // query params
        $queryParams['ItemCondition'] = ObjectSerializer::toQueryValue($item_condition);

        // query params
        if ($customer_type !== null) {
            $queryParams['CustomerType'] = $customer_type;
        }

        // path params
        $resourcePath = str_replace(
            '{' . 'SellerSKU' . '}',
            ObjectSerializer::toPathValue($seller_sku),
            $resourcePath
        );

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getListingOffersBatch
     *
     * @param GetListingOffersBatchRequest $body (required)
     *
     * @return GetListingOffersBatchResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getListingOffersBatch($body) {
        [$response] = $this->getListingOffersBatchWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation getListingOffersBatchWithHttpInfo
     *
     * @param GetListingOffersBatchRequest $body (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing\GetListingOffersBatchResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getListingOffersBatchWithHttpInfo($body) {
        $request = $this->getListingOffersBatchRequest($body);

        return $this->sendRequest($request, GetListingOffersBatchResponse::class);
    }

    /**
     * Operation getListingOffersBatchAsync
     *
     * @param GetListingOffersBatchRequest $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getListingOffersBatchAsync($body) {
        [$response] = $this->getListingOffersBatchAsyncWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation getListingOffersBatchAsyncWithHttpInfo
     *
     * @param GetListingOffersBatchRequest $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getListingOffersBatchAsyncWithHttpInfo($body) {
        $request = $this->getListingOffersBatchRequest($body);

        return $this->sendRequestAsync($request, GetListingOffersBatchResponse::class);
    }

    /**
     * Create request for operation 'getListingOffersBatch'
     *
     * @param GetListingOffersBatchRequest $body (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getListingOffersBatchRequest($body) {
        // verify the required parameter 'get_listing_offers_batch_request_body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling getListingOffersBatch'
            );
        }

        $resourcePath = '/batches/products/pricing/v0/listingOffers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation getPricing.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. (required)
     * @param string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (optional)
     * @param string $offer_type Indicates whether to request pricing information for the seller&#39;s B2C or B2B offers. Default is B2C. (optional)
     *
     * @return GetPricingResponse
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function getPricing($marketplace_id, $item_type, $asins = null, $skus = null, $item_condition = null, $offer_type = null) {
        [$response] = $this->getPricingWithHttpInfo($marketplace_id, $item_type, $asins, $skus, $item_condition, $offer_type);

        return $response;
    }

    /**
     * Operation getPricingWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. (required)
     * @param string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (optional)
     * @param string $offer_type Indicates whether to request pricing information for the seller&#39;s B2C or B2B offers. Default is B2C. (optional)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\ProductPricing\GetPricingResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function getPricingWithHttpInfo($marketplace_id, $item_type, $asins = null, $skus = null, $item_condition = null, $offer_type = null) {
        $request = $this->getPricingRequest($marketplace_id, $item_type, $asins, $skus, $item_condition, $offer_type);

        return $this->sendRequest($request, GetPricingResponse::class);
    }

    /**
     * Operation getPricingAsync.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. (required)
     * @param string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (optional)
     * @param string $offer_type Indicates whether to request pricing information for the seller&#39;s B2C or B2B offers. Default is B2C. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getPricingAsync($marketplace_id, $item_type, $asins = null, $skus = null, $item_condition = null, $offer_type = null) {
        return $this->getPricingAsyncWithHttpInfo($marketplace_id, $item_type, $asins, $skus, $item_condition, $offer_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPricingAsyncWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. (required)
     * @param string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (optional)
     * @param string $offer_type Indicates whether to request pricing information for the seller&#39;s B2C or B2B offers. Default is B2C. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getPricingAsyncWithHttpInfo($marketplace_id, $item_type, $asins = null, $skus = null, $item_condition = null, $offer_type = null) {
        $request = $this->getPricingRequest($marketplace_id, $item_type, $asins, $skus, $item_condition, $offer_type);

        return $this->sendRequestAsync($request, GetPricingResponse::class);
    }

    /**
     * Create request for operation 'getPricing'.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_type Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. (required)
     * @param string[] $asins A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (optional)
     * @param string $offer_type Indicates whether to request pricing information for the seller&#39;s B2C or B2B offers. Default is B2C. (optional)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getPricingRequest($marketplace_id, $item_type, $asins = null, $skus = null, $item_condition = null, $offer_type = null) {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplace_id || (is_array($marketplace_id) && 0 === count($marketplace_id))) {
            throw new InvalidArgumentException('Missing the required parameter $marketplace_id when calling getPricing');
        }
        // verify the required parameter 'item_type' is set
        if (null === $item_type || (is_array($item_type) && 0 === count($item_type))) {
            throw new InvalidArgumentException('Missing the required parameter $item_type when calling getPricing');
        }

        $resourcePath = '/products/pricing/v0/price';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplace_id) {
            $queryParams['MarketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id);
        }
        // query params
        if (is_array($asins)) {
            $asins = ObjectSerializer::serializeCollection($asins, 'csv', true);
        }
        if (null !== $asins) {
            $queryParams['Asins'] = ObjectSerializer::toQueryValue($asins);
        }
        // query params
        if (is_array($skus)) {
            $skus = ObjectSerializer::serializeCollection($skus, 'csv', true);
        }
        if (null !== $skus) {
            $queryParams['Skus'] = ObjectSerializer::toQueryValue($skus);
        }
        // query params
        if (null !== $item_type) {
            $queryParams['ItemType'] = ObjectSerializer::toQueryValue($item_type);
        }
        // query params
        if (null !== $item_condition) {
            $queryParams['ItemCondition'] = ObjectSerializer::toQueryValue($item_condition);
        }
        // query params
        if (null !== $offer_type) {
            $queryParams['OfferType'] = ObjectSerializer::toQueryValue($offer_type);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }
}
