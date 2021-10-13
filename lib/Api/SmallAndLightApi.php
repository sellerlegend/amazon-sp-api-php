<?php
/**
 * SmallAndLightApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for FBA Small And Light.
 *
 * The Selling Partner API for FBA Small and Light lets you help sellers manage their listings in the Small and Light program. The program reduces the cost of fulfilling orders for small and lightweight FBA inventory. You can enroll or remove items from the program and check item eligibility and enrollment status. You can also preview the estimated program fees charged to a seller for items sold while enrolled in the program.
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
use SellerLegend\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\SmallAndLightEligibility;
use SellerLegend\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\SmallAndLightEnrollment;
use SellerLegend\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\SmallAndLightFeePreviewRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\SmallAndLightFeePreviews;
use SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * SmallAndLightApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class SmallAndLightApi {
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
     * Operation deleteSmallAndLightEnrollmentBySellerSKU.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace in which to remove the item from the Small and Light program. Note: Accepts a single marketplace only. (required)
     *
     * @return void
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function deleteSmallAndLightEnrollmentBySellerSKU($seller_sku, $marketplace_ids) {
        $this->deleteSmallAndLightEnrollmentBySellerSKUWithHttpInfo($seller_sku, $marketplace_ids);
    }

    /**
     * Operation deleteSmallAndLightEnrollmentBySellerSKUWithHttpInfo.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace in which to remove the item from the Small and Light program. Note: Accepts a single marketplace only. (required)
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function deleteSmallAndLightEnrollmentBySellerSKUWithHttpInfo($seller_sku, $marketplace_ids) {
        $returnType = '';
        $request = $this->deleteSmallAndLightEnrollmentBySellerSKURequest($seller_sku, $marketplace_ids);

        return $this->sendRequest($request, SmallAndLightEnrollment::class);
    }

    /**
     * Operation deleteSmallAndLightEnrollmentBySellerSKUAsync.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace in which to remove the item from the Small and Light program. Note: Accepts a single marketplace only. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function deleteSmallAndLightEnrollmentBySellerSKUAsync($seller_sku, $marketplace_ids) {
        return $this->deleteSmallAndLightEnrollmentBySellerSKUAsyncWithHttpInfo($seller_sku, $marketplace_ids)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteSmallAndLightEnrollmentBySellerSKUAsyncWithHttpInfo.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace in which to remove the item from the Small and Light program. Note: Accepts a single marketplace only. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function deleteSmallAndLightEnrollmentBySellerSKUAsyncWithHttpInfo($seller_sku, $marketplace_ids) {
        $request = $this->deleteSmallAndLightEnrollmentBySellerSKURequest($seller_sku, $marketplace_ids);

        return $this->sendRequestAsync($request, SmallAndLightEnrollment::class);
    }

    /**
     * Create request for operation 'deleteSmallAndLightEnrollmentBySellerSKU'.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace in which to remove the item from the Small and Light program. Note: Accepts a single marketplace only. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function deleteSmallAndLightEnrollmentBySellerSKURequest($seller_sku, $marketplace_ids) {
        // verify the required parameter 'seller_sku' is set
        if (null === $seller_sku || (is_array($seller_sku) && 0 === count($seller_sku))) {
            throw new InvalidArgumentException('Missing the required parameter $seller_sku when calling deleteSmallAndLightEnrollmentBySellerSKU');
        }
        // verify the required parameter 'marketplace_ids' is set
        if (null === $marketplace_ids || (is_array($marketplace_ids) && 0 === count($marketplace_ids))) {
            throw new InvalidArgumentException('Missing the required parameter $marketplace_ids when calling deleteSmallAndLightEnrollmentBySellerSKU');
        }

        $resourcePath = '/fba/smallAndLight/v1/enrollments/{sellerSKU}';
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
        if (null !== $seller_sku) {
            $resourcePath = str_replace(
                '{' . 'sellerSKU' . '}',
                ObjectSerializer::toPathValue($seller_sku),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'DELETE', $httpBody);
    }

    /**
     * Operation getSmallAndLightEligibilityBySellerSKU.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace for which the eligibility status is retrieved. NOTE: Accepts a single marketplace only. (required)
     *
     * @return SmallAndLightEligibility
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getSmallAndLightEligibilityBySellerSKU($seller_sku, $marketplace_ids) {
        [$response] = $this->getSmallAndLightEligibilityBySellerSKUWithHttpInfo($seller_sku, $marketplace_ids);

        return $response;
    }

    /**
     * Operation getSmallAndLightEligibilityBySellerSKUWithHttpInfo.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace for which the eligibility status is retrieved. NOTE: Accepts a single marketplace only. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\SmallAndLightEligibility, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getSmallAndLightEligibilityBySellerSKUWithHttpInfo($seller_sku, $marketplace_ids) {
        $request = $this->getSmallAndLightEligibilityBySellerSKURequest($seller_sku, $marketplace_ids);

        return $this->sendRequest($request, SmallAndLightEligibility::class);
    }

    /**
     * Operation getSmallAndLightEligibilityBySellerSKUAsync.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace for which the eligibility status is retrieved. NOTE: Accepts a single marketplace only. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getSmallAndLightEligibilityBySellerSKUAsync($seller_sku, $marketplace_ids) {
        return $this->getSmallAndLightEligibilityBySellerSKUAsyncWithHttpInfo($seller_sku, $marketplace_ids)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSmallAndLightEligibilityBySellerSKUAsyncWithHttpInfo.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace for which the eligibility status is retrieved. NOTE: Accepts a single marketplace only. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getSmallAndLightEligibilityBySellerSKUAsyncWithHttpInfo($seller_sku, $marketplace_ids) {
        $request = $this->getSmallAndLightEligibilityBySellerSKURequest($seller_sku, $marketplace_ids);

        return $this->sendRequestAsync($request, SmallAndLightEligibility::class);
    }

    /**
     * Create request for operation 'getSmallAndLightEligibilityBySellerSKU'.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace for which the eligibility status is retrieved. NOTE: Accepts a single marketplace only. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getSmallAndLightEligibilityBySellerSKURequest($seller_sku, $marketplace_ids) {
        // verify the required parameter 'seller_sku' is set
        if (null === $seller_sku || (is_array($seller_sku) && 0 === count($seller_sku))) {
            throw new InvalidArgumentException('Missing the required parameter $seller_sku when calling getSmallAndLightEligibilityBySellerSKU');
        }
        // verify the required parameter 'marketplace_ids' is set
        if (null === $marketplace_ids || (is_array($marketplace_ids) && 0 === count($marketplace_ids))) {
            throw new InvalidArgumentException('Missing the required parameter $marketplace_ids when calling getSmallAndLightEligibilityBySellerSKU');
        }

        $resourcePath = '/fba/smallAndLight/v1/eligibilities/{sellerSKU}';
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
        if (null !== $seller_sku) {
            $resourcePath = str_replace(
                '{' . 'sellerSKU' . '}',
                ObjectSerializer::toPathValue($seller_sku),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getSmallAndLightEnrollmentBySellerSKU.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace for which the enrollment status is retrieved. Note: Accepts a single marketplace only. (required)
     *
     * @return SmallAndLightEnrollment
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getSmallAndLightEnrollmentBySellerSKU($seller_sku, $marketplace_ids) {
        [$response] = $this->getSmallAndLightEnrollmentBySellerSKUWithHttpInfo($seller_sku, $marketplace_ids);

        return $response;
    }

    /**
     * Operation getSmallAndLightEnrollmentBySellerSKUWithHttpInfo.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace for which the enrollment status is retrieved. Note: Accepts a single marketplace only. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\SmallAndLightEnrollment, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getSmallAndLightEnrollmentBySellerSKUWithHttpInfo($seller_sku, $marketplace_ids) {
        $request = $this->getSmallAndLightEnrollmentBySellerSKURequest($seller_sku, $marketplace_ids);

        return $this->sendRequest($request, SmallAndLightEnrollment::class);
    }

    /**
     * Operation getSmallAndLightEnrollmentBySellerSKUAsync.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace for which the enrollment status is retrieved. Note: Accepts a single marketplace only. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getSmallAndLightEnrollmentBySellerSKUAsync($seller_sku, $marketplace_ids) {
        return $this->getSmallAndLightEnrollmentBySellerSKUAsyncWithHttpInfo($seller_sku, $marketplace_ids)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSmallAndLightEnrollmentBySellerSKUAsyncWithHttpInfo.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace for which the enrollment status is retrieved. Note: Accepts a single marketplace only. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getSmallAndLightEnrollmentBySellerSKUAsyncWithHttpInfo($seller_sku, $marketplace_ids) {
        $returnType = '\SellerLegend\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\SmallAndLightEnrollment';
        $request = $this->getSmallAndLightEnrollmentBySellerSKURequest($seller_sku, $marketplace_ids);

        return $this->sendRequestAsync($request, SmallAndLightEnrollment::class);
    }

    /**
     * Create request for operation 'getSmallAndLightEnrollmentBySellerSKU'.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace for which the enrollment status is retrieved. Note: Accepts a single marketplace only. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getSmallAndLightEnrollmentBySellerSKURequest($seller_sku, $marketplace_ids) {
        // verify the required parameter 'seller_sku' is set
        if (null === $seller_sku || (is_array($seller_sku) && 0 === count($seller_sku))) {
            throw new InvalidArgumentException('Missing the required parameter $seller_sku when calling getSmallAndLightEnrollmentBySellerSKU');
        }
        // verify the required parameter 'marketplace_ids' is set
        if (null === $marketplace_ids || (is_array($marketplace_ids) && 0 === count($marketplace_ids))) {
            throw new InvalidArgumentException('Missing the required parameter $marketplace_ids when calling getSmallAndLightEnrollmentBySellerSKU');
        }

        $resourcePath = '/fba/smallAndLight/v1/enrollments/{sellerSKU}';
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
        if (null !== $seller_sku) {
            $resourcePath = str_replace(
                '{' . 'sellerSKU' . '}',
                ObjectSerializer::toPathValue($seller_sku),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getSmallAndLightFeePreview.
     *
     * @param SmallAndLightFeePreviewRequest $body body (required)
     *
     * @return SmallAndLightFeePreviews
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getSmallAndLightFeePreview($body) {
        [$response] = $this->getSmallAndLightFeePreviewWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation getSmallAndLightFeePreviewWithHttpInfo.
     *
     * @param SmallAndLightFeePreviewRequest $body (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\SmallAndLightFeePreviews, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getSmallAndLightFeePreviewWithHttpInfo($body) {
        $request = $this->getSmallAndLightFeePreviewRequest($body);

        return $this->sendRequest($request, SmallAndLightFeePreviews::class);
    }

    /**
     * Operation getSmallAndLightFeePreviewAsync.
     *
     * @param SmallAndLightFeePreviewRequest $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getSmallAndLightFeePreviewAsync($body) {
        return $this->getSmallAndLightFeePreviewAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSmallAndLightFeePreviewAsyncWithHttpInfo.
     *
     * @param SmallAndLightFeePreviewRequest $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getSmallAndLightFeePreviewAsyncWithHttpInfo($body) {
        $request = $this->getSmallAndLightFeePreviewRequest($body);

        return $this->sendRequestAsync($request, SmallAndLightFeePreviews::class);
    }

    /**
     * Create request for operation 'getSmallAndLightFeePreview'.
     *
     * @param SmallAndLightFeePreviewRequest $body (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getSmallAndLightFeePreviewRequest($body) {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new InvalidArgumentException('Missing the required parameter $body when calling getSmallAndLightFeePreview');
        }

        $resourcePath = '/fba/smallAndLight/v1/feePreviews';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation putSmallAndLightEnrollmentBySellerSKU.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace in which to enroll the item. Note: Accepts a single marketplace only. (required)
     *
     * @return SmallAndLightEnrollment
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function putSmallAndLightEnrollmentBySellerSKU($seller_sku, $marketplace_ids) {
        [$response] = $this->putSmallAndLightEnrollmentBySellerSKUWithHttpInfo($seller_sku, $marketplace_ids);

        return $response;
    }

    /**
     * Operation putSmallAndLightEnrollmentBySellerSKUWithHttpInfo.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace in which to enroll the item. Note: Accepts a single marketplace only. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\SmallAndLightEnrollment, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function putSmallAndLightEnrollmentBySellerSKUWithHttpInfo($seller_sku, $marketplace_ids) {
        $request = $this->putSmallAndLightEnrollmentBySellerSKURequest($seller_sku, $marketplace_ids);

        return $this->sendRequest($request, SmallAndLightEnrollment::class);
    }

    /**
     * Operation putSmallAndLightEnrollmentBySellerSKUAsync.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace in which to enroll the item. Note: Accepts a single marketplace only. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function putSmallAndLightEnrollmentBySellerSKUAsync($seller_sku, $marketplace_ids) {
        return $this->putSmallAndLightEnrollmentBySellerSKUAsyncWithHttpInfo($seller_sku, $marketplace_ids)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation putSmallAndLightEnrollmentBySellerSKUAsyncWithHttpInfo.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace in which to enroll the item. Note: Accepts a single marketplace only. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function putSmallAndLightEnrollmentBySellerSKUAsyncWithHttpInfo($seller_sku, $marketplace_ids) {
        $request = $this->putSmallAndLightEnrollmentBySellerSKURequest($seller_sku, $marketplace_ids);

        return $this->sendRequestAsync($request, SmallAndLightEnrollment::class);
    }

    /**
     * Create request for operation 'putSmallAndLightEnrollmentBySellerSKU'.
     *
     * @param string $seller_sku The seller SKU that identifies the item. (required)
     * @param string[] $marketplace_ids The marketplace in which to enroll the item. Note: Accepts a single marketplace only. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function putSmallAndLightEnrollmentBySellerSKURequest($seller_sku, $marketplace_ids) {
        // verify the required parameter 'seller_sku' is set
        if (null === $seller_sku || (is_array($seller_sku) && 0 === count($seller_sku))) {
            throw new InvalidArgumentException('Missing the required parameter $seller_sku when calling putSmallAndLightEnrollmentBySellerSKU');
        }
        // verify the required parameter 'marketplace_ids' is set
        if (null === $marketplace_ids || (is_array($marketplace_ids) && 0 === count($marketplace_ids))) {
            throw new InvalidArgumentException('Missing the required parameter $marketplace_ids when calling putSmallAndLightEnrollmentBySellerSKU');
        }

        $resourcePath = '/fba/smallAndLight/v1/enrollments/{sellerSKU}';
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
        if (null !== $seller_sku) {
            $resourcePath = str_replace(
                '{' . 'sellerSKU' . '}',
                ObjectSerializer::toPathValue($seller_sku),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }
}
