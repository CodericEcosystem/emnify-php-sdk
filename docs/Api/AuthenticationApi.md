# CodericEcosystem\EmnifySdk\AuthenticationApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticate**](AuthenticationApi.md#authenticate) | **POST** /api/v1/authenticate | Retrieve Authentication Token
[**postMfa**](AuthenticationApi.md#postmfa) | **POST** /api/v1/user/mfa | Create an MFA key
[**userMfaByIdPatch**](AuthenticationApi.md#usermfabyidpatch) | **PATCH** /api/v1/user/mfa/{key_id} | Activate MFA key
[**userMfaByUserIdAndKeyIdDelete**](AuthenticationApi.md#usermfabyuseridandkeyiddelete) | **DELETE** /api/v1/user/{user_id}/mfa/{key_id} | Delete an MFA key
[**userMfaStatusGet**](AuthenticationApi.md#usermfastatusget) | **GET** /api/v1/user/mfa/status | List MFA key Statuses
[**userMfaTrustedDeviceByUserIdAndDeviceIdDelete**](AuthenticationApi.md#usermfatrusteddevicebyuseridanddeviceiddelete) | **DELETE** /api/v1/user/{user_id}/mfa/trusted_device/{device_id} | Delete a Trusted Device
[**userMfaTrustedDeviceByUserIdGet**](AuthenticationApi.md#usermfatrusteddevicebyuseridget) | **GET** /api/v1/user/{user_id}/mfa/trusted_device | List Trusted Devices
[**userMfaTypeGet**](AuthenticationApi.md#usermfatypeget) | **GET** /api/v1/user/mfa/type | List MFA key types

# **authenticate**
> \CodericEcosystem\EmnifySdk\Model\AuthenticationResponse authenticate($body)

Retrieve Authentication Token

This entrypoint returns a JWT `auth_token` for authenticating further requests to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CodericEcosystem\EmnifySdk\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \CodericEcosystem\EmnifySdk\Model\Authentication(); // \CodericEcosystem\EmnifySdk\Model\Authentication | Authentication using Application Tokens or user/password combination

try {
    $result = $apiInstance->authenticate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CodericEcosystem\EmnifySdk\Model\Authentication**](../Model/Authentication.md)| Authentication using Application Tokens or user/password combination |

### Return type

[**\CodericEcosystem\EmnifySdk\Model\AuthenticationResponse**](../Model/AuthenticationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMfa**
> \CodericEcosystem\EmnifySdk\Model\CreateMFAKeyResponse postMfa($body)

Create an MFA key

Generate and store a MFA key for the requesting user. The MFA key will have the status `activation pending` after this call and must be activated through a separate call (`/api/v1/user/mfa/{id}`). You must provide following fields with this request:  * `type` (Object required)   - id (Number) * `password` (String required) - User password   The **MFA key** object returned by the server contains the following properties:  * `id` (Integer) - The unique ID of this MFA key * `status` (Object) ID (Integer) - Id of status of this MFA key   - `description` (String) - description of the status * `type` (Object) ID (Integer) - Id of type of this MFA key   - `description` (String) - description of the type * `secret_key` (String) - Secret key (encoded in Base32) for this MFA key, will be displayed only on creation * `otpauth` (String) - Secret key as a URI encoded for QR codes, will be displayed only on creation * `creation_date` (Timestamp) - Timestamp when this MFA key was created - type: ISO 8601 timestamp format * `activation_date` (Timestamp) - Timestamp when this MFA key was activated - type: ISO 8601 timestamp format

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CodericEcosystem\EmnifySdk\Model\UserMfaBody(); // \CodericEcosystem\EmnifySdk\Model\UserMfaBody | 

try {
    $result = $apiInstance->postMfa($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->postMfa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CodericEcosystem\EmnifySdk\Model\UserMfaBody**](../Model/UserMfaBody.md)|  |

### Return type

[**\CodericEcosystem\EmnifySdk\Model\CreateMFAKeyResponse**](../Model/CreateMFAKeyResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userMfaByIdPatch**
> userMfaByIdPatch($body, $key_id)

Activate MFA key

Activate the MFA key of the requesting user.  You must provide following JSON fields in this request:  * `status` (Object required)   - `id` (Number) use 1 for \"ACTIVE\" status  * `code` (String required)  - the 6-digit \"time-based one-time password\" (TOTP) generated with this MFA key for the current Time-Step

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CodericEcosystem\EmnifySdk\Model\ActivateMFAKeyRequest(); // \CodericEcosystem\EmnifySdk\Model\ActivateMFAKeyRequest | 
$key_id = 1.2; // float | Key ID

try {
    $apiInstance->userMfaByIdPatch($body, $key_id);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->userMfaByIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CodericEcosystem\EmnifySdk\Model\ActivateMFAKeyRequest**](../Model/ActivateMFAKeyRequest.md)|  |
 **key_id** | **float**| Key ID |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userMfaByUserIdAndKeyIdDelete**
> userMfaByUserIdAndKeyIdDelete($key_id, $user_id)

Delete an MFA key

Delete an MFA key for a given user.  An own MFA key can also be deleted with a call to `/api/v1/user/my/mfa/{key_id}`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = 1.2; // float | Key ID
$user_id = 1.2; // float | User ID

try {
    $apiInstance->userMfaByUserIdAndKeyIdDelete($key_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->userMfaByUserIdAndKeyIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key_id** | **float**| Key ID |
 **user_id** | **float**| User ID |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userMfaStatusGet**
> \CodericEcosystem\EmnifySdk\Model\MFAKeyStatusLookupresponse[] userMfaStatusGet()

List MFA key Statuses

Retrieve a list of possible MFA Key statuses.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userMfaStatusGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->userMfaStatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CodericEcosystem\EmnifySdk\Model\MFAKeyStatusLookupresponse[]**](../Model/MFAKeyStatusLookupresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userMfaTrustedDeviceByUserIdAndDeviceIdDelete**
> userMfaTrustedDeviceByUserIdAndDeviceIdDelete($user_id, $device_id)

Delete a Trusted Device

Deletes a trusted device.  Removing one's own trusted device can also be performed at either `/api/v1/user/my/mfa/trusted_device/{id}` or `/api/v1/user/mfa/trusted_device/{id}`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 1.2; // float | User ID
$device_id = 1.2; // float | Device ID

try {
    $apiInstance->userMfaTrustedDeviceByUserIdAndDeviceIdDelete($user_id, $device_id);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->userMfaTrustedDeviceByUserIdAndDeviceIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **float**| User ID |
 **device_id** | **float**| Device ID |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userMfaTrustedDeviceByUserIdGet**
> \CodericEcosystem\EmnifySdk\Model\Listoftrusteddevicesresponse[] userMfaTrustedDeviceByUserIdGet($user_id)

List Trusted Devices

Returns the list of trusted devices for a given user.  The list of one's own trusted devices can also be retrieved with a call to either `/api/v1/user/my/mfa/trusted_device` or `/api/v1/user/mfa/trusted_device`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 1.2; // float | User ID

try {
    $result = $apiInstance->userMfaTrustedDeviceByUserIdGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->userMfaTrustedDeviceByUserIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **float**| User ID |

### Return type

[**\CodericEcosystem\EmnifySdk\Model\Listoftrusteddevicesresponse[]**](../Model/Listoftrusteddevicesresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userMfaTypeGet**
> \CodericEcosystem\EmnifySdk\Model\MFAKeyTypeLookupresponse[] userMfaTypeGet()

List MFA key types

Retrieve a list of possible MFA Key types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userMfaTypeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->userMfaTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CodericEcosystem\EmnifySdk\Model\MFAKeyTypeLookupresponse[]**](../Model/MFAKeyTypeLookupresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

