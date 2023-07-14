# CodericEcosystem\EmnifySdk\EndpointApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEndpoint**](EndpointApi.md#createendpoint) | **POST** /api/v1/endpoint | Create Endpoint
[**deleteEndpointDataQuotaById**](EndpointApi.md#deleteendpointdataquotabyid) | **DELETE** /api/v1/endpoint/{endpoint_id}/quota/data | Remove Data Quota
[**deleteEndpointSmsQuotaById**](EndpointApi.md#deleteendpointsmsquotabyid) | **DELETE** /api/v1/endpoint/{endpoint_id}/quota/sms | Remove SMS Quota
[**endpointBalanceByEndpointIdDelete**](EndpointApi.md#endpointbalancebyendpointiddelete) | **DELETE** /api/v1/endpoint/{endpoint_id}/balance | Reset Prepaid Balance
[**endpointBalanceByEndpointIdGet**](EndpointApi.md#endpointbalancebyendpointidget) | **GET** /api/v1/endpoint/{endpoint_id}/balance | Endpoint Prepaid Balance
[**endpointBalanceByEndpointIdPost**](EndpointApi.md#endpointbalancebyendpointidpost) | **POST** /api/v1/endpoint/{endpoint_id}/balance | Update Prepaid Balance
[**endpointByIdDelete**](EndpointApi.md#endpointbyiddelete) | **DELETE** /api/v1/endpoint/{endpoint_id} | Delete an Endpoint
[**endpointByIdGet**](EndpointApi.md#endpointbyidget) | **GET** /api/v1/endpoint/{endpoint_id} | Endpoint Details
[**endpointByIdPatch**](EndpointApi.md#endpointbyidpatch) | **PATCH** /api/v1/endpoint/{endpoint_id} | Update an Endpoint
[**endpointConnectivityByIdGet**](EndpointApi.md#endpointconnectivitybyidget) | **GET** /api/v1/endpoint/{endpoint_id}/connectivity | Endpoint Connectivity Status
[**endpointEventsByID**](EndpointApi.md#endpointeventsbyid) | **GET** /api/v1/endpoint/{endpoint_id}/event | List Endpoint events
[**endpointOperatorBlacklistByEndpointIdGet**](EndpointApi.md#endpointoperatorblacklistbyendpointidget) | **GET** /api/v1/endpoint/{endpoint_id}/operator_blacklist | List Operator Blacklist for Endpoint
[**endpointOperatorBlacklistByEpIdAndOperatorIdDelete**](EndpointApi.md#endpointoperatorblacklistbyepidandoperatoriddelete) | **DELETE** /api/v1/endpoint/{endpoint_id}/operator_blacklist/{operator_id} | Remove an Operator from the Blacklist
[**endpointOperatorBlacklistByEpIdAndOperatorIdPut**](EndpointApi.md#endpointoperatorblacklistbyepidandoperatoridput) | **PUT** /api/v1/endpoint/{endpoint_id}/operator_blacklist/{operator_id} | Add an Operator to the Blacklist
[**endpointQuotaDataByEndpointIdGet**](EndpointApi.md#endpointquotadatabyendpointidget) | **GET** /api/v1/endpoint/{endpoint_id}/quota/data | Retrieve Data Quota details
[**endpointQuotaDataByEndpointIdPost**](EndpointApi.md#endpointquotadatabyendpointidpost) | **POST** /api/v1/endpoint/{endpoint_id}/quota/data | Set Data Quota
[**endpointQuotaSmsByEndpointIdGet**](EndpointApi.md#endpointquotasmsbyendpointidget) | **GET** /api/v1/endpoint/{endpoint_id}/quota/sms | Show SMS Quota details
[**endpointQuotaSmsByEndpointIdPost**](EndpointApi.md#endpointquotasmsbyendpointidpost) | **POST** /api/v1/endpoint/{endpoint_id}/quota/sms | Set SMS Quota
[**endpointSmsByEndpointIdAndSmsIdDelete**](EndpointApi.md#endpointsmsbyendpointidandsmsiddelete) | **DELETE** /api/v1/endpoint/{endpoint_id}/sms/{sms_id} | Cancel SMS
[**endpointSmsByEndpointIdAndSmsIdGet**](EndpointApi.md#endpointsmsbyendpointidandsmsidget) | **GET** /api/v1/endpoint/{endpoint_id}/sms/{sms_id} | SMS details
[**endpointSmsByIdGet**](EndpointApi.md#endpointsmsbyidget) | **GET** /api/v1/endpoint/{endpoint_id}/sms | List sent and received SMS
[**endpointSmsByIdPost**](EndpointApi.md#endpointsmsbyidpost) | **POST** /api/v1/endpoint/{endpoint_id}/sms | Send SMS to an Endpoint
[**endpointStatsByIdGet**](EndpointApi.md#endpointstatsbyidget) | **GET** /api/v1/endpoint/{endpoint_id}/stats | Endpoint Usage and Cost Statistics
[**endpointStatsDailyByIdGet**](EndpointApi.md#endpointstatsdailybyidget) | **GET** /api/v1/endpoint/{endpoint_id}/stats/daily | Daily Endpoint Usage Statistics
[**endpointStatusGet**](EndpointApi.md#endpointstatusget) | **GET** /api/v1/endpoint/status | List Endpoint Statuses
[**getConnectivityInfoByEndpointId**](EndpointApi.md#getconnectivityinfobyendpointid) | **GET** /api/v1/endpoint/{endpoint_id}/connectivity_info | Connectivity Info of an Endpoint
[**getEndpoints**](EndpointApi.md#getendpoints) | **GET** /api/v1/endpoint | List Endpoints
[**updateEndpointConnectivityById**](EndpointApi.md#updateendpointconnectivitybyid) | **PATCH** /api/v1/endpoint/{endpoint_id}/connectivity | Reset Endpoint Connectivity

# **createEndpoint**
> createEndpoint($body)

Create Endpoint

If a `sim` object is provided, the SIM with the contained ID will be assigned to the endpoint. The `activate` property defaults to `true` and can be omitted unless the SIM should not be activated with this API call.  The following fields may be provided: * `name` (String required) * `service_profile` (Object required) * `tariff_profile` (Object required) * `status` (Object required) - `0` = __Enabled__, `1` = __Disabled__! * `tags` (String optional) * `imei` (String optional) * `imei_lock` (Boolean optional) * `sim` (Object optional)   - `id` (number required) SIM ID to be assigned to this endpoint   - `activate` (Boolean, optional, default:true) * `ip_address` (String optional) * `ip_address_space` (Object, optional if IP address is omitted, mandatory when IP address is set)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CodericEcosystem\EmnifySdk\Model\Endpoint1(); // \CodericEcosystem\EmnifySdk\Model\Endpoint1 | 

try {
    $apiInstance->createEndpoint($body);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->createEndpoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CodericEcosystem\EmnifySdk\Model\Endpoint1**](../Model/Endpoint1.md)|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEndpointDataQuotaById**
> deleteEndpointDataQuotaById($endpoint_id)

Remove Data Quota

Will delete the data quota for the endpoint, if any is set. Note that if `apply_data_quota` is still set in the service profile, the endpoint will get blocked from data service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint

try {
    $apiInstance->deleteEndpointDataQuotaById($endpoint_id);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->deleteEndpointDataQuotaById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEndpointSmsQuotaById**
> deleteEndpointSmsQuotaById($endpoint_id)

Remove SMS Quota

Will delete the SMS quota for the endpoint, if any is set. Note that if `apply_sms_quota` is still set in the service profile, the endpoint will get blocked from sending sms.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint

try {
    $apiInstance->deleteEndpointSmsQuotaById($endpoint_id);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->deleteEndpointSmsQuotaById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointBalanceByEndpointIdDelete**
> endpointBalanceByEndpointIdDelete($endpoint_id)

Reset Prepaid Balance

**We have deprecated prepaid endpoint management.**  **Existing customers can continue to use this functionality with their current SLAs until July 31, 2023.  On August 1, we will discontinue prepaid endpoint management and remove any related calls from the API.**  A `DELETE` request will reset the prepaid balance to a value of zero, in the current organisation currency. * Location updates will be rejected * PDP context requests will be rejected * MO-SMS will not be acknowledged and will time out

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint

try {
    $apiInstance->endpointBalanceByEndpointIdDelete($endpoint_id);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointBalanceByEndpointIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointBalanceByEndpointIdGet**
> \CodericEcosystem\EmnifySdk\Model\RetrievePrepaidBalanceresponse endpointBalanceByEndpointIdGet($endpoint_id)

Endpoint Prepaid Balance

**We have deprecated prepaid endpoint management.**  **Existing customers can continue to use this functionality with their current SLAs until July 31, 2023.  On August 1, we will discontinue prepaid endpoint management and remove any related calls from the API.**  Retrieves the balance of an Endpoint. The following properties are returned:  * `amount`: the current balance in currency with up to 6 decimal places of precision   * the amount may reach a negative value by deduction through the API or by deferred processing of usage charges   * If the amount is 0 or negative, the endpoint will be blocked from using teleservices, specifically     * Location updates will be rejected     * PDP context requests will be rejected     * MO-SMS will not be acknowledged and will time out * `currency`: a nested object with info on the currency represented by the `amount` * `auto_reset`: if enabled, the balance will be set automatically to the last loaded amount at the beginning of the month * `last_loaded_amount`: the amount of the last top-up/patch transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint

try {
    $result = $apiInstance->endpointBalanceByEndpointIdGet($endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointBalanceByEndpointIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |

### Return type

[**\CodericEcosystem\EmnifySdk\Model\RetrievePrepaidBalanceresponse**](../Model/RetrievePrepaidBalanceresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointBalanceByEndpointIdPost**
> endpointBalanceByEndpointIdPost($endpoint_id, $body)

Update Prepaid Balance

**We have deprecated prepaid endpoint management.**  **Existing customers can continue to use this functionality with their current SLAs until July 31, 2023.  On August 1, we will discontinue prepaid endpoint management and remove any related calls from the API.**  At any time, the prepaid balance of an endpoint can be updated either by adding or subtracting a certain amount. If the currency of the balance does not match the currency of the organisation, first a balance reset has to be issued. the currency doesn't have to be specified explicitly anymore.  The API expects the following parameters in the JSON body  * `amount` (number, required) - A positive or negative value with up to 6 decimal places of precision.  The new balance will be the sum of the old balance plus this amount. As given amounts may be negative, the result will be a deduction from the balance  * `expiry_date` (string, required) - A timestamp specifying an expiry date in the future

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint
$body = new \CodericEcosystem\EmnifySdk\Model\UpdatePrepaidBalanceresponse(); // \CodericEcosystem\EmnifySdk\Model\UpdatePrepaidBalanceresponse | 

try {
    $apiInstance->endpointBalanceByEndpointIdPost($endpoint_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointBalanceByEndpointIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |
 **body** | [**\CodericEcosystem\EmnifySdk\Model\UpdatePrepaidBalanceresponse**](../Model/UpdatePrepaidBalanceresponse.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointByIdDelete**
> endpointByIdDelete($endpoint_id)

Delete an Endpoint

Deletes an endpoint and all its child entities.  _Note: Endpoints with an assigned SIM cannot be deleted (results in a `409` error)._

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint

try {
    $apiInstance->endpointByIdDelete($endpoint_id);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointByIdGet**
> \CodericEcosystem\EmnifySdk\Model\Endpoint2 endpointByIdGet($endpoint_id)

Endpoint Details

Retrieves endpoint details for a given ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint

try {
    $result = $apiInstance->endpointByIdGet($endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |

### Return type

[**\CodericEcosystem\EmnifySdk\Model\Endpoint2**](../Model/Endpoint2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointByIdPatch**
> endpointByIdPatch($body, $endpoint_id)

Update an Endpoint

Updates the details of an endpoint.  You can provide the following fields with this request: * `name` (String, optional) * `tags` (String, optional) * `status` (Object, optional) * `service profile` (Object, optional) * `tariff profile` (Object, optional) * `ip_address` (String, optional) * `ip_address_space` (Object, optional if IP address is missing, mandatory when IP address is set) * `sim` (Object, optional) * `imei` (String, optional) * `imei_lock` (Boolean, optional)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CodericEcosystem\EmnifySdk\Model\UpdateEndpoint(); // \CodericEcosystem\EmnifySdk\Model\UpdateEndpoint | 
$endpoint_id = 56; // int | Numeric ID of an endpoint

try {
    $apiInstance->endpointByIdPatch($body, $endpoint_id);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointByIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CodericEcosystem\EmnifySdk\Model\UpdateEndpoint**](../Model/UpdateEndpoint.md)|  |
 **endpoint_id** | **int**| Numeric ID of an endpoint |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointConnectivityByIdGet**
> \CodericEcosystem\EmnifySdk\Model\RetrieveEndpointConnectivityStatusresponse endpointConnectivityByIdGet($endpoint_id)

Endpoint Connectivity Status

Retrieve details about current connectivity status of endpoint. The following is a list of possible statuses:  * `ATTACHED`: The Endpoint has succesfully attached to the Home Core network in the past. The device will be shown as `ATTACHED` until the visited network has signaled that the device is inactive/offline. Usually the visited network informs the Core Network within 1-2 days after a device went offline.  * `ONLINE`: The Endpoint has an active data connection  * `OFFLINE`: The Endpoint has not attached to the core network yet or the device was previously attached but the visited network signaled that the device had no activity for the last 1-2 days. Note: The device is not reachable for external services (e.g. SMS, MSRN lookup).  * `BLOCKED`: The device is not granted service. Endpoints are assigned this status when they have exceeded traffic limits.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint

try {
    $result = $apiInstance->endpointConnectivityByIdGet($endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointConnectivityByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |

### Return type

[**\CodericEcosystem\EmnifySdk\Model\RetrieveEndpointConnectivityStatusresponse**](../Model/RetrieveEndpointConnectivityStatusresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointEventsByID**
> \CodericEcosystem\EmnifySdk\Model\RetrieveEventsresponse endpointEventsByID($endpoint_id, $page, $per_page, $sort, $q)

List Endpoint events

Returns the list of events, filtered, sorted and paged according to query parameters.  **Note:** A full list of events is found in section \"Retrieve Event Types\" (`/api/v1/event/type`).  **CAUTION** This API endpoint deviates from the specified conventions and may not return the same HTTP Codes as the higher layer call (`/api/v1/endpoint/{endpoint_id}`). In case the requested `{endpoint_id}` does not exist or is not accessible for the user, **HTTP 200** will be returned with empty **[]** as long as the provided `{endpoint_id}` is a number and all parameters are valid. Please take that into consideration when building automation on top of the error behaviour of this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint
$page = 56; // int | Current page number
$per_page = 56; // int | Paging parameters defining the number of items per page
$sort = "sort_example"; // string | Sort properties according to a comma separated list of accepted fields. Valid fields are:  * `id` - (**event id**) * `timestamp` - (**event timestamp**) * `source` - (**event source**) * `severity` - (**event severity**) * `alert` - (**alert status**) * `organisation` - (**organisation name**) * `user` - (**user id**) * `endpoint` - (**endpoint name**) * `tags` - (**endpoint tags**) * `ip_address` - (**endpoint ip_address**) * `iccid` - (**sim iccid**) * `imsi` - (**sim imsi**) * `type` - (**event type**)
$q = "q_example"; // string | Filter parameter in `<filter>:<value>` format. Multiple filters must be in the format of a comma separated list of the following fields:  * `type` (**event_type**, numerical) * `source` (**event_type**, numerical, e.g. 0 = Network), 1 = Policy Control, 2 = API) * `severity` (**event_severity**, numerical, e.g. 0 = Info, 1 = Warn), 2 = Critical) * `alert` (boolean, e.g. true, false) * `description` (**event description**, string) * `organisation` (**organisation name**, string) * `user` (**user name**, string) * `endpoint` (**endpoint name**, string) * `tags` (**endpoint tags**, string) * `ip_address` (**endpoint IP address**, valid IPv4/IPv6 address) * `imei` (**endpoint imei**, numerical string) * `iccid` (**sim iccid**, numerical string) * `imsi` (**sim imsi**, numerical string) * `from` (**date**, format `YYYY-MM-DDTHH:mm:ssZ`, __only valid with until!__) * `until` (**date**, format `YYYY-MM-DDTHH:mm:ssZ`, __only valid with from!__) * `timestamp` (**date**, format `YYYY-MM-DDTHH:mm:ssZ`, for querying events of 1 day, deprecated in future)

try {
    $result = $apiInstance->endpointEventsByID($endpoint_id, $page, $per_page, $sort, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointEventsByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |
 **page** | **int**| Current page number | [optional]
 **per_page** | **int**| Paging parameters defining the number of items per page | [optional]
 **sort** | **string**| Sort properties according to a comma separated list of accepted fields. Valid fields are:  * &#x60;id&#x60; - (**event id**) * &#x60;timestamp&#x60; - (**event timestamp**) * &#x60;source&#x60; - (**event source**) * &#x60;severity&#x60; - (**event severity**) * &#x60;alert&#x60; - (**alert status**) * &#x60;organisation&#x60; - (**organisation name**) * &#x60;user&#x60; - (**user id**) * &#x60;endpoint&#x60; - (**endpoint name**) * &#x60;tags&#x60; - (**endpoint tags**) * &#x60;ip_address&#x60; - (**endpoint ip_address**) * &#x60;iccid&#x60; - (**sim iccid**) * &#x60;imsi&#x60; - (**sim imsi**) * &#x60;type&#x60; - (**event type**) | [optional]
 **q** | **string**| Filter parameter in &#x60;&lt;filter&gt;:&lt;value&gt;&#x60; format. Multiple filters must be in the format of a comma separated list of the following fields:  * &#x60;type&#x60; (**event_type**, numerical) * &#x60;source&#x60; (**event_type**, numerical, e.g. 0 &#x3D; Network), 1 &#x3D; Policy Control, 2 &#x3D; API) * &#x60;severity&#x60; (**event_severity**, numerical, e.g. 0 &#x3D; Info, 1 &#x3D; Warn), 2 &#x3D; Critical) * &#x60;alert&#x60; (boolean, e.g. true, false) * &#x60;description&#x60; (**event description**, string) * &#x60;organisation&#x60; (**organisation name**, string) * &#x60;user&#x60; (**user name**, string) * &#x60;endpoint&#x60; (**endpoint name**, string) * &#x60;tags&#x60; (**endpoint tags**, string) * &#x60;ip_address&#x60; (**endpoint IP address**, valid IPv4/IPv6 address) * &#x60;imei&#x60; (**endpoint imei**, numerical string) * &#x60;iccid&#x60; (**sim iccid**, numerical string) * &#x60;imsi&#x60; (**sim imsi**, numerical string) * &#x60;from&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with until!__) * &#x60;until&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with from!__) * &#x60;timestamp&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, for querying events of 1 day, deprecated in future) | [optional]

### Return type

[**\CodericEcosystem\EmnifySdk\Model\RetrieveEventsresponse**](../Model/RetrieveEventsresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointOperatorBlacklistByEndpointIdGet**
> \CodericEcosystem\EmnifySdk\Model\RetrieveOperatorBlacklistresponse[] endpointOperatorBlacklistByEndpointIdGet($endpoint_id)

List Operator Blacklist for Endpoint

Returns a list of blacklisted Operators for the requested Endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint

try {
    $result = $apiInstance->endpointOperatorBlacklistByEndpointIdGet($endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointOperatorBlacklistByEndpointIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |

### Return type

[**\CodericEcosystem\EmnifySdk\Model\RetrieveOperatorBlacklistresponse[]**](../Model/RetrieveOperatorBlacklistresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointOperatorBlacklistByEpIdAndOperatorIdDelete**
> endpointOperatorBlacklistByEpIdAndOperatorIdDelete($endpoint_id, $operator_id)

Remove an Operator from the Blacklist

Remove Operator from the Blacklist of an Endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint
$operator_id = 1.2; // float | Numerical ID of an Operator

try {
    $apiInstance->endpointOperatorBlacklistByEpIdAndOperatorIdDelete($endpoint_id, $operator_id);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointOperatorBlacklistByEpIdAndOperatorIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |
 **operator_id** | **float**| Numerical ID of an Operator |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointOperatorBlacklistByEpIdAndOperatorIdPut**
> endpointOperatorBlacklistByEpIdAndOperatorIdPut($endpoint_id, $operator_id)

Add an Operator to the Blacklist

Adds an Operator to the Blacklist of an Endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint
$operator_id = 1.2; // float | Numerical ID of an Operator

try {
    $apiInstance->endpointOperatorBlacklistByEpIdAndOperatorIdPut($endpoint_id, $operator_id);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointOperatorBlacklistByEpIdAndOperatorIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |
 **operator_id** | **float**| Numerical ID of an Operator |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointQuotaDataByEndpointIdGet**
> \CodericEcosystem\EmnifySdk\Model\EndpointQuota endpointQuotaDataByEndpointIdGet($endpoint_id)

Retrieve Data Quota details

Returns details about the assigned Data Quota for an endpoint. * `status`: this indicates the current status of the quota and may contain the following values:     - `ACTIVE`: the endpoint can currently connect and has quota left     - `EXHAUSTED`: the endpoint has exceeded the quota volume, if it still can use data service depends on the action chosen to be performed on exhaustion     - `EXPIRED`: the quota has expired; the endpoint is denied from using data services (until new quota is added) * `volume`: returns the volume left on this quota in MB * `expiry_date`: timestamp when this quota will expire and the endpoint will definitely be denied from using further data services (regardless if the quota volume was used up or not) * `peak_throughput`: The maximum bandwidth in octets per second after the endpoint has been throttled. * `action_on_exhaustion`: returns the behaviour defined to be applied when quota volume is used up (exhausted).     - `Throttle`: bandwidth will be throttle to the defined peak throughput until quota expires     - `Block`: data service will be instantly blocked once volume used up, regardless if the expiry date is already reached or not * `auto_refill`: 0 (false) / 1 (true), refill the quota with the last added volume on a daily basis

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint

try {
    $result = $apiInstance->endpointQuotaDataByEndpointIdGet($endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointQuotaDataByEndpointIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |

### Return type

[**\CodericEcosystem\EmnifySdk\Model\EndpointQuota**](../Model/EndpointQuota.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointQuotaDataByEndpointIdPost**
> endpointQuotaDataByEndpointIdPost($body, $endpoint_id)

Set Data Quota

At any time, a new data quota can be set for an endpoint. At an initial state when no data quota is set, the endpoint will be denied from using data services. To top-up the data volume you need to retrieve the currently remaining volume, increase it by the top-up volume and set it as the new quota volume.  The following parameters can be configured: * `status` - The status of the quota (mandatory):   - 1: `ACTIVE`   - 2: `EXHAUSTED`   - 3: `EXPIRED` * `volume`: The volume left on this quota in MB * `expiry_date`: Timestamp when this quota will expire and the endpoint will definitely be denied from using further data services (mandatory) * `auto_refill`: Wether the quota shall be refilled on a daily basis (defaults to disabled):   - 0: `disabled`   - 1: `enabled` * `threshold_percentage`: The percentage of remaining quota at which the system should generate a `threshold reached` event * `action_on_exhaustion`: The behaviour of the system after the quota is exhausted:   - id: ID of the action on quota exhaustion (mandatory)     - 1: `Block`     - 2: `Throttle`   - peak_throughput: The maximum bandwidth in octets per second after the endpoint has been throttled. (mandatory)   Allowed values are 64000, 128000, 256000, 384000. (will not take any effect on `action_on_exhaustion` \"Block\")  #### Events The system generates a \"Quota Used Up\" Event in case the data quota is completely depleted. The endpoint will be blocked from further consumption of data. The quota object will be included in the details of the event. Example events can be found in the Events of an Endpoint section.  #### Notes  The endpoint can instantly use data services after the API call to this entrypoint is successfully made. Any timestamp with a future date can be set, this allows to create data packages (e.g. for 1 hour, 24 hour, 7 days or any other timeframe) as required.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CodericEcosystem\EmnifySdk\Model\EndpointQuota1(); // \CodericEcosystem\EmnifySdk\Model\EndpointQuota1 | 
$endpoint_id = 56; // int | Numeric ID of an endpoint

try {
    $apiInstance->endpointQuotaDataByEndpointIdPost($body, $endpoint_id);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointQuotaDataByEndpointIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CodericEcosystem\EmnifySdk\Model\EndpointQuota1**](../Model/EndpointQuota1.md)|  |
 **endpoint_id** | **int**| Numeric ID of an endpoint |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointQuotaSmsByEndpointIdGet**
> endpointQuotaSmsByEndpointIdGet($endpoint_id)

Show SMS Quota details

Returns details about the assigned SMS Quota for an endpoint.  You can retrieve the current SMS quota status for an endpoint with the following API call. It will return following properties: * `status`: this indicates the status of the quota and may contain the following values:   - `ACTIVE`: the endpoint has quota left and can use SMS services   - `EXHAUSTED`: the endpoint has exceeded the quota volume; the endpoint is denied from using SMS services (until new quota is added)   - `EXPIRED`: the quota has expired; the endpoint is denied from using SMS services (until new quota is added) * `volume`: the amount of SMS left on this quota * `expiry_date`: timestamp when this quota will expire and the endpoint will definitely be denied from using further SMS services (regardless if the quota volume was used up or not) * `threshold_percentage`: optional threshold in percentage indicating when a \"Threshold Reached\" event shall be sent. * `action_on_exhaustion`: returns the behaviour defined to be applied when quota volume is used up (exhausted).     - `Throttle`: bandwidth will be throttle to the defined peak throughput until quota expires     - `Block`: data service will be instantly blocked once volume used up, regardless if the expiry date is already reached or not     - `auto_refill`: 0 (false) / 1 (true), refill the quota with the last added volume on a daily basis

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint

try {
    $apiInstance->endpointQuotaSmsByEndpointIdGet($endpoint_id);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointQuotaSmsByEndpointIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointQuotaSmsByEndpointIdPost**
> endpointQuotaSmsByEndpointIdPost($body, $endpoint_id)

Set SMS Quota

At any time, a new SMS quota can be set for an endpoint. At an initial state when no SMS quota is set, the endpoint will be denied from using SMS services. To top-up the SMS volume one need to retrieve the currently left volume, increase it by the top-up volume and set it as the new quota volume.  The following parameters can be configured: * `status` - The status of the quota (mandatory):   - 1: `ACTIVE`   - 2: `EXHAUSTED`   - 3: `EXPIRED` * `volume`: The volume left on this quota in MB * `expiry_date`: Timestamp when this quota will expire and the endpoint will definitely be denied from using further data services (mandatory) * `auto_refill`: Wether the quota shall be refilled on a daily basis (defaults to disabled):   - 0: `disabled`   - 1: `enabled` * `threshold_percentage`: The percentage of remaining quota at which the system should generate a `threshold reached` event * `action_on_exhaustion`: The behaviour of the system after the quota is exhausted:   - id: ID of the action on quota exhaustion (mandatory)     - 1: `Block`     - 2: `Throttle` (will not take any effect on SMS quota)   - peak_throughput: The maximum bandwidth in octets per second after the endpoint has been throttled.   Allowed values are 64000, 128000, 256000, 384000. (will not take any effect on SMS quota)  #### Notes  The endpoint can instantly use the SMS service after the API call is successfully made. Any timestamp with a future date can be set, this allows to create SMS packages (e.g. for 1 hour, 24 hour, 7 days or any other timeframe) as required

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CodericEcosystem\EmnifySdk\Model\SMSQuota(); // \CodericEcosystem\EmnifySdk\Model\SMSQuota | 
$endpoint_id = 56; // int | Numeric ID of an endpoint

try {
    $apiInstance->endpointQuotaSmsByEndpointIdPost($body, $endpoint_id);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointQuotaSmsByEndpointIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CodericEcosystem\EmnifySdk\Model\SMSQuota**](../Model/SMSQuota.md)|  |
 **endpoint_id** | **int**| Numeric ID of an endpoint |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointSmsByEndpointIdAndSmsIdDelete**
> endpointSmsByEndpointIdAndSmsIdDelete($endpoint_id, $sms_id)

Cancel SMS

Cancel SMS that is buffered for endpoint and not yet delivered.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint
$sms_id = 1.2; // float | The numeric ID of an SMS

try {
    $apiInstance->endpointSmsByEndpointIdAndSmsIdDelete($endpoint_id, $sms_id);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointSmsByEndpointIdAndSmsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |
 **sms_id** | **float**| The numeric ID of an SMS |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointSmsByEndpointIdAndSmsIdGet**
> \CodericEcosystem\EmnifySdk\Model\GetdetailsofSMSresponse endpointSmsByEndpointIdAndSmsIdGet($endpoint_id, $sms_id)

SMS details

Returns details about an Endpoint SMS by SMS ID.  A description of the SMS statuses is as follows:  - `1` DELIVERY ATTEMPT PENDING - `2` IN PROGRESS - `3` BUFFERED - `4` DELIVERED - `5` FAILED - `6` EXPIRED - `7` CANCELED

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint
$sms_id = 1.2; // float | The numeric ID of an SMS

try {
    $result = $apiInstance->endpointSmsByEndpointIdAndSmsIdGet($endpoint_id, $sms_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointSmsByEndpointIdAndSmsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |
 **sms_id** | **float**| The numeric ID of an SMS |

### Return type

[**\CodericEcosystem\EmnifySdk\Model\GetdetailsofSMSresponse**](../Model/GetdetailsofSMSresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointSmsByIdGet**
> \CodericEcosystem\EmnifySdk\Model\ListofSMSresponse[] endpointSmsByIdGet($endpoint_id)

List sent and received SMS

Returns the list of SMS sent and received by this endpoint.  A description of the SMS statuses is as follows:  - `1` DELIVERY ATTEMPT PENDING - `2` IN PROGRESS - `3` BUFFERED - `4` DELIVERED - `5` FAILED - `6` EXPIRED - `7` CANCELED

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint

try {
    $result = $apiInstance->endpointSmsByIdGet($endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointSmsByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |

### Return type

[**\CodericEcosystem\EmnifySdk\Model\ListofSMSresponse[]**](../Model/ListofSMSresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointSmsByIdPost**
> endpointSmsByIdPost($body, $endpoint_id)

Send SMS to an Endpoint

Submit MT-SMS to specified endpoint.  You can provide following fields with this request:  * `payload` (String, required) - Message text to be sent, UTF-8 encoded * `source_address` (String, optional) - Source address of SMS: MSISDN, short code or alphanumeric String * `source_address_type` (Object optional) - Specify type of source address. Should contain an `id` property with a value of either:   - `145` - International   - `161` - National   - `208` - Alphanumeric * `expiry_date` (Date, optional) - Expiry date to retain the message until for successful sending. * `udh` (String, optional) - User Data Header encoded has hex-String. Concatenation of multiple SMS messages is done via this value. * `dcs` (Integer, optional) - Data Coding Scheme  #####  Concatenated SMSs  To concatenate SMS messages using `udh` properties, __multiple API calls__ should be made to this entrypoint.  More information on UDH properties can be found in the [3GPP 23.040 specification](https://portal.3gpp.org/desktopmodules/Specifications/SpecificationDetails.aspx?specificationId=747)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CodericEcosystem\EmnifySdk\Model\SubmitMTSMSrequest(); // \CodericEcosystem\EmnifySdk\Model\SubmitMTSMSrequest | 
$endpoint_id = 56; // int | Numeric ID of an endpoint

try {
    $apiInstance->endpointSmsByIdPost($body, $endpoint_id);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointSmsByIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CodericEcosystem\EmnifySdk\Model\SubmitMTSMSrequest**](../Model/SubmitMTSMSrequest.md)|  |
 **endpoint_id** | **int**| Numeric ID of an endpoint |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointStatsByIdGet**
> \CodericEcosystem\EmnifySdk\Model\RetrieveEndpointStatisticsresponse endpointStatsByIdGet($endpoint_id)

Endpoint Usage and Cost Statistics

**Warning: You can only retrieve data traffic costs for organizations without multi-inclusive volumes.**  Retrieves endpoint usage and cost statistics for a given ID. Usage statistics are sorted by `data` and `sms`.  Returns statistics from the following periods: * `last_month`: Previous billing month, from the first to last day (e.g., April 1-30, 2023, when you send the request sometime in May 2023). * `current_month`: Current month, with statistics calculated up to and including the date requested (e.g., May 1-8, 2023, when you sent the request on May 8, 2023). * `last_hour`: Previous 60 minutes, accumulated per minute and organized by data or SMS received by the device (`rx`) and transmitted by the device (`tx`).  **Note: `last_month` and `current_month` will only be included in the responses if traffic exists.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint

try {
    $result = $apiInstance->endpointStatsByIdGet($endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointStatsByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |

### Return type

[**\CodericEcosystem\EmnifySdk\Model\RetrieveEndpointStatisticsresponse**](../Model/RetrieveEndpointStatisticsresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointStatsDailyByIdGet**
> endpointStatsDailyByIdGet($endpoint_id, $start_date, $end_date)

Daily Endpoint Usage Statistics

**Warning: Data traffic cost statistics (`cost` field in the `data` object) have been deprecated.**  Retrieves SIM usage statistics accumulated per day. By default, the response includes statistics for the current month.  `start_date` and an `end_date` can be provided as query parameters to retrieve statistics for a specific time frame.  Example request: `/api/v1/endpoint/123/stats/daily?end_date=2019-03-21&start_date=2019-03-01`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint
$start_date = "start_date_example"; // string | Filters by start date, provided in a `start_date=YYYY-MM-DD` format.  **Note**: If you don't define an end date, the response will include 6 months of data, beginning on the current date.
$end_date = "end_date_example"; // string | Filters by end date, provided in an `end_date=YYYY-MM-DD` format.  **Note**: If you don't define a start date, the response will only return data from the month indicated in your end date.

try {
    $apiInstance->endpointStatsDailyByIdGet($endpoint_id, $start_date, $end_date);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointStatsDailyByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |
 **start_date** | **string**| Filters by start date, provided in a &#x60;start_date&#x3D;YYYY-MM-DD&#x60; format.  **Note**: If you don&#x27;t define an end date, the response will include 6 months of data, beginning on the current date. | [optional]
 **end_date** | **string**| Filters by end date, provided in an &#x60;end_date&#x3D;YYYY-MM-DD&#x60; format.  **Note**: If you don&#x27;t define a start date, the response will only return data from the month indicated in your end date. | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endpointStatusGet**
> \CodericEcosystem\EmnifySdk\Model\Status[] endpointStatusGet()

List Endpoint Statuses

Returns a list of available Endpoint Statuses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->endpointStatusGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->endpointStatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CodericEcosystem\EmnifySdk\Model\Status[]**](../Model/Status.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConnectivityInfoByEndpointId**
> \CodericEcosystem\EmnifySdk\Model\RetrieveConnectivityInformationresponse getConnectivityInfoByEndpointId($endpoint_id, $subscriber, $ussd)

Connectivity Info of an Endpoint

Returns the connectivity information for the specified endpoint by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint
$subscriber = true; // bool | If true, the Subscriber connectivity info is retrieved. Default is true, i.e. subscriber=true
$ussd = true; // bool | If true, the USSD connectivity info is retrieved. Default is false, i.e. ussd=false

try {
    $result = $apiInstance->getConnectivityInfoByEndpointId($endpoint_id, $subscriber, $ussd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->getConnectivityInfoByEndpointId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |
 **subscriber** | **bool**| If true, the Subscriber connectivity info is retrieved. Default is true, i.e. subscriber&#x3D;true | [optional]
 **ussd** | **bool**| If true, the USSD connectivity info is retrieved. Default is false, i.e. ussd&#x3D;false | [optional]

### Return type

[**\CodericEcosystem\EmnifySdk\Model\RetrieveConnectivityInformationresponse**](../Model/RetrieveConnectivityInformationresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEndpoints**
> \CodericEcosystem\EmnifySdk\Model\Endpoint[] getEndpoints($q, $sort, $page, $per_page)

List Endpoints

Returns a list of endpoints filtered, sorted, and paged according to query parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$q = "q_example"; // string | Filter parameter in `<field>:<criteria>` format. Expects a comma-separated list from the allowed fields:  * `status` * `service_profile` * `tariff_profile` * `id` * `name` * `created` * `last_updated` * `tags` * `ip_address` * `imei` * `iccid` * `iccid_with_luhn` * `eid` * `sim_status`
$sort = "sort_example"; // string | Sort parameter in `<operator><field>` format.  Sort properties according to a comma-separated list from the following fields:  * `id` * `name` * `status` * `last_updated` * `created` * `tags` * `ip_address` * `imei` * `eid` * `service_profile` * `tariff_profile`  If no sorting options are specified, the response will be sorted by `id`.  Supported operators: * `-`: Descending order * `+`: Ascending order  The response will be shown in ascending order if no operator is specified.
$page = 56; // int | Current page number
$per_page = 56; // int | Paging parameters defining the number of items per page

try {
    $result = $apiInstance->getEndpoints($q, $sort, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->getEndpoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Filter parameter in &#x60;&lt;field&gt;:&lt;criteria&gt;&#x60; format. Expects a comma-separated list from the allowed fields:  * &#x60;status&#x60; * &#x60;service_profile&#x60; * &#x60;tariff_profile&#x60; * &#x60;id&#x60; * &#x60;name&#x60; * &#x60;created&#x60; * &#x60;last_updated&#x60; * &#x60;tags&#x60; * &#x60;ip_address&#x60; * &#x60;imei&#x60; * &#x60;iccid&#x60; * &#x60;iccid_with_luhn&#x60; * &#x60;eid&#x60; * &#x60;sim_status&#x60; | [optional]
 **sort** | **string**| Sort parameter in &#x60;&lt;operator&gt;&lt;field&gt;&#x60; format.  Sort properties according to a comma-separated list from the following fields:  * &#x60;id&#x60; * &#x60;name&#x60; * &#x60;status&#x60; * &#x60;last_updated&#x60; * &#x60;created&#x60; * &#x60;tags&#x60; * &#x60;ip_address&#x60; * &#x60;imei&#x60; * &#x60;eid&#x60; * &#x60;service_profile&#x60; * &#x60;tariff_profile&#x60;  If no sorting options are specified, the response will be sorted by &#x60;id&#x60;.  Supported operators: * &#x60;-&#x60;: Descending order * &#x60;+&#x60;: Ascending order  The response will be shown in ascending order if no operator is specified. | [optional]
 **page** | **int**| Current page number | [optional]
 **per_page** | **int**| Paging parameters defining the number of items per page | [optional]

### Return type

[**\CodericEcosystem\EmnifySdk\Model\Endpoint[]**](../Model/Endpoint.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEndpointConnectivityById**
> updateEndpointConnectivityById($endpoint_id, $body)

Reset Endpoint Connectivity

Dispatch a message that causes either a `Cancel Location` or `Delete PDP Context` or both sent to the endpoint. The return of the call does not yet mean the event has been sent towards the device.  Master organisation types can reset any endpoints inside their organisation hierarchy, enterprises may only reset connectivity of own endpoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\EndpointApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$endpoint_id = 56; // int | Numeric ID of an endpoint
$body = new \CodericEcosystem\EmnifySdk\Model\UpdateEndpointConnectivityByIdRequest(); // \CodericEcosystem\EmnifySdk\Model\UpdateEndpointConnectivityByIdRequest | 

try {
    $apiInstance->updateEndpointConnectivityById($endpoint_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling EndpointApi->updateEndpointConnectivityById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **endpoint_id** | **int**| Numeric ID of an endpoint |
 **body** | [**\CodericEcosystem\EmnifySdk\Model\UpdateEndpointConnectivityByIdRequest**](../Model/UpdateEndpointConnectivityByIdRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

