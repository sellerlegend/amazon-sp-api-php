<?php
/**
 * NotificationsApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Notifications.
 *
 * The Selling Partner API for Notifications lets you subscribe to notifications that are relevant to a selling partner's business. Using this API you can create a destination to receive notifications, subscribe to notifications, delete notification subscriptions, and more.
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
use SellerLegend\AmazonSellingPartnerAPI\ExceptionThrower;
use SellerLegend\AmazonSellingPartnerAPI\HeaderSelector;
use SellerLegend\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\CreateDestinationRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\CreateDestinationResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\CreateSubscriptionRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\CreateSubscriptionResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\DeleteDestinationResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\DeleteSubscriptionByIdResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\GetDestinationResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\GetDestinationsResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\GetSubscriptionByIdResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\GetSubscriptionResponse;
use SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * NotificationsApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class NotificationsApi {
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
     * Operation createDestination.
     *
     * @param CreateDestinationRequest $body body (required)
     *
     * @return CreateDestinationResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function createDestination($body) {
        [$response] = $this->createDestinationWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation createDestinationWithHttpInfo.
     *
     * @param CreateDestinationRequest $body (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\CreateDestinationResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function createDestinationWithHttpInfo($body) {
        $request = $this->createDestinationRequest($body);

        return $this->sendRequest($request, CreateDestinationResponse::class);
    }

    /**
     * Operation createDestinationAsync.
     *
     * @param CreateDestinationRequest $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function createDestinationAsync($body) {
        return $this->createDestinationAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createDestinationAsyncWithHttpInfo.
     *
     * @param CreateDestinationRequest $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function createDestinationAsyncWithHttpInfo($body) {
        $request = $this->createDestinationRequest($body);

        return $this->sendRequestAsync($request, CreateDestinationResponse::class);
    }

    /**
     * Create request for operation 'createDestination'.
     *
     * @param CreateDestinationRequest $body (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function createDestinationRequest($body) {
        // verify the required parameter 'body' is set
        ExceptionThrower::throwIf(InvalidArgumentException::class, null === $body || (is_array($body) && 0 === count($body)), 'Missing the required parameter $body when calling createDestination');

        $resourcePath = '/notifications/v1/destinations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation createSubscription.
     *
     * @param CreateSubscriptionRequest $body body (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return CreateSubscriptionResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function createSubscription($body, $notification_type) {
        [$response] = $this->createSubscriptionWithHttpInfo($body, $notification_type);

        return $response;
    }

    /**
     * Operation createSubscriptionWithHttpInfo.
     *
     * @param CreateSubscriptionRequest $body (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\CreateSubscriptionResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function createSubscriptionWithHttpInfo($body, $notification_type) {
        $request = $this->createSubscriptionRequest($body, $notification_type);

        return $this->sendRequest($request, CreateSubscriptionResponse::class);
    }

    /**
     * Operation createSubscriptionAsync.
     *
     * @param CreateSubscriptionRequest $body (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function createSubscriptionAsync($body, $notification_type) {
        return $this->createSubscriptionAsyncWithHttpInfo($body, $notification_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createSubscriptionAsyncWithHttpInfo.
     *
     * @param CreateSubscriptionRequest $body (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function createSubscriptionAsyncWithHttpInfo($body, $notification_type) {
        $request = $this->createSubscriptionRequest($body, $notification_type);

        return $this->sendRequestAsync($request, CreateSubscriptionResponse::class);
    }

    /**
     * Create request for operation 'createSubscription'.
     *
     * @param CreateSubscriptionRequest $body (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function createSubscriptionRequest($body, $notification_type) {
        ExceptionThrower::throwIf(InvalidArgumentException::class, null === $body || (is_array($body) && 0 === count($body)), 'Missing the required parameter $body when calling createSubscription');
        ExceptionThrower::throwIf(InvalidArgumentException::class, null === $notification_type || (is_array($notification_type) && 0 === count($notification_type)), 'Missing the required parameter $notification_type when calling createSubscription');

        $resourcePath = '/notifications/v1/subscriptions/{notificationType}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        // path params
        if (null !== $notification_type) {
            $resourcePath = str_replace(
                '{' . 'notificationType' . '}',
                ObjectSerializer::toPathValue($notification_type),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation deleteDestination.
     *
     * @param string $destination_id The identifier for the destination that you want to delete. (required)
     *
     * @return DeleteDestinationResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function deleteDestination($destination_id) {
        [$response] = $this->deleteDestinationWithHttpInfo($destination_id);

        return $response;
    }

    /**
     * Operation deleteDestinationWithHttpInfo.
     *
     * @param string $destination_id The identifier for the destination that you want to delete. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\DeleteDestinationResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function deleteDestinationWithHttpInfo($destination_id) {
        $request = $this->deleteDestinationRequest($destination_id);

        return $this->sendRequest($request, DeleteDestinationResponse::class);
    }

    /**
     * Operation deleteDestinationAsync.
     *
     * @param string $destination_id The identifier for the destination that you want to delete. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function deleteDestinationAsync($destination_id) {
        return $this->deleteDestinationAsyncWithHttpInfo($destination_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteDestinationAsyncWithHttpInfo.
     *
     * @param string $destination_id The identifier for the destination that you want to delete. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function deleteDestinationAsyncWithHttpInfo($destination_id) {
        $request = $this->deleteDestinationRequest($destination_id);

        return $this->sendRequestAsync($request, DeleteDestinationResponse::class);
    }

    /**
     * Create request for operation 'deleteDestination'.
     *
     * @param string $destination_id The identifier for the destination that you want to delete. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function deleteDestinationRequest($destination_id) {
        // verify the required parameter 'destination_id' is set
        if (null === $destination_id || (is_array($destination_id) && 0 === count($destination_id))) {
            throw new InvalidArgumentException('Missing the required parameter $destination_id when calling deleteDestination');
        }

        $resourcePath = '/notifications/v1/destinations/{destinationId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $destination_id) {
            $resourcePath = str_replace(
                '{' . 'destinationId' . '}',
                ObjectSerializer::toPathValue($destination_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'DELETE', $httpBody);
    }

    /**
     * Operation deleteSubscriptionById.
     *
     * @param string $subscription_id The identifier for the subscription that you want to delete. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return DeleteSubscriptionByIdResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function deleteSubscriptionById($subscription_id, $notification_type) {
        [$response] = $this->deleteSubscriptionByIdWithHttpInfo($subscription_id, $notification_type);

        return $response;
    }

    /**
     * Operation deleteSubscriptionByIdWithHttpInfo.
     *
     * @param string $subscription_id The identifier for the subscription that you want to delete. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\DeleteSubscriptionByIdResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function deleteSubscriptionByIdWithHttpInfo($subscription_id, $notification_type) {
        $request = $this->deleteSubscriptionByIdRequest($subscription_id, $notification_type);

        return $this->sendRequest($request, DeleteSubscriptionByIdResponse::class);
    }

    /**
     * Operation deleteSubscriptionByIdAsync.
     *
     * @param string $subscription_id The identifier for the subscription that you want to delete. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function deleteSubscriptionByIdAsync($subscription_id, $notification_type) {
        return $this->deleteSubscriptionByIdAsyncWithHttpInfo($subscription_id, $notification_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteSubscriptionByIdAsyncWithHttpInfo.
     *
     * @param string $subscription_id The identifier for the subscription that you want to delete. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function deleteSubscriptionByIdAsyncWithHttpInfo($subscription_id, $notification_type) {
        $request = $this->deleteSubscriptionByIdRequest($subscription_id, $notification_type);

        return $this->sendRequestAsync($request, DeleteSubscriptionByIdResponse::class);
    }

    /**
     * Create request for operation 'deleteSubscriptionById'.
     *
     * @param string $subscription_id The identifier for the subscription that you want to delete. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function deleteSubscriptionByIdRequest($subscription_id, $notification_type) {
        // verify the required parameter 'subscription_id' is set
        if (null === $subscription_id || (is_array($subscription_id) && 0 === count($subscription_id))) {
            throw new InvalidArgumentException('Missing the required parameter $subscription_id when calling deleteSubscriptionById');
        }
        // verify the required parameter 'notification_type' is set
        if (null === $notification_type || (is_array($notification_type) && 0 === count($notification_type))) {
            throw new InvalidArgumentException('Missing the required parameter $notification_type when calling deleteSubscriptionById');
        }

        $resourcePath = '/notifications/v1/subscriptions/{notificationType}/{subscriptionId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $subscription_id) {
            $resourcePath = str_replace(
                '{' . 'subscriptionId' . '}',
                ObjectSerializer::toPathValue($subscription_id),
                $resourcePath
            );
        }
        // path params
        if (null !== $notification_type) {
            $resourcePath = str_replace(
                '{' . 'notificationType' . '}',
                ObjectSerializer::toPathValue($notification_type),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'DELETE', $httpBody);
    }

    /**
     * Operation getDestination.
     *
     * @param string $destination_id The identifier generated when you created the destination. (required)
     *
     * @return GetDestinationResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getDestination($destination_id) {
        [$response] = $this->getDestinationWithHttpInfo($destination_id);

        return $response;
    }

    /**
     * Operation getDestinationWithHttpInfo.
     *
     * @param string $destination_id The identifier generated when you created the destination. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\GetDestinationResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getDestinationWithHttpInfo($destination_id) {
        $request = $this->getDestinationRequest($destination_id);

        return $this->sendRequest($request, GetDestinationResponse::class);
    }

    /**
     * Operation getDestinationAsync.
     *
     * @param string $destination_id The identifier generated when you created the destination. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getDestinationAsync($destination_id) {
        return $this->getDestinationAsyncWithHttpInfo($destination_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDestinationAsyncWithHttpInfo.
     *
     * @param string $destination_id The identifier generated when you created the destination. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getDestinationAsyncWithHttpInfo($destination_id) {
        $request = $this->getDestinationRequest($destination_id);

        return $this->sendRequestAsync($request, GetDestinationResponse::class);
    }

    /**
     * Create request for operation 'getDestination'.
     *
     * @param string $destination_id The identifier generated when you created the destination. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getDestinationRequest($destination_id) {
        // verify the required parameter 'destination_id' is set
        if (null === $destination_id || (is_array($destination_id) && 0 === count($destination_id))) {
            throw new InvalidArgumentException('Missing the required parameter $destination_id when calling getDestination');
        }

        $resourcePath = '/notifications/v1/destinations/{destinationId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $destination_id) {
            $resourcePath = str_replace(
                '{' . 'destinationId' . '}',
                ObjectSerializer::toPathValue($destination_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getDestinations.
     *
     * @return GetDestinationsResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getDestinations() {
        [$response] = $this->getDestinationsWithHttpInfo();

        return $response;
    }

    /**
     * Operation getDestinationsWithHttpInfo.
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\GetDestinationsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getDestinationsWithHttpInfo() {
        $request = $this->getDestinationsRequest();

        return $this->sendRequest($request, GetDestinationsResponse::class);
    }

    /**
     * Operation getDestinationsAsync.
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getDestinationsAsync() {
        return $this->getDestinationsAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDestinationsAsyncWithHttpInfo.
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getDestinationsAsyncWithHttpInfo() {
        $request = $this->getDestinationsRequest();

        return $this->sendRequestAsync($request, GetDestinationsResponse::class);
    }

    /**
     * Create request for operation 'getDestinations'.
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getDestinationsRequest() {
        $resourcePath = '/notifications/v1/destinations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getSubscription.
     *
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return GetSubscriptionResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getSubscription($notification_type) {
        [$response] = $this->getSubscriptionWithHttpInfo($notification_type);

        return $response;
    }

    /**
     * Operation getSubscriptionWithHttpInfo.
     *
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\GetSubscriptionResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getSubscriptionWithHttpInfo($notification_type) {
        $request = $this->getSubscriptionRequest($notification_type);

        return $this->sendRequest($request, GetSubscriptionResponse::class);
    }

    /**
     * Operation getSubscriptionAsync.
     *
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getSubscriptionAsync($notification_type) {
        return $this->getSubscriptionAsyncWithHttpInfo($notification_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSubscriptionAsyncWithHttpInfo.
     *
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getSubscriptionAsyncWithHttpInfo($notification_type) {
        $request = $this->getSubscriptionRequest($notification_type);

        return $this->sendRequestAsync($request, GetSubscriptionResponse::class);
    }

    /**
     * Create request for operation 'getSubscription'.
     *
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getSubscriptionRequest($notification_type) {
        // verify the required parameter 'notification_type' is set
        if (null === $notification_type || (is_array($notification_type) && 0 === count($notification_type))) {
            throw new InvalidArgumentException('Missing the required parameter $notification_type when calling getSubscription');
        }

        $resourcePath = '/notifications/v1/subscriptions/{notificationType}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $notification_type) {
            $resourcePath = str_replace(
                '{' . 'notificationType' . '}',
                ObjectSerializer::toPathValue($notification_type),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getSubscriptionById.
     *
     * @param string $subscription_id The identifier for the subscription that you want to get. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return GetSubscriptionByIdResponse
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getSubscriptionById($subscription_id, $notification_type) {
        [$response] = $this->getSubscriptionByIdWithHttpInfo($subscription_id, $notification_type);

        return $response;
    }

    /**
     * Operation getSubscriptionByIdWithHttpInfo.
     *
     * @param string $subscription_id The identifier for the subscription that you want to get. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Notifications\GetSubscriptionByIdResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getSubscriptionByIdWithHttpInfo($subscription_id, $notification_type) {
        $request = $this->getSubscriptionByIdRequest($subscription_id, $notification_type);

        return $this->sendRequest($request, GetSubscriptionByIdResponse::class);
    }

    /**
     * Operation getSubscriptionByIdAsync.
     *
     * @param string $subscription_id The identifier for the subscription that you want to get. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getSubscriptionByIdAsync($subscription_id, $notification_type) {
        return $this->getSubscriptionByIdAsyncWithHttpInfo($subscription_id, $notification_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSubscriptionByIdAsyncWithHttpInfo.
     *
     * @param string $subscription_id The identifier for the subscription that you want to get. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getSubscriptionByIdAsyncWithHttpInfo($subscription_id, $notification_type) {
        $request = $this->getSubscriptionByIdRequest($subscription_id, $notification_type);

        return $this->sendRequestAsync($request, GetSubscriptionByIdResponse::class);
    }

    /**
     * Create request for operation 'getSubscriptionById'.
     *
     * @param string $subscription_id The identifier for the subscription that you want to get. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getSubscriptionByIdRequest($subscription_id, $notification_type) {
        // verify the required parameter 'subscription_id' is set
        if (null === $subscription_id || (is_array($subscription_id) && 0 === count($subscription_id))) {
            throw new InvalidArgumentException('Missing the required parameter $subscription_id when calling getSubscriptionById');
        }
        // verify the required parameter 'notification_type' is set
        if (null === $notification_type || (is_array($notification_type) && 0 === count($notification_type))) {
            throw new InvalidArgumentException('Missing the required parameter $notification_type when calling getSubscriptionById');
        }

        $resourcePath = '/notifications/v1/subscriptions/{notificationType}/{subscriptionId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $subscription_id) {
            $resourcePath = str_replace(
                '{' . 'subscriptionId' . '}',
                ObjectSerializer::toPathValue($subscription_id),
                $resourcePath
            );
        }
        // path params
        if (null !== $notification_type) {
            $resourcePath = str_replace(
                '{' . 'notificationType' . '}',
                ObjectSerializer::toPathValue($notification_type),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }
}
