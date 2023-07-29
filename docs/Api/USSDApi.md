# Emnify\EmnifySdk\USSDApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**endpointUssdByIdPost**](USSDApi.md#endpointussdbyidpost) | **POST** /api/v1/endpoint/{endpoint_id}/ussd | Create USSD dialog

# **endpointUssdByIdPost**
> \Emnify\EmnifySdk\Model\StartingaUSSDDialogresponse endpointUssdByIdPost($body, $endpoint_id)

Create USSD dialog

Your application may start a Network-Initiated (NI) USSD Dialog for an endpoint. If the endpoint has an IMSI online (location data is available and valid for one of its IMSIs), then a session-id is generated and returned. This session-id will be used in all subsequent USSD communication between your application and the endpoint. You must provide following fields with this request:  * `ussd-begin` (Object required) containing  \"type\" and \"message\" * `type` (String required) can be \"request\" or \"notification\" * `message` (Object required) including encoding (String optional) e.g. \"default\" (where default is gsm7) or \"ucs2\", body (String required).  Depending on the encoding, the maximum length of the body is 164 (default) or 72 (ucs2).  If the USSD Dialog cannot be initiated, possible errors include: * \"Unknown Subscriber Error\" * \"Endpoint Not Found\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\USSDApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emnify\EmnifySdk\Model\StartingaUSSDDialogrequest(); // \Emnify\EmnifySdk\Model\StartingaUSSDDialogrequest | 
$endpoint_id = 56; // int | Numeric ID of an endpoint

try {
    $result = $apiInstance->endpointUssdByIdPost($body, $endpoint_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling USSDApi->endpointUssdByIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emnify\EmnifySdk\Model\StartingaUSSDDialogrequest**](../Model/StartingaUSSDDialogrequest.md)|  |
 **endpoint_id** | **int**| Numeric ID of an endpoint |

### Return type

[**\Emnify\EmnifySdk\Model\StartingaUSSDDialogresponse**](../Model/StartingaUSSDDialogresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

