# Swagger\Client\TariffProfilesApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tariffProfileByIdDelete**](TariffProfilesApi.md#tariffprofilebyiddelete) | **DELETE** /api/v1/tariff_profile/{tariff_profile_id} | Delete Tariff Profile
[**tariffProfileByIdGet**](TariffProfilesApi.md#tariffprofilebyidget) | **GET** /api/v1/tariff_profile/{tariff_profile_id} | Tariff Profile Details
[**tariffProfileByIdPatch**](TariffProfilesApi.md#tariffprofilebyidpatch) | **PATCH** /api/v1/tariff_profile/{tariff_profile_id} | Update Tariff Profile
[**tariffProfileCoverageByTpIdGet**](TariffProfilesApi.md#tariffprofilecoveragebytpidget) | **GET** /api/v1/tariff_profile/{tariff_profile_id}/coverage | List Tariff Profile Coverage
[**tariffProfileGet**](TariffProfilesApi.md#tariffprofileget) | **GET** /api/v1/tariff_profile | List Tariff Profiles
[**tariffProfileInclusiveVolumeAssignment**](TariffProfilesApi.md#tariffprofileinclusivevolumeassignment) | **PUT** /api/v1/tariff_profile/{tariff_profile_id}/inclusive_volume/{inclusive_volume_id} | Assign Inclusive Volume to Tarriff Profile
[**tariffProfileInclusiveVolumeRemoveAssignment**](TariffProfilesApi.md#tariffprofileinclusivevolumeremoveassignment) | **DELETE** /api/v1/tariff_profile/{tariff_profile_id}/inclusive_volume/{inclusive_volume_id} | Unassign Inclusive Volume from Tariff Profile
[**tariffProfilePost**](TariffProfilesApi.md#tariffprofilepost) | **POST** /api/v1/tariff_profile | Create Tariff Profile
[**tariffProfileRatezoneSelectionByTpIdAndRzIdDelete**](TariffProfilesApi.md#tariffprofileratezoneselectionbytpidandrziddelete) | **DELETE** /api/v1/tariff_profile/{tariff_profile_id}/ratezone_selection/{ratezone_id} | Delete Ratezone from Tariff Profile
[**tariffProfileRatezoneSelectionByTpIdAndRzIdPut**](TariffProfilesApi.md#tariffprofileratezoneselectionbytpidandrzidput) | **PUT** /api/v1/tariff_profile/{tariff_profile_id}/ratezone_selection/{ratezone_id} | Assign Ratezone to Tarriff Profile

# **tariffProfileByIdDelete**
> tariffProfileByIdDelete($tariff_profile_id)

Delete Tariff Profile

Deletes tariff profile. Tariff profiles used by an endpoint (`used_count` > 0) cannot be deleted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TariffProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tariff_profile_id = 1.2; // float | The numeric ID of a Tariff Profile

try {
    $apiInstance->tariffProfileByIdDelete($tariff_profile_id);
} catch (Exception $e) {
    echo 'Exception when calling TariffProfilesApi->tariffProfileByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tariff_profile_id** | **float**| The numeric ID of a Tariff Profile |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tariffProfileByIdGet**
> \Swagger\Client\Model\TariffProfile2 tariffProfileByIdGet($tariff_profile_id)

Tariff Profile Details

Returns tariff profile specified by id. This tariff profile also contains information about the currently valid ratezones of the tariff in the tariff profile and if the ratezone is selected in the tariff profile. It also contains applied custom rates for the included tariffs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TariffProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tariff_profile_id = 1.2; // float | The numeric ID of a Tariff Profile

try {
    $result = $apiInstance->tariffProfileByIdGet($tariff_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TariffProfilesApi->tariffProfileByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tariff_profile_id** | **float**| The numeric ID of a Tariff Profile |

### Return type

[**\Swagger\Client\Model\TariffProfile2**](../Model/TariffProfile2.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tariffProfileByIdPatch**
> tariffProfileByIdPatch($body, $tariff_profile_id)

Update Tariff Profile

Patch the specified tariff profile.  You can provide following fields with this request:  * `name` (String optional) * `description` (String optional) * `tariff` (Object optional) If the tariff is changed, all selections of ratezones are removed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TariffProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PatchTariffProfilerequest(); // \Swagger\Client\Model\PatchTariffProfilerequest | 
$tariff_profile_id = 1.2; // float | The numeric ID of a Tariff Profile

try {
    $apiInstance->tariffProfileByIdPatch($body, $tariff_profile_id);
} catch (Exception $e) {
    echo 'Exception when calling TariffProfilesApi->tariffProfileByIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PatchTariffProfilerequest**](../Model/PatchTariffProfilerequest.md)|  |
 **tariff_profile_id** | **float**| The numeric ID of a Tariff Profile |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tariffProfileCoverageByTpIdGet**
> \Swagger\Client\Model\RetrieveCoverageresponse[] tariffProfileCoverageByTpIdGet($tariff_profile_id)

List Tariff Profile Coverage

Provides the list of countries where that tariff profile can be used.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TariffProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tariff_profile_id = 1.2; // float | tariff profile ID

try {
    $result = $apiInstance->tariffProfileCoverageByTpIdGet($tariff_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TariffProfilesApi->tariffProfileCoverageByTpIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tariff_profile_id** | **float**| tariff profile ID |

### Return type

[**\Swagger\Client\Model\RetrieveCoverageresponse[]**](../Model/RetrieveCoverageresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tariffProfileGet**
> \Swagger\Client\Model\TariffProfile1[] tariffProfileGet()

List Tariff Profiles

Returns the list of tariff profiles of the user's own organisation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TariffProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tariffProfileGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TariffProfilesApi->tariffProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TariffProfile1[]**](../Model/TariffProfile1.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tariffProfileInclusiveVolumeAssignment**
> tariffProfileInclusiveVolumeAssignment($tariff_profile_id, $inclusive_volume_id)

Assign Inclusive Volume to Tarriff Profile

Assignes an inclusive volume to the selected tariff profile. If no inclusive volume is assigned and the customer has multiple active inclusive volumes, the traffic for this tariff profile will be rated as \"Pay As You Go\".  The selected inclusive volume must not be expired and the tariff profile should not have an inclusive volume assigned yet. The tariff of the tariff profile and the inclusive volume ratezone have to match.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TariffProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tariff_profile_id = 1.2; // float | Tariff Profile ID
$inclusive_volume_id = 1.2; // float | Inclusive Volume ID

try {
    $apiInstance->tariffProfileInclusiveVolumeAssignment($tariff_profile_id, $inclusive_volume_id);
} catch (Exception $e) {
    echo 'Exception when calling TariffProfilesApi->tariffProfileInclusiveVolumeAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tariff_profile_id** | **float**| Tariff Profile ID |
 **inclusive_volume_id** | **float**| Inclusive Volume ID |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tariffProfileInclusiveVolumeRemoveAssignment**
> tariffProfileInclusiveVolumeRemoveAssignment($tariff_profile_id, $inclusive_volume_id)

Unassign Inclusive Volume from Tariff Profile

Unassign the inclusive volume from the selected tariff profile. If the customer has multiple active inclusive volume, the traffic within that tariff profile will be rated as \"Pay As You Go\" afterwards.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TariffProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tariff_profile_id = 1.2; // float | Tariff Profile ID
$inclusive_volume_id = 1.2; // float | Inclusive Volume ID

try {
    $apiInstance->tariffProfileInclusiveVolumeRemoveAssignment($tariff_profile_id, $inclusive_volume_id);
} catch (Exception $e) {
    echo 'Exception when calling TariffProfilesApi->tariffProfileInclusiveVolumeRemoveAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tariff_profile_id** | **float**| Tariff Profile ID |
 **inclusive_volume_id** | **float**| Inclusive Volume ID |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tariffProfilePost**
> tariffProfilePost($body)

Create Tariff Profile

Create the specified tariff profile ID must not be specified, neither in query String, nor in JSON payload. You can provide following fields with this request:  * `name` (String required) * `description` (String optional) * `tariff` (Object required)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TariffProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateTariffProfilerequest(); // \Swagger\Client\Model\CreateTariffProfilerequest | 

try {
    $apiInstance->tariffProfilePost($body);
} catch (Exception $e) {
    echo 'Exception when calling TariffProfilesApi->tariffProfilePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateTariffProfilerequest**](../Model/CreateTariffProfilerequest.md)|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tariffProfileRatezoneSelectionByTpIdAndRzIdDelete**
> tariffProfileRatezoneSelectionByTpIdAndRzIdDelete($tariff_profile_id, $ratezone_id)

Delete Ratezone from Tariff Profile

Remove previously selected ratezones from a tariff profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TariffProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tariff_profile_id = 1.2; // float | tariff profile ID
$ratezone_id = 1.2; // float | ratezone ID

try {
    $apiInstance->tariffProfileRatezoneSelectionByTpIdAndRzIdDelete($tariff_profile_id, $ratezone_id);
} catch (Exception $e) {
    echo 'Exception when calling TariffProfilesApi->tariffProfileRatezoneSelectionByTpIdAndRzIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tariff_profile_id** | **float**| tariff profile ID |
 **ratezone_id** | **float**| ratezone ID |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tariffProfileRatezoneSelectionByTpIdAndRzIdPut**
> tariffProfileRatezoneSelectionByTpIdAndRzIdPut($tariff_profile_id, $ratezone_id)

Assign Ratezone to Tarriff Profile

Only currently valid and active ratezones can be selected for a tariff profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TariffProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tariff_profile_id = 1.2; // float | tariff profile ID
$ratezone_id = 1.2; // float | ratezone ID

try {
    $apiInstance->tariffProfileRatezoneSelectionByTpIdAndRzIdPut($tariff_profile_id, $ratezone_id);
} catch (Exception $e) {
    echo 'Exception when calling TariffProfilesApi->tariffProfileRatezoneSelectionByTpIdAndRzIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tariff_profile_id** | **float**| tariff profile ID |
 **ratezone_id** | **float**| ratezone ID |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

