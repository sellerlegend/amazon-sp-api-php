<?php

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
use SellerLegend\AmazonSellingPartnerAPI\Models\Orders\GetOrderAddressResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Orders\GetOrderBuyerInfoResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Orders\GetOrderItemsBuyerInfoResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Orders\GetOrderItemsResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Orders\GetOrderRegulatedInfoResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Orders\GetOrderResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Orders\GetOrdersResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Orders\UpdateShipmentStatusErrorResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Orders\UpdateShipmentStatusRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\Orders\UpdateVerificationStatusErrorResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Orders\UpdateVerificationStatusRequest;
use SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * OrdersApi Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 */
class OrdersApi {

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
     * Operation getOrder
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string[] $data_elements An array of restricted order data elements to retrieve (valid array elements are \&quot;buyerInfo\&quot; and \&quot;shippingAddress\&quot;) (optional)
     *
     * @return GetOrderResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getOrder($order_id, $data_elements = null) {
        [$response] = $this->getOrderWithHttpInfo($order_id, $data_elements);
        return $response;
    }

    /**
     * Operation getOrderWithHttpInfo
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string[] $data_elements An array of restricted order data elements to retrieve (valid array elements are \&quot;buyerInfo\&quot; and \&quot;shippingAddress\&quot;) (optional)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Orders\GetOrderResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getOrderWithHttpInfo($order_id, $data_elements = null) {
        $request = $this->getOrderRequest($order_id, $data_elements);
        return $this->sendRequest($request, GetOrderResponse::class);
    }

    /**
     * Operation getOrderAsync
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string[] $data_elements An array of restricted order data elements to retrieve (valid array elements are \&quot;buyerInfo\&quot; and \&quot;shippingAddress\&quot;) (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public function getOrderAsync($order_id, $data_elements = null) {
        return $this->getOrderAsyncWithHttpInfo($order_id, $data_elements)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderAsyncWithHttpInfo
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string[] $data_elements An array of restricted order data elements to retrieve (valid array elements are \&quot;buyerInfo\&quot; and \&quot;shippingAddress\&quot;) (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public function getOrderAsyncWithHttpInfo($order_id, $data_elements = null) {
        $request = $this->getOrderRequest($order_id, $data_elements);
        return $this->sendRequestAsync($request, GetOrderResponse::class);
    }

    /**
     * Create request for operation 'getOrder'
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string[] $data_elements An array of restricted order data elements to retrieve (valid array elements are \&quot;buyerInfo\&quot; and \&quot;shippingAddress\&quot;) (optional)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getOrderRequest($order_id, $data_elements = null) {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new InvalidArgumentException('Missing the required parameter $order_id when calling getOrder');
        }

        $resourcePath = '/orders/v0/orders/{orderId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($data_elements)) {
            $data_elements = ObjectSerializer::serializeCollection($data_elements, 'form', true);
        }
        if ($data_elements !== null) {
            $queryParams['dataElements'] = $data_elements;
        }

        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getOrderAddress
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @return GetOrderAddressResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getOrderAddress($order_id) {
        [$response] = $this->getOrderAddressWithHttpInfo($order_id);
        return $response;
    }

    /**
     * Operation getOrderAddressWithHttpInfo
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @return array of GetOrderAddressResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getOrderAddressWithHttpInfo($order_id) {
        $request = $this->getOrderAddressRequest($order_id);
        return $this->sendRequest($request, GetOrderAddressResponse::class);
    }

    /**
     * Operation getOrderAddressAsync
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getOrderAddressAsync($order_id) {
        return $this->getOrderAddressAsyncWithHttpInfo($order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderAddressAsyncWithHttpInfo
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public function getOrderAddressAsyncWithHttpInfo($order_id) {
        $request = $this->getOrderAddressRequest($order_id);
        return $this->sendRequestAsync($request, GetOrderAddressResponse::class);
    }

    /**
     * Create request for operation 'getOrderAddress'
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getOrderAddressRequest($order_id) {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new InvalidArgumentException('Missing the required parameter $order_id when calling getOrderAddress');
        }

        $resourcePath = '/orders/v0/orders/{orderId}/address';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getOrderBuyerInfo
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @return GetOrderBuyerInfoResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getOrderBuyerInfo($order_id) {
        [$response] = $this->getOrderBuyerInfoWithHttpInfo($order_id);
        return $response;
    }

    /**
     * Operation getOrderBuyerInfoWithHttpInfo
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @return array of GetOrderBuyerInfoResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getOrderBuyerInfoWithHttpInfo($order_id) {
        $request = $this->getOrderBuyerInfoRequest($order_id);
        return $this->sendRequest($request, GetOrderBuyerInfoResponse::class);
    }

    /**
     * Operation getOrderBuyerInfoAsync
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public function getOrderBuyerInfoAsync($order_id) {
        return $this->getOrderBuyerInfoAsyncWithHttpInfo($order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderBuyerInfoAsyncWithHttpInfo
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public function getOrderBuyerInfoAsyncWithHttpInfo($order_id) {
        $request = $this->getOrderBuyerInfoRequest($order_id);
        return $this->sendRequestAsync($request, GetOrderBuyerInfoResponse::class);
    }

    /**
     * Create request for operation 'getOrderBuyerInfo'
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getOrderBuyerInfoRequest($order_id) {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new InvalidArgumentException('Missing the required parameter $order_id when calling getOrderBuyerInfo');
        }

        $resourcePath = '/orders/v0/orders/{orderId}/buyerInfo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getOrderItems
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     * @param string[] $data_elements An array of restricted order data elements to retrieve (the only valid array element is \&quot;buyerInfo\&quot;) (optional)
     *
     * @return GetOrderItemsResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getOrderItems($order_id, $next_token = null, $data_elements = null) {
        [$response] = $this->getOrderItemsWithHttpInfo($order_id, $next_token, $data_elements);
        return $response;
    }

    /**
     * Operation getOrderItemsWithHttpInfo
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     * @param string[] $data_elements An array of restricted order data elements to retrieve (the only valid array element is \&quot;buyerInfo\&quot;) (optional)
     *
     * @return array of GetOrderItemsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getOrderItemsWithHttpInfo($order_id, $next_token = null, $data_elements = null) {
        $request = $this->getOrderItemsRequest($order_id, $next_token, $data_elements);
        return $this->sendRequest($request, GetOrderItemsResponse::class);
    }

    /**
     * Operation getOrderItemsAsync
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     * @param string[] $data_elements An array of restricted order data elements to retrieve (the only valid array element is \&quot;buyerInfo\&quot;) (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public function getOrderItemsAsync($order_id, $next_token = null, $data_elements = null) {
        return $this->getOrderItemsAsyncWithHttpInfo($order_id, $next_token, $data_elements)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderItemsAsyncWithHttpInfo
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     * @param string[] $data_elements An array of restricted order data elements to retrieve (the only valid array element is \&quot;buyerInfo\&quot;) (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public function getOrderItemsAsyncWithHttpInfo($order_id, $next_token = null, $data_elements = null) {
        $request = $this->getOrderItemsRequest($order_id, $next_token, $data_elements);
        return $this->sendRequestAsync($request, GetOrderItemsResponse::class);
    }

    /**
     * Create request for operation 'getOrderItems'
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     * @param string[] $data_elements An array of restricted order data elements to retrieve (the only valid array element is \&quot;buyerInfo\&quot;) (optional)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getOrderItemsRequest($order_id, $next_token = null, $data_elements = null) {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $order_id when calling getOrderItems'
            );
        }

        $resourcePath = '/orders/v0/orders/{orderId}/orderItems';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($next_token)) {
            $next_token = ObjectSerializer::serializeCollection($next_token, '', true);
        }
        if ($next_token !== null) {
            $queryParams['NextToken'] = $next_token;
        }

        // query params
        if (is_array($data_elements)) {
            $data_elements = ObjectSerializer::serializeCollection($data_elements, 'form', true);
        }
        if ($data_elements !== null) {
            $queryParams['dataElements'] = $data_elements;
        }

        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getOrderItemsBuyerInfo
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @return GetOrderItemsBuyerInfoResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getOrderItemsBuyerInfo($order_id, $next_token = null) {
        [$response] = $this->getOrderItemsBuyerInfoWithHttpInfo($order_id, $next_token);
        return $response;
    }

    /**
     * Operation getOrderItemsBuyerInfoWithHttpInfo
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @return array of GetOrderItemsBuyerInfoResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getOrderItemsBuyerInfoWithHttpInfo($order_id, $next_token = null) {
        $request = $this->getOrderItemsBuyerInfoRequest($order_id, $next_token);
        return $this->sendRequest($request, GetOrderItemsBuyerInfoResponse::class);
    }

    /**
     * Operation getOrderItemsBuyerInfoAsync
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getOrderItemsBuyerInfoAsync($order_id, $next_token = null) {
        return $this->getOrderItemsBuyerInfoAsyncWithHttpInfo($order_id, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderItemsBuyerInfoAsyncWithHttpInfo
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public function getOrderItemsBuyerInfoAsyncWithHttpInfo($order_id, $next_token = null) {
        $request = $this->getOrderItemsBuyerInfoRequest($order_id, $next_token);
        return $this->sendRequestAsync($request, GetOrderItemsBuyerInfoResponse::class);
    }

    /**
     * Create request for operation 'getOrderItemsBuyerInfo'
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getOrderItemsBuyerInfoRequest($order_id, $next_token = null) {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $order_id when calling getOrderItemsBuyerInfo'
            );
        }

        $resourcePath = '/orders/v0/orders/{orderId}/orderItems/buyerInfo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($next_token)) {
            $next_token = ObjectSerializer::serializeCollection($next_token, '', true);
        }
        if ($next_token !== null) {
            $queryParams['NextToken'] = $next_token;
        }

        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getOrderRegulatedInfo
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @return GetOrderRegulatedInfoResponse
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getOrderRegulatedInfo($order_id) {
        [$response] = $this->getOrderRegulatedInfoWithHttpInfo($order_id);
        return $response;
    }

    /**
     * Operation getOrderRegulatedInfoWithHttpInfo
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @return array of GetOrderRegulatedInfoResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function getOrderRegulatedInfoWithHttpInfo($order_id) {
        $request = $this->getOrderRegulatedInfoRequest($order_id);
        return $this->sendRequest($request, GetOrderRegulatedInfoResponse::class);
    }

    /**
     * Operation getOrderRegulatedInfoAsync
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public function getOrderRegulatedInfoAsync($order_id) {
        return $this->getOrderRegulatedInfoAsyncWithHttpInfo($order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderRegulatedInfoAsyncWithHttpInfo
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public function getOrderRegulatedInfoAsyncWithHttpInfo($order_id) {
        $request = $this->getOrderRegulatedInfoRequest($order_id);
        return $this->sendRequestAsync($request, GetOrderRegulatedInfoResponse::class);
    }

    /**
     * Create request for operation 'getOrderRegulatedInfo'
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getOrderRegulatedInfoRequest($order_id) {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $order_id when calling getOrderRegulatedInfo'
            );
        }

        $resourcePath = '/orders/v0/orders/{orderId}/regulatedInfo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getOrders
     *
     * @param string[] $marketplace_ids A list of MarketplaceId values. Used to select orders that were placed in the specified marketplaces. See the [Selling Partner API Developer Guide](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a complete list of marketplaceId values. (required)
     * @param string $created_after A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. Either the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both cannot be empty. The date must be in ISO 8601 format. (optional)
     * @param string $created_before A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format. (optional)
     * @param string $last_updated_after A date used for selecting orders that were last updated after (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string $last_updated_before A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string[] $order_statuses A list of OrderStatus values used to filter the results. Possible values: PendingAvailability (This status is available for pre-orders only. The order has been placed, payment has not been authorized, and the release date of the item is in the future.); Pending (The order has been placed but payment has not been authorized); Unshipped (Payment has been authorized and the order is ready for shipment, but no items in the order have been shipped); PartiallyShipped (One or more, but not all, items in the order have been shipped); Shipped (All items in the order have been shipped); InvoiceUnconfirmed (All items in the order have been shipped. The seller has not yet given confirmation to Amazon that the invoice has been shipped to the buyer.); Canceled (The order has been canceled); and Unfulfillable (The order cannot be fulfilled. This state applies only to Multi-Channel Fulfillment orders.). (optional)
     * @param string[] $fulfillment_channels A list that indicates how an order was fulfilled. Filters the results by fulfillment channel. Possible values: AFN (Fulfillment by Amazon); MFN (Fulfilled by the seller). (optional)
     * @param string[] $payment_methods A list of payment method values. Used to select orders paid using the specified payment methods. Possible values: COD (Cash on delivery); CVS (Convenience store payment); Other (Any payment method other than COD or CVS). (optional)
     * @param string $buyer_email The email address of a buyer. Used to select orders that contain the specified email address. (optional)
     * @param string $seller_order_id An order identifier that is specified by the seller. Used to select only the orders that match the order identifier. If SellerOrderId is specified, then FulfillmentChannels, OrderStatuses, PaymentMethod, LastUpdatedAfter, LastUpdatedBefore, and BuyerEmail cannot be specified. (optional)
     * @param int $max_results_per_page A number that indicates the maximum number of orders that can be returned per page. Value must be 1 - 100. Default 100. (optional)
     * @param string[] $easy_ship_shipment_statuses A list of EasyShipShipmentStatus values. Used to select Easy-Ship orders with statuses that match the specified values. If EasyShipShipmentStatus is specified, only Amazon Easy-Ship orders are returned. Possible values: PendingSchedule (The package is awaiting schedule for pick-up). PendingPickUp (Amazon has not yet picked up the package from the seller). PendingDropOff (The seller will deliver the package to the carrier). LabelCanceled (The seller canceled the pickup). PickedUp (Amazon has picked up the package from the seller). DroppedOff (The package is delivered to the carrier by the seller). AtOriginFC (The packaged is at the origin fulfillment center). AtDestinationFC (The package is at the destination fulfillment center). Delivered (The package has been delivered). RejectedByBuyer (The package has been rejected by the buyer). Undeliverable (The package cannot be delivered). ReturningToSeller (The package was not delivered and is being returned to the seller). ReturnedToSeller (The package was not delivered and was returned to the seller). Lost (The package is lost). OutForDelivery (The package is out for delivery). Damaged (The package was damaged by the carrier). (optional)
     * @param string[] $electronic_invoice_statuses A list of ElectronicInvoiceStatus values. Used to select orders with electronic invoice statuses that match the specified  values. Possible values: NotRequired (electronic invoice submission is not required for this order), NotFound (electronic invoice was not submitted for this order), Processing (electronic invoice is being processed for this order), Errored (last submitted electronic invoice was rejected for this order), Accepted (last submitted electronic invoice was submitted and accepted) (optional)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     * @param string[] $amazon_order_ids A list of AmazonOrderId values. An AmazonOrderId is an Amazon-defined order identifier, in 3-7-7 format. (optional)
     * @param string $actual_fulfillment_supply_source_id Denotes the recommended sourceId where the order should be fulfilled from. (optional)
     * @param bool $is_ispu When true, this order is marked to be picked up from a store rather than delivered. (optional)
     * @param string $store_chain_store_id The store chain store identifier. Linked to a specific store in a store chain. (optional)
     * @param string[] $data_elements An array of restricted order data elements to retrieve (valid array elements are \&quot;buyerInfo\&quot; and \&quot;shippingAddress\&quot;) (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return GetOrdersResponse
     */
    public function getOrders($marketplace_ids, $created_after = null, $created_before = null, $last_updated_after = null, $last_updated_before = null, $order_statuses = null, $fulfillment_channels = null, $payment_methods = null, $buyer_email = null, $seller_order_id = null, $max_results_per_page = null, $easy_ship_shipment_statuses = null, $electronic_invoice_statuses = null, $next_token = null, $amazon_order_ids = null, $actual_fulfillment_supply_source_id = null, $is_ispu = null, $store_chain_store_id = null, $data_elements = null) {
        [$response] = $this->getOrdersWithHttpInfo($marketplace_ids, $created_after, $created_before, $last_updated_after, $last_updated_before, $order_statuses, $fulfillment_channels, $payment_methods, $buyer_email, $seller_order_id, $max_results_per_page, $easy_ship_shipment_statuses, $electronic_invoice_statuses, $next_token, $amazon_order_ids, $actual_fulfillment_supply_source_id, $is_ispu, $store_chain_store_id, $data_elements);
        return $response;
    }

    /**
     * Operation getOrdersWithHttpInfo
     *
     * @param string[] $marketplace_ids A list of MarketplaceId values. Used to select orders that were placed in the specified marketplaces. See the [Selling Partner API Developer Guide](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a complete list of marketplaceId values. (required)
     * @param string $created_after A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. Either the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both cannot be empty. The date must be in ISO 8601 format. (optional)
     * @param string $created_before A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format. (optional)
     * @param string $last_updated_after A date used for selecting orders that were last updated after (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string $last_updated_before A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string[] $order_statuses A list of OrderStatus values used to filter the results. Possible values: PendingAvailability (This status is available for pre-orders only. The order has been placed, payment has not been authorized, and the release date of the item is in the future.); Pending (The order has been placed but payment has not been authorized); Unshipped (Payment has been authorized and the order is ready for shipment, but no items in the order have been shipped); PartiallyShipped (One or more, but not all, items in the order have been shipped); Shipped (All items in the order have been shipped); InvoiceUnconfirmed (All items in the order have been shipped. The seller has not yet given confirmation to Amazon that the invoice has been shipped to the buyer.); Canceled (The order has been canceled); and Unfulfillable (The order cannot be fulfilled. This state applies only to Multi-Channel Fulfillment orders.). (optional)
     * @param string[] $fulfillment_channels A list that indicates how an order was fulfilled. Filters the results by fulfillment channel. Possible values: AFN (Fulfillment by Amazon); MFN (Fulfilled by the seller). (optional)
     * @param string[] $payment_methods A list of payment method values. Used to select orders paid using the specified payment methods. Possible values: COD (Cash on delivery); CVS (Convenience store payment); Other (Any payment method other than COD or CVS). (optional)
     * @param string $buyer_email The email address of a buyer. Used to select orders that contain the specified email address. (optional)
     * @param string $seller_order_id An order identifier that is specified by the seller. Used to select only the orders that match the order identifier. If SellerOrderId is specified, then FulfillmentChannels, OrderStatuses, PaymentMethod, LastUpdatedAfter, LastUpdatedBefore, and BuyerEmail cannot be specified. (optional)
     * @param int $max_results_per_page A number that indicates the maximum number of orders that can be returned per page. Value must be 1 - 100. Default 100. (optional)
     * @param string[] $easy_ship_shipment_statuses A list of EasyShipShipmentStatus values. Used to select Easy-Ship orders with statuses that match the specified values. If EasyShipShipmentStatus is specified, only Amazon Easy-Ship orders are returned. Possible values: PendingSchedule (The package is awaiting schedule for pick-up). PendingPickUp (Amazon has not yet picked up the package from the seller). PendingDropOff (The seller will deliver the package to the carrier). LabelCanceled (The seller canceled the pickup). PickedUp (Amazon has picked up the package from the seller). DroppedOff (The package is delivered to the carrier by the seller). AtOriginFC (The packaged is at the origin fulfillment center). AtDestinationFC (The package is at the destination fulfillment center). Delivered (The package has been delivered). RejectedByBuyer (The package has been rejected by the buyer). Undeliverable (The package cannot be delivered). ReturningToSeller (The package was not delivered and is being returned to the seller). ReturnedToSeller (The package was not delivered and was returned to the seller). Lost (The package is lost). OutForDelivery (The package is out for delivery). Damaged (The package was damaged by the carrier). (optional)
     * @param string[] $electronic_invoice_statuses A list of ElectronicInvoiceStatus values. Used to select orders with electronic invoice statuses that match the specified  values. Possible values: NotRequired (electronic invoice submission is not required for this order), NotFound (electronic invoice was not submitted for this order), Processing (electronic invoice is being processed for this order), Errored (last submitted electronic invoice was rejected for this order), Accepted (last submitted electronic invoice was submitted and accepted) (optional)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     * @param string[] $amazon_order_ids A list of AmazonOrderId values. An AmazonOrderId is an Amazon-defined order identifier, in 3-7-7 format. (optional)
     * @param string $actual_fulfillment_supply_source_id Denotes the recommended sourceId where the order should be fulfilled from. (optional)
     * @param bool $is_ispu When true, this order is marked to be picked up from a store rather than delivered. (optional)
     * @param string $store_chain_store_id The store chain store identifier. Linked to a specific store in a store chain. (optional)
     * @param string[] $data_elements An array of restricted order data elements to retrieve (valid array elements are \&quot;buyerInfo\&quot; and \&quot;shippingAddress\&quot;) (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of GetOrdersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrdersWithHttpInfo($marketplace_ids, $created_after = null, $created_before = null, $last_updated_after = null, $last_updated_before = null, $order_statuses = null, $fulfillment_channels = null, $payment_methods = null, $buyer_email = null, $seller_order_id = null, $max_results_per_page = null, $easy_ship_shipment_statuses = null, $electronic_invoice_statuses = null, $next_token = null, $amazon_order_ids = null, $actual_fulfillment_supply_source_id = null, $is_ispu = null, $store_chain_store_id = null, $data_elements = null) {
        $request = $this->getOrdersRequest($marketplace_ids, $created_after, $created_before, $last_updated_after, $last_updated_before, $order_statuses, $fulfillment_channels, $payment_methods, $buyer_email, $seller_order_id, $max_results_per_page, $easy_ship_shipment_statuses, $electronic_invoice_statuses, $next_token, $amazon_order_ids, $actual_fulfillment_supply_source_id, $is_ispu, $store_chain_store_id, $data_elements);
        return $this->sendRequest($request, GetOrdersResponse::class);
    }

    /**
     * Operation getOrdersAsync
     *
     * @param string[] $marketplace_ids A list of MarketplaceId values. Used to select orders that were placed in the specified marketplaces. See the [Selling Partner API Developer Guide](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a complete list of marketplaceId values. (required)
     * @param string $created_after A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. Either the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both cannot be empty. The date must be in ISO 8601 format. (optional)
     * @param string $created_before A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format. (optional)
     * @param string $last_updated_after A date used for selecting orders that were last updated after (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string $last_updated_before A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string[] $order_statuses A list of OrderStatus values used to filter the results. Possible values: PendingAvailability (This status is available for pre-orders only. The order has been placed, payment has not been authorized, and the release date of the item is in the future.); Pending (The order has been placed but payment has not been authorized); Unshipped (Payment has been authorized and the order is ready for shipment, but no items in the order have been shipped); PartiallyShipped (One or more, but not all, items in the order have been shipped); Shipped (All items in the order have been shipped); InvoiceUnconfirmed (All items in the order have been shipped. The seller has not yet given confirmation to Amazon that the invoice has been shipped to the buyer.); Canceled (The order has been canceled); and Unfulfillable (The order cannot be fulfilled. This state applies only to Multi-Channel Fulfillment orders.). (optional)
     * @param string[] $fulfillment_channels A list that indicates how an order was fulfilled. Filters the results by fulfillment channel. Possible values: AFN (Fulfillment by Amazon); MFN (Fulfilled by the seller). (optional)
     * @param string[] $payment_methods A list of payment method values. Used to select orders paid using the specified payment methods. Possible values: COD (Cash on delivery); CVS (Convenience store payment); Other (Any payment method other than COD or CVS). (optional)
     * @param string $buyer_email The email address of a buyer. Used to select orders that contain the specified email address. (optional)
     * @param string $seller_order_id An order identifier that is specified by the seller. Used to select only the orders that match the order identifier. If SellerOrderId is specified, then FulfillmentChannels, OrderStatuses, PaymentMethod, LastUpdatedAfter, LastUpdatedBefore, and BuyerEmail cannot be specified. (optional)
     * @param int $max_results_per_page A number that indicates the maximum number of orders that can be returned per page. Value must be 1 - 100. Default 100. (optional)
     * @param string[] $easy_ship_shipment_statuses A list of EasyShipShipmentStatus values. Used to select Easy-Ship orders with statuses that match the specified values. If EasyShipShipmentStatus is specified, only Amazon Easy-Ship orders are returned. Possible values: PendingSchedule (The package is awaiting schedule for pick-up). PendingPickUp (Amazon has not yet picked up the package from the seller). PendingDropOff (The seller will deliver the package to the carrier). LabelCanceled (The seller canceled the pickup). PickedUp (Amazon has picked up the package from the seller). DroppedOff (The package is delivered to the carrier by the seller). AtOriginFC (The packaged is at the origin fulfillment center). AtDestinationFC (The package is at the destination fulfillment center). Delivered (The package has been delivered). RejectedByBuyer (The package has been rejected by the buyer). Undeliverable (The package cannot be delivered). ReturningToSeller (The package was not delivered and is being returned to the seller). ReturnedToSeller (The package was not delivered and was returned to the seller). Lost (The package is lost). OutForDelivery (The package is out for delivery). Damaged (The package was damaged by the carrier). (optional)
     * @param string[] $electronic_invoice_statuses A list of ElectronicInvoiceStatus values. Used to select orders with electronic invoice statuses that match the specified  values. Possible values: NotRequired (electronic invoice submission is not required for this order), NotFound (electronic invoice was not submitted for this order), Processing (electronic invoice is being processed for this order), Errored (last submitted electronic invoice was rejected for this order), Accepted (last submitted electronic invoice was submitted and accepted) (optional)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     * @param string[] $amazon_order_ids A list of AmazonOrderId values. An AmazonOrderId is an Amazon-defined order identifier, in 3-7-7 format. (optional)
     * @param string $actual_fulfillment_supply_source_id Denotes the recommended sourceId where the order should be fulfilled from. (optional)
     * @param bool $is_ispu When true, this order is marked to be picked up from a store rather than delivered. (optional)
     * @param string $store_chain_store_id The store chain store identifier. Linked to a specific store in a store chain. (optional)
     * @param string[] $data_elements An array of restricted order data elements to retrieve (valid array elements are \&quot;buyerInfo\&quot; and \&quot;shippingAddress\&quot;) (optional)
     *
     * @throws InvalidArgumentException
     * @throws ApiException
     * @return PromiseInterface
     */
    public function getOrdersAsync($marketplace_ids, $created_after = null, $created_before = null, $last_updated_after = null, $last_updated_before = null, $order_statuses = null, $fulfillment_channels = null, $payment_methods = null, $buyer_email = null, $seller_order_id = null, $max_results_per_page = null, $easy_ship_shipment_statuses = null, $electronic_invoice_statuses = null, $next_token = null, $amazon_order_ids = null, $actual_fulfillment_supply_source_id = null, $is_ispu = null, $store_chain_store_id = null, $data_elements = null) {
        return $this->getOrdersAsyncWithHttpInfo($marketplace_ids, $created_after, $created_before, $last_updated_after, $last_updated_before, $order_statuses, $fulfillment_channels, $payment_methods, $buyer_email, $seller_order_id, $max_results_per_page, $easy_ship_shipment_statuses, $electronic_invoice_statuses, $next_token, $amazon_order_ids, $actual_fulfillment_supply_source_id, $is_ispu, $store_chain_store_id, $data_elements)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrdersAsyncWithHttpInfo
     *
     * @param string[] $marketplace_ids A list of MarketplaceId values. Used to select orders that were placed in the specified marketplaces. See the [Selling Partner API Developer Guide](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a complete list of marketplaceId values. (required)
     * @param string $created_after A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. Either the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both cannot be empty. The date must be in ISO 8601 format. (optional)
     * @param string $created_before A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format. (optional)
     * @param string $last_updated_after A date used for selecting orders that were last updated after (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string $last_updated_before A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string[] $order_statuses A list of OrderStatus values used to filter the results. Possible values: PendingAvailability (This status is available for pre-orders only. The order has been placed, payment has not been authorized, and the release date of the item is in the future.); Pending (The order has been placed but payment has not been authorized); Unshipped (Payment has been authorized and the order is ready for shipment, but no items in the order have been shipped); PartiallyShipped (One or more, but not all, items in the order have been shipped); Shipped (All items in the order have been shipped); InvoiceUnconfirmed (All items in the order have been shipped. The seller has not yet given confirmation to Amazon that the invoice has been shipped to the buyer.); Canceled (The order has been canceled); and Unfulfillable (The order cannot be fulfilled. This state applies only to Multi-Channel Fulfillment orders.). (optional)
     * @param string[] $fulfillment_channels A list that indicates how an order was fulfilled. Filters the results by fulfillment channel. Possible values: AFN (Fulfillment by Amazon); MFN (Fulfilled by the seller). (optional)
     * @param string[] $payment_methods A list of payment method values. Used to select orders paid using the specified payment methods. Possible values: COD (Cash on delivery); CVS (Convenience store payment); Other (Any payment method other than COD or CVS). (optional)
     * @param string $buyer_email The email address of a buyer. Used to select orders that contain the specified email address. (optional)
     * @param string $seller_order_id An order identifier that is specified by the seller. Used to select only the orders that match the order identifier. If SellerOrderId is specified, then FulfillmentChannels, OrderStatuses, PaymentMethod, LastUpdatedAfter, LastUpdatedBefore, and BuyerEmail cannot be specified. (optional)
     * @param int $max_results_per_page A number that indicates the maximum number of orders that can be returned per page. Value must be 1 - 100. Default 100. (optional)
     * @param string[] $easy_ship_shipment_statuses A list of EasyShipShipmentStatus values. Used to select Easy-Ship orders with statuses that match the specified values. If EasyShipShipmentStatus is specified, only Amazon Easy-Ship orders are returned. Possible values: PendingSchedule (The package is awaiting schedule for pick-up). PendingPickUp (Amazon has not yet picked up the package from the seller). PendingDropOff (The seller will deliver the package to the carrier). LabelCanceled (The seller canceled the pickup). PickedUp (Amazon has picked up the package from the seller). DroppedOff (The package is delivered to the carrier by the seller). AtOriginFC (The packaged is at the origin fulfillment center). AtDestinationFC (The package is at the destination fulfillment center). Delivered (The package has been delivered). RejectedByBuyer (The package has been rejected by the buyer). Undeliverable (The package cannot be delivered). ReturningToSeller (The package was not delivered and is being returned to the seller). ReturnedToSeller (The package was not delivered and was returned to the seller). Lost (The package is lost). OutForDelivery (The package is out for delivery). Damaged (The package was damaged by the carrier). (optional)
     * @param string[] $electronic_invoice_statuses A list of ElectronicInvoiceStatus values. Used to select orders with electronic invoice statuses that match the specified  values. Possible values: NotRequired (electronic invoice submission is not required for this order), NotFound (electronic invoice was not submitted for this order), Processing (electronic invoice is being processed for this order), Errored (last submitted electronic invoice was rejected for this order), Accepted (last submitted electronic invoice was submitted and accepted) (optional)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     * @param string[] $amazon_order_ids A list of AmazonOrderId values. An AmazonOrderId is an Amazon-defined order identifier, in 3-7-7 format. (optional)
     * @param string $actual_fulfillment_supply_source_id Denotes the recommended sourceId where the order should be fulfilled from. (optional)
     * @param bool $is_ispu When true, this order is marked to be picked up from a store rather than delivered. (optional)
     * @param string $store_chain_store_id The store chain store identifier. Linked to a specific store in a store chain. (optional)
     * @param string[] $data_elements An array of restricted order data elements to retrieve (valid array elements are \&quot;buyerInfo\&quot; and \&quot;shippingAddress\&quot;) (optional)
     *
     * @throws InvalidArgumentException
     * @throws ApiException
     * @return PromiseInterface
     */
    public function getOrdersAsyncWithHttpInfo($marketplace_ids, $created_after = null, $created_before = null, $last_updated_after = null, $last_updated_before = null, $order_statuses = null, $fulfillment_channels = null, $payment_methods = null, $buyer_email = null, $seller_order_id = null, $max_results_per_page = null, $easy_ship_shipment_statuses = null, $electronic_invoice_statuses = null, $next_token = null, $amazon_order_ids = null, $actual_fulfillment_supply_source_id = null, $is_ispu = null, $store_chain_store_id = null, $data_elements = null) {
        $request = $this->getOrdersRequest($marketplace_ids, $created_after, $created_before, $last_updated_after, $last_updated_before, $order_statuses, $fulfillment_channels, $payment_methods, $buyer_email, $seller_order_id, $max_results_per_page, $easy_ship_shipment_statuses, $electronic_invoice_statuses, $next_token, $amazon_order_ids, $actual_fulfillment_supply_source_id, $is_ispu, $store_chain_store_id, $data_elements);
        return $this->sendRequestAsync($request, GetOrdersResponse::class);
    }

    /**
     * Create request for operation 'getOrders'
     *
     * @param string[] $marketplace_ids A list of MarketplaceId values. Used to select orders that were placed in the specified marketplaces. See the [Selling Partner API Developer Guide](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a complete list of marketplaceId values. (required)
     * @param string $created_after A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. Either the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both cannot be empty. The date must be in ISO 8601 format. (optional)
     * @param string $created_before A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format. (optional)
     * @param string $last_updated_after A date used for selecting orders that were last updated after (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string $last_updated_before A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string[] $order_statuses A list of OrderStatus values used to filter the results. Possible values: PendingAvailability (This status is available for pre-orders only. The order has been placed, payment has not been authorized, and the release date of the item is in the future.); Pending (The order has been placed but payment has not been authorized); Unshipped (Payment has been authorized and the order is ready for shipment, but no items in the order have been shipped); PartiallyShipped (One or more, but not all, items in the order have been shipped); Shipped (All items in the order have been shipped); InvoiceUnconfirmed (All items in the order have been shipped. The seller has not yet given confirmation to Amazon that the invoice has been shipped to the buyer.); Canceled (The order has been canceled); and Unfulfillable (The order cannot be fulfilled. This state applies only to Multi-Channel Fulfillment orders.). (optional)
     * @param string[] $fulfillment_channels A list that indicates how an order was fulfilled. Filters the results by fulfillment channel. Possible values: AFN (Fulfillment by Amazon); MFN (Fulfilled by the seller). (optional)
     * @param string[] $payment_methods A list of payment method values. Used to select orders paid using the specified payment methods. Possible values: COD (Cash on delivery); CVS (Convenience store payment); Other (Any payment method other than COD or CVS). (optional)
     * @param string $buyer_email The email address of a buyer. Used to select orders that contain the specified email address. (optional)
     * @param string $seller_order_id An order identifier that is specified by the seller. Used to select only the orders that match the order identifier. If SellerOrderId is specified, then FulfillmentChannels, OrderStatuses, PaymentMethod, LastUpdatedAfter, LastUpdatedBefore, and BuyerEmail cannot be specified. (optional)
     * @param int $max_results_per_page A number that indicates the maximum number of orders that can be returned per page. Value must be 1 - 100. Default 100. (optional)
     * @param string[] $easy_ship_shipment_statuses A list of EasyShipShipmentStatus values. Used to select Easy-Ship orders with statuses that match the specified values. If EasyShipShipmentStatus is specified, only Amazon Easy-Ship orders are returned. Possible values: PendingSchedule (The package is awaiting schedule for pick-up). PendingPickUp (Amazon has not yet picked up the package from the seller). PendingDropOff (The seller will deliver the package to the carrier). LabelCanceled (The seller canceled the pickup). PickedUp (Amazon has picked up the package from the seller). DroppedOff (The package is delivered to the carrier by the seller). AtOriginFC (The packaged is at the origin fulfillment center). AtDestinationFC (The package is at the destination fulfillment center). Delivered (The package has been delivered). RejectedByBuyer (The package has been rejected by the buyer). Undeliverable (The package cannot be delivered). ReturningToSeller (The package was not delivered and is being returned to the seller). ReturnedToSeller (The package was not delivered and was returned to the seller). Lost (The package is lost). OutForDelivery (The package is out for delivery). Damaged (The package was damaged by the carrier). (optional)
     * @param string[] $electronic_invoice_statuses A list of ElectronicInvoiceStatus values. Used to select orders with electronic invoice statuses that match the specified  values. Possible values: NotRequired (electronic invoice submission is not required for this order), NotFound (electronic invoice was not submitted for this order), Processing (electronic invoice is being processed for this order), Errored (last submitted electronic invoice was rejected for this order), Accepted (last submitted electronic invoice was submitted and accepted) (optional)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     * @param string[] $amazon_order_ids A list of AmazonOrderId values. An AmazonOrderId is an Amazon-defined order identifier, in 3-7-7 format. (optional)
     * @param string $actual_fulfillment_supply_source_id Denotes the recommended sourceId where the order should be fulfilled from. (optional)
     * @param bool $is_ispu When true, this order is marked to be picked up from a store rather than delivered. (optional)
     * @param string $store_chain_store_id The store chain store identifier. Linked to a specific store in a store chain. (optional)
     * @param string[] $data_elements An array of restricted order data elements to retrieve (valid array elements are \&quot;buyerInfo\&quot; and \&quot;shippingAddress\&quot;) (optional)
     *
     * @throws InvalidArgumentException
     * @return Request
     */
    public function getOrdersRequest($marketplace_ids, $created_after = null, $created_before = null, $last_updated_after = null, $last_updated_before = null, $order_statuses = null, $fulfillment_channels = null, $payment_methods = null, $buyer_email = null, $seller_order_id = null, $max_results_per_page = null, $easy_ship_shipment_statuses = null, $electronic_invoice_statuses = null, $next_token = null, $amazon_order_ids = null, $actual_fulfillment_supply_source_id = null, $is_ispu = null, $store_chain_store_id = null, $data_elements = null) {
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (is_array($marketplace_ids) && count($marketplace_ids) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling getOrders'
            );
        }
        if (count($marketplace_ids) > 50) {
            throw new InvalidArgumentException('invalid value for "$marketplace_ids" when calling OrdersApi.getOrders, number of items must be less than or equal to 50.');
        }

        if ($amazon_order_ids !== null && count($amazon_order_ids) > 50) {
            throw new InvalidArgumentException('invalid value for "$amazon_order_ids" when calling OrdersApi.getOrders, number of items must be less than or equal to 50.');
        }


        $resourcePath = '/orders/v0/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($created_after)) {
            $created_after = ObjectSerializer::serializeCollection($created_after, '', true);
        }
        if ($created_after !== null) {
            $queryParams['CreatedAfter'] = $created_after;
        }

        // query params
        if (is_array($created_before)) {
            $created_before = ObjectSerializer::serializeCollection($created_before, '', true);
        }
        if ($created_before !== null) {
            $queryParams['CreatedBefore'] = $created_before;
        }

        // query params
        if (is_array($last_updated_after)) {
            $last_updated_after = ObjectSerializer::serializeCollection($last_updated_after, '', true);
        }
        if ($last_updated_after !== null) {
            $queryParams['LastUpdatedAfter'] = $last_updated_after;
        }

        // query params
        if (is_array($last_updated_before)) {
            $last_updated_before = ObjectSerializer::serializeCollection($last_updated_before, '', true);
        }
        if ($last_updated_before !== null) {
            $queryParams['LastUpdatedBefore'] = $last_updated_before;
        }

        // query params
        if (is_array($order_statuses)) {
            $order_statuses = ObjectSerializer::serializeCollection($order_statuses, 'form', true);
        }
        if ($order_statuses !== null) {
            $queryParams['OrderStatuses'] = $order_statuses;
        }

        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }
        if ($marketplace_ids !== null) {
            $queryParams['MarketplaceIds'] = $marketplace_ids;
        }

        // query params
        if (is_array($fulfillment_channels)) {
            $fulfillment_channels = ObjectSerializer::serializeCollection($fulfillment_channels, 'form', true);
        }
        if ($fulfillment_channels !== null) {
            $queryParams['FulfillmentChannels'] = $fulfillment_channels;
        }

        // query params
        if (is_array($payment_methods)) {
            $payment_methods = ObjectSerializer::serializeCollection($payment_methods, 'form', true);
        }
        if ($payment_methods !== null) {
            $queryParams['PaymentMethods'] = $payment_methods;
        }

        // query params
        if (is_array($buyer_email)) {
            $buyer_email = ObjectSerializer::serializeCollection($buyer_email, '', true);
        }
        if ($buyer_email !== null) {
            $queryParams['BuyerEmail'] = $buyer_email;
        }

        // query params
        if (is_array($seller_order_id)) {
            $seller_order_id = ObjectSerializer::serializeCollection($seller_order_id, '', true);
        }
        if ($seller_order_id !== null) {
            $queryParams['SellerOrderId'] = $seller_order_id;
        }

        // query params
        if (is_array($max_results_per_page)) {
            $max_results_per_page = ObjectSerializer::serializeCollection($max_results_per_page, '', true);
        }
        if ($max_results_per_page !== null) {
            $queryParams['MaxResultsPerPage'] = $max_results_per_page;
        }

        // query params
        if (is_array($easy_ship_shipment_statuses)) {
            $easy_ship_shipment_statuses = ObjectSerializer::serializeCollection($easy_ship_shipment_statuses, 'form', true);
        }
        if ($easy_ship_shipment_statuses !== null) {
            $queryParams['EasyShipShipmentStatuses'] = $easy_ship_shipment_statuses;
        }

        // query params
        if (is_array($electronic_invoice_statuses)) {
            $electronic_invoice_statuses = ObjectSerializer::serializeCollection($electronic_invoice_statuses, 'form', true);
        }
        if ($electronic_invoice_statuses !== null) {
            $queryParams['ElectronicInvoiceStatuses'] = $electronic_invoice_statuses;
        }

        // query params
        if (is_array($next_token)) {
            $next_token = ObjectSerializer::serializeCollection($next_token, '', true);
        }
        if ($next_token !== null) {
            $queryParams['NextToken'] = $next_token;
        }

        // query params
        if (is_array($amazon_order_ids)) {
            $amazon_order_ids = ObjectSerializer::serializeCollection($amazon_order_ids, 'form', true);
        }
        if ($amazon_order_ids !== null) {
            $queryParams['AmazonOrderIds'] = $amazon_order_ids;
        }

        // query params
        if (is_array($actual_fulfillment_supply_source_id)) {
            $actual_fulfillment_supply_source_id = ObjectSerializer::serializeCollection($actual_fulfillment_supply_source_id, '', true);
        }
        if ($actual_fulfillment_supply_source_id !== null) {
            $queryParams['ActualFulfillmentSupplySourceId'] = $actual_fulfillment_supply_source_id;
        }

        // query params
        if (is_array($is_ispu)) {
            $is_ispu = ObjectSerializer::serializeCollection($is_ispu, '', true);
        }
        if ($is_ispu !== null) {
            $queryParams['IsISPU'] = $is_ispu;
        }

        // query params
        if (is_array($store_chain_store_id)) {
            $store_chain_store_id = ObjectSerializer::serializeCollection($store_chain_store_id, '', true);
        }
        if ($store_chain_store_id !== null) {
            $queryParams['StoreChainStoreId'] = $store_chain_store_id;
        }

        // query params
        if (is_array($data_elements)) {
            $data_elements = ObjectSerializer::serializeCollection($data_elements, 'form', true);
        }
        if ($data_elements !== null) {
            $queryParams['dataElements'] = $data_elements;
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation updateShipmentStatus
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param UpdateShipmentStatusRequest $payload The request body for the updateShipmentStatus operation. (required)
     *
     * @return void
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function updateShipmentStatus($order_id, $payload) {
        $this->updateShipmentStatusWithHttpInfo($order_id, $payload);
    }

    /**
     * Operation updateShipmentStatusWithHttpInfo
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param UpdateShipmentStatusRequest $payload The request body for the updateShipmentStatus operation. (required)
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function updateShipmentStatusWithHttpInfo($order_id, $payload) {
        $request = $this->updateShipmentStatusRequest($order_id, $payload);
        return $this->sendRequest($request, GetOrderResponse::class);
    }

    /**
     * Operation updateShipmentStatusAsync
     *
     *
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param UpdateShipmentStatusRequest $payload The request body for the updateShipmentStatus operation. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     */
    public function updateShipmentStatusAsync($order_id, $payload) {
        return $this->updateShipmentStatusAsyncWithHttpInfo($order_id, $payload)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateShipmentStatusAsyncWithHttpInfo
     *
     *
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param UpdateShipmentStatusRequest $payload The request body for the updateShipmentStatus operation. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public function updateShipmentStatusAsyncWithHttpInfo($order_id, $payload) {
        $request = $this->updateShipmentStatusRequest($order_id, $payload);
        return $this->sendRequestAsync($request, UpdateShipmentStatusErrorResponse::class);
    }

    /**
     * Create request for operation 'updateShipmentStatus'
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param UpdateShipmentStatusRequest $payload The request body for the updateShipmentStatus operation. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function updateShipmentStatusRequest($order_id, $payload) {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $order_id when calling updateShipmentStatus'
            );
        }
        // verify the required parameter 'payload' is set
        if ($payload === null || (is_array($payload) && count($payload) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payload when calling updateShipmentStatus'
            );
        }

        $resourcePath = '/orders/v0/orders/{orderId}/shipment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation updateVerificationStatus
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param UpdateVerificationStatusRequest $payload The request body for the updateVerificationStatus operation. (required)
     *
     * @return void
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function updateVerificationStatus($order_id, $payload) {
        $this->updateVerificationStatusWithHttpInfo($order_id, $payload);
    }

    /**
     * Operation updateVerificationStatusWithHttpInfo
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param UpdateVerificationStatusRequest $payload The request body for the updateVerificationStatus operation. (required)
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws ApiException on non-2xx response
     */
    public function updateVerificationStatusWithHttpInfo($order_id, $payload) {
        $request = $this->updateVerificationStatusRequest($order_id, $payload);
        return $this->sendRequest($request, UpdateVerificationStatusErrorResponse::class);
    }

    /**
     * Operation updateVerificationStatusAsync
     *
     *
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param UpdateVerificationStatusRequest $payload The request body for the updateVerificationStatus operation. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public function updateVerificationStatusAsync($order_id, $payload) {
        return $this->updateVerificationStatusAsyncWithHttpInfo($order_id, $payload)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateVerificationStatusAsyncWithHttpInfo
     *
     *
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param UpdateVerificationStatusRequest $payload The request body for the updateVerificationStatus operation. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     * @throws ApiException
     */
    public function updateVerificationStatusAsyncWithHttpInfo($order_id, $payload) {
        $request = $this->updateVerificationStatusRequest($order_id, $payload);
        return $this->sendRequestAsync($request, '');
    }

    /**
     * Create request for operation 'updateVerificationStatus'
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param UpdateVerificationStatusRequest $payload The request body for the updateVerificationStatus operation. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function updateVerificationStatusRequest($order_id, $payload) {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $order_id when calling updateVerificationStatus'
            );
        }
        // verify the required parameter 'payload' is set
        if ($payload === null || (is_array($payload) && count($payload) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $payload when calling updateVerificationStatus'
            );
        }

        $resourcePath = '/orders/v0/orders/{orderId}/regulatedInfo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PATCH', $httpBody);
    }
}
