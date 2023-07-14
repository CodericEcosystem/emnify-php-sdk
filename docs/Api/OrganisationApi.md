# Emnify\EmnifySdk\OrganisationApi

All URIs are relative to *https://cdn.emnify.net*

Method | HTTP request | Description
------------- | ------------- | -------------
[**assignRatezoneInclusiveVolume**](OrganisationApi.md#assignratezoneinclusivevolume) | **PUT** /api/v1/organisation/{org_id_or_my}/inclusive_volume/{inclusive_volume_id} | Assign a ratezone inclusive volume to an organisation
[**getActiveOrganisationInclusiveVolume**](OrganisationApi.md#getactiveorganisationinclusivevolume) | **GET** /api/v1/organisation/{org_id_or_my}/inclusive_volume/active | Get list of active organisation inclusive volumes
[**getOrganisationDailyStats**](OrganisationApi.md#getorganisationdailystats) | **GET** /api/v1/organisation/{org_id_or_my}/stats/daily | Daily organisation traffic and cost statistics
[**getOrganisationHourlyStats**](OrganisationApi.md#getorganisationhourlystats) | **GET** /api/v1/organisation/{org_id_or_my}/stats/hourly | Hourly organisation traffic statistics
[**getOrganisationMonthlyStats**](OrganisationApi.md#getorganisationmonthlystats) | **GET** /api/v1/organisation/{org_id_or_my}/stats | Monthly organisation traffic and cost statistics
[**myOrganisationGet**](OrganisationApi.md#myorganisationget) | **GET** /api/v1/organisation/my | My Organisation Details
[**organisationStatusGet**](OrganisationApi.md#organisationstatusget) | **GET** /api/v1/organisation/status | List Organisation Status
[**statisticsDailyByIdGet**](OrganisationApi.md#statisticsdailybyidget) | **GET** /api/v1/stats/daily | Organisation Usage and Costs Statistics per day for the current month
[**updateOrganisationTariff**](OrganisationApi.md#updateorganisationtariff) | **PATCH** /api/v1/organisation/{org_id}/tariff | Update assigned tariff

# **assignRatezoneInclusiveVolume**
> \Emnify\EmnifySdk\Model\InlineResponse201 assignRatezoneInclusiveVolume($org_id_or_my, $inclusive_volume_id, $body)

Assign a ratezone inclusive volume to an organisation

Assign a pre-configured ratezone inclusive volume to the specified organisation.  This can be done in self-service as well as for direct child organisations. Only postpaid customers can assign inclusive volumes in self-service, while parent organisations can assign inclusive volumes for both postpaid and prepaid child organisations. The inclusive volume will be charged and calculated against traffic charges accordingly in every bill that is refreshed from that point on. Inclusive volume is counted per device on a monthly basis, the data can be pooled as well or be treated per individual device.  Only inclusive volumes of ratezones belonging to the tariffs assigned to the selected organisation can be chosen.  Enterprise organisations are only allowed to upgrade to a higher inclusive volume if there is already one active in the current month.  The `start_date` and `end_date` of the inclusive volume denote the billing period which this volume applies to, where the start must be always the first day of a month, and the end the last day. Times of the fields will be stripped. Inclusive volumes can only be assigned for the current or a future month.  The request body for this entrypoint is optional. Default values are: * `start_date`: First day of the current month * `end_date`: `null` (Inclusive volume will run indefinitely until the end date is set.) * `pooled`: `true`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\OrganisationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id_or_my = "org_id_or_my_example"; // string | Numerical ID of an Organisation or the string `my` to use the currently authorized organisation
$inclusive_volume_id = 1.2; // float | Numerical ID of a ratezone inclusive volume. Can be retrieved using `GET /api/v1/tariff/{tariff_id}/ratezone/{ratezone_id}/inclusive_volume`.
$body = new \Emnify\EmnifySdk\Model\InclusiveVolumeInclusiveVolumeIdBody(); // \Emnify\EmnifySdk\Model\InclusiveVolumeInclusiveVolumeIdBody | 

try {
    $result = $apiInstance->assignRatezoneInclusiveVolume($org_id_or_my, $inclusive_volume_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->assignRatezoneInclusiveVolume: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id_or_my** | **string**| Numerical ID of an Organisation or the string &#x60;my&#x60; to use the currently authorized organisation |
 **inclusive_volume_id** | **float**| Numerical ID of a ratezone inclusive volume. Can be retrieved using &#x60;GET /api/v1/tariff/{tariff_id}/ratezone/{ratezone_id}/inclusive_volume&#x60;. |
 **body** | [**\Emnify\EmnifySdk\Model\InclusiveVolumeInclusiveVolumeIdBody**](../Model/InclusiveVolumeInclusiveVolumeIdBody.md)|  | [optional]

### Return type

[**\Emnify\EmnifySdk\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActiveOrganisationInclusiveVolume**
> \Emnify\EmnifySdk\Model\InlineResponse20013[] getActiveOrganisationInclusiveVolume($org_id_or_my)

Get list of active organisation inclusive volumes

Returns of a list of inclusive volumes that are currently active in the current billing period for the selected organisation. This will not inclusive volumes that are already expired or have the start date set for a future billing period.  Only inclusive volumes for the own organisation or direct child organisations are accessible.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\OrganisationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id_or_my = "org_id_or_my_example"; // string | Numerical ID of an Organisation or the string `my` to use the currently authorized organisation

try {
    $result = $apiInstance->getActiveOrganisationInclusiveVolume($org_id_or_my);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->getActiveOrganisationInclusiveVolume: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id_or_my** | **string**| Numerical ID of an Organisation or the string &#x60;my&#x60; to use the currently authorized organisation |

### Return type

[**\Emnify\EmnifySdk\Model\InlineResponse20013[]**](../Model/InlineResponse20013.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganisationDailyStats**
> \Emnify\EmnifySdk\Model\InlineResponse2001[] getOrganisationDailyStats($org_id_or_my, $start_date, $end_date)

Daily organisation traffic and cost statistics

Retrieves traffic and cost statistics for the selected organisation and all their child organisations, accumulated per day. By default, statistics for the current month will be returned.  To filter the statistics over a time range, a `start_date` and an `end_date` can be provided as query parameters. The filters have to be provided in `<property>=<value>` format.  When defining only the `start_date`, the statistics from that date until the end of the selected month will be returned.  Example request: `/api/v1/organisation/123/stats/daily?end_date=2019-03-03&start_date=2019-03-01`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\OrganisationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id_or_my = "org_id_or_my_example"; // string | Numerical ID of an Organisation or the string `my` to use the currently authorized organisation
$start_date = new \DateTime("2013-10-20"); // \DateTime | Filters the returned data by a start date. If no 'end date' is provided, data will be returned until the end of the selected month.
$end_date = new \DateTime("2013-10-20"); // \DateTime | Returned data will be filtered to only show results occurring before the end date.

try {
    $result = $apiInstance->getOrganisationDailyStats($org_id_or_my, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->getOrganisationDailyStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id_or_my** | **string**| Numerical ID of an Organisation or the string &#x60;my&#x60; to use the currently authorized organisation |
 **start_date** | **\DateTime**| Filters the returned data by a start date. If no &#x27;end date&#x27; is provided, data will be returned until the end of the selected month. | [optional]
 **end_date** | **\DateTime**| Returned data will be filtered to only show results occurring before the end date. | [optional]

### Return type

[**\Emnify\EmnifySdk\Model\InlineResponse2001[]**](../Model/InlineResponse2001.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganisationHourlyStats**
> \Emnify\EmnifySdk\Model\GetHourlyOrganisationStatsResponse getOrganisationHourlyStats($org_id_or_my, $start_date, $end_date)

Hourly organisation traffic statistics

Retrieve traffic statistics for the selected organisation and all their child organisations accumulated per hour. Per default, the statistics of the last three hours will be returned.  To filter the statistics over a time range, a `start_date` and an `end_date` can be provided as query parameters. The filters have to be provided in `<property>=<value>` format.  Example request: `/api/v1/organisation/123/stats/hourly?end_date=2019-03-03&start_date=2019-03-01`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\OrganisationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id_or_my = "org_id_or_my_example"; // string | Numerical ID of an Organisation or the string `my` to use the currently authorized organisation
$start_date = new \DateTime("2013-10-20"); // \DateTime | Filters the returned data by a start date. Will be set to current time - 3 hours if left empty.
$end_date = new \DateTime("2013-10-20"); // \DateTime | Returned data will be filtered to only show results occurring before the end date. Will be set to current time + 1 hour if left empty.

try {
    $result = $apiInstance->getOrganisationHourlyStats($org_id_or_my, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->getOrganisationHourlyStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id_or_my** | **string**| Numerical ID of an Organisation or the string &#x60;my&#x60; to use the currently authorized organisation |
 **start_date** | **\DateTime**| Filters the returned data by a start date. Will be set to current time - 3 hours if left empty. | [optional]
 **end_date** | **\DateTime**| Returned data will be filtered to only show results occurring before the end date. Will be set to current time + 1 hour if left empty. | [optional]

### Return type

[**\Emnify\EmnifySdk\Model\GetHourlyOrganisationStatsResponse**](../Model/GetHourlyOrganisationStatsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganisationMonthlyStats**
> \Emnify\EmnifySdk\Model\GetMonthlyOrganisationStatsResponse getOrganisationMonthlyStats($org_id_or_my)

Monthly organisation traffic and cost statistics

Retrieves traffic and cost statistics for the selected organisation.  Traffic statistics accumulate for the `current_month` and `last_month` of the selected organisation and all its child organisations. All other returned values (i.e., SIM statistics, user counts, etc.) are only for the selected organisation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\OrganisationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$org_id_or_my = "org_id_or_my_example"; // string | Numerical ID of an Organisation or the string `my` to use the currently authorized organisation

try {
    $result = $apiInstance->getOrganisationMonthlyStats($org_id_or_my);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->getOrganisationMonthlyStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **org_id_or_my** | **string**| Numerical ID of an Organisation or the string &#x60;my&#x60; to use the currently authorized organisation |

### Return type

[**\Emnify\EmnifySdk\Model\GetMonthlyOrganisationStatsResponse**](../Model/GetMonthlyOrganisationStatsResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **myOrganisationGet**
> \Emnify\EmnifySdk\Model\InlineResponse200 myOrganisationGet()

My Organisation Details

You can retrieve details about your own organisation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\OrganisationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->myOrganisationGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->myOrganisationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Emnify\EmnifySdk\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **organisationStatusGet**
> \Emnify\EmnifySdk\Model\RetrieveOrganisationStatusesresponse[] organisationStatusGet()

List Organisation Status

Provides a list of available organisation status (lookup).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\OrganisationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->organisationStatusGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->organisationStatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Emnify\EmnifySdk\Model\RetrieveOrganisationStatusesresponse[]**](../Model/RetrieveOrganisationStatusesresponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statisticsDailyByIdGet**
> null[] statisticsDailyByIdGet()

Organisation Usage and Costs Statistics per day for the current month

Retrieve usage and costs statistics for the currently logged in organisation and all their child organisations accumulated per days from beginning of the month until today. Data traffic costs will not be returned for enterprise organisations with inclusive volume.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\OrganisationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->statisticsDailyByIdGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->statisticsDailyByIdGet: ', $e->getMessage(), PHP_EOL;
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

# **updateOrganisationTariff**
> updateOrganisationTariff($body, $org_id)

Update assigned tariff

Allows an organisation to change their assigned tariff.  The following restrictions apply: * The organisation must not have more than one tariff assigned. * The tariff can be changed only for the own organisation and direct child organisations. The organisation status must be \"ACTIVE\". * If performing the change in self-service, the organisation needs to be in evaluation. Parent organisations are allowed to change the tariffs of production organisations. * The selected tariff must be active, visible to the requested organisation and must have the same currency. Parent organisations are allowed to assign private tariffs to their child organisations.  In addition to updating the assigned tariff, the system will also: * Update all of the organisations tariff profiles to use the new tariff. * Activate all ratezones in the tariff in order to ensure that the endpoints do not lose connection. * Expire all currently active inclusive volumes and custom rates and delete future ones.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Emnify\EmnifySdk\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Emnify\EmnifySdk\Api\OrganisationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Emnify\EmnifySdk\Model\UpdateTariffRequest(); // \Emnify\EmnifySdk\Model\UpdateTariffRequest | 
$org_id = 1.2; // float | Numerical ID of an Organisation

try {
    $apiInstance->updateOrganisationTariff($body, $org_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganisationApi->updateOrganisationTariff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Emnify\EmnifySdk\Model\UpdateTariffRequest**](../Model/UpdateTariffRequest.md)|  |
 **org_id** | **float**| Numerical ID of an Organisation |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

