# Swagger\Client\EventsApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventTypeGet**](EventsApi.md#eventtypeget) | **GET** /api/v1/event/type | List Event Types
[**getEvents**](EventsApi.md#getevents) | **GET** /api/v1/event | List Events

# **eventTypeGet**
> \Swagger\Client\Model\RetrieveEventTypesresponse[] eventTypeGet()

List Event Types

Provides the list of event_types (lookup).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->eventTypeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RetrieveEventTypesresponse[]**](../Model/RetrieveEventTypesresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEvents**
> \Swagger\Client\Model\Event[] getEvents($page, $per_page, $sort, $q)

List Events

Returns the list of events, filtered, sorted and paged according to query parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Current page number
$per_page = 56; // int | Paging parameters defining the number of items per page
$sort = "sort_example"; // string | Sort properties according to a comma separated list of accepted fields. Valid fields are:  * `id` - (**event id**) * `timestamp` - (**event timestamp**) * `source` - (**event source**) * `severity` - (**event severity**) * `alert` - (**alert status**) * `organisation` - (**organisation name**) * `user` - (**user id**) * `endpoint` - (**endpoint name**) * `tags` - (**endpoint tags**) * `ip_address` - (**endpoint ip_address**) * `iccid` - (**sim iccid**) * `imsi` - (**sim imsi**) * `type` - (**event type**)
$q = "q_example"; // string | Filter parameter in `<filter>:<value>` format. Multiple filters must be in the format of a comma separated list of the following fields:  * `type` (**event_type**, numerical) * `source` (**event_type**, numerical, e.g. 0 = Network), 1 = Policy Control, 2 = API) * `severity` (**event_severity**, numerical, e.g. 0 = Info, 1 = Warn), 2 = Critical) * `alert` (boolean, e.g. true, false) * `description` (**event description**, string) * `organisation` (**organisation name**, string) * `user` (**user name**, string) * `endpoint` (**endpoint name**, string) * `tags` (**endpoint tags**, string) * `ip_address` (**endpoint IP address**, valid IPv4/IPv6 address) * `imei` (**endpoint imei**, numerical string) * `iccid` (**sim iccid**, numerical string) * `imsi` (**sim imsi**, numerical string) * `from` (**date**, format `YYYY-MM-DDTHH:mm:ssZ`, __only valid with until!__) * `until` (**date**, format `YYYY-MM-DDTHH:mm:ssZ`, __only valid with from!__) * `timestamp` (**date**, format `YYYY-MM-DDTHH:mm:ssZ`, for querying events of 1 day, deprecated in future)

try {
    $result = $apiInstance->getEvents($page, $per_page, $sort, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Current page number | [optional]
 **per_page** | **int**| Paging parameters defining the number of items per page | [optional]
 **sort** | **string**| Sort properties according to a comma separated list of accepted fields. Valid fields are:  * &#x60;id&#x60; - (**event id**) * &#x60;timestamp&#x60; - (**event timestamp**) * &#x60;source&#x60; - (**event source**) * &#x60;severity&#x60; - (**event severity**) * &#x60;alert&#x60; - (**alert status**) * &#x60;organisation&#x60; - (**organisation name**) * &#x60;user&#x60; - (**user id**) * &#x60;endpoint&#x60; - (**endpoint name**) * &#x60;tags&#x60; - (**endpoint tags**) * &#x60;ip_address&#x60; - (**endpoint ip_address**) * &#x60;iccid&#x60; - (**sim iccid**) * &#x60;imsi&#x60; - (**sim imsi**) * &#x60;type&#x60; - (**event type**) | [optional]
 **q** | **string**| Filter parameter in &#x60;&lt;filter&gt;:&lt;value&gt;&#x60; format. Multiple filters must be in the format of a comma separated list of the following fields:  * &#x60;type&#x60; (**event_type**, numerical) * &#x60;source&#x60; (**event_type**, numerical, e.g. 0 &#x3D; Network), 1 &#x3D; Policy Control, 2 &#x3D; API) * &#x60;severity&#x60; (**event_severity**, numerical, e.g. 0 &#x3D; Info, 1 &#x3D; Warn), 2 &#x3D; Critical) * &#x60;alert&#x60; (boolean, e.g. true, false) * &#x60;description&#x60; (**event description**, string) * &#x60;organisation&#x60; (**organisation name**, string) * &#x60;user&#x60; (**user name**, string) * &#x60;endpoint&#x60; (**endpoint name**, string) * &#x60;tags&#x60; (**endpoint tags**, string) * &#x60;ip_address&#x60; (**endpoint IP address**, valid IPv4/IPv6 address) * &#x60;imei&#x60; (**endpoint imei**, numerical string) * &#x60;iccid&#x60; (**sim iccid**, numerical string) * &#x60;imsi&#x60; (**sim imsi**, numerical string) * &#x60;from&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with until!__) * &#x60;until&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, __only valid with from!__) * &#x60;timestamp&#x60; (**date**, format &#x60;YYYY-MM-DDTHH:mm:ssZ&#x60;, for querying events of 1 day, deprecated in future) | [optional]

### Return type

[**\Swagger\Client\Model\Event[]**](../Model/Event.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

