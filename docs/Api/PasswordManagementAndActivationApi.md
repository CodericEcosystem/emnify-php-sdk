# CodericEcosystem\EmnifySdk\PasswordManagementAndActivationApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userActivationPost**](PasswordManagementAndActivationApi.md#useractivationpost) | **POST** /api/v1/user/activation | Activate User
[**userActivationResendPost**](PasswordManagementAndActivationApi.md#useractivationresendpost) | **POST** /api/v1/user/activation_resend | Resend User Activation E-mail
[**userPasswordPatch**](PasswordManagementAndActivationApi.md#userpasswordpatch) | **PATCH** /api/v1/user/password | Change Password

# **userActivationPost**
> userActivationPost($body)

Activate User

This service activates the user account and sets a password. The activation key is sent via email.  In this request, the following details should be provided: * `activation_token` (String required) - the activation token sent to a user via email * `password` (String required)  __Note:__ This is a public (unauthenticated) service which ignores auth tokens

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CodericEcosystem\EmnifySdk\Api\PasswordManagementAndActivationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \CodericEcosystem\EmnifySdk\Model\AccountActivationrequest(); // \CodericEcosystem\EmnifySdk\Model\AccountActivationrequest | 

try {
    $apiInstance->userActivationPost($body);
} catch (Exception $e) {
    echo 'Exception when calling PasswordManagementAndActivationApi->userActivationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CodericEcosystem\EmnifySdk\Model\AccountActivationrequest**](../Model/AccountActivationrequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userActivationResendPost**
> userActivationResendPost($body)

Resend User Activation E-mail

This service re-sends activation mail to the user.  As this endpoint is open to the public (no authentication token necessary), it requires instead the google reCAPTCHA token to ensure that no robot is performing the request.  Moreover there is a time limit on how often a given user may be issued with a new Activation Mail.  User has to provide:  * `username` (String required) * `g-recaptcha-response` (String required) - auto-generated from a form using Google reCAPTCHA   > According to the [reCAPTCHA documentation](https://developers.google.com/recaptcha/docs/display) a \"Site Key\" is necessary. If you want to implement this feature in your client, please contact emnify support to obtain this \"Site Key\" for your domain.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CodericEcosystem\EmnifySdk\Api\PasswordManagementAndActivationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \CodericEcosystem\EmnifySdk\Model\ResendActivationMailrequest(); // \CodericEcosystem\EmnifySdk\Model\ResendActivationMailrequest | 

try {
    $apiInstance->userActivationResendPost($body);
} catch (Exception $e) {
    echo 'Exception when calling PasswordManagementAndActivationApi->userActivationResendPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CodericEcosystem\EmnifySdk\Model\ResendActivationMailrequest**](../Model/ResendActivationMailrequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userPasswordPatch**
> userPasswordPatch($body)

Change Password

Password change service.  Allows to change the password for the currently authenticated user.  User has to provide:  * `old_password` (String required) * `new_password`  (String required)  #### Notes  * The client application should invalidate the authentication token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\PasswordManagementAndActivationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CodericEcosystem\EmnifySdk\Model\ChangePasswordrequest(); // \CodericEcosystem\EmnifySdk\Model\ChangePasswordrequest | 

try {
    $apiInstance->userPasswordPatch($body);
} catch (Exception $e) {
    echo 'Exception when calling PasswordManagementAndActivationApi->userPasswordPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CodericEcosystem\EmnifySdk\Model\ChangePasswordrequest**](../Model/ChangePasswordrequest.md)|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

