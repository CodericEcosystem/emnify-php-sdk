<?php
/**
 * EventsApi
 * PHP version 5
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/CodericEcosystem/emnify-php-sdk
 */

/**
 * emnify Rest API
 *
 * Rest API resources of the emnify System.
 *
 * OpenAPI spec version: 1.3
 * 
 * Generated by: https://github.com/CodericEcosystem/emnify-php-sdk.git
 * Swagger Codegen version: 3.0.46
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/CodericEcosystem/emnify-php-sdk
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
 * EventsApi Class Doc Comment
 *
 * @category Class
 * @package  Emnify\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/CodericEcosystem/emnify-php-sdk
 */
class EventsApi
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
     * Operation eventTypeGet
     *
     * List Event Types
     *
     *
     * @throws \Emnify\EmnifySdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Emnify\EmnifySdk\Model\RetrieveEventTypesresponse[]
     */
    public function eventTypeGet()
    {
        list($response) = $this->eventTypeGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation eventTypeGetWithHttpInfo
     *
     * List Event Types
     *
     *
     * @throws \Emnify\EmnifySdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Emnify\EmnifySdk\Model\RetrieveEventTypesresponse[], HTTP status code, HTTP response headers (array of strings)
     */
    public function eventTypeGetWithHttpInfo()
    {
        $returnType = '\Emnify\EmnifySdk\Model\RetrieveEventTypesresponse[]';
        $request = $this->eventTypeGetRequest();

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
                        '\Emnify\EmnifySdk\Model\RetrieveEventTypesresponse[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation eventTypeGetAsync
     *
     * List Event Types
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function eventTypeGetAsync()
    {
        return $this->eventTypeGetAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation eventTypeGetAsyncWithHttpInfo
     *
     * List Event Types
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function eventTypeGetAsyncWithHttpInfo()
    {
        $returnType = '\Emnify\EmnifySdk\Model\RetrieveEventTypesresponse[]';
        $request = $this->eventTypeGetRequest();

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
     * Create request for operation 'eventTypeGet'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function eventTypeGetRequest()
    {

        $resourcePath = '/api/v1/event/type';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation getEvents
     *
     * List Events
     *
     * @param  int $page Current page number (optional)
     * @param  int $per_page Paging parameters defining the number of items per page (optional)
     * @param  string $sort Sort properties according to a comma separated list of accepted fields. Valid fields are:  * &#x60;id&#x60; - (**event id**) * &#x60;timestamp&#x60; - (**event timestamp**) * &#x60;source&#x60; - (**event source**) * &#x60;severity&#x60; - (**event severity**) * &#x60;alert&#x60; - (**alert status**) * &#x60;organisation&#x60; - (**organisation name**) * &#x60;user&#x60; - (**user id**) * &#x60;endpoint&#x60; - (**endpoint name**) * &#x60;tags&#x60; - (**endpoint tags**) * &#x60;ip_address&#x60; - (**endpoint ip_address**) * &#x60;iccid&#x60; - (**sim iccid**) * &#x60;imsi&#x60; - (**sim imsi**) * &#x60;type&#x60; - (**event type**) (optional)
     * @param  string $q Filter parameter in &#x60;&lt;filter&gt;:&lt;value&gt;&#x60; format. Multiple filters must be in the format of a comma separated list of the following fields:  * &#x60;type&#x60; (**event_type**, numerical) * &#x60;source&#x60; (**event_type**, numerical, e.g. 0 &#x3D; Network), 1 &#x3D; Policy Control, 2 &#x3D; API) * &#x60;severity&#x60; (**event_severity**, numerical, e.g. 0 &#x3D; Info, 1 &#x3D; Warn), 2 &#x3D; Critical) * &#x60;alert&#x60; (boolean, e.g. true, false) * &#x60;description&#x60; (**event description**, string) * &#x60;organisation&#x60; (**organisation name**, string) * &#x60;user&#x60; (**user name**, string) * &#x60;endpoint&#x60; (**endpoint name**, string) * &#x60;tags&#x60; (**endpoint tags**, string) * &#x60;ip_address&#x60; (**endpoint IP address**, valid IPv4/IPv6 address) * &#x60;imei&#x60; (**endpoint imei**, numerical string) * &#x60;iccid&#x60; (**sim iccid**, numerical string) * &#x60;imsi&#x60; (**sim imsi**, numerical string) * &#x60;from&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with until!__) * &#x60;until&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with from!__) * &#x60;timestamp&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, for querying events of 1 day, deprecated in future) (optional)
     *
     * @throws \Emnify\EmnifySdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Emnify\EmnifySdk\Model\Event[]
     */
    public function getEvents($page = null, $per_page = null, $sort = null, $q = null)
    {
        list($response) = $this->getEventsWithHttpInfo($page, $per_page, $sort, $q);
        return $response;
    }

    /**
     * Operation getEventsWithHttpInfo
     *
     * List Events
     *
     * @param  int $page Current page number (optional)
     * @param  int $per_page Paging parameters defining the number of items per page (optional)
     * @param  string $sort Sort properties according to a comma separated list of accepted fields. Valid fields are:  * &#x60;id&#x60; - (**event id**) * &#x60;timestamp&#x60; - (**event timestamp**) * &#x60;source&#x60; - (**event source**) * &#x60;severity&#x60; - (**event severity**) * &#x60;alert&#x60; - (**alert status**) * &#x60;organisation&#x60; - (**organisation name**) * &#x60;user&#x60; - (**user id**) * &#x60;endpoint&#x60; - (**endpoint name**) * &#x60;tags&#x60; - (**endpoint tags**) * &#x60;ip_address&#x60; - (**endpoint ip_address**) * &#x60;iccid&#x60; - (**sim iccid**) * &#x60;imsi&#x60; - (**sim imsi**) * &#x60;type&#x60; - (**event type**) (optional)
     * @param  string $q Filter parameter in &#x60;&lt;filter&gt;:&lt;value&gt;&#x60; format. Multiple filters must be in the format of a comma separated list of the following fields:  * &#x60;type&#x60; (**event_type**, numerical) * &#x60;source&#x60; (**event_type**, numerical, e.g. 0 &#x3D; Network), 1 &#x3D; Policy Control, 2 &#x3D; API) * &#x60;severity&#x60; (**event_severity**, numerical, e.g. 0 &#x3D; Info, 1 &#x3D; Warn), 2 &#x3D; Critical) * &#x60;alert&#x60; (boolean, e.g. true, false) * &#x60;description&#x60; (**event description**, string) * &#x60;organisation&#x60; (**organisation name**, string) * &#x60;user&#x60; (**user name**, string) * &#x60;endpoint&#x60; (**endpoint name**, string) * &#x60;tags&#x60; (**endpoint tags**, string) * &#x60;ip_address&#x60; (**endpoint IP address**, valid IPv4/IPv6 address) * &#x60;imei&#x60; (**endpoint imei**, numerical string) * &#x60;iccid&#x60; (**sim iccid**, numerical string) * &#x60;imsi&#x60; (**sim imsi**, numerical string) * &#x60;from&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with until!__) * &#x60;until&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with from!__) * &#x60;timestamp&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, for querying events of 1 day, deprecated in future) (optional)
     *
     * @throws \Emnify\EmnifySdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Emnify\EmnifySdk\Model\Event[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getEventsWithHttpInfo($page = null, $per_page = null, $sort = null, $q = null)
    {
        $returnType = '\Emnify\EmnifySdk\Model\Event[]';
        $request = $this->getEventsRequest($page, $per_page, $sort, $q);

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
                        '\Emnify\EmnifySdk\Model\Event[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getEventsAsync
     *
     * List Events
     *
     * @param  int $page Current page number (optional)
     * @param  int $per_page Paging parameters defining the number of items per page (optional)
     * @param  string $sort Sort properties according to a comma separated list of accepted fields. Valid fields are:  * &#x60;id&#x60; - (**event id**) * &#x60;timestamp&#x60; - (**event timestamp**) * &#x60;source&#x60; - (**event source**) * &#x60;severity&#x60; - (**event severity**) * &#x60;alert&#x60; - (**alert status**) * &#x60;organisation&#x60; - (**organisation name**) * &#x60;user&#x60; - (**user id**) * &#x60;endpoint&#x60; - (**endpoint name**) * &#x60;tags&#x60; - (**endpoint tags**) * &#x60;ip_address&#x60; - (**endpoint ip_address**) * &#x60;iccid&#x60; - (**sim iccid**) * &#x60;imsi&#x60; - (**sim imsi**) * &#x60;type&#x60; - (**event type**) (optional)
     * @param  string $q Filter parameter in &#x60;&lt;filter&gt;:&lt;value&gt;&#x60; format. Multiple filters must be in the format of a comma separated list of the following fields:  * &#x60;type&#x60; (**event_type**, numerical) * &#x60;source&#x60; (**event_type**, numerical, e.g. 0 &#x3D; Network), 1 &#x3D; Policy Control, 2 &#x3D; API) * &#x60;severity&#x60; (**event_severity**, numerical, e.g. 0 &#x3D; Info, 1 &#x3D; Warn), 2 &#x3D; Critical) * &#x60;alert&#x60; (boolean, e.g. true, false) * &#x60;description&#x60; (**event description**, string) * &#x60;organisation&#x60; (**organisation name**, string) * &#x60;user&#x60; (**user name**, string) * &#x60;endpoint&#x60; (**endpoint name**, string) * &#x60;tags&#x60; (**endpoint tags**, string) * &#x60;ip_address&#x60; (**endpoint IP address**, valid IPv4/IPv6 address) * &#x60;imei&#x60; (**endpoint imei**, numerical string) * &#x60;iccid&#x60; (**sim iccid**, numerical string) * &#x60;imsi&#x60; (**sim imsi**, numerical string) * &#x60;from&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with until!__) * &#x60;until&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with from!__) * &#x60;timestamp&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, for querying events of 1 day, deprecated in future) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEventsAsync($page = null, $per_page = null, $sort = null, $q = null)
    {
        return $this->getEventsAsyncWithHttpInfo($page, $per_page, $sort, $q)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getEventsAsyncWithHttpInfo
     *
     * List Events
     *
     * @param  int $page Current page number (optional)
     * @param  int $per_page Paging parameters defining the number of items per page (optional)
     * @param  string $sort Sort properties according to a comma separated list of accepted fields. Valid fields are:  * &#x60;id&#x60; - (**event id**) * &#x60;timestamp&#x60; - (**event timestamp**) * &#x60;source&#x60; - (**event source**) * &#x60;severity&#x60; - (**event severity**) * &#x60;alert&#x60; - (**alert status**) * &#x60;organisation&#x60; - (**organisation name**) * &#x60;user&#x60; - (**user id**) * &#x60;endpoint&#x60; - (**endpoint name**) * &#x60;tags&#x60; - (**endpoint tags**) * &#x60;ip_address&#x60; - (**endpoint ip_address**) * &#x60;iccid&#x60; - (**sim iccid**) * &#x60;imsi&#x60; - (**sim imsi**) * &#x60;type&#x60; - (**event type**) (optional)
     * @param  string $q Filter parameter in &#x60;&lt;filter&gt;:&lt;value&gt;&#x60; format. Multiple filters must be in the format of a comma separated list of the following fields:  * &#x60;type&#x60; (**event_type**, numerical) * &#x60;source&#x60; (**event_type**, numerical, e.g. 0 &#x3D; Network), 1 &#x3D; Policy Control, 2 &#x3D; API) * &#x60;severity&#x60; (**event_severity**, numerical, e.g. 0 &#x3D; Info, 1 &#x3D; Warn), 2 &#x3D; Critical) * &#x60;alert&#x60; (boolean, e.g. true, false) * &#x60;description&#x60; (**event description**, string) * &#x60;organisation&#x60; (**organisation name**, string) * &#x60;user&#x60; (**user name**, string) * &#x60;endpoint&#x60; (**endpoint name**, string) * &#x60;tags&#x60; (**endpoint tags**, string) * &#x60;ip_address&#x60; (**endpoint IP address**, valid IPv4/IPv6 address) * &#x60;imei&#x60; (**endpoint imei**, numerical string) * &#x60;iccid&#x60; (**sim iccid**, numerical string) * &#x60;imsi&#x60; (**sim imsi**, numerical string) * &#x60;from&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with until!__) * &#x60;until&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with from!__) * &#x60;timestamp&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, for querying events of 1 day, deprecated in future) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getEventsAsyncWithHttpInfo($page = null, $per_page = null, $sort = null, $q = null)
    {
        $returnType = '\Emnify\EmnifySdk\Model\Event[]';
        $request = $this->getEventsRequest($page, $per_page, $sort, $q);

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
     * Create request for operation 'getEvents'
     *
     * @param  int $page Current page number (optional)
     * @param  int $per_page Paging parameters defining the number of items per page (optional)
     * @param  string $sort Sort properties according to a comma separated list of accepted fields. Valid fields are:  * &#x60;id&#x60; - (**event id**) * &#x60;timestamp&#x60; - (**event timestamp**) * &#x60;source&#x60; - (**event source**) * &#x60;severity&#x60; - (**event severity**) * &#x60;alert&#x60; - (**alert status**) * &#x60;organisation&#x60; - (**organisation name**) * &#x60;user&#x60; - (**user id**) * &#x60;endpoint&#x60; - (**endpoint name**) * &#x60;tags&#x60; - (**endpoint tags**) * &#x60;ip_address&#x60; - (**endpoint ip_address**) * &#x60;iccid&#x60; - (**sim iccid**) * &#x60;imsi&#x60; - (**sim imsi**) * &#x60;type&#x60; - (**event type**) (optional)
     * @param  string $q Filter parameter in &#x60;&lt;filter&gt;:&lt;value&gt;&#x60; format. Multiple filters must be in the format of a comma separated list of the following fields:  * &#x60;type&#x60; (**event_type**, numerical) * &#x60;source&#x60; (**event_type**, numerical, e.g. 0 &#x3D; Network), 1 &#x3D; Policy Control, 2 &#x3D; API) * &#x60;severity&#x60; (**event_severity**, numerical, e.g. 0 &#x3D; Info, 1 &#x3D; Warn), 2 &#x3D; Critical) * &#x60;alert&#x60; (boolean, e.g. true, false) * &#x60;description&#x60; (**event description**, string) * &#x60;organisation&#x60; (**organisation name**, string) * &#x60;user&#x60; (**user name**, string) * &#x60;endpoint&#x60; (**endpoint name**, string) * &#x60;tags&#x60; (**endpoint tags**, string) * &#x60;ip_address&#x60; (**endpoint IP address**, valid IPv4/IPv6 address) * &#x60;imei&#x60; (**endpoint imei**, numerical string) * &#x60;iccid&#x60; (**sim iccid**, numerical string) * &#x60;imsi&#x60; (**sim imsi**, numerical string) * &#x60;from&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with until!__) * &#x60;until&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with from!__) * &#x60;timestamp&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, for querying events of 1 day, deprecated in future) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getEventsRequest($page = null, $per_page = null, $sort = null, $q = null)
    {

        $resourcePath = '/api/v1/event';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, 'int32');
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, 'int32');
        }
        // query params
        if ($sort !== null) {
            $queryParams['sort'] = ObjectSerializer::toQueryValue($sort, null);
        }
        // query params
        if ($q !== null) {
            $queryParams['q'] = ObjectSerializer::toQueryValue($q, null);
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
