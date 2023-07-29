# Emnify\EmnifySdk\OperatorApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**operatorGet**](OperatorApi.md#operatorget) | **GET** /api/v1/operator | List Operators

# **operatorGet**
> \Emnify\EmnifySdk\Model\InlineResponse2002[] operatorGet()

List Operators

Returns a collection of existing operators.  It will return an array of items with following properties:  * `id`: identifier of this operator * `name`: the official name of the operator * `name_and_country`: Name / Country (for easy access in the UI) * `country`: country object with the nested country `id` * `mnc`: Array of Mobile Network Codes (MNCs) * `tapcode`: Array of TAP Codes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\OperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->operatorGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperatorApi->operatorGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Emnify\EmnifySdk\Model\InlineResponse2002[]**](../Model/InlineResponse2002.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

