<?php
/**
 * CatalogApi
 * PHP version 7.3
 *
 * @category Class
 * @package  SellerLegend\AmazonSellingPartnerAPI
 */

namespace SellerLegend\AmazonSellingPartnerAPI\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use InvalidArgumentException;
use SellerLegend\AmazonSellingPartnerAPI\ApiException;
use SellerLegend\AmazonSellingPartnerAPI\Configuration;
use SellerLegend\AmazonSellingPartnerAPI\HeaderSelector;
use SellerLegend\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\Item;
use SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemSearchResults;
use SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * CatalogItemsApi Class Doc Comment
 *
 * @category Class
 * @package  SellerLegend\AmazonSellingPartnerAPI
 */
class CatalogItemsApi {
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
     * Operation getCatalogItem
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param string[] $included_data A comma-delimited list of data sets to include in the response. Default: &#x60;summaries&#x60;. (optional)
     * @param string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @return Item
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getCatalogItem($asin, $marketplace_ids, $included_data = null, $locale = null) {
        [$response] = $this->getCatalogItemWithHttpInfo($asin, $marketplace_ids, $included_data, $locale);

        return $response;
    }

    /**
     * Operation getCatalogItemWithHttpInfo
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param string[] $included_data A comma-delimited list of data sets to include in the response. Default: &#x60;summaries&#x60;. (optional)
     * @param string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\Item, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getCatalogItemWithHttpInfo($asin, $marketplace_ids, $included_data = null, $locale = null) {
        $request = $this->getCatalogItemRequest($asin, $marketplace_ids, $included_data, $locale);

        return $this->sendRequest($request, Item::class);
    }

    /**
     * Operation getCatalogItemAsync
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param string[] $included_data A comma-delimited list of data sets to include in the response. Default: &#x60;summaries&#x60;. (optional)
     * @param string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getCatalogItemAsync($asin, $marketplace_ids, $included_data = null, $locale = null) {
        return $this->getCatalogItemAsyncWithHttpInfo($asin, $marketplace_ids, $included_data, $locale)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCatalogItemAsyncWithHttpInfo
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param string[] $included_data A comma-delimited list of data sets to include in the response. Default: &#x60;summaries&#x60;. (optional)
     * @param string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getCatalogItemAsyncWithHttpInfo($asin, $marketplace_ids, $included_data = null, $locale = null) {
        $request = $this->getCatalogItemRequest($asin, $marketplace_ids, $included_data, $locale);

        return $this->sendRequestAsync($request, Item::class);
    }

    /**
     * Create request for operation 'getCatalogItem'
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. (required)
     * @param string[] $included_data A comma-delimited list of data sets to include in the response. Default: &#x60;summaries&#x60;. (optional)
     * @param string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getCatalogItemRequest($asin, $marketplace_ids, $included_data = null, $locale = null) {
        // verify the required parameter 'asin' is set
        if ($asin === null || (is_array($asin) && count($asin) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $asin when calling getCatalogItem'
            );
        }
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (is_array($marketplace_ids) && count($marketplace_ids) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling getCatalogItem'
            );
        }

        $resourcePath = '/catalog/2022-04-01/items/{asin}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }
        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = $marketplace_ids;
        }

        // query params
        if (is_array($included_data)) {
            $included_data = ObjectSerializer::serializeCollection($included_data, 'form', true);
        }
        if ($included_data !== null) {
            $queryParams['includedData'] = $included_data;
        }

        // query params
        if (is_array($locale)) {
            $locale = ObjectSerializer::serializeCollection($locale, '', true);
        }
        if ($locale !== null) {
            $queryParams['locale'] = $locale;
        }

        // path params
        if ($asin !== null) {
            $resourcePath = str_replace(
                '{' . 'asin' . '}',
                ObjectSerializer::toPathValue($asin),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation searchCatalogItems
     *
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param string[] $identifiers A comma-delimited list of product identifiers to search the Amazon catalog for. **Note:** Cannot be used with &#x60;keywords&#x60;. (optional)
     * @param string $identifiers_type Type of product identifiers to search the Amazon catalog for. **Note:** Required when &#x60;identifiers&#x60; are provided. (optional)
     * @param string[] $included_data A comma-delimited list of data sets to include in the response. Default: &#x60;summaries&#x60;. (optional)
     * @param string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     * @param string $seller_id A selling partner identifier, such as a seller account or vendor code. **Note:** Required when &#x60;identifiersType&#x60; is &#x60;SKU&#x60;. (optional)
     * @param string[] $keywords A comma-delimited list of words to search the Amazon catalog for. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param string[] $brand_names A comma-delimited list of brand names to limit the search for &#x60;keywords&#x60;-based queries. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param string[] $classification_ids A comma-delimited list of classification identifiers to limit the search for &#x60;keywords&#x60;-based queries. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param int $page_size Number of results to be returned per page. (optional, default to 10)
     * @param string $page_token A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param string $keywords_locale The language of the keywords provided for &#x60;keywords&#x60;-based queries. Defaults to the primary locale of the marketplace. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     *
     * @return ItemSearchResults
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function searchCatalogItems($marketplace_ids, $identifiers = null, $identifiers_type = null, $included_data = null, $locale = null, $seller_id = null, $keywords = null, $brand_names = null, $classification_ids = null, $page_size = 10, $page_token = null, $keywords_locale = null) {
        [$response] = $this->searchCatalogItemsWithHttpInfo($marketplace_ids, $identifiers, $identifiers_type, $included_data, $locale, $seller_id, $keywords, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale);

        return $response;
    }

    /**
     * Operation searchCatalogItemsWithHttpInfo
     *
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param string[] $identifiers A comma-delimited list of product identifiers to search the Amazon catalog for. **Note:** Cannot be used with &#x60;keywords&#x60;. (optional)
     * @param string $identifiers_type Type of product identifiers to search the Amazon catalog for. **Note:** Required when &#x60;identifiers&#x60; are provided. (optional)
     * @param string[] $included_data A comma-delimited list of data sets to include in the response. Default: &#x60;summaries&#x60;. (optional)
     * @param string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     * @param string $seller_id A selling partner identifier, such as a seller account or vendor code. **Note:** Required when &#x60;identifiersType&#x60; is &#x60;SKU&#x60;. (optional)
     * @param string[] $keywords A comma-delimited list of words to search the Amazon catalog for. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param string[] $brand_names A comma-delimited list of brand names to limit the search for &#x60;keywords&#x60;-based queries. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param string[] $classification_ids A comma-delimited list of classification identifiers to limit the search for &#x60;keywords&#x60;-based queries. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param int $page_size Number of results to be returned per page. (optional, default to 10)
     * @param string $page_token A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param string $keywords_locale The language of the keywords provided for &#x60;keywords&#x60;-based queries. Defaults to the primary locale of the marketplace. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\CatalogItems\ItemSearchResults, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function searchCatalogItemsWithHttpInfo($marketplace_ids, $identifiers = null, $identifiers_type = null, $included_data = null, $locale = null, $seller_id = null, $keywords = null, $brand_names = null, $classification_ids = null, $page_size = 10, $page_token = null, $keywords_locale = null) {
        $request = $this->searchCatalogItemsRequest($marketplace_ids, $identifiers, $identifiers_type, $included_data, $locale, $seller_id, $keywords, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale);

        return $this->sendRequest($request, ItemSearchResults::class);
    }

    /**
     * Operation searchCatalogItemsAsync
     *
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param string[] $identifiers A comma-delimited list of product identifiers to search the Amazon catalog for. **Note:** Cannot be used with &#x60;keywords&#x60;. (optional)
     * @param string $identifiers_type Type of product identifiers to search the Amazon catalog for. **Note:** Required when &#x60;identifiers&#x60; are provided. (optional)
     * @param string[] $included_data A comma-delimited list of data sets to include in the response. Default: &#x60;summaries&#x60;. (optional)
     * @param string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     * @param string $seller_id A selling partner identifier, such as a seller account or vendor code. **Note:** Required when &#x60;identifiersType&#x60; is &#x60;SKU&#x60;. (optional)
     * @param string[] $keywords A comma-delimited list of words to search the Amazon catalog for. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param string[] $brand_names A comma-delimited list of brand names to limit the search for &#x60;keywords&#x60;-based queries. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param string[] $classification_ids A comma-delimited list of classification identifiers to limit the search for &#x60;keywords&#x60;-based queries. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param int $page_size Number of results to be returned per page. (optional, default to 10)
     * @param string $page_token A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param string $keywords_locale The language of the keywords provided for &#x60;keywords&#x60;-based queries. Defaults to the primary locale of the marketplace. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function searchCatalogItemsAsync($marketplace_ids, $identifiers = null, $identifiers_type = null, $included_data = null, $locale = null, $seller_id = null, $keywords = null, $brand_names = null, $classification_ids = null, $page_size = 10, $page_token = null, $keywords_locale = null) {
        return $this->searchCatalogItemsAsyncWithHttpInfo($marketplace_ids, $identifiers, $identifiers_type, $included_data, $locale, $seller_id, $keywords, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchCatalogItemsAsyncWithHttpInfo
     *
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param string[] $identifiers A comma-delimited list of product identifiers to search the Amazon catalog for. **Note:** Cannot be used with &#x60;keywords&#x60;. (optional)
     * @param string $identifiers_type Type of product identifiers to search the Amazon catalog for. **Note:** Required when &#x60;identifiers&#x60; are provided. (optional)
     * @param string[] $included_data A comma-delimited list of data sets to include in the response. Default: &#x60;summaries&#x60;. (optional)
     * @param string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     * @param string $seller_id A selling partner identifier, such as a seller account or vendor code. **Note:** Required when &#x60;identifiersType&#x60; is &#x60;SKU&#x60;. (optional)
     * @param string[] $keywords A comma-delimited list of words to search the Amazon catalog for. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param string[] $brand_names A comma-delimited list of brand names to limit the search for &#x60;keywords&#x60;-based queries. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param string[] $classification_ids A comma-delimited list of classification identifiers to limit the search for &#x60;keywords&#x60;-based queries. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param int $page_size Number of results to be returned per page. (optional, default to 10)
     * @param string $page_token A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param string $keywords_locale The language of the keywords provided for &#x60;keywords&#x60;-based queries. Defaults to the primary locale of the marketplace. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function searchCatalogItemsAsyncWithHttpInfo($marketplace_ids, $identifiers = null, $identifiers_type = null, $included_data = null, $locale = null, $seller_id = null, $keywords = null, $brand_names = null, $classification_ids = null, $page_size = 10, $page_token = null, $keywords_locale = null) {
        $request = $this->searchCatalogItemsRequest($marketplace_ids, $identifiers, $identifiers_type, $included_data, $locale, $seller_id, $keywords, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale);

        return $this->sendRequestAsync($request, ItemSearchResults::class);
    }

    /**
     * Create request for operation 'searchCatalogItems'
     *
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param string[] $identifiers A comma-delimited list of product identifiers to search the Amazon catalog for. **Note:** Cannot be used with &#x60;keywords&#x60;. (optional)
     * @param string $identifiers_type Type of product identifiers to search the Amazon catalog for. **Note:** Required when &#x60;identifiers&#x60; are provided. (optional)
     * @param string[] $included_data A comma-delimited list of data sets to include in the response. Default: &#x60;summaries&#x60;. (optional)
     * @param string $locale Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. (optional)
     * @param string $seller_id A selling partner identifier, such as a seller account or vendor code. **Note:** Required when &#x60;identifiersType&#x60; is &#x60;SKU&#x60;. (optional)
     * @param string[] $keywords A comma-delimited list of words to search the Amazon catalog for. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param string[] $brand_names A comma-delimited list of brand names to limit the search for &#x60;keywords&#x60;-based queries. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param string[] $classification_ids A comma-delimited list of classification identifiers to limit the search for &#x60;keywords&#x60;-based queries. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     * @param int $page_size Number of results to be returned per page. (optional, default to 10)
     * @param string $page_token A token to fetch a certain page when there are multiple pages worth of results. (optional)
     * @param string $keywords_locale The language of the keywords provided for &#x60;keywords&#x60;-based queries. Defaults to the primary locale of the marketplace. **Note:** Cannot be used with &#x60;identifiers&#x60;. (optional)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function searchCatalogItemsRequest($marketplace_ids, $identifiers = null, $identifiers_type = null, $included_data = null, $locale = null, $seller_id = null, $keywords = null, $brand_names = null, $classification_ids = null, $page_size = 10, $page_token = null, $keywords_locale = null) {
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (is_array($marketplace_ids) && count($marketplace_ids) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling searchCatalogItems'
            );
        }
        if (count($marketplace_ids) > 1) {
            throw new InvalidArgumentException('invalid value for "$marketplace_ids" when calling CatalogItemsV20220401Api.searchCatalogItems, number of items must be less than or equal to 1.');
        }

        if ($identifiers !== null && count($identifiers) > 20) {
            throw new InvalidArgumentException('invalid value for "$identifiers" when calling CatalogItemsV20220401Api.searchCatalogItems, number of items must be less than or equal to 20.');
        }

        if ($keywords !== null && count($keywords) > 20) {
            throw new InvalidArgumentException('invalid value for "$keywords" when calling CatalogItemsV20220401Api.searchCatalogItems, number of items must be less than or equal to 20.');
        }

        if ($page_size !== null && $page_size > 20) {
            throw new InvalidArgumentException('invalid value for "$page_size" when calling CatalogItemsV20220401Api.searchCatalogItems, must be smaller than or equal to 20.');
        }

        $resourcePath = '/catalog/2022-04-01/items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($identifiers)) {
            $identifiers = ObjectSerializer::serializeCollection($identifiers, 'form', true);
        }
        if ($identifiers !== null) {
            $queryParams['identifiers'] = $identifiers;
        }

        // query params
        if (is_array($identifiers_type)) {
            $identifiers_type = ObjectSerializer::serializeCollection($identifiers_type, '', true);
        }
        if ($identifiers_type !== null) {
            $queryParams['identifiersType'] = $identifiers_type;
        }

        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }
        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = $marketplace_ids;
        }

        // query params
        if (is_array($included_data)) {
            $included_data = ObjectSerializer::serializeCollection($included_data, 'form', true);
        }
        if ($included_data !== null) {
            $queryParams['includedData'] = $included_data;
        }

        // query params
        if (is_array($locale)) {
            $locale = ObjectSerializer::serializeCollection($locale, '', true);
        }
        if ($locale !== null) {
            $queryParams['locale'] = $locale;
        }

        // query params
        if (is_array($seller_id)) {
            $seller_id = ObjectSerializer::serializeCollection($seller_id, '', true);
        }
        if ($seller_id !== null) {
            $queryParams['sellerId'] = $seller_id;
        }

        // query params
        if (is_array($keywords)) {
            $keywords = ObjectSerializer::serializeCollection($keywords, 'form', true);
        }
        if ($keywords !== null) {
            $queryParams['keywords'] = $keywords;
        }

        // query params
        if (is_array($brand_names)) {
            $brand_names = ObjectSerializer::serializeCollection($brand_names, 'form', true);
        }
        if ($brand_names !== null) {
            $queryParams['brandNames'] = $brand_names;
        }

        // query params
        if (is_array($classification_ids)) {
            $classification_ids = ObjectSerializer::serializeCollection($classification_ids, 'form', true);
        }
        if ($classification_ids !== null) {
            $queryParams['classificationIds'] = $classification_ids;
        }

        // query params
        if (is_array($page_size)) {
            $page_size = ObjectSerializer::serializeCollection($page_size, '', true);
        }
        if ($page_size !== null) {
            $queryParams['pageSize'] = $page_size;
        }

        // query params
        if (is_array($page_token)) {
            $page_token = ObjectSerializer::serializeCollection($page_token, '', true);
        }
        if ($page_token !== null) {
            $queryParams['pageToken'] = $page_token;
        }

        // query params
        if (is_array($keywords_locale)) {
            $keywords_locale = ObjectSerializer::serializeCollection($keywords_locale, '', true);
        }
        if ($keywords_locale !== null) {
            $queryParams['keywordsLocale'] = $keywords_locale;
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }
}
