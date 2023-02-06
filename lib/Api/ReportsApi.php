<?php
/**
 * ReportsApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Reports.
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * OpenAPI spec version: 2020-09-04
 */

namespace SellerLegend\AmazonSellingPartnerAPI\Api;

use DateTime;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Request;
use InvalidArgumentException;
use SellerLegend\AmazonSellingPartnerAPI\ApiException;
use SellerLegend\AmazonSellingPartnerAPI\Configuration;
use SellerLegend\AmazonSellingPartnerAPI\HeaderSelector;
use SellerLegend\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use SellerLegend\AmazonSellingPartnerAPI\Models\Reports\CancelReportResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Reports\CancelReportScheduleResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Reports\CreateReportResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Reports\CreateReportScheduleResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Reports\CreateReportScheduleSpecification;
use SellerLegend\AmazonSellingPartnerAPI\Models\Reports\CreateReportSpecification;
use SellerLegend\AmazonSellingPartnerAPI\Models\Reports\GetReportDocumentResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Reports\GetReportResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Reports\GetReportScheduleResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Reports\GetReportSchedulesResponse;
use SellerLegend\AmazonSellingPartnerAPI\Models\Reports\GetReportsResponse;
use SellerLegend\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * ReportsApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ReportsApi {
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
     * Operation cancelReport.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return CancelReportResponse
     * @throws ApiException              on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function cancelReport($report_id) {
        [$response] = $this->cancelReportWithHttpInfo($report_id);

        return $response;
    }

    /**
     * Operation cancelReportWithHttpInfo.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Reports\CancelReportResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException              on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function cancelReportWithHttpInfo($report_id) {
        $request = $this->cancelReportRequest($report_id);

        return $this->sendRequest($request, CancelReportResponse::class);
    }

    /**
     * Operation cancelReportAsync.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function cancelReportAsync($report_id) {
        return $this->cancelReportAsyncWithHttpInfo($report_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelReportAsyncWithHttpInfo.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function cancelReportAsyncWithHttpInfo($report_id) {
        $returnType = '\SellerLegend\AmazonSellingPartnerAPI\Models\Reports\CancelReportResponse';
        $request = $this->cancelReportRequest($report_id);

        return $this->sendRequestAsync($request, CancelReportResponse::class);
    }

    /**
     * Create request for operation 'cancelReport'.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function cancelReportRequest($report_id) {
        // verify the required parameter 'report_id' is set
        if (null === $report_id || (is_array($report_id) && 0 === count($report_id))) {
            throw new InvalidArgumentException('Missing the required parameter $report_id when calling cancelReport');
        }

        $resourcePath = '/reports/2020-09-04/reports/{reportId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $report_id) {
            $resourcePath = str_replace(
                '{' . 'reportId' . '}',
                ObjectSerializer::toPathValue($report_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'DELETE', $httpBody);
    }

    /**
     * Operation cancelReportSchedule.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return CancelReportScheduleResponse
     * @throws ApiException              on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function cancelReportSchedule($report_schedule_id) {
        [$response] = $this->cancelReportScheduleWithHttpInfo($report_schedule_id);

        return $response;
    }

    /**
     * Operation cancelReportScheduleWithHttpInfo.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Reports\CancelReportScheduleResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException              on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function cancelReportScheduleWithHttpInfo($report_schedule_id) {
        $request = $this->cancelReportScheduleRequest($report_schedule_id);

        return $this->sendRequest($request, CancelReportScheduleResponse::class);
    }

    /**
     * Operation cancelReportScheduleAsync.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function cancelReportScheduleAsync($report_schedule_id) {
        return $this->cancelReportScheduleAsyncWithHttpInfo($report_schedule_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelReportScheduleAsyncWithHttpInfo.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function cancelReportScheduleAsyncWithHttpInfo($report_schedule_id) {
        $request = $this->cancelReportScheduleRequest($report_schedule_id);

        return $this->sendRequestAsync($request, CancelReportScheduleResponse::class);
    }

    /**
     * Create request for operation 'cancelReportSchedule'.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function cancelReportScheduleRequest($report_schedule_id) {
        // verify the required parameter 'report_schedule_id' is set
        if (null === $report_schedule_id || (is_array($report_schedule_id) && 0 === count($report_schedule_id))) {
            throw new InvalidArgumentException('Missing the required parameter $report_schedule_id when calling cancelReportSchedule');
        }

        $resourcePath = '/reports/2020-09-04/schedules/{reportScheduleId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $report_schedule_id) {
            $resourcePath = str_replace(
                '{' . 'reportScheduleId' . '}',
                ObjectSerializer::toPathValue($report_schedule_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'DELETE', $httpBody);
    }

    /**
     * Operation createReport.
     *
     * @param CreateReportSpecification $body body (required)
     *
     * @return CreateReportResponse
     * @throws InvalidArgumentException
     *
     * @throws ApiException              on non-2xx response
     */
    public function createReport(CreateReportSpecification $body) {
        [$response] = $this->createReportWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation createReportWithHttpInfo.
     *
     * @param CreateReportSpecification $body (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Reports\CreateReportResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     *
     * @throws ApiException              on non-2xx response
     */
    public function createReportWithHttpInfo(CreateReportSpecification $body) {
        $request = $this->createReportRequest($body);

        return $this->sendRequest($request, CreateReportResponse::class);
    }

    /**
     * Operation createReportAsync.
     *
     * @param CreateReportSpecification $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function createReportAsync($body) {
        return $this->createReportAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createReportAsyncWithHttpInfo.
     *
     * @param CreateReportSpecification $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function createReportAsyncWithHttpInfo($body) {
        $returnType = '\SellerLegend\AmazonSellingPartnerAPI\Models\Reports\CreateReportResponse';
        $request = $this->createReportRequest($body);

        return $this->sendRequestAsync($request, CreateReportResponse::class);
    }

    /**
     * Create request for operation 'createReport'.
     *
     * @param CreateReportSpecification $body (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function createReportRequest(CreateReportSpecification $body) {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new InvalidArgumentException('Missing the required parameter $body when calling createReport');
        }

        $resourcePath = '/reports/2020-09-04/reports';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation createReportSchedule.
     *
     * @param CreateReportScheduleSpecification $body body (required)
     *
     * @return CreateReportScheduleResponse
     * @throws ApiException              on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function createReportSchedule($body) {
        [$response] = $this->createReportScheduleWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation createReportScheduleWithHttpInfo.
     *
     * @param CreateReportScheduleSpecification $body (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Reports\CreateReportScheduleResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException              on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function createReportScheduleWithHttpInfo($body) {
        $request = $this->createReportScheduleRequest($body);

        return $this->sendRequest($request, CreateReportScheduleResponse::class);
    }

    /**
     * Operation createReportScheduleAsync.
     *
     * @param CreateReportScheduleSpecification $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function createReportScheduleAsync($body) {
        return $this->createReportScheduleAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createReportScheduleAsyncWithHttpInfo.
     *
     * @param CreateReportScheduleSpecification $body (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function createReportScheduleAsyncWithHttpInfo($body) {
        $request = $this->createReportScheduleRequest($body);

        return $this->sendRequestAsync($request, CreateReportScheduleResponse::class);
    }

    /**
     * Create request for operation 'createReportSchedule'.
     *
     * @param CreateReportScheduleSpecification $body (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function createReportScheduleRequest($body) {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new InvalidArgumentException('Missing the required parameter $body when calling createReportSchedule');
        }

        $resourcePath = '/reports/2020-09-04/schedules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation getReport.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return GetReportResponse
     * @throws ApiException              on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getReport($report_id) {
        [$response] = $this->getReportWithHttpInfo($report_id);

        return $response;
    }

    /**
     * Operation getReportWithHttpInfo.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Reports\GetReportResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException              on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getReportWithHttpInfo($report_id) {
        $request = $this->getReportRequest($report_id);

        return $this->sendRequest($request, GetReportResponse::class);
    }

    /**
     * Operation getReportAsync.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getReportAsync($report_id) {
        return $this->getReportAsyncWithHttpInfo($report_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReportAsyncWithHttpInfo.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getReportAsyncWithHttpInfo($report_id) {
        $request = $this->getReportRequest($report_id);

        return $this->sendRequestAsync($request, GetReportResponse::class);
    }

    /**
     * Create request for operation 'getReport'.
     *
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getReportRequest($report_id) {
        // verify the required parameter 'report_id' is set
        if (null === $report_id || (is_array($report_id) && 0 === count($report_id))) {
            throw new InvalidArgumentException('Missing the required parameter $report_id when calling getReport');
        }

        $resourcePath = '/reports/2020-09-04/reports/{reportId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $report_id) {
            $resourcePath = str_replace(
                '{' . 'reportId' . '}',
                ObjectSerializer::toPathValue($report_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getReportDocument.
     *
     * @param string $report_document_id The identifier for the report document. (required)
     *
     * @return GetReportDocumentResponse
     * @throws ApiException              on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getReportDocument($report_document_id) {
        [$response] = $this->getReportDocumentWithHttpInfo($report_document_id);

        return $response;
    }

    /**
     * Operation getReportDocumentWithHttpInfo.
     *
     * @param string $report_document_id The identifier for the report document. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Reports\GetReportDocumentResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException              on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getReportDocumentWithHttpInfo($report_document_id) {
        $request = $this->getReportDocumentRequest($report_document_id);

        return $this->sendRequest($request, GetReportDocumentResponse::class);
    }

    /**
     * Operation getReportDocumentAsync.
     *
     * @param string $report_document_id The identifier for the report document. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getReportDocumentAsync($report_document_id) {
        return $this->getReportDocumentAsyncWithHttpInfo($report_document_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReportDocumentAsyncWithHttpInfo.
     *
     * @param string $report_document_id The identifier for the report document. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getReportDocumentAsyncWithHttpInfo($report_document_id) {
        $request = $this->getReportDocumentRequest($report_document_id);

        return $this->sendRequestAsync($request, GetReportDocumentResponse::class);
    }

    /**
     * Create request for operation 'getReportDocument'.
     *
     * @param string $report_document_id The identifier for the report document. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getReportDocumentRequest($report_document_id) {
        // verify the required parameter 'report_document_id' is set
        if (null === $report_document_id || (is_array($report_document_id) && 0 === count($report_document_id))) {
            throw new InvalidArgumentException('Missing the required parameter $report_document_id when calling getReportDocument');
        }

        $resourcePath = '/reports/2020-09-04/documents/{reportDocumentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $report_document_id) {
            $resourcePath = str_replace(
                '{' . 'reportDocumentId' . '}',
                ObjectSerializer::toPathValue($report_document_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getReportSchedule.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return GetReportScheduleResponse
     * @throws ApiException              on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getReportSchedule($report_schedule_id) {
        [$response] = $this->getReportScheduleWithHttpInfo($report_schedule_id);

        return $response;
    }

    /**
     * Operation getReportScheduleWithHttpInfo.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Reports\GetReportScheduleResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException              on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getReportScheduleWithHttpInfo($report_schedule_id) {
        $request = $this->getReportScheduleRequest($report_schedule_id);

        return $this->sendRequest($request, GetReportScheduleResponse::class);
    }

    /**
     * Operation getReportScheduleAsync.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getReportScheduleAsync($report_schedule_id) {
        return $this->getReportScheduleAsyncWithHttpInfo($report_schedule_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReportScheduleAsyncWithHttpInfo.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getReportScheduleAsyncWithHttpInfo($report_schedule_id) {
        $request = $this->getReportScheduleRequest($report_schedule_id);

        return $this->sendRequestAsync($request, GetReportScheduleResponse::class);
    }

    /**
     * Create request for operation 'getReportSchedule'.
     *
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getReportScheduleRequest($report_schedule_id) {
        // verify the required parameter 'report_schedule_id' is set
        if (null === $report_schedule_id || (is_array($report_schedule_id) && 0 === count($report_schedule_id))) {
            throw new InvalidArgumentException('Missing the required parameter $report_schedule_id when calling getReportSchedule');
        }

        $resourcePath = '/reports/2020-09-04/schedules/{reportScheduleId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $report_schedule_id) {
            $resourcePath = str_replace(
                '{' . 'reportScheduleId' . '}',
                ObjectSerializer::toPathValue($report_schedule_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getReportSchedules.
     *
     * @param string[] $report_types A list of report types used to filter report schedules. (required)
     *
     * @return GetReportSchedulesResponse
     * @throws ApiException              on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getReportSchedules($report_types) {
        [$response] = $this->getReportSchedulesWithHttpInfo($report_types);

        return $response;
    }

    /**
     * Operation getReportSchedulesWithHttpInfo.
     *
     * @param string[] $report_types A list of report types used to filter report schedules. (required)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Reports\GetReportSchedulesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException              on non-2xx response
     *
     * @throws InvalidArgumentException
     */
    public function getReportSchedulesWithHttpInfo($report_types) {
        $request = $this->getReportSchedulesRequest($report_types);

        return $this->sendRequest($request, GetReportSchedulesResponse::class);
    }

    /**
     * Operation getReportSchedulesAsync.
     *
     * @param string[] $report_types A list of report types used to filter report schedules. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getReportSchedulesAsync($report_types) {
        return $this->getReportSchedulesAsyncWithHttpInfo($report_types)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReportSchedulesAsyncWithHttpInfo.
     *
     * @param string[] $report_types A list of report types used to filter report schedules. (required)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getReportSchedulesAsyncWithHttpInfo($report_types) {
        $request = $this->getReportSchedulesRequest($report_types);

        return $this->sendRequestAsync($request, GetReportSchedulesResponse::class);
    }

    /**
     * Create request for operation 'getReportSchedules'.
     *
     * @param string[] $report_types A list of report types used to filter report schedules. (required)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getReportSchedulesRequest($report_types) {
        // verify the required parameter 'report_types' is set
        if (null === $report_types || (is_array($report_types) && 0 === count($report_types))) {
            throw new InvalidArgumentException('Missing the required parameter $report_types when calling getReportSchedules');
        }

        $resourcePath = '/reports/2020-09-04/schedules';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($report_types)) {
            $report_types = ObjectSerializer::serializeCollection($report_types, 'csv', true);
        }
        if (null !== $report_types) {
            $queryParams['reportTypes'] = ObjectSerializer::toQueryValue($report_types);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getReports.
     *
     * @param string[] $report_types A list of report types used to filter reports. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required. (optional)
     * @param string[] $processing_statuses A list of processing statuses used to filter reports. (optional)
     * @param string[] $marketplace_ids A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify. (optional)
     * @param int $page_size The maximum number of reports to return in a single call. (optional, default to 10)
     * @param DateTime $created_since The earliest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days. (optional)
     * @param DateTime $created_until The latest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is now. (optional)
     * @param string $next_token A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getReports operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. (optional)
     *
     * @return GetReportsResponse
     * @throws ApiException              on non-2xx response
     * @throws InvalidArgumentException
     *
     */
    public function getReports($report_types = null, $processing_statuses = null, $marketplace_ids = null, $page_size = '10', $created_since = null, $created_until = null, $next_token = null) {
        [$response] = $this->getReportsWithHttpInfo($report_types, $processing_statuses, $marketplace_ids, $page_size, $created_since, $created_until, $next_token);

        return $response;
    }

    /**
     * Operation getReportsWithHttpInfo.
     *
     * @param string[] $report_types A list of report types used to filter reports. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required. (optional)
     * @param string[] $processing_statuses A list of processing statuses used to filter reports. (optional)
     * @param string[] $marketplace_ids A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify. (optional)
     * @param int $page_size The maximum number of reports to return in a single call. (optional, default to 10)
     * @param DateTime $created_since The earliest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days. (optional)
     * @param DateTime $created_until The latest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is now. (optional)
     * @param string $next_token A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getReports operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. (optional)
     *
     * @return array of \SellerLegend\AmazonSellingPartnerAPI\Models\Reports\GetReportsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException              on non-2xx response
     * @throws InvalidArgumentException
     *
     */
    public function getReportsWithHttpInfo($report_types = null, $processing_statuses = null, $marketplace_ids = null, $page_size = '10', $created_since = null, $created_until = null, $next_token = null) {
        $request = $this->getReportsRequest($report_types, $processing_statuses, $marketplace_ids, $page_size, $created_since, $created_until, $next_token);

        return $this->sendRequest($request, GetReportsResponse::class);
    }

    /**
     * Operation getReportsAsync.
     *
     * @param string[] $report_types A list of report types used to filter reports. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required. (optional)
     * @param string[] $processing_statuses A list of processing statuses used to filter reports. (optional)
     * @param string[] $marketplace_ids A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify. (optional)
     * @param int $page_size The maximum number of reports to return in a single call. (optional, default to 10)
     * @param DateTime $created_since The earliest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days. (optional)
     * @param DateTime $created_until The latest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is now. (optional)
     * @param string $next_token A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getReports operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getReportsAsync($report_types = null, $processing_statuses = null, $marketplace_ids = null, $page_size = '10', $created_since = null, $created_until = null, $next_token = null) {
        return $this->getReportsAsyncWithHttpInfo($report_types, $processing_statuses, $marketplace_ids, $page_size, $created_since, $created_until, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReportsAsyncWithHttpInfo.
     *
     * @param string[] $report_types A list of report types used to filter reports. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required. (optional)
     * @param string[] $processing_statuses A list of processing statuses used to filter reports. (optional)
     * @param string[] $marketplace_ids A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify. (optional)
     * @param int $page_size The maximum number of reports to return in a single call. (optional, default to 10)
     * @param DateTime $created_since The earliest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days. (optional)
     * @param DateTime $created_until The latest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is now. (optional)
     * @param string $next_token A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getReports operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. (optional)
     *
     * @return PromiseInterface
     * @throws InvalidArgumentException
     *
     */
    public function getReportsAsyncWithHttpInfo($report_types = null, $processing_statuses = null, $marketplace_ids = null, $page_size = '10', $created_since = null, $created_until = null, $next_token = null) {
        $returnType = '\SellerLegend\AmazonSellingPartnerAPI\Models\Reports\GetReportsResponse';
        $request = $this->getReportsRequest($report_types, $processing_statuses, $marketplace_ids, $page_size, $created_since, $created_until, $next_token);

        return $this->sendRequestAsync($request, GetReportsResponse::class);
    }

    /**
     * Create request for operation 'getReports'.
     *
     * @param string[] $report_types A list of report types used to filter reports. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required. (optional)
     * @param string[] $processing_statuses A list of processing statuses used to filter reports. (optional)
     * @param string[] $marketplace_ids A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify. (optional)
     * @param int $page_size The maximum number of reports to return in a single call. (optional, default to 10)
     * @param DateTime $created_since The earliest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days. (optional)
     * @param DateTime $created_until The latest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is now. (optional)
     * @param string $next_token A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getReports operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. (optional)
     *
     * @return Request
     * @throws InvalidArgumentException
     *
     */
    protected function getReportsRequest($report_types = null, $processing_statuses = null, $marketplace_ids = null, $page_size = '10', $created_since = null, $created_until = null, $next_token = null) {
        $resourcePath = '/reports/2020-09-04/reports';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($report_types)) {
            $report_types = ObjectSerializer::serializeCollection($report_types, 'csv', true);
        }
        if (null !== $report_types) {
            $queryParams['reportTypes'] = ObjectSerializer::toQueryValue($report_types);
        }
        // query params
        if (is_array($processing_statuses)) {
            $processing_statuses = ObjectSerializer::serializeCollection($processing_statuses, 'csv', true);
        }
        if (null !== $processing_statuses) {
            $queryParams['processingStatuses'] = ObjectSerializer::toQueryValue($processing_statuses);
        }
        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'csv', true);
        }
        if (null !== $marketplace_ids) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplace_ids);
        }
        // query params
        if (null !== $page_size) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($page_size);
        }
        // query params
        if (null !== $created_since) {
            $queryParams['createdSince'] = ObjectSerializer::toQueryValue($created_since);
        }
        // query params
        if (null !== $created_until) {
            $queryParams['createdUntil'] = ObjectSerializer::toQueryValue($created_until);
        }
        // query params
        if (null !== $next_token) {
            $queryParams['nextToken'] = ObjectSerializer::toQueryValue($next_token);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }
}
