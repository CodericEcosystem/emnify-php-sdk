# Swagger\Client\ServiceLookupsAndConfigurationApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dnsByIdDelete**](ServiceLookupsAndConfigurationApi.md#dnsbyiddelete) | **DELETE** /api/v1/dns/{dns_id} | Delete DNS config
[**dnsGet**](ServiceLookupsAndConfigurationApi.md#dnsget) | **GET** /api/v1/dns | List DNS Configs
[**dnsPost**](ServiceLookupsAndConfigurationApi.md#dnspost) | **POST** /api/v1/dns | Create DNS config
[**serviceGet**](ServiceLookupsAndConfigurationApi.md#serviceget) | **GET** /api/v1/service | List Services
[**serviceTrafficLimitByIdGet**](ServiceLookupsAndConfigurationApi.md#servicetrafficlimitbyidget) | **GET** /api/v1/service/{service_id}/traffic_limit | Get Service Traffic Limit
[**trafficLimitGet**](ServiceLookupsAndConfigurationApi.md#trafficlimitget) | **GET** /api/v1/traffic_limit | List Traffic Limits

# **dnsByIdDelete**
> dnsByIdDelete($dns_id)

Delete DNS config

Delete a DNS configuration object by ID.  __NOTE:__ A DNS config object cannot be deleted if it is in use by at least one Service Profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ServiceLookupsAndConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dns_id = 1.2; // float | DNS configuration ID

try {
    $apiInstance->dnsByIdDelete($dns_id);
} catch (Exception $e) {
    echo 'Exception when calling ServiceLookupsAndConfigurationApi->dnsByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dns_id** | **float**| DNS configuration ID |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dnsGet**
> \Swagger\Client\Model\InlineResponse2004[] dnsGet()

List DNS Configs

Retrieves a list of DNS configurations. DNS settings can be applied to a service profile and endpoints which use this service profile will have the associated DNS settings applied.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ServiceLookupsAndConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->dnsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceLookupsAndConfigurationApi->dnsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2004[]**](../Model/InlineResponse2004.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dnsPost**
> dnsPost($body)

Create DNS config

Creates a DNS configuration object. The DNS config can be applied to a service profile and all endpoints which use that service profile will have the associated DNS settings applied. DNS changes are instantly applied to any __new PDP context__; already connected devices with established PDPs will continue to use the previous nameserver config until the next time they reconnect.  Primary and secondary nameservers and IP version (`4` for IPV4 or `6` for IPV6) must be specified with this request.  __NOTE:__ The system currently falls back to IPV4 for the actually-enforced networking settings of endpoints, therefore __the IPV6 parameter will be ignored__ when provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ServiceLookupsAndConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateaDNSentryrequest(); // \Swagger\Client\Model\CreateaDNSentryrequest | 

try {
    $apiInstance->dnsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ServiceLookupsAndConfigurationApi->dnsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateaDNSentryrequest**](../Model/CreateaDNSentryrequest.md)|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceGet**
> \Swagger\Client\Model\RetrieveAvailableServicesresponse[] serviceGet()

List Services

Retrieves a collection of available services. Services are read only objects.  Service objects contain expanded traffic limit nested objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ServiceLookupsAndConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->serviceGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceLookupsAndConfigurationApi->serviceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RetrieveAvailableServicesresponse[]**](../Model/RetrieveAvailableServicesresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceTrafficLimitByIdGet**
> \Swagger\Client\Model\InlineResponse2003[] serviceTrafficLimitByIdGet($service_id)

Get Service Traffic Limit

Traffic limits are system configuration parameters defined for a single service. Traffic limits do not have direct effect, but have to be explicitly assigned to an endpoint or a service profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ServiceLookupsAndConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_id = 1.2; // float | The Numeric ID of a Service, may be:  * `0`  - USSD  * `3`  - Voice, __warning:__ voice services are not available!  * `6`  - SMS MT  * `32` - SMS MO  * `38` - Data

try {
    $result = $apiInstance->serviceTrafficLimitByIdGet($service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceLookupsAndConfigurationApi->serviceTrafficLimitByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **float**| The Numeric ID of a Service, may be:  * &#x60;0&#x60;  - USSD  * &#x60;3&#x60;  - Voice, __warning:__ voice services are not available!  * &#x60;6&#x60;  - SMS MT  * &#x60;32&#x60; - SMS MO  * &#x60;38&#x60; - Data |

### Return type

[**\Swagger\Client\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trafficLimitGet**
> \Swagger\Client\Model\RetrieveavailableTrafficLimitsresponse[] trafficLimitGet()

List Traffic Limits

Retrieves a list of available traffic limits.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ServiceLookupsAndConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->trafficLimitGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceLookupsAndConfigurationApi->trafficLimitGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RetrieveavailableTrafficLimitsresponse[]**](../Model/RetrieveavailableTrafficLimitsresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

