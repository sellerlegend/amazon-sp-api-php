<?php
/**
 * SolicitationsApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Solicitations.
 *
 * With the Solicitations API you can build applications that send non-critical solicitations to buyers. You can get a list of solicitation types that are available for an order that you specify, then call an operation that sends a solicitation to the buyer for that order. Buyers cannot respond to solicitations sent by this API, and these solicitations do not appear in the Messaging section of Seller Central or in the recipient's Message Center. The Solicitations API returns responses that are formed according to the <a href=https://tools.ietf.org/html/draft-kelly-json-hal-08>JSON Hypertext Application Language</a> (HAL) standard.
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
use SellerLegend\AmazonSellingPartnerAPI\Models\Solicitations\CreateProductReviewAndSellerFeedbackSolicitationResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Solicitations\GetSolicitationActionsForOrderResponse;
use SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * SolicitationsApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class SolicitationsApi {
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
     * Operation createProductReviewAndSellerFeedbackSolicitation.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a solicitation is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @return CreateProductReviewAndSellerFeedbackSolicitationResponse
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function createProductReviewAndSellerFeedbackSolicitation($amazon_order_id, $marketplace_ids) {
        [$response] = $this->createProductReviewAndSellerFeedbackSolicitationWithHttpInfo($amazon_order_id, $marketplace_ids);

        return $response;
    }

    /**
     * Operation createProductReviewAndSellerFeedbackSolicitationWithHttpInfo.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a solicitation is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Solicitations\CreateProductReviewAndSellerFeedbackSolicitationResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function createProductReviewAndSellerFeedbackSolicitationWithHttpInfo($amazon_order_id, $marketplace_ids) {
        $request = $this->createProductReviewAndSellerFeedbackSolicitationRequest($amazon_order_id, $marketplace_ids);

        return $this->sendRequest($request, CreateProductReviewAndSellerFeedbackSolicitationResponse::class);
    }

    /**
     * Operation createProductReviewAndSellerFeedbackSolicitationAsync.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a solicitation is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function createProductReviewAndSellerFeedbackSolicitationAsync($amazon_order_id, $marketplace_ids) {
        return $this->createProductReviewAndSellerFeedbackSolicitationAsyncWithHttpInfo($amazon_order_id, $marketplace_ids)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createProductReviewAndSellerFeedbackSolicitationAsyncWithHttpInfo.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a solicitation is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function createProductReviewAndSellerFeedbackSolicitationAsyncWithHttpInfo($amazon_order_id, $marketplace_ids) {
        $returnType = '\SellerLegend\AmazonSellingPartnerAPI\Models\Solicitations\CreateProductReviewAndSellerFeedbackSolicitationResponse';
        $request = $this->createProductReviewAndSellerFeedbackSolicitationRequest($amazon_order_id, $marketplace_ids);

        return $this->sendRequestAsync($request, CreateProductReviewAndSellerFeedbackSolicitationResponse::class);
    }

    /**
     * Create request for operation 'createProductReviewAndSellerFeedbackSolicitation'.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which a solicitation is sent. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function createProductReviewAndSellerFeedbackSolicitationRequest($amazon_order_id, $marketplace_ids) {
        // verify the required parameter 'amazon_order_id' is set
        if (null === $amazon_order_id || (is_array($amazon_order_id) && 0 === count($amazon_order_id))) {
            throw new InvalidArgumentException('Missing the required parameter $amazon_order_id when calling createProductReviewAndSellerFeedbackSolicitation');
        }
        // verify the required parameter 'marketplace_ids' is set
        if (null === $marketplace_ids || (is_array($marketplace_ids) && 0 === count($marketplace_ids))) {
            throw new InvalidArgumentException('Missing the required parameter $marketplace_ids when calling createProductReviewAndSellerFeedbackSolicitation');
        }

        $resourcePath = '/solicitations/v1/orders/{amazonOrderId}/solicitations/productReviewAndSellerFeedback';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'csv', true);
        }
        if (null !== $marketplace_ids) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplace_ids);
        }

        // path params
        if (null !== $amazon_order_id) {
            $resourcePath = str_replace(
                '{' . 'amazonOrderId' . '}',
                ObjectSerializer::toPathValue($amazon_order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation getSolicitationActionsForOrder.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which you want a list of available solicitation types. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @return GetSolicitationActionsForOrderResponse
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function getSolicitationActionsForOrder($amazon_order_id, $marketplace_ids) {
        [$response] = $this->getSolicitationActionsForOrderWithHttpInfo($amazon_order_id, $marketplace_ids);

        return $response;
    }

    /**
     * Operation getSolicitationActionsForOrderWithHttpInfo.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which you want a list of available solicitation types. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Solicitations\GetSolicitationActionsForOrderResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function getSolicitationActionsForOrderWithHttpInfo($amazon_order_id, $marketplace_ids) {
        $request = $this->getSolicitationActionsForOrderRequest($amazon_order_id, $marketplace_ids);

        return $this->sendRequest($request, GetSolicitationActionsForOrderResponse::class);
    }

    /**
     * Operation getSolicitationActionsForOrderAsync.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which you want a list of available solicitation types. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getSolicitationActionsForOrderAsync($amazon_order_id, $marketplace_ids) {
        return $this->getSolicitationActionsForOrderAsyncWithHttpInfo($amazon_order_id, $marketplace_ids)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSolicitationActionsForOrderAsyncWithHttpInfo.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which you want a list of available solicitation types. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getSolicitationActionsForOrderAsyncWithHttpInfo($amazon_order_id, $marketplace_ids) {
        $returnType = '\SellerLegend\AmazonSellingPartnerAPI\Models\Solicitations\GetSolicitationActionsForOrderResponse';
        $request = $this->getSolicitationActionsForOrderRequest($amazon_order_id, $marketplace_ids);

        return $this->sendRequestAsync($request, GetSolicitationActionsForOrderResponse::class);
    }

    /**
     * Create request for operation 'getSolicitationActionsForOrder'.
     *
     * @param string $amazon_order_id An Amazon order identifier. This specifies the order for which you want a list of available solicitation types. (required)
     * @param string[] $marketplace_ids A marketplace identifier. This specifies the marketplace in which the order was placed. Only one marketplace can be specified. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getSolicitationActionsForOrderRequest($amazon_order_id, $marketplace_ids) {
        // verify the required parameter 'amazon_order_id' is set
        if (null === $amazon_order_id || (is_array($amazon_order_id) && 0 === count($amazon_order_id))) {
            throw new InvalidArgumentException('Missing the required parameter $amazon_order_id when calling getSolicitationActionsForOrder');
        }
        // verify the required parameter 'marketplace_ids' is set
        if (null === $marketplace_ids || (is_array($marketplace_ids) && 0 === count($marketplace_ids))) {
            throw new InvalidArgumentException('Missing the required parameter $marketplace_ids when calling getSolicitationActionsForOrder');
        }

        $resourcePath = '/solicitations/v1/orders/{amazonOrderId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'csv', true);
        }
        if (null !== $marketplace_ids) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplace_ids);
        }

        // path params
        if (null !== $amazon_order_id) {
            $resourcePath = str_replace(
                '{' . 'amazonOrderId' . '}',
                ObjectSerializer::toPathValue($amazon_order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }
}
