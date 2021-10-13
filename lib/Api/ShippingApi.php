<?php
/**
 * ShippingApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.
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
use SellerLegend\AmazonSellingPartnerAPI\Models\FulfillmentInbound\GetShipmentsResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\CancelShipmentResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\CreateShipmentRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\CreateShipmentResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\GetAccountResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\GetRatesRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\GetRatesResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\GetShipmentResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\GetTrackingInformationResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\PurchaseLabelsRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\PurchaseLabelsResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\PurchaseShipmentRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\PurchaseShipmentResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\RetrieveShippingLabelRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\RetrieveShippingLabelResponse;
use SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * ShippingApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ShippingApi {
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
     * Operation cancelShipment.
     *
     * @param string $shipment_id shipment_id (required)
     *
     * @return CancelShipmentResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function cancelShipment($shipment_id) {
        [$response] = $this->cancelShipmentWithHttpInfo($shipment_id);

        return $response;
    }

    /**
     * Operation cancelShipmentWithHttpInfo.
     *
     * @param string $shipment_id (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\CancelShipmentResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function cancelShipmentWithHttpInfo($shipment_id) {
        $request = $this->cancelShipmentRequest($shipment_id);

        return $this->sendRequest($request, CancelShipmentResponse::class);
    }

    /**
     * Operation cancelShipmentAsync.
     *
     * @param string $shipment_id (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function cancelShipmentAsync($shipment_id) {
        return $this->cancelShipmentAsyncWithHttpInfo($shipment_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelShipmentAsyncWithHttpInfo.
     *
     * @param string $shipment_id (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function cancelShipmentAsyncWithHttpInfo($shipment_id) {
        $request = $this->cancelShipmentRequest($shipment_id);

        return $this->sendRequestAsync($request, CancelShipmentResponse::class);
    }

    /**
     * Create request for operation 'cancelShipment'.
     *
     * @param string $shipment_id (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function cancelShipmentRequest($shipment_id) {
        // verify the required parameter 'shipment_id' is set
        if (null === $shipment_id || (is_array($shipment_id) && 0 === count($shipment_id))) {
            throw new InvalidArgumentException('Missing the required parameter $shipment_id when calling cancelShipment');
        }

        $resourcePath = '/shipping/v1/shipments/{shipmentId}/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $shipment_id) {
            $resourcePath = str_replace(
                '{' . 'shipmentId' . '}',
                ObjectSerializer::toPathValue($shipment_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation createShipment.
     *
     * @param CreateShipmentRequest $body body (required)
     *
     * @return CreateShipmentResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function createShipment($body) {
        [$response] = $this->createShipmentWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation createShipmentWithHttpInfo.
     *
     * @param CreateShipmentRequest $body (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\CreateShipmentResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function createShipmentWithHttpInfo($body) {
        $request = $this->createShipmentRequest($body);

        return $this->sendRequest($request, CreateShipmentResponse::class);
    }

    /**
     * Operation createShipmentAsync.
     *
     * @param CreateShipmentRequest $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function createShipmentAsync($body) {
        return $this->createShipmentAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createShipmentAsyncWithHttpInfo.
     *
     * @param CreateShipmentRequest $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function createShipmentAsyncWithHttpInfo($body) {
        $request = $this->createShipmentRequest($body);

        return $this->sendRequestAsync($request, CreateShipmentResponse::class);
    }

    /**
     * Create request for operation 'createShipment'.
     *
     * @param CreateShipmentRequest $body (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function createShipmentRequest($body) {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new InvalidArgumentException('Missing the required parameter $body when calling createShipment');
        }

        $resourcePath = '/shipping/v1/shipments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation getAccount.
     *
     * @return GetAccountResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getAccount() {
        [$response] = $this->getAccountWithHttpInfo();

        return $response;
    }

    /**
     * Operation getAccountWithHttpInfo.
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\GetAccountResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getAccountWithHttpInfo() {
        $request = $this->getAccountRequest();

        return $this->sendRequest($request, GetAccountResponse::class);
    }

    /**
     * Operation getAccountAsync.
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getAccountAsync() {
        return $this->getAccountAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAccountAsyncWithHttpInfo.
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getAccountAsyncWithHttpInfo() {
        $request = $this->getAccountRequest();

        return $this->sendRequestAsync($request, GetAccountResponse::class);
    }

    /**
     * Create request for operation 'getAccount'.
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getAccountRequest() {
        $resourcePath = '/shipping/v1/account';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getRates.
     *
     * @param GetRatesRequest $body body (required)
     *
     * @return GetRatesResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getRates($body) {
        [$response] = $this->getRatesWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation getRatesWithHttpInfo.
     *
     * @param GetRatesRequest $body (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\GetRatesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getRatesWithHttpInfo($body) {
        $request = $this->getRatesRequest($body);

        return $this->sendRequest($request, GetRatesResponse::class);
    }

    /**
     * Operation getRatesAsync.
     *
     * @param GetRatesRequest $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getRatesAsync($body) {
        return $this->getRatesAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getRatesAsyncWithHttpInfo.
     *
     * @param GetRatesRequest $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getRatesAsyncWithHttpInfo($body) {
        $request = $this->getRatesRequest($body);

        return $this->sendRequestAsync($request, GetRatesResponse::class);
    }

    /**
     * Create request for operation 'getRates'.
     *
     * @param GetRatesRequest $body (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getRatesRequest($body) {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new InvalidArgumentException('Missing the required parameter $body when calling getRates');
        }

        $resourcePath = '/shipping/v1/rates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation getShipment.
     *
     * @param string $shipment_id shipment_id (required)
     *
     * @return GetShipmentResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getShipment($shipment_id) {
        [$response] = $this->getShipmentWithHttpInfo($shipment_id);

        return $response;
    }

    /**
     * Operation getShipmentWithHttpInfo.
     *
     * @param string $shipment_id (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\GetShipmentResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getShipmentWithHttpInfo($shipment_id) {
        $request = $this->getShipmentRequest($shipment_id);

        return $this->sendRequest($request, GetShipmentsResponse::class);
    }

    /**
     * Operation getShipmentAsync.
     *
     * @param string $shipment_id (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getShipmentAsync($shipment_id) {
        return $this->getShipmentAsyncWithHttpInfo($shipment_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getShipmentAsyncWithHttpInfo.
     *
     * @param string $shipment_id (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getShipmentAsyncWithHttpInfo($shipment_id) {
        $request = $this->getShipmentRequest($shipment_id);

        return $this->sendRequestAsync($request, GetShipmentsResponse::class);
    }

    /**
     * Create request for operation 'getShipment'.
     *
     * @param string $shipment_id (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getShipmentRequest($shipment_id) {
        // verify the required parameter 'shipment_id' is set
        if (null === $shipment_id || (is_array($shipment_id) && 0 === count($shipment_id))) {
            throw new InvalidArgumentException('Missing the required parameter $shipment_id when calling getShipment');
        }

        $resourcePath = '/shipping/v1/shipments/{shipmentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $shipment_id) {
            $resourcePath = str_replace(
                '{' . 'shipmentId' . '}',
                ObjectSerializer::toPathValue($shipment_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getTrackingInformation.
     *
     * @param string $tracking_id tracking_id (required)
     *
     * @return GetTrackingInformationResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getTrackingInformation($tracking_id) {
        [$response] = $this->getTrackingInformationWithHttpInfo($tracking_id);

        return $response;
    }

    /**
     * Operation getTrackingInformationWithHttpInfo.
     *
     * @param string $tracking_id (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\GetTrackingInformationResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getTrackingInformationWithHttpInfo($tracking_id) {
        $request = $this->getTrackingInformationRequest($tracking_id);

        return $this->sendRequest($request, GetTrackingInformationResponse::class);
    }

    /**
     * Operation getTrackingInformationAsync.
     *
     * @param string $tracking_id (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getTrackingInformationAsync($tracking_id) {
        return $this->getTrackingInformationAsyncWithHttpInfo($tracking_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTrackingInformationAsyncWithHttpInfo.
     *
     * @param string $tracking_id (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getTrackingInformationAsyncWithHttpInfo($tracking_id) {
        $request = $this->getTrackingInformationRequest($tracking_id);

        return $this->sendRequestAsync($request, GetTrackingInformationResponse::class);
    }

    /**
     * Create request for operation 'getTrackingInformation'.
     *
     * @param string $tracking_id (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getTrackingInformationRequest($tracking_id) {
        // verify the required parameter 'tracking_id' is set
        if (null === $tracking_id || (is_array($tracking_id) && 0 === count($tracking_id))) {
            throw new InvalidArgumentException('Missing the required parameter $tracking_id when calling getTrackingInformation');
        }

        $resourcePath = '/shipping/v1/tracking/{trackingId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $tracking_id) {
            $resourcePath = str_replace(
                '{' . 'trackingId' . '}',
                ObjectSerializer::toPathValue($tracking_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation purchaseLabels.
     *
     * @param PurchaseLabelsRequest $body body (required)
     * @param string $shipment_id shipment_id (required)
     *
     * @return PurchaseLabelsResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function purchaseLabels($body, $shipment_id) {
        [$response] = $this->purchaseLabelsWithHttpInfo($body, $shipment_id);

        return $response;
    }

    /**
     * Operation purchaseLabelsWithHttpInfo.
     *
     * @param PurchaseLabelsRequest $body (required)
     * @param string $shipment_id (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\PurchaseLabelsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function purchaseLabelsWithHttpInfo($body, $shipment_id) {
        $request = $this->purchaseLabelsRequest($body, $shipment_id);

        return $this->sendRequest($request, PurchaseLabelsResponse::class);
    }

    /**
     * Operation purchaseLabelsAsync.
     *
     * @param PurchaseLabelsRequest $body (required)
     * @param string $shipment_id (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function purchaseLabelsAsync($body, $shipment_id) {
        return $this->purchaseLabelsAsyncWithHttpInfo($body, $shipment_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation purchaseLabelsAsyncWithHttpInfo.
     *
     * @param PurchaseLabelsRequest $body (required)
     * @param string $shipment_id (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function purchaseLabelsAsyncWithHttpInfo($body, $shipment_id) {
        $request = $this->purchaseLabelsRequest($body, $shipment_id);

        return $this->sendRequestAsync($request, PurchaseLabelsResponse::class);
    }

    /**
     * Create request for operation 'purchaseLabels'.
     *
     * @param PurchaseLabelsRequest $body (required)
     * @param string $shipment_id (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function purchaseLabelsRequest($body, $shipment_id) {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new InvalidArgumentException('Missing the required parameter $body when calling purchaseLabels');
        }
        // verify the required parameter 'shipment_id' is set
        if (null === $shipment_id || (is_array($shipment_id) && 0 === count($shipment_id))) {
            throw new InvalidArgumentException('Missing the required parameter $shipment_id when calling purchaseLabels');
        }

        $resourcePath = '/shipping/v1/shipments/{shipmentId}/purchaseLabels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        // path params
        if (null !== $shipment_id) {
            $resourcePath = str_replace(
                '{' . 'shipmentId' . '}',
                ObjectSerializer::toPathValue($shipment_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation purchaseShipment.
     *
     * @param PurchaseShipmentRequest $body body (required)
     *
     * @return PurchaseShipmentResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function purchaseShipment($body) {
        [$response] = $this->purchaseShipmentWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation purchaseShipmentWithHttpInfo.
     *
     * @param PurchaseShipmentRequest $body (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\PurchaseShipmentResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function purchaseShipmentWithHttpInfo($body) {
        $request = $this->purchaseShipmentRequest($body);

        return $this->sendRequest($request, PurchaseShipmentResponse::class);
    }

    /**
     * Operation purchaseShipmentAsync.
     *
     * @param PurchaseShipmentRequest $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function purchaseShipmentAsync($body) {
        return $this->purchaseShipmentAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation purchaseShipmentAsyncWithHttpInfo.
     *
     * @param PurchaseShipmentRequest $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function purchaseShipmentAsyncWithHttpInfo($body) {
        $request = $this->purchaseShipmentRequest($body);

        return $this->sendRequestAsync($request, PurchaseShipmentResponse::class);
    }

    /**
     * Create request for operation 'purchaseShipment'.
     *
     * @param PurchaseShipmentRequest $body (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function purchaseShipmentRequest($body) {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new InvalidArgumentException('Missing the required parameter $body when calling purchaseShipment');
        }

        $resourcePath = '/shipping/v1/purchaseShipment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation retrieveShippingLabel.
     *
     * @param RetrieveShippingLabelRequest $body body (required)
     * @param string $shipment_id shipment_id (required)
     * @param string $tracking_id tracking_id (required)
     *
     * @return RetrieveShippingLabelResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function retrieveShippingLabel($body, $shipment_id, $tracking_id) {
        [$response] = $this->retrieveShippingLabelWithHttpInfo($body, $shipment_id, $tracking_id);

        return $response;
    }

    /**
     * Operation retrieveShippingLabelWithHttpInfo.
     *
     * @param RetrieveShippingLabelRequest $body (required)
     * @param string $shipment_id (required)
     * @param string $tracking_id (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Shipping\RetrieveShippingLabelResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function retrieveShippingLabelWithHttpInfo($body, $shipment_id, $tracking_id) {
        $request = $this->retrieveShippingLabelRequest($body, $shipment_id, $tracking_id);

        return $this->sendRequest($request, RetrieveShippingLabelResponse::class);
    }

    /**
     * Operation retrieveShippingLabelAsync.
     *
     * @param RetrieveShippingLabelRequest $body (required)
     * @param string $shipment_id (required)
     * @param string $tracking_id (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function retrieveShippingLabelAsync($body, $shipment_id, $tracking_id) {
        return $this->retrieveShippingLabelAsyncWithHttpInfo($body, $shipment_id, $tracking_id)
            ->SellerLegend(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveShippingLabelAsyncWithHttpInfo.
     *
     * @param RetrieveShippingLabelRequest $body (required)
     * @param string $shipment_id (required)
     * @param string $tracking_id (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function retrieveShippingLabelAsyncWithHttpInfo($body, $shipment_id, $tracking_id) {
        $request = $this->retrieveShippingLabelRequest($body, $shipment_id, $tracking_id);

        return $this->sendRequestAsync($request, RetrieveShippingLabelResponse::class);
    }

    /**
     * Create request for operation 'retrieveShippingLabel'.
     *
     * @param RetrieveShippingLabelRequest $body (required)
     * @param string $shipment_id (required)
     * @param string $tracking_id (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function retrieveShippingLabelRequest($body, $shipment_id, $tracking_id) {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new InvalidArgumentException('Missing the required parameter $body when calling retrieveShippingLabel');
        }
        // verify the required parameter 'shipment_id' is set
        if (null === $shipment_id || (is_array($shipment_id) && 0 === count($shipment_id))) {
            throw new InvalidArgumentException('Missing the required parameter $shipment_id when calling retrieveShippingLabel');
        }
        // verify the required parameter 'tracking_id' is set
        if (null === $tracking_id || (is_array($tracking_id) && 0 === count($tracking_id))) {
            throw new InvalidArgumentException('Missing the required parameter $tracking_id when calling retrieveShippingLabel');
        }

        $resourcePath = '/shipping/v1/shipments/{shipmentId}/containers/{trackingId}/label';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        // path params
        if (null !== $shipment_id) {
            $resourcePath = str_replace(
                '{' . 'shipmentId' . '}',
                ObjectSerializer::toPathValue($shipment_id),
                $resourcePath
            );
        }
        // path params
        if (null !== $tracking_id) {
            $resourcePath = str_replace(
                '{' . 'trackingId' . '}',
                ObjectSerializer::toPathValue($tracking_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }
}
