# Swagger\Client\CloudConnectApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCloudConnectAttachmentTGW**](CloudConnectApi.md#createcloudconnectattachmenttgw) | **POST** /api/v1/cnc/breakout/tgw | Create a CloudConnect attachment via Transit Gateway
[**createCloudConnectAttachmentVPN**](CloudConnectApi.md#createcloudconnectattachmentvpn) | **POST** /api/v1/cnc/breakout/vpn | Create a CloudConnect attachment via IPSec VPN
[**deleteCloudConnectAttachment**](CloudConnectApi.md#deletecloudconnectattachment) | **DELETE** /api/v1/cnc/breakout/{cloudconnect_attachment_id} | Delete a specific CloudConnect attachment
[**getCloudConnectAttachmentById**](CloudConnectApi.md#getcloudconnectattachmentbyid) | **GET** /api/v1/cnc/breakout/{cloudconnect_attachment_id} | View details of a CloudConnect attachment
[**getCloudConnectAttachments**](CloudConnectApi.md#getcloudconnectattachments) | **GET** /api/v1/cnc/breakout | List all CloudConnect attachments of an organisation
[**getCloudConnectAvailableRegionsByBreakoutType**](CloudConnectApi.md#getcloudconnectavailableregionsbybreakouttype) | **GET** /api/v1/cnc/breakout_type/{breakout_type_id}/available_region | Get list of available CloudConnect regions by breakout type
[**getCloudConnectBreakoutTypes**](CloudConnectApi.md#getcloudconnectbreakouttypes) | **GET** /api/v1/cnc/breakout_type | List CloudConnect breakout types
[**getCloudConnectRegions**](CloudConnectApi.md#getcloudconnectregions) | **GET** /api/v1/cnc/region | Get list of available CloudConnect regions
[**listCloudConnectCustomPrices**](CloudConnectApi.md#listcloudconnectcustomprices) | **GET** /api/v1/cnc/pricing | List CloudConnect prices
[**retryCloudConnectAttachment**](CloudConnectApi.md#retrycloudconnectattachment) | **PATCH** /api/v1/cnc/breakout/{cloudconnect_attachment_id} | Retry creation of an expired TGW breakout

# **createCloudConnectAttachmentTGW**
> createCloudConnectAttachmentTGW($body)

Create a CloudConnect attachment via Transit Gateway

Creates a Transit Gateway breakout towards the customer AWS account.  After the creation the following steps have to be made from the customer's AWS account:  1. Accept the resource share about the 'CloudConnect' TransitGateway 2. Create a Transit Gateway Attachment to the own VPC with the services to connect to  More Information about this can be found on the CloudConnect KnowledgeBase article.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CloudConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateCloudConnectTGWRequest(); // \Swagger\Client\Model\CreateCloudConnectTGWRequest | 

try {
    $apiInstance->createCloudConnectAttachmentTGW($body);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectApi->createCloudConnectAttachmentTGW: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateCloudConnectTGWRequest**](../Model/CreateCloudConnectTGWRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCloudConnectAttachmentVPN**
> createCloudConnectAttachmentVPN($body)

Create a CloudConnect attachment via IPSec VPN

Creates a CloudConnect attachment via a specified VPN server. Currently Static and Dynamic (BGP) VPN attachments are available. The created connection will be available within 3-5 minutes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CloudConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateCloudConnectVPNRequest1(); // \Swagger\Client\Model\CreateCloudConnectVPNRequest1 | 

try {
    $apiInstance->createCloudConnectAttachmentVPN($body);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectApi->createCloudConnectAttachmentVPN: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateCloudConnectVPNRequest1**](../Model/CreateCloudConnectVPNRequest1.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCloudConnectAttachment**
> deleteCloudConnectAttachment($cloudconnect_attachment_id)

Delete a specific CloudConnect attachment

Deletes the specified CloudConnect attachment.  Attachments cannot be deleted if they are in the state `7 (Deactivated)` or `8 (Rolling Back)` or if they are Classic attachments.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CloudConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloudconnect_attachment_id = 1.2; // float | Numerical ID of a CloudConnect attachment

try {
    $apiInstance->deleteCloudConnectAttachment($cloudconnect_attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectApi->deleteCloudConnectAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudconnect_attachment_id** | **float**| Numerical ID of a CloudConnect attachment |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCloudConnectAttachmentById**
> null[] getCloudConnectAttachmentById($cloudconnect_attachment_id)

View details of a CloudConnect attachment

Displays the details including configured CIDR blocks of a CloudConnect Attachment.  For active IPSec VPN attachments, the tunnel information (public IP, outisde address, inside CIDR, PSK, ASN) including metrics over the last hour (tunnel state, bytes in/out) will be displayed as well.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CloudConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloudconnect_attachment_id = 1.2; // float | Numerical ID of a CloudConnect attachment

try {
    $result = $apiInstance->getCloudConnectAttachmentById($cloudconnect_attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectApi->getCloudConnectAttachmentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudconnect_attachment_id** | **float**| Numerical ID of a CloudConnect attachment |

### Return type

**null[]**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCloudConnectAttachments**
> \Swagger\Client\Model\InlineResponse20010[] getCloudConnectAttachments($status, $type, $organisation)

List all CloudConnect attachments of an organisation

Lists all CloudConnect attachments of the logged in organisation if it is an Enterprise. For Master organisations it lists all attachments of the direct child organisations. Deleted attachments are left out by default.  Additionally the attachments can be filtered by status and type. Master organisations can also filter by organisation ID of their direct child organisations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CloudConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 1.2; // float | Numerical ID of the CloudConnect attachment status <br> * `1` - Pending Customer Action * `2` - Pending AWS Activation * `3` - Pending EGN Activation * `4` - Pending CRG Activation * `5` - Active * `6` - Deactivation Pending * `7` - Deactivated * `8` - Rolling Back
$type = 1.2; // float | Numerical ID of the CloudConnect attachment type <br> * `1` - Transit Gateway * `2` - IPSec VPN * `3` - IPSec VPN BGP * `4` - IPSec VPN BGP High Availability * `5` - Direct Connect * `6` - Shared * `7` - Transit Gateway (Classic) * `8` - IPSec VPN (Classic)
$organisation = 1.2; // float | Numerical ID of an Organisation

try {
    $result = $apiInstance->getCloudConnectAttachments($status, $type, $organisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectApi->getCloudConnectAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **float**| Numerical ID of the CloudConnect attachment status &lt;br&gt; * &#x60;1&#x60; - Pending Customer Action * &#x60;2&#x60; - Pending AWS Activation * &#x60;3&#x60; - Pending EGN Activation * &#x60;4&#x60; - Pending CRG Activation * &#x60;5&#x60; - Active * &#x60;6&#x60; - Deactivation Pending * &#x60;7&#x60; - Deactivated * &#x60;8&#x60; - Rolling Back | [optional]
 **type** | **float**| Numerical ID of the CloudConnect attachment type &lt;br&gt; * &#x60;1&#x60; - Transit Gateway * &#x60;2&#x60; - IPSec VPN * &#x60;3&#x60; - IPSec VPN BGP * &#x60;4&#x60; - IPSec VPN BGP High Availability * &#x60;5&#x60; - Direct Connect * &#x60;6&#x60; - Shared * &#x60;7&#x60; - Transit Gateway (Classic) * &#x60;8&#x60; - IPSec VPN (Classic) | [optional]
 **organisation** | **float**| Numerical ID of an Organisation | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20010[]**](../Model/InlineResponse20010.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCloudConnectAvailableRegionsByBreakoutType**
> \Swagger\Client\Model\InlineResponse20011[] getCloudConnectAvailableRegionsByBreakoutType($breakout_type_id)

Get list of available CloudConnect regions by breakout type

Returns a list of regions available for use when creating new CloudConnect breakouts of the selected breakout type.  If the attachment region is peered to another one, the device breakout region will also be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CloudConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$breakout_type_id = 56; // int | ID of a CloudConnect breakout type. Possible values can be retrieved with `GET /api/v1/cnc/breakout_type`.

try {
    $result = $apiInstance->getCloudConnectAvailableRegionsByBreakoutType($breakout_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectApi->getCloudConnectAvailableRegionsByBreakoutType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **breakout_type_id** | **int**| ID of a CloudConnect breakout type. Possible values can be retrieved with &#x60;GET /api/v1/cnc/breakout_type&#x60;. |

### Return type

[**\Swagger\Client\Model\InlineResponse20011[]**](../Model/InlineResponse20011.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCloudConnectBreakoutTypes**
> \Swagger\Client\Model\CloudConnectBreakoutType[] getCloudConnectBreakoutTypes()

List CloudConnect breakout types

Lists all CloudConnect breakout types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CloudConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCloudConnectBreakoutTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectApi->getCloudConnectBreakoutTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CloudConnectBreakoutType[]**](../Model/CloudConnectBreakoutType.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCloudConnectRegions**
> getCloudConnectRegions($type)

Get list of available CloudConnect regions

This endpoint has been deprecated. Please check `GET /api/v1/cnc/breakout_type/{breakout_type_id}/available_region` for the current version.  Returns a list of regions available for use when creating new CloudConnect breakouts. The result can be filtered by breakout type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CloudConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 56; // int | Breakout type ID to filter the results for. Possible values can be retrieved with `GET /api/v1/cnc/breakout_type`.

try {
    $apiInstance->getCloudConnectRegions($type);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectApi->getCloudConnectRegions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **int**| Breakout type ID to filter the results for. Possible values can be retrieved with &#x60;GET /api/v1/cnc/breakout_type&#x60;. | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCloudConnectCustomPrices**
> null[] listCloudConnectCustomPrices()

List CloudConnect prices

Returns a list of the configured monthly prices for CloudConnect breakouts.  Master organisation, Mobile Network Operators and Resellers will get the list of prices they have configured for their child organisations.  Enterprise organisations will get the list of prices that apply for them.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CloudConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCloudConnectCustomPrices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectApi->listCloudConnectCustomPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**null[]**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retryCloudConnectAttachment**
> retryCloudConnectAttachment($cloudconnect_attachment_id)

Retry creation of an expired TGW breakout

Retries the creation of a Transit Gateway breakout where the accept attachment state has expired, meaning the attachment on the customer's side has not been created in time.  Retry is only allowed if: - The breakout is of type `Transit Gateway (type_id: 1)` - The breakout is in status `Pending AWS Activation (status_id: 2)` - The accept attachment state has expired (7 days after creation)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CloudConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloudconnect_attachment_id = 1.2; // float | Numerical ID of a CloudConnect attachment

try {
    $apiInstance->retryCloudConnectAttachment($cloudconnect_attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling CloudConnectApi->retryCloudConnectAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudconnect_attachment_id** | **float**| Numerical ID of a CloudConnect attachment |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

