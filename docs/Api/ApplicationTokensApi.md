# Swagger\Client\ApplicationTokensApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applicationTokenByIdPatch**](ApplicationTokensApi.md#applicationtokenbyidpatch) | **PATCH** /api/v1/application_token/{app_token_id} | Update Application Token
[**applicationTokenGet**](ApplicationTokensApi.md#applicationtokenget) | **GET** /api/v1/application_token | List Application Tokens
[**applicationTokenPost**](ApplicationTokensApi.md#applicationtokenpost) | **POST** /api/v1/application_token | Create Application Token

# **applicationTokenByIdPatch**
> applicationTokenByIdPatch($body, $app_token_id)

Update Application Token

The `description` of the token may be updated and the Application Token can be revoked by updating the `status`. The possible statuses of tokens are  * `\"id\": 0` - Activated * `\"id\": 1` - Revoked

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ApplicationTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApplicationToken(); // \Swagger\Client\Model\ApplicationToken | 
$app_token_id = 1.2; // float | application token ID

try {
    $apiInstance->applicationTokenByIdPatch($body, $app_token_id);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationTokensApi->applicationTokenByIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApplicationToken**](../Model/ApplicationToken.md)|  |
 **app_token_id** | **float**| application token ID |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationTokenGet**
> \Swagger\Client\Model\ListofApplicationTokensresponse[] applicationTokenGet()

List Application Tokens

Returns the list of application tokens for the organisation of the requesting user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ApplicationTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->applicationTokenGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationTokensApi->applicationTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ListofApplicationTokensresponse[]**](../Model/ListofApplicationTokensresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applicationTokenPost**
> \Swagger\Client\Model\CreateApplicationTokenresponse applicationTokenPost($body)

Create Application Token

Creates a new application token. ID must not be specified, as it is auto-generated and returned in case of a successful JSON response. You can provide following fields with this request:  * `description` (String, optional) * `expiry_date` with optional time + time zone (String, optional) * `ip` - IP Address in CIDR notation (String, optional)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ApplicationTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateApplicationTokenrequest(); // \Swagger\Client\Model\CreateApplicationTokenrequest | 

try {
    $result = $apiInstance->applicationTokenPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationTokensApi->applicationTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateApplicationTokenrequest**](../Model/CreateApplicationTokenrequest.md)|  |

### Return type

[**\Swagger\Client\Model\CreateApplicationTokenresponse**](../Model/CreateApplicationTokenresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

