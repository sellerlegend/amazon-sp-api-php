<?php
/**
 * SellersApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Sellers.
 *
 * The Selling Partner API for Sellers lets you retrieve information on behalf of sellers about their seller account, such as the marketplaces they participate in. Along with listing the marketplaces that a seller can sell in, the API also provides additional information about the marketplace such as the default language and the default currency. The API also provides seller-specific information such as whether the seller has suspended listings in that marketplace.
 *
 * OpenAPI spec version: v1
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
use SellerLegend\AmazonSellingPartnerAPI\Models\Sellers\GetMarketplaceParticipationsResponse;

/**
 * SellersApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class SellersApi {
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
     * Operation getMarketplaceParticipations.
     *
     * @return GetMarketplaceParticipationsResponse
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function getMarketplaceParticipations() {
        [$response] = $this->getMarketplaceParticipationsWithHttpInfo();

        return $response;
    }

    /**
     * Operation getMarketplaceParticipationsWithHttpInfo.
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Sellers\GetMarketplaceParticipationsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function getMarketplaceParticipationsWithHttpInfo() {
        $request = $this->getMarketplaceParticipationsRequest();

        return $this->sendRequest($request, GetMarketplaceParticipationsResponse::class);
    }

    /**
     * Operation getMarketplaceParticipationsAsync.
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getMarketplaceParticipationsAsync() {
        return $this->getMarketplaceParticipationsAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMarketplaceParticipationsAsyncWithHttpInfo.
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getMarketplaceParticipationsAsyncWithHttpInfo() {
        $request = $this->getMarketplaceParticipationsRequest();

        return $this->sendRequest($request, GetMarketplaceParticipationsResponse::class);
    }

    /**
     * Create request for operation 'getMarketplaceParticipations'.
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getMarketplaceParticipationsRequest() {
        $resourcePath = '/sellers/v1/marketplaceParticipations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }
}
