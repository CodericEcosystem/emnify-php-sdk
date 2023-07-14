# CodericEcosystem\EmnifySdk\TariffPlansApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrganisationActiveTariffPlan**](TariffPlansApi.md#getorganisationactivetariffplan) | **GET** /api/v1/organisation/{org_id_or_my}/tariff_plan/active | Get the active tariff plan for the given organisation
[**organisationTariffPlanByOrgIdGet**](TariffPlansApi.md#organisationtariffplanbyorgidget) | **GET** /api/v1/organisation/{org_id}/tariff_plan | List Organisation Tariff Plans

# **getOrganisationActiveTariffPlan**
> \CodericEcosystem\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponse getOrganisationActiveTariffPlan($org_id_or_my)

Get the active tariff plan for the given organisation

Retrieve detailed information about the currently assigned `tariff_plan` of the given organisation. It can either be accessed for the own organisation or a direct child organisation. The `applied_price` field is calculated using the currently active SIM cards for the month.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\TariffPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id_or_my = "org_id_or_my_example"; // string | Numerical ID of an Organisation or the string `my` to use the currently authorized organisation

try {
    $result = $apiInstance->getOrganisationActiveTariffPlan($org_id_or_my);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TariffPlansApi->getOrganisationActiveTariffPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id_or_my** | **string**| Numerical ID of an Organisation or the string &#x60;my&#x60; to use the currently authorized organisation |

### Return type

[**\CodericEcosystem\EmnifySdk\Model\GetOrganisationActiveTariffPlanResponse**](../Model/GetOrganisationActiveTariffPlanResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organisationTariffPlanByOrgIdGet**
> \CodericEcosystem\EmnifySdk\Model\InlineResponse20012[] organisationTariffPlanByOrgIdGet($org_id)

List Organisation Tariff Plans

Retrieve a list of all Tariff Plans that are available for the given organisation. The available tariff plans for one's own organisation can also be retrieved with a call to `/api/v1/organisation/my/tariff_plan`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CodericEcosystem\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CodericEcosystem\EmnifySdk\Api\TariffPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id = 1.2; // float | Numerical ID of an Organisation

try {
    $result = $apiInstance->organisationTariffPlanByOrgIdGet($org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TariffPlansApi->organisationTariffPlanByOrgIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id** | **float**| Numerical ID of an Organisation |

### Return type

[**\CodericEcosystem\EmnifySdk\Model\InlineResponse20012[]**](../Model/InlineResponse20012.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

