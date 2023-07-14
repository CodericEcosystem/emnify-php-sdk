<?php
/**
 * TariffPlansApi
 * PHP version 5
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/Emnify/emnify-php-sdk
 */

/**
 * emnify Rest API
 *
 * Rest API resources of the emnify System.
 *
 * OpenAPI spec version: 1.3
 * 
 * Generated by: https://github.com/Emnify/emnify-php-sdk.git
 * Swagger Codegen version: 3.0.46
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/Emnify/emnify-php-sdk
 * Do not edit the class manually.
 */

namespace Emnify\EmnifySdk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Emnify\EmnifySdk\ApiException;
use Emnify\EmnifySdk\Configuration;
use Emnify\EmnifySdk\HeaderSelector;
use Emnify\EmnifySdk\ObjectSerializer;

/**
 * TariffPlansApi Class Doc Comment
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/Emnify/emnify-php-sdk
 */
class TariffPlansApi
{
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

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getOrganisationActiveTariffPlan
     *
     * Get the active tariff plan for the given organisation
     *
     * @param  string $org_id_or_my Numerical ID of an Organisation or the string &#x60;my&#x60; to use the currently authorized organisation (required)
     *
     * @throws \Emnify\EmnifySdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Emnify\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponse
     */
    public function getOrganisationActiveTariffPlan($org_id_or_my)
    {
        list($response) = $this->getOrganisationActiveTariffPlanWithHttpInfo($org_id_or_my);
        return $response;
    }

    /**
     * Operation getOrganisationActiveTariffPlanWithHttpInfo
     *
     * Get the active tariff plan for the given organisation
     *
     * @param  string $org_id_or_my Numerical ID of an Organisation or the string &#x60;my&#x60; to use the currently authorized organisation (required)
     *
     * @throws \Emnify\EmnifySdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Emnify\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrganisationActiveTariffPlanWithHttpInfo($org_id_or_my)
    {
        $returnType = '\Emnify\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponse';
        $request = $this->getOrganisationActiveTariffPlanRequest($org_id_or_my);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Emnify\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getOrganisationActiveTariffPlanAsync
     *
     * Get the active tariff plan for the given organisation
     *
     * @param  string $org_id_or_my Numerical ID of an Organisation or the string &#x60;my&#x60; to use the currently authorized organisation (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrganisationActiveTariffPlanAsync($org_id_or_my)
    {
        return $this->getOrganisationActiveTariffPlanAsyncWithHttpInfo($org_id_or_my)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrganisationActiveTariffPlanAsyncWithHttpInfo
     *
     * Get the active tariff plan for the given organisation
     *
     * @param  string $org_id_or_my Numerical ID of an Organisation or the string &#x60;my&#x60; to use the currently authorized organisation (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrganisationActiveTariffPlanAsyncWithHttpInfo($org_id_or_my)
    {
        $returnType = '\Emnify\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponse';
        $request = $this->getOrganisationActiveTariffPlanRequest($org_id_or_my);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getOrganisationActiveTariffPlan'
     *
     * @param  string $org_id_or_my Numerical ID of an Organisation or the string &#x60;my&#x60; to use the currently authorized organisation (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrganisationActiveTariffPlanRequest($org_id_or_my)
    {
        // verify the required parameter 'org_id_or_my' is set
        if ($org_id_or_my === null || (is_array($org_id_or_my) && count($org_id_or_my) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_id_or_my when calling getOrganisationActiveTariffPlan'
            );
        }

        $resourcePath = '/api/v1/organisation/{org_id_or_my}/tariff_plan/active';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($org_id_or_my !== null) {
            $resourcePath = str_replace(
                '{' . 'org_id_or_my' . '}',
                ObjectSerializer::toPathValue($org_id_or_my),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation organisationTariffPlanByOrgIdGet
     *
     * List Organisation Tariff Plans
     *
     * @param  float $org_id Numerical ID of an Organisation (required)
     *
     * @throws \Emnify\EmnifySdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Emnify\EmnifySdk\Model\InlineResponse20012[]
     */
    public function organisationTariffPlanByOrgIdGet($org_id)
    {
        list($response) = $this->organisationTariffPlanByOrgIdGetWithHttpInfo($org_id);
        return $response;
    }

    /**
     * Operation organisationTariffPlanByOrgIdGetWithHttpInfo
     *
     * List Organisation Tariff Plans
     *
     * @param  float $org_id Numerical ID of an Organisation (required)
     *
     * @throws \Emnify\EmnifySdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Emnify\EmnifySdk\Model\InlineResponse20012[], HTTP status code, HTTP response headers (array of strings)
     */
    public function organisationTariffPlanByOrgIdGetWithHttpInfo($org_id)
    {
        $returnType = '\Emnify\EmnifySdk\Model\InlineResponse20012[]';
        $request = $this->organisationTariffPlanByOrgIdGetRequest($org_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Emnify\EmnifySdk\Model\InlineResponse20012[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation organisationTariffPlanByOrgIdGetAsync
     *
     * List Organisation Tariff Plans
     *
     * @param  float $org_id Numerical ID of an Organisation (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function organisationTariffPlanByOrgIdGetAsync($org_id)
    {
        return $this->organisationTariffPlanByOrgIdGetAsyncWithHttpInfo($org_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation organisationTariffPlanByOrgIdGetAsyncWithHttpInfo
     *
     * List Organisation Tariff Plans
     *
     * @param  float $org_id Numerical ID of an Organisation (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function organisationTariffPlanByOrgIdGetAsyncWithHttpInfo($org_id)
    {
        $returnType = '\Emnify\EmnifySdk\Model\InlineResponse20012[]';
        $request = $this->organisationTariffPlanByOrgIdGetRequest($org_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'organisationTariffPlanByOrgIdGet'
     *
     * @param  float $org_id Numerical ID of an Organisation (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function organisationTariffPlanByOrgIdGetRequest($org_id)
    {
        // verify the required parameter 'org_id' is set
        if ($org_id === null || (is_array($org_id) && count($org_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $org_id when calling organisationTariffPlanByOrgIdGet'
            );
        }

        $resourcePath = '/api/v1/organisation/{org_id}/tariff_plan';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($org_id !== null) {
            $resourcePath = str_replace(
                '{' . 'org_id' . '}',
                ObjectSerializer::toPathValue($org_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

            // // this endpoint requires Bearer token
            if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
            }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}