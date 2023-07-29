# Swagger\Client\LookupsApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**breakoutRegionGet**](LookupsApi.md#breakoutregionget) | **GET** /api/v1/breakout_region | List Breakout Regions
[**countryGet**](LookupsApi.md#countryget) | **GET** /api/v1/country | List Country Codes
[**currencyGet**](LookupsApi.md#currencyget) | **GET** /api/v1/currency | List Currencies
[**dataBlocksizeGet**](LookupsApi.md#datablocksizeget) | **GET** /api/v1/data_blocksize | List Data blocksizes
[**dataThrottleGet**](LookupsApi.md#datathrottleget) | **GET** /api/v1/data_throttle | List Data Throttles
[**esmeInterfaceTypeGet**](LookupsApi.md#esmeinterfacetypeget) | **GET** /api/v1/esme_interface_type | List ESME Interface Types
[**listServiceLevels**](LookupsApi.md#listservicelevels) | **GET** /api/v1/service_level | Get list of service levels
[**ratType**](LookupsApi.md#rattype) | **GET** /api/v1/rat_type | List RAT types

# **breakoutRegionGet**
> \Swagger\Client\Model\RetrieveAvailableBreakoutRegionsresponse[] breakoutRegionGet()

List Breakout Regions

Provides the list of available breakout regions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\LookupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->breakoutRegionGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupsApi->breakoutRegionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RetrieveAvailableBreakoutRegionsresponse[]**](../Model/RetrieveAvailableBreakoutRegionsresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countryGet**
> \Swagger\Client\Model\RetrieveAvailableCountriesresponse[] countryGet($geographic)

List Country Codes

Provides the list of available countries (lookup).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\LookupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$geographic = true; // bool | Filters the country list for geographic countries only. This will exclude duplicate countries with different MCCs, like `India MCC 405` or `United States (311)`.

try {
    $result = $apiInstance->countryGet($geographic);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupsApi->countryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **geographic** | **bool**| Filters the country list for geographic countries only. This will exclude duplicate countries with different MCCs, like &#x60;India MCC 405&#x60; or &#x60;United States (311)&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\RetrieveAvailableCountriesresponse[]**](../Model/RetrieveAvailableCountriesresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currencyGet**
> \Swagger\Client\Model\RetrieveAvailableCurrenciesresponse[] currencyGet()

List Currencies

Provides the list of available currencies (lookup).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\LookupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->currencyGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupsApi->currencyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RetrieveAvailableCurrenciesresponse[]**](../Model/RetrieveAvailableCurrenciesresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataBlocksizeGet**
> \Swagger\Client\Model\RetrieveAvailableDataBlocksizesresponse[] dataBlocksizeGet()

List Data blocksizes

Provides the list of available data blocksizes (lookup).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\LookupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->dataBlocksizeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupsApi->dataBlocksizeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RetrieveAvailableDataBlocksizesresponse[]**](../Model/RetrieveAvailableDataBlocksizesresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataThrottleGet**
> \Swagger\Client\Model\RetrieveAvailableDataThrottlesresponse[] dataThrottleGet()

List Data Throttles

Provides the list of available data throttles (lookup).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\LookupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->dataThrottleGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupsApi->dataThrottleGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RetrieveAvailableDataThrottlesresponse[]**](../Model/RetrieveAvailableDataThrottlesresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **esmeInterfaceTypeGet**
> \Swagger\Client\Model\RetrieveAvailableESMEInterfaceTypesresponse[] esmeInterfaceTypeGet()

List ESME Interface Types

Provides the list of available ESME interface types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\LookupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->esmeInterfaceTypeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupsApi->esmeInterfaceTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RetrieveAvailableESMEInterfaceTypesresponse[]**](../Model/RetrieveAvailableESMEInterfaceTypesresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listServiceLevels**
> \Swagger\Client\Model\Apiv1organisationorgIdtariffPlanTariffPlanServiceLevel[] listServiceLevels()

Get list of service levels

Returns a list of service levels that can be configured on a tariff plan level. For non-enterprise organisations, only own service levels will be returned. For enterprise organisations, only the service levels of the parent organisation will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\LookupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listServiceLevels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupsApi->listServiceLevels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Apiv1organisationorgIdtariffPlanTariffPlanServiceLevel[]**](../Model/Apiv1organisationorgIdtariffPlanTariffPlanServiceLevel.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ratType**
> \Swagger\Client\Model\RATType[] ratType($blacklistable, $limitable)

List RAT types

Returns a list of supported RAT types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\LookupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$blacklistable = true; // bool | Returns a list of RAT types that can be blacklisted for network coverage data.  `/api/v1/rat_type?blacklistable`
$limitable = true; // bool | Returns a list of RAT types that can be limited for a pdp_context_definition  `/api/v1/rat_type?limitable`

try {
    $result = $apiInstance->ratType($blacklistable, $limitable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LookupsApi->ratType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blacklistable** | **bool**| Returns a list of RAT types that can be blacklisted for network coverage data.  &#x60;/api/v1/rat_type?blacklistable&#x60; | [optional]
 **limitable** | **bool**| Returns a list of RAT types that can be limited for a pdp_context_definition  &#x60;/api/v1/rat_type?limitable&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\RATType[]**](../Model/RATType.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

