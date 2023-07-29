# Emnify\EmnifySdk\IPAddressSpacesApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ipAddressSpaceAvailableByIpAddressVersionGet**](IPAddressSpacesApi.md#ipaddressspaceavailablebyipaddressversionget) | **GET** /api/v1/ip_address_space/available | Get Random Address Spaces
[**ipAddressSpaceByIdDelete**](IPAddressSpacesApi.md#ipaddressspacebyiddelete) | **DELETE** /api/v1/ip_address_space/{address_space_id} | Release an IP Address Space from an Organisation
[**ipAddressSpaceByIdPut**](IPAddressSpacesApi.md#ipaddressspacebyidput) | **PUT** /api/v1/ip_address_space/{address_space_id} | Assign an IP Address Space to an Organisation
[**ipAddressSpaceGet**](IPAddressSpacesApi.md#ipaddressspaceget) | **GET** /api/v1/ip_address_space | List IP Address Spaces

# **ipAddressSpaceAvailableByIpAddressVersionGet**
> \Emnify\EmnifySdk\Model\RetrieveAvailableAddressSpacesresponse[] ipAddressSpaceAvailableByIpAddressVersionGet($ip_address_version)

Get Random Address Spaces

Provides a list of 10 random available address spaces (unassigned to any organisation). As the list is generated for each request, two successive requests will have different results.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IPAddressSpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ip_address_version = 1.2; // float | filter by IPv4 which is default or by IPv6. Example: ip_address_version=4 or ip_address_version=6

try {
    $result = $apiInstance->ipAddressSpaceAvailableByIpAddressVersionGet($ip_address_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IPAddressSpacesApi->ipAddressSpaceAvailableByIpAddressVersionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ip_address_version** | **float**| filter by IPv4 which is default or by IPv6. Example: ip_address_version&#x3D;4 or ip_address_version&#x3D;6 | [optional]

### Return type

[**\Emnify\EmnifySdk\Model\RetrieveAvailableAddressSpacesresponse[]**](../Model/RetrieveAvailableAddressSpacesresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ipAddressSpaceByIdDelete**
> ipAddressSpaceByIdDelete($address_space_id)

Release an IP Address Space from an Organisation

Release the IP address space from association with the user's organisation.  Note that IP address spaces can only be removed, if the IP address space is not used on any of the organisations endpoints.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IPAddressSpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_space_id = 1.2; // float | ID of the IP address space to be assigned

try {
    $apiInstance->ipAddressSpaceByIdDelete($address_space_id);
} catch (Exception $e) {
    echo 'Exception when calling IPAddressSpacesApi->ipAddressSpaceByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_space_id** | **float**| ID of the IP address space to be assigned |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ipAddressSpaceByIdPut**
> ipAddressSpaceByIdPut($address_space_id)

Assign an IP Address Space to an Organisation

The IP address space is assigned to the user's organisation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IPAddressSpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_space_id = 1.2; // float | ID of the IP address space to be assigned

try {
    $apiInstance->ipAddressSpaceByIdPut($address_space_id);
} catch (Exception $e) {
    echo 'Exception when calling IPAddressSpacesApi->ipAddressSpaceByIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_space_id** | **float**| ID of the IP address space to be assigned |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **ipAddressSpaceGet**
> \Emnify\EmnifySdk\Model\RetrieveownIPAddressSpacesresponse[] ipAddressSpaceGet()

List IP Address Spaces

Returns the list of IP address space for the requesting user's organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\IPAddressSpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->ipAddressSpaceGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IPAddressSpacesApi->ipAddressSpaceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Emnify\EmnifySdk\Model\RetrieveownIPAddressSpacesresponse[]**](../Model/RetrieveownIPAddressSpacesresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

