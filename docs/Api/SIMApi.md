# Swagger\Client\SIMApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEsimInstallationCode**](SIMApi.md#getesiminstallationcode) | **GET** /api/v1/sim/{sim_id}/installation_code | Get the code to install an eSIM
[**registerSIMBatchByBIC**](SIMApi.md#registersimbatchbybic) | **PATCH** /api/v1/sim_batch/bic/{bic} | Register a given batch by BIC
[**sIMStatisticsDailyByIdGet**](SIMApi.md#simstatisticsdailybyidget) | **GET** /api/v1/sim/{sim_id}/stats/daily | Daily SIM Usage Statistics
[**simByIdDelete**](SIMApi.md#simbyiddelete) | **DELETE** /api/v1/sim/{sim_id} | Delete a SIM
[**simByIdGet**](SIMApi.md#simbyidget) | **GET** /api/v1/sim/{sim_id} | SIM Details
[**simByIdPatch**](SIMApi.md#simbyidpatch) | **PATCH** /api/v1/sim/{sim_id} | Update a SIM
[**simEventPagePerPageSortBySimIdAndQGet**](SIMApi.md#simeventpageperpagesortbysimidandqget) | **GET** /api/v1/sim/{sim_id}/event | List SIM Events
[**simPerPageSortByQAndPageGet**](SIMApi.md#simperpagesortbyqandpageget) | **GET** /api/v1/sim | List SIMs
[**simStatsByIdGet**](SIMApi.md#simstatsbyidget) | **GET** /api/v1/sim/{sim_id}/stats | SIM Usage and Cost Statistics
[**simStatusGet**](SIMApi.md#simstatusget) | **GET** /api/v1/sim/status | List SIM Statuses
[**validateSIMBatchByBIC**](SIMApi.md#validatesimbatchbybic) | **GET** /api/v1/sim_batch/bic/{bic} | Validate if a given batch can be registered by BIC

# **getEsimInstallationCode**
> \Swagger\Client\Model\ESIMInstallationCodeInJSONFormat getEsimInstallationCode($sim_id)

Get the code to install an eSIM

Returns the installation code for the specified eSIM assigned to the logged-in organisation. By default, a QR code in SVG image format will be returned.  The content type of the response can be controlled using the `Accept` header. Currently supported types are: - `image/svg+xml` (default) - `application/json` - `application/text`  Will return an error if requested for a physical SIM card.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sim_id = 56; // int | Numeric ID of a SIM

try {
    $result = $apiInstance->getEsimInstallationCode($sim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->getEsimInstallationCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sim_id** | **int**| Numeric ID of a SIM |

### Return type

[**\Swagger\Client\Model\ESIMInstallationCodeInJSONFormat**](../Model/ESIMInstallationCodeInJSONFormat.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registerSIMBatchByBIC**
> \Swagger\Client\Model\SuccessfulBatchActivation registerSIMBatchByBIC($bic, $body)

Register a given batch by BIC

Registers the given SIM batch, assigns all SIMs to the organisation, and sets the status of all contained SIMs to the given value.  If the `factory_test_mode_allowed` flag is set to true on the tariff plan assignment or it is enabled in the tariff plan, the SIM batch can be also registered with an initial status of `4 = Factory Test`, thus setting all of the contained SIMs to factory test status. In turn, the `activation_date` of these SIMs will not be set yet, but when the factory test volume is consumed, the auto activation date is reached or they are patched to `Activated` state afterwards.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bic = "bic_example"; // string | The bic of the sim batch
$body = new \Swagger\Client\Model\ActivateBatch(); // \Swagger\Client\Model\ActivateBatch | 

try {
    $result = $apiInstance->registerSIMBatchByBIC($bic, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->registerSIMBatchByBIC: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bic** | **string**| The bic of the sim batch |
 **body** | [**\Swagger\Client\Model\ActivateBatch**](../Model/ActivateBatch.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SuccessfulBatchActivation**](../Model/SuccessfulBatchActivation.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sIMStatisticsDailyByIdGet**
> sIMStatisticsDailyByIdGet($sim_id, $start_date, $end_date)

Daily SIM Usage Statistics

**Warning: Data traffic cost statistics (`cost` field in the `data` object) have been deprecated.**  Retrieves SIM usage statistics accumulated per day. By default, the response includes statistics for the current month.  `start_date` and an `end_date` can be provided as query parameters to retrieve statistics for a specific time frame.  Example request: `/api/v1/sim/123/stats/daily?end_date=2019-03-21&start_date=2019-03-01`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sim_id = 56; // int | Numeric ID of a SIM
$start_date = "start_date_example"; // string | Filters by start date, provided in a `start_date=YYYY-MM-DD` format.  **Note**: If you don't define an end date, the response will include 6 months of data, beginning on the current date.
$end_date = "end_date_example"; // string | Filters by end date, provided in an `end_date=YYYY-MM-DD` format.  **Note**: If you don't define a start date, the response will only return data from the month indicated in your end date.

try {
    $apiInstance->sIMStatisticsDailyByIdGet($sim_id, $start_date, $end_date);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->sIMStatisticsDailyByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sim_id** | **int**| Numeric ID of a SIM |
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

# **simByIdDelete**
> simByIdDelete($sim_id)

Delete a SIM

**Warning: Deleted SIMs cannot be recovered!**  Deletes a SIM.   The following restrictions apply when deleting SIMs: * SIMs with an assigned endpoint cannot be deleted. * Resellers cannot delete SIMs they have sold.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sim_id = 56; // int | Numeric ID of a SIM

try {
    $apiInstance->simByIdDelete($sim_id);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->simByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sim_id** | **int**| Numeric ID of a SIM |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **simByIdGet**
> \Swagger\Client\Model\SimEntry1 simByIdGet($sim_id)

SIM Details

Retrieves SIM details for a given ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sim_id = 56; // int | Numeric ID of a SIM

try {
    $result = $apiInstance->simByIdGet($sim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->simByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sim_id** | **int**| Numeric ID of a SIM |

### Return type

[**\Swagger\Client\Model\SimEntry1**](../Model/SimEntry1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **simByIdPatch**
> simByIdPatch($body, $sim_id)

Update a SIM

Updates a SIM resource.  You can provide the following fields with this request: * `issuer_org` (Object optional) - change to a direct child organization of the appropriate type * `reseller_org` (Object optional) - change to a direct child organization of the appropriate type or empty (`\"reseller_org\": { \"id\": null }` or `\"reseller_org\": {}`) * `customer_org` (Object optional) - change to own organization or a direct child organization of type \"Enterprise\" or empty (`\"customer_org\": { \"id\": null }` or `\"customer_org\": {}`) * `status` (Object optional) - update the SIM status  The following restrictions apply when updating SIMs: * Users from the issuer organization can change any updatable field * Users from the reseller organization can update the `reseller_org` or `customer_org` fields * Users from the customer organization can only update the `status` field * `issuer_org` can change to a child organization of the type \"Mobile Network Operator\" or \"Service Provider\" * `reseller_org` can change to child organization of the following types: \"Mobile Network Operator\", \"Service Provider\", or \"Reseller\" * `customer_org` can change to a child organization of an \"Enterprise\" type * `status` can update from \"Issued\" (`\"id\": 0`) to either \"Activated\" (`\"id\": 1`) or \"Factory Test\" (`\"id\": 4`) * `status` can only update from \"Factory Test\" (`\"id\": 4`) to \"Activated\" (`\"id\": 1`) * `status` can switch between \"Activated\" (`\"id\": 1`) and \"Suspended\" (`\"id\": 2`)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateSIM(); // \Swagger\Client\Model\UpdateSIM | 
$sim_id = 56; // int | Numeric ID of a SIM

try {
    $apiInstance->simByIdPatch($body, $sim_id);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->simByIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateSIM**](../Model/UpdateSIM.md)|  |
 **sim_id** | **int**| Numeric ID of a SIM |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **simEventPagePerPageSortBySimIdAndQGet**
> \Swagger\Client\Model\RetrieveEventsresponse[] simEventPagePerPageSortBySimIdAndQGet($sim_id, $page, $per_page, $sort, $q)

List SIM Events

Returns the list of events, filtered, sorted and paged according to query parameters.  **CAUTION** This API endpoint deviates from the specified conventions and may not return the same HTTP Codes as the higher layer call (`/api/v1/sim/{sim_id}`). In case the requested `{sim_id}` does not exist or is not accessible for the user, **HTTP 200** will be returned with empty **[]** as long as the provided `{sim_id}` is a number and all parameters are valid. Please take that into consideration when building automation on top of the error behaviour of this endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sim_id = 56; // int | Numeric ID of a SIM
$page = 56; // int | Current page number
$per_page = 56; // int | Paging parameters defining the number of items per page
$sort = "sort_example"; // string | Sort properties according to a comma separated list of accepted fields. Valid fields are:  * `id` - (**event id**) * `timestamp` - (**event timestamp**) * `source` - (**event source**) * `severity` - (**event severity**) * `alert` - (**alert status**) * `organisation` - (**organisation name**) * `user` - (**user id**) * `endpoint` - (**endpoint name**) * `tags` - (**endpoint tags**) * `ip_address` - (**endpoint ip_address**) * `iccid` - (**sim iccid**) * `imsi` - (**sim imsi**) * `type` - (**event type**)
$q = "q_example"; // string | Filter parameter in `<filter>:<value>` format. Multiple filters must be in the format of a comma separated list of the following fields:  * `type` (**event_type**, numerical) * `source` (**event_type**, numerical, e.g. 0 = Network), 1 = Policy Control, 2 = API) * `severity` (**event_severity**, numerical, e.g. 0 = Info, 1 = Warn), 2 = Critical) * `alert` (boolean, e.g. true, false) * `description` (**event description**, string) * `organisation` (**organisation name**, string) * `user` (**user name**, string) * `endpoint` (**endpoint name**, string) * `tags` (**endpoint tags**, string) * `ip_address` (**endpoint IP address**, valid IPv4/IPv6 address) * `imei` (**endpoint imei**, numerical string) * `iccid` (**sim iccid**, numerical string) * `imsi` (**sim imsi**, numerical string) * `from` (**date**, format `YYYY-MM-DDTHH:mm:ssZ`, __only valid with until!__) * `until` (**date**, format `YYYY-MM-DDTHH:mm:ssZ`, __only valid with from!__) * `timestamp` (**date**, format `YYYY-MM-DDTHH:mm:ssZ`, for querying events of 1 day, deprecated in future)

try {
    $result = $apiInstance->simEventPagePerPageSortBySimIdAndQGet($sim_id, $page, $per_page, $sort, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->simEventPagePerPageSortBySimIdAndQGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sim_id** | **int**| Numeric ID of a SIM |
 **page** | **int**| Current page number | [optional]
 **per_page** | **int**| Paging parameters defining the number of items per page | [optional]
 **sort** | **string**| Sort properties according to a comma separated list of accepted fields. Valid fields are:  * &#x60;id&#x60; - (**event id**) * &#x60;timestamp&#x60; - (**event timestamp**) * &#x60;source&#x60; - (**event source**) * &#x60;severity&#x60; - (**event severity**) * &#x60;alert&#x60; - (**alert status**) * &#x60;organisation&#x60; - (**organisation name**) * &#x60;user&#x60; - (**user id**) * &#x60;endpoint&#x60; - (**endpoint name**) * &#x60;tags&#x60; - (**endpoint tags**) * &#x60;ip_address&#x60; - (**endpoint ip_address**) * &#x60;iccid&#x60; - (**sim iccid**) * &#x60;imsi&#x60; - (**sim imsi**) * &#x60;type&#x60; - (**event type**) | [optional]
 **q** | **string**| Filter parameter in &#x60;&lt;filter&gt;:&lt;value&gt;&#x60; format. Multiple filters must be in the format of a comma separated list of the following fields:  * &#x60;type&#x60; (**event_type**, numerical) * &#x60;source&#x60; (**event_type**, numerical, e.g. 0 &#x3D; Network), 1 &#x3D; Policy Control, 2 &#x3D; API) * &#x60;severity&#x60; (**event_severity**, numerical, e.g. 0 &#x3D; Info, 1 &#x3D; Warn), 2 &#x3D; Critical) * &#x60;alert&#x60; (boolean, e.g. true, false) * &#x60;description&#x60; (**event description**, string) * &#x60;organisation&#x60; (**organisation name**, string) * &#x60;user&#x60; (**user name**, string) * &#x60;endpoint&#x60; (**endpoint name**, string) * &#x60;tags&#x60; (**endpoint tags**, string) * &#x60;ip_address&#x60; (**endpoint IP address**, valid IPv4/IPv6 address) * &#x60;imei&#x60; (**endpoint imei**, numerical string) * &#x60;iccid&#x60; (**sim iccid**, numerical string) * &#x60;imsi&#x60; (**sim imsi**, numerical string) * &#x60;from&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with until!__) * &#x60;until&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with from!__) * &#x60;timestamp&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, for querying events of 1 day, deprecated in future) | [optional]

### Return type

[**\Swagger\Client\Model\RetrieveEventsresponse[]**](../Model/RetrieveEventsresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **simPerPageSortByQAndPageGet**
> \Swagger\Client\Model\SimEntry[] simPerPageSortByQAndPageGet($page, $per_page, $q, $sort)

List SIMs

Returns a list of SIMs filtered, sorted, and paged according to query parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Current page number
$per_page = 56; // int | Paging parameters defining the number of items per page
$q = "q_example"; // string | Filter parameter in `<field>:<criteria>` format. Expects a comma-separated list from the allowed fields:  * `id` * `issuer_org` * `reseller_org` * `customer_org` * `iccid` * `iccid_with_luhn` * `status` * `production_date` * `imsi` * `msisdn` * `endpoint` * `model` * `eid`
$sort = "sort_example"; // string | Sort parameter in `<operator><field>` format.  Sort properties according to a comma-separated list from the allowed fields:  * `id` * `issuer_org` * `reseller_org` * `customer_org` * `iccid` * `eid` * `status` * `production_date` * `endpoint` * `model`  If no sorting options are specified, the response will be sorted by `id`.  Supported operators: * `-`: Descending order * `+`: Ascending order  The response will be shown in ascending order if no operator is specified.

try {
    $result = $apiInstance->simPerPageSortByQAndPageGet($page, $per_page, $q, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->simPerPageSortByQAndPageGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Current page number | [optional]
 **per_page** | **int**| Paging parameters defining the number of items per page | [optional]
 **q** | **string**| Filter parameter in &#x60;&lt;field&gt;:&lt;criteria&gt;&#x60; format. Expects a comma-separated list from the allowed fields:  * &#x60;id&#x60; * &#x60;issuer_org&#x60; * &#x60;reseller_org&#x60; * &#x60;customer_org&#x60; * &#x60;iccid&#x60; * &#x60;iccid_with_luhn&#x60; * &#x60;status&#x60; * &#x60;production_date&#x60; * &#x60;imsi&#x60; * &#x60;msisdn&#x60; * &#x60;endpoint&#x60; * &#x60;model&#x60; * &#x60;eid&#x60; | [optional]
 **sort** | **string**| Sort parameter in &#x60;&lt;operator&gt;&lt;field&gt;&#x60; format.  Sort properties according to a comma-separated list from the allowed fields:  * &#x60;id&#x60; * &#x60;issuer_org&#x60; * &#x60;reseller_org&#x60; * &#x60;customer_org&#x60; * &#x60;iccid&#x60; * &#x60;eid&#x60; * &#x60;status&#x60; * &#x60;production_date&#x60; * &#x60;endpoint&#x60; * &#x60;model&#x60;  If no sorting options are specified, the response will be sorted by &#x60;id&#x60;.  Supported operators: * &#x60;-&#x60;: Descending order * &#x60;+&#x60;: Ascending order  The response will be shown in ascending order if no operator is specified. | [optional]

### Return type

[**\Swagger\Client\Model\SimEntry[]**](../Model/SimEntry.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **simStatsByIdGet**
> \Swagger\Client\Model\ResponseSchemaForSIMStatistics[] simStatsByIdGet($sim_id)

SIM Usage and Cost Statistics

**Warning: You can only retrieve data traffic costs for organizations without multi-inclusive volumes.**  Retrieves SIM usage and cost statistics for a given ID. Usage statistics are sorted by `data` and `sms`.  Returns statistics from the following periods: * `last_month`: Previous billing month, from the first to last day (e.g., April 1-30, 2023, when you send the request sometime in May 2023). * `current_month`: Current month, with statistics calculated up to and including the date requested (e.g., May 1-8, 2023, when you sent the request on May 8, 2023). * `last_hour`: Previous 60 minutes, accumulated per minute and organized by data or SMS received by the device (`rx`) and transmitted by the device (`tx`).  **Note: `last_month` and `current_month` will only be included in the responses if traffic exists..**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sim_id = 56; // int | Numeric ID of a SIM

try {
    $result = $apiInstance->simStatsByIdGet($sim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->simStatsByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sim_id** | **int**| Numeric ID of a SIM |

### Return type

[**\Swagger\Client\Model\ResponseSchemaForSIMStatistics[]**](../Model/ResponseSchemaForSIMStatistics.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **simStatusGet**
> \Swagger\Client\Model\ListofAllAvailableSIMStatusesresponse[] simStatusGet()

List SIM Statuses

Returns a list of available [SIM statuses](sim.html#sim-status-object).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->simStatusGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->simStatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ListofAllAvailableSIMStatusesresponse[]**](../Model/ListofAllAvailableSIMStatusesresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateSIMBatchByBIC**
> \Swagger\Client\Model\ResponseOfActivatableSIMBatch validateSIMBatchByBIC($bic)

Validate if a given batch can be registered by BIC

Checks the given BIC code and the contained SIMs if they can be registered.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SIMApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bic = "bic_example"; // string | The bic of the sim batch

try {
    $result = $apiInstance->validateSIMBatchByBIC($bic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SIMApi->validateSIMBatchByBIC: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bic** | **string**| The bic of the sim batch |

### Return type

[**\Swagger\Client\Model\ResponseOfActivatableSIMBatch**](../Model/ResponseOfActivatableSIMBatch.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

