<?php
/**
 * ServiceApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Services.
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders.
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
use SellerLegend\AmazonSellingPartnerAPI\Models\Services\AddAppointmentRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\Services\CancelServiceJobByServiceJobIdResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Services\CompleteServiceJobByServiceJobIdResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Services\GetServiceJobByServiceJobIdResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Services\GetServiceJobsResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Services\RescheduleAppointmentRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\Services\SetAppointmentResponse;
use SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * ServiceApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ServiceApi {
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
     * Operation addAppointmentForServiceJobByServiceJobId.
     *
     * @param AddAppointmentRequest $body Add appointment operation input details. (required)
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     *
     * @return SetAppointmentResponse
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function addAppointmentForServiceJobByServiceJobId($body, $service_job_id) {
        [$response] = $this->addAppointmentForServiceJobByServiceJobIdWithHttpInfo($body, $service_job_id);

        return $response;
    }

    /**
     * Operation addAppointmentForServiceJobByServiceJobIdWithHttpInfo.
     *
     * @param AddAppointmentRequest $body Add appointment operation input details. (required)
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Services\SetAppointmentResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function addAppointmentForServiceJobByServiceJobIdWithHttpInfo($body, $service_job_id) {
        $request = $this->addAppointmentForServiceJobByServiceJobIdRequest($body, $service_job_id);

        return $this->sendRequest($request, SetAppointmentResponse::class);
    }

    /**
     * Operation addAppointmentForServiceJobByServiceJobIdAsync.
     *
     * @param AddAppointmentRequest $body Add appointment operation input details. (required)
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function addAppointmentForServiceJobByServiceJobIdAsync($body, $service_job_id) {
        return $this->addAppointmentForServiceJobByServiceJobIdAsyncWithHttpInfo($body, $service_job_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addAppointmentForServiceJobByServiceJobIdAsyncWithHttpInfo.
     *
     * @param AddAppointmentRequest $body Add appointment operation input details. (required)
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function addAppointmentForServiceJobByServiceJobIdAsyncWithHttpInfo($body, $service_job_id) {
        $request = $this->addAppointmentForServiceJobByServiceJobIdRequest($body, $service_job_id);

        return $this->sendRequestAsync($request, SetAppointmentResponse::class);
    }

    /**
     * Create request for operation 'addAppointmentForServiceJobByServiceJobId'.
     *
     * @param AddAppointmentRequest $body Add appointment operation input details. (required)
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function addAppointmentForServiceJobByServiceJobIdRequest($body, $service_job_id) {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new InvalidArgumentException('Missing the required parameter $body when calling addAppointmentForServiceJobByServiceJobId');
        }
        // verify the required parameter 'service_job_id' is set
        if (null === $service_job_id || (is_array($service_job_id) && 0 === count($service_job_id))) {
            throw new InvalidArgumentException('Missing the required parameter $service_job_id when calling addAppointmentForServiceJobByServiceJobId');
        }

        $resourcePath = '/service/v1/serviceJobs/{serviceJobId}/appointments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        // path params
        if (null !== $service_job_id) {
            $resourcePath = str_replace(
                '{' . 'serviceJobId' . '}',
                ObjectSerializer::toPathValue($service_job_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation cancelServiceJobByServiceJobId.
     *
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     * @param string $cancellation_reason_code A cancel reason code that specifies the reason for cancelling a service job. (required)
     *
     * @return CancelServiceJobByServiceJobIdResponse
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function cancelServiceJobByServiceJobId($service_job_id, $cancellation_reason_code) {
        [$response] = $this->cancelServiceJobByServiceJobIdWithHttpInfo($service_job_id, $cancellation_reason_code);

        return $response;
    }

    /**
     * Operation cancelServiceJobByServiceJobIdWithHttpInfo.
     *
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     * @param string $cancellation_reason_code A cancel reason code that specifies the reason for cancelling a service job. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Services\CancelServiceJobByServiceJobIdResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function cancelServiceJobByServiceJobIdWithHttpInfo($service_job_id, $cancellation_reason_code) {
        $request = $this->cancelServiceJobByServiceJobIdRequest($service_job_id, $cancellation_reason_code);

        return $this->sendRequest($request, CancelServiceJobByServiceJobIdResponse::class);
    }

    /**
     * Operation cancelServiceJobByServiceJobIdAsync.
     *
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     * @param string $cancellation_reason_code A cancel reason code that specifies the reason for cancelling a service job. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function cancelServiceJobByServiceJobIdAsync($service_job_id, $cancellation_reason_code) {
        return $this->cancelServiceJobByServiceJobIdAsyncWithHttpInfo($service_job_id, $cancellation_reason_code)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelServiceJobByServiceJobIdAsyncWithHttpInfo.
     *
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     * @param string $cancellation_reason_code A cancel reason code that specifies the reason for cancelling a service job. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function cancelServiceJobByServiceJobIdAsyncWithHttpInfo($service_job_id, $cancellation_reason_code) {
        $request = $this->cancelServiceJobByServiceJobIdRequest($service_job_id, $cancellation_reason_code);

        return $this->sendRequestAsync($request, CancelServiceJobByServiceJobIdResponse::class);
    }

    /**
     * Create request for operation 'cancelServiceJobByServiceJobId'.
     *
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     * @param string $cancellation_reason_code A cancel reason code that specifies the reason for cancelling a service job. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function cancelServiceJobByServiceJobIdRequest($service_job_id, $cancellation_reason_code) {
        // verify the required parameter 'service_job_id' is set
        if (null === $service_job_id || (is_array($service_job_id) && 0 === count($service_job_id))) {
            throw new InvalidArgumentException('Missing the required parameter $service_job_id when calling cancelServiceJobByServiceJobId');
        }
        // verify the required parameter 'cancellation_reason_code' is set
        if (null === $cancellation_reason_code || (is_array($cancellation_reason_code) && 0 === count($cancellation_reason_code))) {
            throw new InvalidArgumentException('Missing the required parameter $cancellation_reason_code when calling cancelServiceJobByServiceJobId');
        }

        $resourcePath = '/service/v1/serviceJobs/{serviceJobId}/cancellations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $cancellation_reason_code) {
            $queryParams['cancellationReasonCode'] = ObjectSerializer::toQueryValue($cancellation_reason_code);
        }

        // path params
        if (null !== $service_job_id) {
            $resourcePath = str_replace(
                '{' . 'serviceJobId' . '}',
                ObjectSerializer::toPathValue($service_job_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }

    /**
     * Operation completeServiceJobByServiceJobId.
     *
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     *
     * @return CompleteServiceJobByServiceJobIdResponse
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function completeServiceJobByServiceJobId($service_job_id) {
        [$response] = $this->completeServiceJobByServiceJobIdWithHttpInfo($service_job_id);

        return $response;
    }

    /**
     * Operation completeServiceJobByServiceJobIdWithHttpInfo.
     *
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Services\CompleteServiceJobByServiceJobIdResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function completeServiceJobByServiceJobIdWithHttpInfo($service_job_id) {
        $request = $this->completeServiceJobByServiceJobIdRequest($service_job_id);

        return $this->sendRequest($request, CompleteServiceJobByServiceJobIdResponse::class);
    }

    /**
     * Operation completeServiceJobByServiceJobIdAsync.
     *
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function completeServiceJobByServiceJobIdAsync($service_job_id) {
        return $this->completeServiceJobByServiceJobIdAsyncWithHttpInfo($service_job_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation completeServiceJobByServiceJobIdAsyncWithHttpInfo.
     *
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function completeServiceJobByServiceJobIdAsyncWithHttpInfo($service_job_id) {
        $request = $this->completeServiceJobByServiceJobIdRequest($service_job_id);

        return $this->sendRequestAsync($request, CompleteServiceJobByServiceJobIdResponse::class);
    }

    /**
     * Create request for operation 'completeServiceJobByServiceJobId'.
     *
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function completeServiceJobByServiceJobIdRequest($service_job_id) {
        // verify the required parameter 'service_job_id' is set
        if (null === $service_job_id || (is_array($service_job_id) && 0 === count($service_job_id))) {
            throw new InvalidArgumentException('Missing the required parameter $service_job_id when calling completeServiceJobByServiceJobId');
        }

        $resourcePath = '/service/v1/serviceJobs/{serviceJobId}/completions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }

    /**
     * Operation getServiceJobByServiceJobId.
     *
     * @param string $service_job_id A service job identifier. (required)
     *
     * @return GetServiceJobByServiceJobIdResponse
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function getServiceJobByServiceJobId($service_job_id) {
        [$response] = $this->getServiceJobByServiceJobIdWithHttpInfo($service_job_id);

        return $response;
    }

    /**
     * Operation getServiceJobByServiceJobIdWithHttpInfo.
     *
     * @param string $service_job_id A service job identifier. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Services\GetServiceJobByServiceJobIdResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function getServiceJobByServiceJobIdWithHttpInfo($service_job_id) {
        $request = $this->getServiceJobByServiceJobIdRequest($service_job_id);

        return $this->sendRequest($request, GetServiceJobByServiceJobIdResponse::class);
    }

    /**
     * Operation getServiceJobByServiceJobIdAsync.
     *
     * @param string $service_job_id A service job identifier. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getServiceJobByServiceJobIdAsync($service_job_id) {
        return $this->getServiceJobByServiceJobIdAsyncWithHttpInfo($service_job_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getServiceJobByServiceJobIdAsyncWithHttpInfo.
     *
     * @param string $service_job_id A service job identifier. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getServiceJobByServiceJobIdAsyncWithHttpInfo($service_job_id) {
        $returnType = '\SellerLegend\AmazonSellingPartnerAPI\Models\Services\GetServiceJobByServiceJobIdResponse';
        $request = $this->getServiceJobByServiceJobIdRequest($service_job_id);

        return $this->sendRequestAsync($request, GetServiceJobByServiceJobIdResponse::class);
    }

    /**
     * Create request for operation 'getServiceJobByServiceJobId'.
     *
     * @param string $service_job_id A service job identifier. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getServiceJobByServiceJobIdRequest($service_job_id) {
        // verify the required parameter 'service_job_id' is set
        if (null === $service_job_id || (is_array($service_job_id) && 0 === count($service_job_id))) {
            throw new InvalidArgumentException('Missing the required parameter $service_job_id when calling getServiceJobByServiceJobId');
        }

        $resourcePath = '/service/v1/serviceJobs/{serviceJobId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $service_job_id) {
            $resourcePath = str_replace(
                '{' . 'serviceJobId' . '}',
                ObjectSerializer::toPathValue($service_job_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getServiceJobs.
     *
     * @param string[] $marketplace_ids Used to select jobs that were placed in the specified marketplaces. (required)
     * @param string[] $service_order_ids List of service order ids for the query you want to perform.Max values supported 20. (optional)
     * @param string[] $service_job_status A list of one or more job status by which to filter the list of jobs. (optional)
     * @param string $page_token String returned in the response of your previous request. (optional)
     * @param int $page_size A non-negative integer that indicates the maximum number of jobs to return in the list, Value must be 1 - 20. Default 20. (optional, default to 20)
     * @param string $sort_field Sort fields on which you want to sort the output. (optional)
     * @param string $sort_order Sort order for the query you want to perform. (optional)
     * @param string $created_after A date used for selecting jobs created after (or at) a specified time must be in ISO 8601 format. Required if LastUpdatedAfter is not specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error. (optional)
     * @param string $created_before A date used for selecting jobs created before (or at) a specified time must be in ISO 8601 format. (optional)
     * @param string $last_updated_after A date used for selecting jobs updated after (or at) a specified time must be in ISO 8601 format. Required if createdAfter is not specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error. (optional)
     * @param string $last_updated_before A date used for selecting jobs updated before (or at) a specified time must be in ISO 8601 format. (optional)
     * @param string $schedule_start_date A date used for filtering jobs schedule after (or at) a specified time must be in ISO 8601 format. schedule end date should not be earlier than schedule start date. (optional)
     * @param string $schedule_end_date A date used for filtering jobs schedule before (or at) a specified time must be in ISO 8601 format. schedule end date should not be earlier than schedule start date. (optional)
     *
     * @return GetServiceJobsResponse
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     */
    public function getServiceJobs($marketplace_ids, $service_order_ids = null, $service_job_status = null, $page_token = null, $page_size = '20', $sort_field = null, $sort_order = null, $created_after = null, $created_before = null, $last_updated_after = null, $last_updated_before = null, $schedule_start_date = null, $schedule_end_date = null) {
        [$response] = $this->getServiceJobsWithHttpInfo($marketplace_ids, $service_order_ids, $service_job_status, $page_token, $page_size, $sort_field, $sort_order, $created_after, $created_before, $last_updated_after, $last_updated_before, $schedule_start_date, $schedule_end_date);

        return $response;
    }

    /**
     * Operation getServiceJobsWithHttpInfo.
     *
     * @param string[] $marketplace_ids Used to select jobs that were placed in the specified marketplaces. (required)
     * @param string[] $service_order_ids List of service order ids for the query you want to perform.Max values supported 20. (optional)
     * @param string[] $service_job_status A list of one or more job status by which to filter the list of jobs. (optional)
     * @param string $page_token String returned in the response of your previous request. (optional)
     * @param int $page_size A non-negative integer that indicates the maximum number of jobs to return in the list, Value must be 1 - 20. Default 20. (optional, default to 20)
     * @param string $sort_field Sort fields on which you want to sort the output. (optional)
     * @param string $sort_order Sort order for the query you want to perform. (optional)
     * @param string $created_after A date used for selecting jobs created after (or at) a specified time must be in ISO 8601 format. Required if LastUpdatedAfter is not specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error. (optional)
     * @param string $created_before A date used for selecting jobs created before (or at) a specified time must be in ISO 8601 format. (optional)
     * @param string $last_updated_after A date used for selecting jobs updated after (or at) a specified time must be in ISO 8601 format. Required if createdAfter is not specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error. (optional)
     * @param string $last_updated_before A date used for selecting jobs updated before (or at) a specified time must be in ISO 8601 format. (optional)
     * @param string $schedule_start_date A date used for filtering jobs schedule after (or at) a specified time must be in ISO 8601 format. schedule end date should not be earlier than schedule start date. (optional)
     * @param string $schedule_end_date A date used for filtering jobs schedule before (or at) a specified time must be in ISO 8601 format. schedule end date should not be earlier than schedule start date. (optional)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Services\GetServiceJobsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     */
    public function getServiceJobsWithHttpInfo($marketplace_ids, $service_order_ids = null, $service_job_status = null, $page_token = null, $page_size = '20', $sort_field = null, $sort_order = null, $created_after = null, $created_before = null, $last_updated_after = null, $last_updated_before = null, $schedule_start_date = null, $schedule_end_date = null) {
        $request = $this->getServiceJobsRequest($marketplace_ids, $service_order_ids, $service_job_status, $page_token, $page_size, $sort_field, $sort_order, $created_after, $created_before, $last_updated_after, $last_updated_before, $schedule_start_date, $schedule_end_date);

        return $this->sendRequest($request, GetServiceJobsResponse::class);
    }

    /**
     * Operation getServiceJobsAsync.
     *
     * @param string[] $marketplace_ids Used to select jobs that were placed in the specified marketplaces. (required)
     * @param string[] $service_order_ids List of service order ids for the query you want to perform.Max values supported 20. (optional)
     * @param string[] $service_job_status A list of one or more job status by which to filter the list of jobs. (optional)
     * @param string $page_token String returned in the response of your previous request. (optional)
     * @param int $page_size A non-negative integer that indicates the maximum number of jobs to return in the list, Value must be 1 - 20. Default 20. (optional, default to 20)
     * @param string $sort_field Sort fields on which you want to sort the output. (optional)
     * @param string $sort_order Sort order for the query you want to perform. (optional)
     * @param string $created_after A date used for selecting jobs created after (or at) a specified time must be in ISO 8601 format. Required if LastUpdatedAfter is not specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error. (optional)
     * @param string $created_before A date used for selecting jobs created before (or at) a specified time must be in ISO 8601 format. (optional)
     * @param string $last_updated_after A date used for selecting jobs updated after (or at) a specified time must be in ISO 8601 format. Required if createdAfter is not specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error. (optional)
     * @param string $last_updated_before A date used for selecting jobs updated before (or at) a specified time must be in ISO 8601 format. (optional)
     * @param string $schedule_start_date A date used for filtering jobs schedule after (or at) a specified time must be in ISO 8601 format. schedule end date should not be earlier than schedule start date. (optional)
     * @param string $schedule_end_date A date used for filtering jobs schedule before (or at) a specified time must be in ISO 8601 format. schedule end date should not be earlier than schedule start date. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getServiceJobsAsync($marketplace_ids, $service_order_ids = null, $service_job_status = null, $page_token = null, $page_size = '20', $sort_field = null, $sort_order = null, $created_after = null, $created_before = null, $last_updated_after = null, $last_updated_before = null, $schedule_start_date = null, $schedule_end_date = null) {
        return $this->getServiceJobsAsyncWithHttpInfo($marketplace_ids, $service_order_ids, $service_job_status, $page_token, $page_size, $sort_field, $sort_order, $created_after, $created_before, $last_updated_after, $last_updated_before, $schedule_start_date, $schedule_end_date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getServiceJobsAsyncWithHttpInfo.
     *
     * @param string[] $marketplace_ids Used to select jobs that were placed in the specified marketplaces. (required)
     * @param string[] $service_order_ids List of service order ids for the query you want to perform.Max values supported 20. (optional)
     * @param string[] $service_job_status A list of one or more job status by which to filter the list of jobs. (optional)
     * @param string $page_token String returned in the response of your previous request. (optional)
     * @param int $page_size A non-negative integer that indicates the maximum number of jobs to return in the list, Value must be 1 - 20. Default 20. (optional, default to 20)
     * @param string $sort_field Sort fields on which you want to sort the output. (optional)
     * @param string $sort_order Sort order for the query you want to perform. (optional)
     * @param string $created_after A date used for selecting jobs created after (or at) a specified time must be in ISO 8601 format. Required if LastUpdatedAfter is not specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error. (optional)
     * @param string $created_before A date used for selecting jobs created before (or at) a specified time must be in ISO 8601 format. (optional)
     * @param string $last_updated_after A date used for selecting jobs updated after (or at) a specified time must be in ISO 8601 format. Required if createdAfter is not specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error. (optional)
     * @param string $last_updated_before A date used for selecting jobs updated before (or at) a specified time must be in ISO 8601 format. (optional)
     * @param string $schedule_start_date A date used for filtering jobs schedule after (or at) a specified time must be in ISO 8601 format. schedule end date should not be earlier than schedule start date. (optional)
     * @param string $schedule_end_date A date used for filtering jobs schedule before (or at) a specified time must be in ISO 8601 format. schedule end date should not be earlier than schedule start date. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getServiceJobsAsyncWithHttpInfo($marketplace_ids, $service_order_ids = null, $service_job_status = null, $page_token = null, $page_size = '20', $sort_field = null, $sort_order = null, $created_after = null, $created_before = null, $last_updated_after = null, $last_updated_before = null, $schedule_start_date = null, $schedule_end_date = null) {
        $request = $this->getServiceJobsRequest($marketplace_ids, $service_order_ids, $service_job_status, $page_token, $page_size, $sort_field, $sort_order, $created_after, $created_before, $last_updated_after, $last_updated_before, $schedule_start_date, $schedule_end_date);

        return $this->sendRequestAsync($request, GetServiceJobsResponse::class);
    }

    /**
     * Create request for operation 'getServiceJobs'.
     *
     * @param string[] $marketplace_ids Used to select jobs that were placed in the specified marketplaces. (required)
     * @param string[] $service_order_ids List of service order ids for the query you want to perform.Max values supported 20. (optional)
     * @param string[] $service_job_status A list of one or more job status by which to filter the list of jobs. (optional)
     * @param string $page_token String returned in the response of your previous request. (optional)
     * @param int $page_size A non-negative integer that indicates the maximum number of jobs to return in the list, Value must be 1 - 20. Default 20. (optional, default to 20)
     * @param string $sort_field Sort fields on which you want to sort the output. (optional)
     * @param string $sort_order Sort order for the query you want to perform. (optional)
     * @param string $created_after A date used for selecting jobs created after (or at) a specified time must be in ISO 8601 format. Required if LastUpdatedAfter is not specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error. (optional)
     * @param string $created_before A date used for selecting jobs created before (or at) a specified time must be in ISO 8601 format. (optional)
     * @param string $last_updated_after A date used for selecting jobs updated after (or at) a specified time must be in ISO 8601 format. Required if createdAfter is not specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error. (optional)
     * @param string $last_updated_before A date used for selecting jobs updated before (or at) a specified time must be in ISO 8601 format. (optional)
     * @param string $schedule_start_date A date used for filtering jobs schedule after (or at) a specified time must be in ISO 8601 format. schedule end date should not be earlier than schedule start date. (optional)
     * @param string $schedule_end_date A date used for filtering jobs schedule before (or at) a specified time must be in ISO 8601 format. schedule end date should not be earlier than schedule start date. (optional)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getServiceJobsRequest($marketplace_ids, $service_order_ids = null, $service_job_status = null, $page_token = null, $page_size = '20', $sort_field = null, $sort_order = null, $created_after = null, $created_before = null, $last_updated_after = null, $last_updated_before = null, $schedule_start_date = null, $schedule_end_date = null) {
        // verify the required parameter 'marketplace_ids' is set
        if (null === $marketplace_ids || (is_array($marketplace_ids) && 0 === count($marketplace_ids))) {
            throw new InvalidArgumentException('Missing the required parameter $marketplace_ids when calling getServiceJobs');
        }

        $resourcePath = '/service/v1/serviceJobs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($service_order_ids)) {
            $service_order_ids = ObjectSerializer::serializeCollection($service_order_ids, 'csv', true);
        }
        if (null !== $service_order_ids) {
            $queryParams['serviceOrderIds'] = ObjectSerializer::toQueryValue($service_order_ids);
        }
        // query params
        if (is_array($service_job_status)) {
            $service_job_status = ObjectSerializer::serializeCollection($service_job_status, 'csv', true);
        }
        if (null !== $service_job_status) {
            $queryParams['serviceJobStatus'] = ObjectSerializer::toQueryValue($service_job_status);
        }
        // query params
        if (null !== $page_token) {
            $queryParams['pageToken'] = ObjectSerializer::toQueryValue($page_token);
        }
        // query params
        if (null !== $page_size) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($page_size);
        }
        // query params
        if (null !== $sort_field) {
            $queryParams['sortField'] = ObjectSerializer::toQueryValue($sort_field);
        }
        // query params
        if (null !== $sort_order) {
            $queryParams['sortOrder'] = ObjectSerializer::toQueryValue($sort_order);
        }
        // query params
        if (null !== $created_after) {
            $queryParams['createdAfter'] = ObjectSerializer::toQueryValue($created_after);
        }
        // query params
        if (null !== $created_before) {
            $queryParams['createdBefore'] = ObjectSerializer::toQueryValue($created_before);
        }
        // query params
        if (null !== $last_updated_after) {
            $queryParams['lastUpdatedAfter'] = ObjectSerializer::toQueryValue($last_updated_after);
        }
        // query params
        if (null !== $last_updated_before) {
            $queryParams['lastUpdatedBefore'] = ObjectSerializer::toQueryValue($last_updated_before);
        }
        // query params
        if (null !== $schedule_start_date) {
            $queryParams['scheduleStartDate'] = ObjectSerializer::toQueryValue($schedule_start_date);
        }
        // query params
        if (null !== $schedule_end_date) {
            $queryParams['scheduleEndDate'] = ObjectSerializer::toQueryValue($schedule_end_date);
        }
        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'csv', true);
        }
        if (null !== $marketplace_ids) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplace_ids);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation rescheduleAppointmentForServiceJobByServiceJobId.
     *
     * @param RescheduleAppointmentRequest $body Reschedule appointment operation input details. (required)
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     * @param string $appointment_id An existing appointment identifier for the Service Job. (required)
     *
     * @return SetAppointmentResponse
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function rescheduleAppointmentForServiceJobByServiceJobId($body, $service_job_id, $appointment_id) {
        [$response] = $this->rescheduleAppointmentForServiceJobByServiceJobIdWithHttpInfo($body, $service_job_id, $appointment_id);

        return $response;
    }

    /**
     * Operation rescheduleAppointmentForServiceJobByServiceJobIdWithHttpInfo.
     *
     * @param RescheduleAppointmentRequest $body Reschedule appointment operation input details. (required)
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     * @param string $appointment_id An existing appointment identifier for the Service Job. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Services\SetAppointmentResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     *
     * @throws ApiException on non-2xx response
     */
    public function rescheduleAppointmentForServiceJobByServiceJobIdWithHttpInfo($body, $service_job_id, $appointment_id) {
        $request = $this->rescheduleAppointmentForServiceJobByServiceJobIdRequest($body, $service_job_id, $appointment_id);

        return $this->sendRequest($request, SetAppointmentResponse::class);
    }

    /**
     * Operation rescheduleAppointmentForServiceJobByServiceJobIdAsync.
     *
     * @param RescheduleAppointmentRequest $body Reschedule appointment operation input details. (required)
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     * @param string $appointment_id An existing appointment identifier for the Service Job. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function rescheduleAppointmentForServiceJobByServiceJobIdAsync($body, $service_job_id, $appointment_id) {
        return $this->rescheduleAppointmentForServiceJobByServiceJobIdAsyncWithHttpInfo($body, $service_job_id, $appointment_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation rescheduleAppointmentForServiceJobByServiceJobIdAsyncWithHttpInfo.
     *
     * @param RescheduleAppointmentRequest $body Reschedule appointment operation input details. (required)
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     * @param string $appointment_id An existing appointment identifier for the Service Job. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function rescheduleAppointmentForServiceJobByServiceJobIdAsyncWithHttpInfo($body, $service_job_id, $appointment_id) {
        $request = $this->rescheduleAppointmentForServiceJobByServiceJobIdRequest($body, $service_job_id, $appointment_id);

        return $this->sendRequestAsync($request, SetAppointmentResponse::class);
    }

    /**
     * Create request for operation 'rescheduleAppointmentForServiceJobByServiceJobId'.
     *
     * @param RescheduleAppointmentRequest $body Reschedule appointment operation input details. (required)
     * @param string $service_job_id An Amazon defined service job identifier. (required)
     * @param string $appointment_id An existing appointment identifier for the Service Job. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function rescheduleAppointmentForServiceJobByServiceJobIdRequest($body, $service_job_id, $appointment_id) {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new InvalidArgumentException('Missing the required parameter $body when calling rescheduleAppointmentForServiceJobByServiceJobId');
        }
        // verify the required parameter 'service_job_id' is set
        if (null === $service_job_id || (is_array($service_job_id) && 0 === count($service_job_id))) {
            throw new InvalidArgumentException('Missing the required parameter $service_job_id when calling rescheduleAppointmentForServiceJobByServiceJobId');
        }
        // verify the required parameter 'appointment_id' is set
        if (null === $appointment_id || (is_array($appointment_id) && 0 === count($appointment_id))) {
            throw new InvalidArgumentException('Missing the required parameter $appointment_id when calling rescheduleAppointmentForServiceJobByServiceJobId');
        }

        $resourcePath = '/service/v1/serviceJobs/{serviceJobId}/appointments/{appointmentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        // path params
        if (null !== $service_job_id) {
            $resourcePath = str_replace(
                '{' . 'serviceJobId' . '}',
                ObjectSerializer::toPathValue($service_job_id),
                $resourcePath
            );
        }
        // path params
        if (null !== $appointment_id) {
            $resourcePath = str_replace(
                '{' . 'appointmentId' . '}',
                ObjectSerializer::toPathValue($appointment_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }
}
