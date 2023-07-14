# CodericEcosystem\EmnifySdk\FakeClassnameTags123Api

All URIs are relative to *http://petstore.swagger.io:80/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**testClassname**](FakeClassnameTags123Api.md#testClassname) | **PATCH** /fake_classname_test | To test class name in snake case


# **testClassname**
> \CodericEcosystem\EmnifySdk\Model\Client testClassname($body)

To test class name in snake case

To test class name in snake case

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key_query
$config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()->setApiKey('api_key_query', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key_query', 'Bearer');

$apiInstance = new CodericEcosystem\EmnifySdk\Api\FakeClassnameTags123Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CodericEcosystem\EmnifySdk\Model\Client(); // \CodericEcosystem\EmnifySdk\Model\Client | client model

try {
    $result = $apiInstance->testClassname($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FakeClassnameTags123Api->testClassname: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CodericEcosystem\EmnifySdk\Model\Client**](../Model/Client.md)| client model |

### Return type

[**\CodericEcosystem\EmnifySdk\Model\Client**](../Model/Client.md)

### Authorization

[api_key_query](../../README.md#api_key_query)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

