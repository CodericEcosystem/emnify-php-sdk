# Emnify\EmnifySdk\IntegrationsApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCallbackSecret**](IntegrationsApi.md#createcallbacksecret) | **POST** /api/v1/api_secret | Create a Callback Secret
[**createCallbackURL**](IntegrationsApi.md#createcallbackurl) | **POST** /api/v1/api_callback | Create a Callback URL
[**createDataStreamer**](IntegrationsApi.md#createdatastreamer) | **POST** /api/v2/data_stream | Create Data Stream
[**dataStreamerV2ByIdRestart**](IntegrationsApi.md#datastreamerv2byidrestart) | **POST** /api/v2/data_stream/{data_stream_id}/restart | Restart Existing Data Stream
[**deleteCallbackSecret**](IntegrationsApi.md#deletecallbacksecret) | **DELETE** /api/v1/api_secret/{api_secret_id} | Delete a Callback Secret
[**deleteCallbackURL**](IntegrationsApi.md#deletecallbackurl) | **DELETE** /api/v1/api_callback/{api_callback_id} | Delete a Callback URL
[**deleteDataStreamerV2**](IntegrationsApi.md#deletedatastreamerv2) | **DELETE** /api/v2/data_stream/{data_stream_id} | Delete Existing Data Stream
[**getAPICallbackSecret**](IntegrationsApi.md#getapicallbacksecret) | **GET** /api/v1/api_secret | List API Callback Secrets
[**getAPICallbackURLs**](IntegrationsApi.md#getapicallbackurls) | **GET** /api/v1/api_callback | Retrieve list of API Callback URLs
[**getCallbackSecretbyID**](IntegrationsApi.md#getcallbacksecretbyid) | **GET** /api/v1/api_secret/{api_secret_id} | Get a Callback Secret by ID
[**getCallbackURLbyID**](IntegrationsApi.md#getcallbackurlbyid) | **GET** /api/v1/api_callback/{api_callback_id} | Get a Callback URL by ID
[**getDataStreamerByIdV2**](IntegrationsApi.md#getdatastreamerbyidv2) | **GET** /api/v2/data_stream/{data_stream_id} | Get Details on Existing Data Stream
[**getDataStreamerDataStreamType**](IntegrationsApi.md#getdatastreamerdatastreamtype) | **GET** /api/v2/data_stream/type | Get Data Stream Types
[**getDataStreamerEnumFilterFieldType**](IntegrationsApi.md#getdatastreamerenumfilterfieldtype) | **GET** /api/v2/data_stream/filter_field_type | Get Possible Data Stream Filter Fields
[**getDataStreamerStatuses**](IntegrationsApi.md#getdatastreamerstatuses) | **GET** /api/v2/data_stream/status | Get Possible Data Stream Statuses
[**listDataStreamerV2s**](IntegrationsApi.md#listdatastreamerv2s) | **GET** /api/v2/data_stream | List Data Stream configurations of your organization
[**patchV2DataStream**](IntegrationsApi.md#patchv2datastream) | **PATCH** /api/v2/data_stream/{data_stream_id} | Modify Existing Data Stream

# **createCallbackSecret**
> createCallbackSecret($body)

Create a Callback Secret

Creates a new secret that may be used by API callbacks.  When an `api_secret` is assigned to a Service Profile with an API callback, API requests towards this URL will contain an `Authorization` header with a JSON Web Token. The `api_secret` is used as the __Signing Key__ of the JWT.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emnify\EmnifySdk\Model\V1ApiSecretBody(); // \Emnify\EmnifySdk\Model\V1ApiSecretBody | 

try {
    $apiInstance->createCallbackSecret($body);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->createCallbackSecret: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emnify\EmnifySdk\Model\V1ApiSecretBody**](../Model/V1ApiSecretBody.md)|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCallbackURL**
> createCallbackURL($body)

Create a Callback URL

Create Callback URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emnify\EmnifySdk\Model\null(); //  | Creating an API callback URL

try {
    $apiInstance->createCallbackURL($body);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->createCallbackURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)| Creating an API callback URL |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDataStreamer**
> createDataStreamer($body)

Create Data Stream

Create Data Stream to your destination. Click on Examples to see available Data Streams and configuration parameters.  Currently available `connection_types` are - `AwsKinesis` - `S3` - `RestAPI` - `KeenIO` - `Datadog` - `EventHubs` - `PubSub`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emnify\EmnifySdk\Model\V2DataStreamBody(); // \Emnify\EmnifySdk\Model\V2DataStreamBody | 

try {
    $apiInstance->createDataStreamer($body);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->createDataStreamer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emnify\EmnifySdk\Model\V2DataStreamBody**](../Model/V2DataStreamBody.md)|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataStreamerV2ByIdRestart**
> dataStreamerV2ByIdRestart($data_stream_id)

Restart Existing Data Stream

Restart your Existing Data Stream. This might be necessary when e.g. your Webhook endpoint has been unreachable for an extended period of time. Webhook Data Stream will exhaust retries and go into Error State. By using this API call your Data Stream will be restarted and continue trying to send data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_stream_id = "data_stream_id_example"; // string | ID of a data stream.

try {
    $apiInstance->dataStreamerV2ByIdRestart($data_stream_id);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->dataStreamerV2ByIdRestart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_stream_id** | **string**| ID of a data stream. |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCallbackSecret**
> deleteCallbackSecret($api_secret_id)

Delete a Callback Secret

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_secret_id = 56; // int | A numeric ID of an API Secret

try {
    $apiInstance->deleteCallbackSecret($api_secret_id);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->deleteCallbackSecret: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_secret_id** | **int**| A numeric ID of an API Secret |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCallbackURL**
> deleteCallbackURL($api_callback_id)

Delete a Callback URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_callback_id = 56; // int | A numeric ID of an API Callback URL

try {
    $apiInstance->deleteCallbackURL($api_callback_id);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->deleteCallbackURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_callback_id** | **int**| A numeric ID of an API Callback URL |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDataStreamerV2**
> deleteDataStreamerV2($data_stream_id)

Delete Existing Data Stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_stream_id = "data_stream_id_example"; // string | ID of a data stream.

try {
    $apiInstance->deleteDataStreamerV2($data_stream_id);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->deleteDataStreamerV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_stream_id** | **string**| ID of a data stream. |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAPICallbackSecret**
> \Emnify\EmnifySdk\Model\InlineResponse2009[] getAPICallbackSecret()

List API Callback Secrets

Lists API callback secrets.  __Note:__ The `secret` property itself is not returned in this call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAPICallbackSecret();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getAPICallbackSecret: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Emnify\EmnifySdk\Model\InlineResponse2009[]**](../Model/InlineResponse2009.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAPICallbackURLs**
> null[] getAPICallbackURLs()

Retrieve list of API Callback URLs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAPICallbackURLs();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getAPICallbackURLs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**null[]**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallbackSecretbyID**
> \Emnify\EmnifySdk\Model\V1ApiSecretBody getCallbackSecretbyID($api_secret_id)

Get a Callback Secret by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_secret_id = 56; // int | A numeric ID of an API secret

try {
    $result = $apiInstance->getCallbackSecretbyID($api_secret_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getCallbackSecretbyID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_secret_id** | **int**| A numeric ID of an API secret |

### Return type

[**\Emnify\EmnifySdk\Model\V1ApiSecretBody**](../Model/V1ApiSecretBody.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCallbackURLbyID**
> getCallbackURLbyID($api_callback_id)

Get a Callback URL by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api_callback_id = 56; // int | A numeric ID of an API Callback URL

try {
    $apiInstance->getCallbackURLbyID($api_callback_id);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getCallbackURLbyID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_callback_id** | **int**| A numeric ID of an API Callback URL |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataStreamerByIdV2**
> \Emnify\EmnifySdk\Model\InlineResponse2008 getDataStreamerByIdV2($data_stream_id)

Get Details on Existing Data Stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data_stream_id = "data_stream_id_example"; // string | ID of a data stream.

try {
    $result = $apiInstance->getDataStreamerByIdV2($data_stream_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getDataStreamerByIdV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_stream_id** | **string**| ID of a data stream. |

### Return type

[**\Emnify\EmnifySdk\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataStreamerDataStreamType**
> \Emnify\EmnifySdk\Model\InlineResponse2007[] getDataStreamerDataStreamType()

Get Data Stream Types

List available Data Stream Types.  (`1`) will only stream `Usage` Data.  (`2`) will only stream `Event` Data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDataStreamerDataStreamType();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getDataStreamerDataStreamType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Emnify\EmnifySdk\Model\InlineResponse2007[]**](../Model/InlineResponse2007.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataStreamerEnumFilterFieldType**
> \Emnify\EmnifySdk\Model\InlineResponse2007[] getDataStreamerEnumFilterFieldType()

Get Possible Data Stream Filter Fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDataStreamerEnumFilterFieldType();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getDataStreamerEnumFilterFieldType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Emnify\EmnifySdk\Model\InlineResponse2007[]**](../Model/InlineResponse2007.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataStreamerStatuses**
> \Emnify\EmnifySdk\Model\InlineResponse2007[] getDataStreamerStatuses()

Get Possible Data Stream Statuses

List Possible Data Stream Statuses.  (`1`) is the normal `Running` state meaning your data stream is active and streams data.  (`2`) indicates a `Paused` data stream. It will not send messages to your destination. However, messages meant for this data stream are routed and will be stored up to 7 days. You will first receive historic data once you resume a paused streamer after longer pausing.  (`3`) indicates that an `Error` has occurred. This might be problems in the configuration (e.g. missing permissions) or your destination has been unavailable for a longer period of time and the data stream exceeded maximum retries. You may restart the streamer in order to fix a temporary problem, misconfigured streamers will continue to fail.  (`4`) is a `Pending` state. Your data stream has not been initialized, yet. This state may occur for a very short time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDataStreamerStatuses();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->getDataStreamerStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Emnify\EmnifySdk\Model\InlineResponse2007[]**](../Model/InlineResponse2007.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listDataStreamerV2s**
> \Emnify\EmnifySdk\Model\InlineResponse2006 listDataStreamerV2s()

List Data Stream configurations of your organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listDataStreamerV2s();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->listDataStreamerV2s: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Emnify\EmnifySdk\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchV2DataStream**
> patchV2DataStream($body, $data_stream_id)

Modify Existing Data Stream

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emnify\EmnifySdk\Model\DataStreamDataStreamIdBody(); // \Emnify\EmnifySdk\Model\DataStreamDataStreamIdBody | 
$data_stream_id = "data_stream_id_example"; // string | ID of a data stream.

try {
    $apiInstance->patchV2DataStream($body, $data_stream_id);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsApi->patchV2DataStream: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emnify\EmnifySdk\Model\DataStreamDataStreamIdBody**](../Model/DataStreamDataStreamIdBody.md)|  |
 **data_stream_id** | **string**| ID of a data stream. |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

