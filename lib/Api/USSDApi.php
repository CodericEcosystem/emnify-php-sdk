<?php
/**
 * USSDApi
 * PHP version 5
 *
 * @category Class
 * @package  CodericEcosystem\EmnifySdk
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

namespace CodericEcosystem\EmnifySdk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use CodericEcosystem\EmnifySdk\ApiException;
use CodericEcosystem\EmnifySdk\Configuration;
use CodericEcosystem\EmnifySdk\HeaderSelector;
use CodericEcosystem\EmnifySdk\ObjectSerializer;

/**
 * USSDApi Class Doc Comment
 *
 * @category Class
 * @package  CodericEcosystem\EmnifySdk
 * @author   Coderic Development Team
 * @link     https://github.com/CodericEcosystem/emnify-php-sdk
 */
class USSDApi
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
     * Operation endpointUssdByIdPost
     *
     * Create USSD dialog
     *
     * @param  \CodericEcosystem\EmnifySdk\Model\StartingaUSSDDialogrequest $body body (required)
     * @param  int $endpoint_id Numeric ID of an endpoint (required)
     *
     * @throws \CodericEcosystem\EmnifySdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CodericEcosystem\EmnifySdk\Model\StartingaUSSDDialogresponse
     */
    public function endpointUssdByIdPost($body, $endpoint_id)
    {
        list($response) = $this->endpointUssdByIdPostWithHttpInfo($body, $endpoint_id);
        return $response;
    }

    /**
     * Operation endpointUssdByIdPostWithHttpInfo
     *
     * Create USSD dialog
     *
     * @param  \CodericEcosystem\EmnifySdk\Model\StartingaUSSDDialogrequest $body (required)
     * @param  int $endpoint_id Numeric ID of an endpoint (required)
     *
     * @throws \CodericEcosystem\EmnifySdk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CodericEcosystem\EmnifySdk\Model\StartingaUSSDDialogresponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function endpointUssdByIdPostWithHttpInfo($body, $endpoint_id)
    {
        $returnType = '\CodericEcosystem\EmnifySdk\Model\StartingaUSSDDialogresponse';
        $request = $this->endpointUssdByIdPostRequest($body, $endpoint_id);

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
                        '\CodericEcosystem\EmnifySdk\Model\StartingaUSSDDialogresponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation endpointUssdByIdPostAsync
     *
     * Create USSD dialog
     *
     * @param  \CodericEcosystem\EmnifySdk\Model\StartingaUSSDDialogrequest $body (required)
     * @param  int $endpoint_id Numeric ID of an endpoint (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function endpointUssdByIdPostAsync($body, $endpoint_id)
    {
        return $this->endpointUssdByIdPostAsyncWithHttpInfo($body, $endpoint_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation endpointUssdByIdPostAsyncWithHttpInfo
     *
     * Create USSD dialog
     *
     * @param  \CodericEcosystem\EmnifySdk\Model\StartingaUSSDDialogrequest $body (required)
     * @param  int $endpoint_id Numeric ID of an endpoint (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function endpointUssdByIdPostAsyncWithHttpInfo($body, $endpoint_id)
    {
        $returnType = '\CodericEcosystem\EmnifySdk\Model\StartingaUSSDDialogresponse';
        $request = $this->endpointUssdByIdPostRequest($body, $endpoint_id);

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
     * Create request for operation 'endpointUssdByIdPost'
     *
     * @param  \CodericEcosystem\EmnifySdk\Model\StartingaUSSDDialogrequest $body (required)
     * @param  int $endpoint_id Numeric ID of an endpoint (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function endpointUssdByIdPostRequest($body, $endpoint_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling endpointUssdByIdPost'
            );
        }
        // verify the required parameter 'endpoint_id' is set
        if ($endpoint_id === null || (is_array($endpoint_id) && count($endpoint_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $endpoint_id when calling endpointUssdByIdPost'
            );
        }

        $resourcePath = '/api/v1/endpoint/{endpoint_id}/ussd';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($endpoint_id !== null) {
            $resourcePath = str_replace(
                '{' . 'endpoint_id' . '}',
                ObjectSerializer::toPathValue($endpoint_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
            'POST',
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
