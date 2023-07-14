# Emnify\EmnifySdk\ServiceProfilesApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTrafficLimit**](ServiceProfilesApi.md#addtrafficlimit) | **PUT** /api/v1/service_profile/{profile_id}/service/{service_id}/traffic_limit/{limit_id} | Add Traffic Limit to Service Profile
[**deleteQuotaByServiceProfileId**](ServiceProfilesApi.md#deletequotabyserviceprofileid) | **DELETE** /api/v1/service_profile/{profile_id}/quota/{quota_type} | Remove all quotas of assigned endpoints
[**removeTrafficLimit**](ServiceProfilesApi.md#removetrafficlimit) | **DELETE** /api/v1/service_profile/{profile_id}/service/{service_id}/traffic_limit/{limit_id} | Remove Traffic Limit from a Service Profile
[**serviceProfileByProfileIdDelete**](ServiceProfilesApi.md#serviceprofilebyprofileiddelete) | **DELETE** /api/v1/service_profile/{profile_id} | Delete a Service Profile
[**serviceProfileByProfileIdGet**](ServiceProfilesApi.md#serviceprofilebyprofileidget) | **GET** /api/v1/service_profile/{profile_id} | Retrieve a Service Profile
[**serviceProfileByProfileIdPatch**](ServiceProfilesApi.md#serviceprofilebyprofileidpatch) | **PATCH** /api/v1/service_profile/{profile_id} | Update Service Profile
[**serviceProfileGet**](ServiceProfilesApi.md#serviceprofileget) | **GET** /api/v1/service_profile | List Service Profiles
[**serviceProfilePost**](ServiceProfilesApi.md#serviceprofilepost) | **POST** /api/v1/service_profile | Create Service Profile
[**serviceProfileServiceByProfileAndServiceDelete**](ServiceProfilesApi.md#serviceprofileservicebyprofileandservicedelete) | **DELETE** /api/v1/service_profile/{profile_id}/service/{service_id} | Remove a Service from a Service Profile
[**serviceProfileServiceByProfileAndServicePut**](ServiceProfilesApi.md#serviceprofileservicebyprofileandserviceput) | **PUT** /api/v1/service_profile/{profile_id}/service/{service_id} | Add a Service to a Service Profile

# **addTrafficLimit**
> addTrafficLimit($profile_id, $limit_id, $service_id)

Add Traffic Limit to Service Profile

Add traffic limit to a collection of traffic limits associated with a service profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\ServiceProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 1.2; // float | The Numeric ID of a Service Profile
$limit_id = 1.2; // float | Numerical ID of a Traffic Limit
$service_id = 1.2; // float | The Numeric ID of a Service, may be:  * `0`  - USSD  * `3`  - Voice, __warning:__ voice services are not available!  * `6`  - SMS MT  * `32` - SMS MO  * `38` - Data

try {
    $apiInstance->addTrafficLimit($profile_id, $limit_id, $service_id);
} catch (Exception $e) {
    echo 'Exception when calling ServiceProfilesApi->addTrafficLimit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_id** | **float**| The Numeric ID of a Service Profile |
 **limit_id** | **float**| Numerical ID of a Traffic Limit |
 **service_id** | **float**| The Numeric ID of a Service, may be:  * &#x60;0&#x60;  - USSD  * &#x60;3&#x60;  - Voice, __warning:__ voice services are not available!  * &#x60;6&#x60;  - SMS MT  * &#x60;32&#x60; - SMS MO  * &#x60;38&#x60; - Data |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuotaByServiceProfileId**
> deleteQuotaByServiceProfileId($profile_id, $quota_type)

Remove all quotas of assigned endpoints

Remove all quotas of endpoints which are assigned to this profile. Notice that `apply_data_quota` and/or `apply_sms_quota` have to be patched to false before, otherwise the endpoints will get blocked for having no quota left. This call will also return successfully if no endpoint is assigned or no quotas are set.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\ServiceProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 1.2; // float | The Numeric ID of a Service Profile
$quota_type = "quota_type_example"; // string | The type of service of the quota, can be `data` or `sms`

try {
    $apiInstance->deleteQuotaByServiceProfileId($profile_id, $quota_type);
} catch (Exception $e) {
    echo 'Exception when calling ServiceProfilesApi->deleteQuotaByServiceProfileId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_id** | **float**| The Numeric ID of a Service Profile |
 **quota_type** | **string**| The type of service of the quota, can be &#x60;data&#x60; or &#x60;sms&#x60; |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeTrafficLimit**
> removeTrafficLimit($profile_id, $limit_id, $service_id)

Remove Traffic Limit from a Service Profile

Removes the assignment of a Traffic Limit from a service associated with a service profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\ServiceProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 1.2; // float | The Numeric ID of a Service Profile
$limit_id = 1.2; // float | Numerical ID of a Traffic Limit
$service_id = 1.2; // float | The Numeric ID of a Service, may be:  * `0`  - USSD  * `3`  - Voice, __warning:__ voice services are not available!  * `6`  - SMS MT  * `32` - SMS MO  * `38` - Data

try {
    $apiInstance->removeTrafficLimit($profile_id, $limit_id, $service_id);
} catch (Exception $e) {
    echo 'Exception when calling ServiceProfilesApi->removeTrafficLimit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_id** | **float**| The Numeric ID of a Service Profile |
 **limit_id** | **float**| Numerical ID of a Traffic Limit |
 **service_id** | **float**| The Numeric ID of a Service, may be:  * &#x60;0&#x60;  - USSD  * &#x60;3&#x60;  - Voice, __warning:__ voice services are not available!  * &#x60;6&#x60;  - SMS MT  * &#x60;32&#x60; - SMS MO  * &#x60;38&#x60; - Data |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceProfileByProfileIdDelete**
> serviceProfileByProfileIdDelete($profile_id)

Delete a Service Profile

Deletes a service profile and all its associations with services and traffic limits. A service profile can only be deleted if it is **not** selected on an endpoint. If it is not selected on an endpoint, the used_count is 0.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\ServiceProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 1.2; // float | The Numeric ID of a Service Profile

try {
    $apiInstance->serviceProfileByProfileIdDelete($profile_id);
} catch (Exception $e) {
    echo 'Exception when calling ServiceProfilesApi->serviceProfileByProfileIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_id** | **float**| The Numeric ID of a Service Profile |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceProfileByProfileIdGet**
> \Emnify\EmnifySdk\Model\RetrieveaSingleServiceProfileresponse serviceProfileByProfileIdGet($profile_id)

Retrieve a Service Profile

Retrieve a service profile with a given id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\ServiceProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 1.2; // float | The Numeric ID of a Service Profile

try {
    $result = $apiInstance->serviceProfileByProfileIdGet($profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceProfilesApi->serviceProfileByProfileIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_id** | **float**| The Numeric ID of a Service Profile |

### Return type

[**\Emnify\EmnifySdk\Model\RetrieveaSingleServiceProfileresponse**](../Model/RetrieveaSingleServiceProfileresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceProfileByProfileIdPatch**
> object serviceProfileByProfileIdPatch($body, $profile_id)

Update Service Profile

Update a service profile with a given id.  Editable fields: * `name` (String optional) * `description` (String optional) * `allowed_3g` (boolean optional) * `allowed_4g` (boolean optional) * `allowed_nb_iot` (boolean optional) * __DEPRECATED__ `apply_quota` (boolean optional, defaults to false). Use `apply_data_quota` instead. Will be ignored if `apply_data_quota` is present. * `apply_data_quota` (boolean optional, defaults to false) * `apply_sms_quota` (boolean optional, defaults to false) * `retail` (boolean optional, defaults to false) * `sms_p2p_int` (boolean optional, defaults to true) * `sms_p2p_ext` (boolean optional, defaults to true) * `prepaid` (boolean optional, defaults to false) * `nipdp` (boolean optional, defaults to false) * `api_callback` (object optional) can be emptied by setting the id to null (\"api_callback\":{\"id\":null}) * `api_secret` (object optional) can be emptied by setting the id to null (\"api_secret\":{\"id\":null}) * `moc_callback` (object optional) can be emptied by setting the id to null (\"moc_callback\":{\"id\":null}) * `esme_interface_type` (object optional) * `breakout_region` (object optional) * `dns` (object optional)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\ServiceProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emnify\EmnifySdk\Model\UpdateServiceProfile(); // \Emnify\EmnifySdk\Model\UpdateServiceProfile | 
$profile_id = 1.2; // float | The Numeric ID of a Service Profile

try {
    $result = $apiInstance->serviceProfileByProfileIdPatch($body, $profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceProfilesApi->serviceProfileByProfileIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emnify\EmnifySdk\Model\UpdateServiceProfile**](../Model/UpdateServiceProfile.md)|  |
 **profile_id** | **float**| The Numeric ID of a Service Profile |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceProfileGet**
> \Emnify\EmnifySdk\Model\RetrieveServiceProfileListresponse[] serviceProfileGet()

List Service Profiles

Retrieves a collection of all Service Profiles for your organisation.  Returned service profiles contain just the total count of associated services, so this is the short view.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\ServiceProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->serviceProfileGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceProfilesApi->serviceProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Emnify\EmnifySdk\Model\RetrieveServiceProfileListresponse[]**](../Model/RetrieveServiceProfileListresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceProfilePost**
> serviceProfilePost($body)

Create Service Profile

Creates a new Service Profile. A `name` must be specified for the Service Profile and all other fields are optional.  Editable fields: * `name` (String required) * `description` (String optional) * `allowed_3g` (boolean optional, defaults to true) * `allowed_4g` (boolean optional, defaults to true) * `allowed_nb_iot` (boolean optional, defaults to true) * **DEPRECATED** `apply_quota` (boolean optional, defaults to false).  Use `apply_data_quota` instead. Will be ignored if `apply_data_quota` is present. * `apply_data_quota` (boolean optional, defaults to false) * `apply_sms_quota` (boolean optional, defaults to false) * `retail` (boolean optional, defaults to false) * `sms_p2p_int` (boolean optional, defaults to true) * `sms_p2p_ext` (boolean optional, defaults to true) * `prepaid` (boolean optional, defaults to false) * `nipdp` (boolean optional, defaults to false) * `api_callback` (object optional) * `api_secret` (object optional) * `moc_callback` (object optional) * `esme_interface_type` (object optional) * `breakout_region` (object optional) * `dns` (object optional)  __Note:__ enabling services (SMS, Data etc.) is done via `PUT` to `/api/v1/service_profile/{profile_id}/service/{service_id}`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\ServiceProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emnify\EmnifySdk\Model\CreateaServiceProfilerequest(); // \Emnify\EmnifySdk\Model\CreateaServiceProfilerequest | 

try {
    $apiInstance->serviceProfilePost($body);
} catch (Exception $e) {
    echo 'Exception when calling ServiceProfilesApi->serviceProfilePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emnify\EmnifySdk\Model\CreateaServiceProfilerequest**](../Model/CreateaServiceProfilerequest.md)|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceProfileServiceByProfileAndServiceDelete**
> serviceProfileServiceByProfileAndServiceDelete($profile_id, $service_id)

Remove a Service from a Service Profile

Remove service from the collection of services associated to a profile. A service can only be removed if it has no assigned traffic limits.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\ServiceProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 1.2; // float | The Numeric ID of a Service Profile
$service_id = 1.2; // float | The Numeric ID of a Service, may be:  * `0`  - USSD  * `3`  - Voice, __warning:__ voice services are not available!  * `6`  - SMS MT  * `32` - SMS MO  * `38` - Data

try {
    $apiInstance->serviceProfileServiceByProfileAndServiceDelete($profile_id, $service_id);
} catch (Exception $e) {
    echo 'Exception when calling ServiceProfilesApi->serviceProfileServiceByProfileAndServiceDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_id** | **float**| The Numeric ID of a Service Profile |
 **service_id** | **float**| The Numeric ID of a Service, may be:  * &#x60;0&#x60;  - USSD  * &#x60;3&#x60;  - Voice, __warning:__ voice services are not available!  * &#x60;6&#x60;  - SMS MT  * &#x60;32&#x60; - SMS MO  * &#x60;38&#x60; - Data |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceProfileServiceByProfileAndServicePut**
> serviceProfileServiceByProfileAndServicePut($profile_id, $service_id)

Add a Service to a Service Profile

Add service to the collection of services associated to a profile. Multiple services can be assigned, but each only once.  __Warning:__ Adding the voice service with an id of `3` to a service profile will be successful, but this feature is __not enabled__ by the platform.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\ServiceProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$profile_id = 1.2; // float | The Numeric ID of a Service Profile
$service_id = 1.2; // float | The Numeric ID of a Service, may be:  * `0`  - USSD  * `3`  - Voice, __warning:__ voice services are not available!  * `6`  - SMS MT  * `32` - SMS MO  * `38` - Data

try {
    $apiInstance->serviceProfileServiceByProfileAndServicePut($profile_id, $service_id);
} catch (Exception $e) {
    echo 'Exception when calling ServiceProfilesApi->serviceProfileServiceByProfileAndServicePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **profile_id** | **float**| The Numeric ID of a Service Profile |
 **service_id** | **float**| The Numeric ID of a Service, may be:  * &#x60;0&#x60;  - USSD  * &#x60;3&#x60;  - Voice, __warning:__ voice services are not available!  * &#x60;6&#x60;  - SMS MT  * &#x60;32&#x60; - SMS MO  * &#x60;38&#x60; - Data |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

