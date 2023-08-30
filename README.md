# Eminify PHP SDK
Rest API resources of the emnify System.
## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "require": {
    "emnify/emnify-sdk": "*@dev"
  }
}
```

Then run `composer install`

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


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

## Documentation for API Endpoints

All URIs are relative to *https://cdn.emnify.net*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApplicationTokensApi* | [**applicationTokenByIdPatch**](docs/Api/ApplicationTokensApi.md#applicationtokenbyidpatch) | **PATCH** /api/v1/application_token/{app_token_id} | Update Application Token
*ApplicationTokensApi* | [**applicationTokenGet**](docs/Api/ApplicationTokensApi.md#applicationtokenget) | **GET** /api/v1/application_token | List Application Tokens
*ApplicationTokensApi* | [**applicationTokenPost**](docs/Api/ApplicationTokensApi.md#applicationtokenpost) | **POST** /api/v1/application_token | Create Application Token
*AuthenticationApi* | [**authenticate**](docs/Api/AuthenticationApi.md#authenticate) | **POST** /api/v1/authenticate | Retrieve Authentication Token
*AuthenticationApi* | [**postMfa**](docs/Api/AuthenticationApi.md#postmfa) | **POST** /api/v1/user/mfa | Create an MFA key
*AuthenticationApi* | [**userMfaByIdPatch**](docs/Api/AuthenticationApi.md#usermfabyidpatch) | **PATCH** /api/v1/user/mfa/{key_id} | Activate MFA key
*AuthenticationApi* | [**userMfaByUserIdAndKeyIdDelete**](docs/Api/AuthenticationApi.md#usermfabyuseridandkeyiddelete) | **DELETE** /api/v1/user/{user_id}/mfa/{key_id} | Delete an MFA key
*AuthenticationApi* | [**userMfaStatusGet**](docs/Api/AuthenticationApi.md#usermfastatusget) | **GET** /api/v1/user/mfa/status | List MFA key Statuses
*AuthenticationApi* | [**userMfaTrustedDeviceByUserIdAndDeviceIdDelete**](docs/Api/AuthenticationApi.md#usermfatrusteddevicebyuseridanddeviceiddelete) | **DELETE** /api/v1/user/{user_id}/mfa/trusted_device/{device_id} | Delete a Trusted Device
*AuthenticationApi* | [**userMfaTrustedDeviceByUserIdGet**](docs/Api/AuthenticationApi.md#usermfatrusteddevicebyuseridget) | **GET** /api/v1/user/{user_id}/mfa/trusted_device | List Trusted Devices
*AuthenticationApi* | [**userMfaTypeGet**](docs/Api/AuthenticationApi.md#usermfatypeget) | **GET** /api/v1/user/mfa/type | List MFA key types
*CloudConnectApi* | [**createCloudConnectAttachmentTGW**](docs/Api/CloudConnectApi.md#createcloudconnectattachmenttgw) | **POST** /api/v1/cnc/breakout/tgw | Create a CloudConnect attachment via Transit Gateway
*CloudConnectApi* | [**createCloudConnectAttachmentVPN**](docs/Api/CloudConnectApi.md#createcloudconnectattachmentvpn) | **POST** /api/v1/cnc/breakout/vpn | Create a CloudConnect attachment via IPSec VPN
*CloudConnectApi* | [**deleteCloudConnectAttachment**](docs/Api/CloudConnectApi.md#deletecloudconnectattachment) | **DELETE** /api/v1/cnc/breakout/{cloudconnect_attachment_id} | Delete a specific CloudConnect attachment
*CloudConnectApi* | [**getCloudConnectAttachmentById**](docs/Api/CloudConnectApi.md#getcloudconnectattachmentbyid) | **GET** /api/v1/cnc/breakout/{cloudconnect_attachment_id} | View details of a CloudConnect attachment
*CloudConnectApi* | [**getCloudConnectAttachments**](docs/Api/CloudConnectApi.md#getcloudconnectattachments) | **GET** /api/v1/cnc/breakout | List all CloudConnect attachments of an organisation
*CloudConnectApi* | [**getCloudConnectAvailableRegionsByBreakoutType**](docs/Api/CloudConnectApi.md#getcloudconnectavailableregionsbybreakouttype) | **GET** /api/v1/cnc/breakout_type/{breakout_type_id}/available_region | Get list of available CloudConnect regions by breakout type
*CloudConnectApi* | [**getCloudConnectBreakoutTypes**](docs/Api/CloudConnectApi.md#getcloudconnectbreakouttypes) | **GET** /api/v1/cnc/breakout_type | List CloudConnect breakout types
*CloudConnectApi* | [**getCloudConnectRegions**](docs/Api/CloudConnectApi.md#getcloudconnectregions) | **GET** /api/v1/cnc/region | Get list of available CloudConnect regions
*CloudConnectApi* | [**listCloudConnectCustomPrices**](docs/Api/CloudConnectApi.md#listcloudconnectcustomprices) | **GET** /api/v1/cnc/pricing | List CloudConnect prices
*CloudConnectApi* | [**retryCloudConnectAttachment**](docs/Api/CloudConnectApi.md#retrycloudconnectattachment) | **PATCH** /api/v1/cnc/breakout/{cloudconnect_attachment_id} | Retry creation of an expired TGW breakout
*EndpointApi* | [**createEndpoint**](docs/Api/EndpointApi.md#createendpoint) | **POST** /api/v1/endpoint | Create Endpoint
*EndpointApi* | [**deleteEndpointDataQuotaById**](docs/Api/EndpointApi.md#deleteendpointdataquotabyid) | **DELETE** /api/v1/endpoint/{endpoint_id}/quota/data | Remove Data Quota
*EndpointApi* | [**deleteEndpointSmsQuotaById**](docs/Api/EndpointApi.md#deleteendpointsmsquotabyid) | **DELETE** /api/v1/endpoint/{endpoint_id}/quota/sms | Remove SMS Quota
*EndpointApi* | [**endpointBalanceByEndpointIdDelete**](docs/Api/EndpointApi.md#endpointbalancebyendpointiddelete) | **DELETE** /api/v1/endpoint/{endpoint_id}/balance | Reset Prepaid Balance
*EndpointApi* | [**endpointBalanceByEndpointIdGet**](docs/Api/EndpointApi.md#endpointbalancebyendpointidget) | **GET** /api/v1/endpoint/{endpoint_id}/balance | Endpoint Prepaid Balance
*EndpointApi* | [**endpointBalanceByEndpointIdPost**](docs/Api/EndpointApi.md#endpointbalancebyendpointidpost) | **POST** /api/v1/endpoint/{endpoint_id}/balance | Update Prepaid Balance
*EndpointApi* | [**endpointByIdDelete**](docs/Api/EndpointApi.md#endpointbyiddelete) | **DELETE** /api/v1/endpoint/{endpoint_id} | Delete an Endpoint
*EndpointApi* | [**endpointByIdGet**](docs/Api/EndpointApi.md#endpointbyidget) | **GET** /api/v1/endpoint/{endpoint_id} | Endpoint Details
*EndpointApi* | [**endpointByIdPatch**](docs/Api/EndpointApi.md#endpointbyidpatch) | **PATCH** /api/v1/endpoint/{endpoint_id} | Update an Endpoint
*EndpointApi* | [**endpointConnectivityByIdGet**](docs/Api/EndpointApi.md#endpointconnectivitybyidget) | **GET** /api/v1/endpoint/{endpoint_id}/connectivity | Endpoint Connectivity Status
*EndpointApi* | [**endpointEventsByID**](docs/Api/EndpointApi.md#endpointeventsbyid) | **GET** /api/v1/endpoint/{endpoint_id}/event | List Endpoint events
*EndpointApi* | [**endpointOperatorBlacklistByEndpointIdGet**](docs/Api/EndpointApi.md#endpointoperatorblacklistbyendpointidget) | **GET** /api/v1/endpoint/{endpoint_id}/operator_blacklist | List Operator Blacklist for Endpoint
*EndpointApi* | [**endpointOperatorBlacklistByEpIdAndOperatorIdDelete**](docs/Api/EndpointApi.md#endpointoperatorblacklistbyepidandoperatoriddelete) | **DELETE** /api/v1/endpoint/{endpoint_id}/operator_blacklist/{operator_id} | Remove an Operator from the Blacklist
*EndpointApi* | [**endpointOperatorBlacklistByEpIdAndOperatorIdPut**](docs/Api/EndpointApi.md#endpointoperatorblacklistbyepidandoperatoridput) | **PUT** /api/v1/endpoint/{endpoint_id}/operator_blacklist/{operator_id} | Add an Operator to the Blacklist
*EndpointApi* | [**endpointQuotaDataByEndpointIdGet**](docs/Api/EndpointApi.md#endpointquotadatabyendpointidget) | **GET** /api/v1/endpoint/{endpoint_id}/quota/data | Retrieve Data Quota details
*EndpointApi* | [**endpointQuotaDataByEndpointIdPost**](docs/Api/EndpointApi.md#endpointquotadatabyendpointidpost) | **POST** /api/v1/endpoint/{endpoint_id}/quota/data | Set Data Quota
*EndpointApi* | [**endpointQuotaSmsByEndpointIdGet**](docs/Api/EndpointApi.md#endpointquotasmsbyendpointidget) | **GET** /api/v1/endpoint/{endpoint_id}/quota/sms | Show SMS Quota details
*EndpointApi* | [**endpointQuotaSmsByEndpointIdPost**](docs/Api/EndpointApi.md#endpointquotasmsbyendpointidpost) | **POST** /api/v1/endpoint/{endpoint_id}/quota/sms | Set SMS Quota
*EndpointApi* | [**endpointSmsByEndpointIdAndSmsIdDelete**](docs/Api/EndpointApi.md#endpointsmsbyendpointidandsmsiddelete) | **DELETE** /api/v1/endpoint/{endpoint_id}/sms/{sms_id} | Cancel SMS
*EndpointApi* | [**endpointSmsByEndpointIdAndSmsIdGet**](docs/Api/EndpointApi.md#endpointsmsbyendpointidandsmsidget) | **GET** /api/v1/endpoint/{endpoint_id}/sms/{sms_id} | SMS details
*EndpointApi* | [**endpointSmsByIdGet**](docs/Api/EndpointApi.md#endpointsmsbyidget) | **GET** /api/v1/endpoint/{endpoint_id}/sms | List sent and received SMS
*EndpointApi* | [**endpointSmsByIdPost**](docs/Api/EndpointApi.md#endpointsmsbyidpost) | **POST** /api/v1/endpoint/{endpoint_id}/sms | Send SMS to an Endpoint
*EndpointApi* | [**endpointStatsByIdGet**](docs/Api/EndpointApi.md#endpointstatsbyidget) | **GET** /api/v1/endpoint/{endpoint_id}/stats | Endpoint Usage and Cost Statistics
*EndpointApi* | [**endpointStatsDailyByIdGet**](docs/Api/EndpointApi.md#endpointstatsdailybyidget) | **GET** /api/v1/endpoint/{endpoint_id}/stats/daily | Daily Endpoint Usage Statistics
*EndpointApi* | [**endpointStatusGet**](docs/Api/EndpointApi.md#endpointstatusget) | **GET** /api/v1/endpoint/status | List Endpoint Statuses
*EndpointApi* | [**getConnectivityInfoByEndpointId**](docs/Api/EndpointApi.md#getconnectivityinfobyendpointid) | **GET** /api/v1/endpoint/{endpoint_id}/connectivity_info | Connectivity Info of an Endpoint
*EndpointApi* | [**getEndpoints**](docs/Api/EndpointApi.md#getendpoints) | **GET** /api/v1/endpoint | List Endpoints
*EndpointApi* | [**updateEndpointConnectivityById**](docs/Api/EndpointApi.md#updateendpointconnectivitybyid) | **PATCH** /api/v1/endpoint/{endpoint_id}/connectivity | Reset Endpoint Connectivity
*EventsApi* | [**eventTypeGet**](docs/Api/EventsApi.md#eventtypeget) | **GET** /api/v1/event/type | List Event Types
*EventsApi* | [**getEvents**](docs/Api/EventsApi.md#getevents) | **GET** /api/v1/event | List Events
*IPAddressSpacesApi* | [**ipAddressSpaceAvailableByIpAddressVersionGet**](docs/Api/IPAddressSpacesApi.md#ipaddressspaceavailablebyipaddressversionget) | **GET** /api/v1/ip_address_space/available | Get Random Address Spaces
*IPAddressSpacesApi* | [**ipAddressSpaceByIdDelete**](docs/Api/IPAddressSpacesApi.md#ipaddressspacebyiddelete) | **DELETE** /api/v1/ip_address_space/{address_space_id} | Release an IP Address Space from an Organisation
*IPAddressSpacesApi* | [**ipAddressSpaceByIdPut**](docs/Api/IPAddressSpacesApi.md#ipaddressspacebyidput) | **PUT** /api/v1/ip_address_space/{address_space_id} | Assign an IP Address Space to an Organisation
*IPAddressSpacesApi* | [**ipAddressSpaceGet**](docs/Api/IPAddressSpacesApi.md#ipaddressspaceget) | **GET** /api/v1/ip_address_space | List IP Address Spaces
*IntegrationsApi* | [**createCallbackSecret**](docs/Api/IntegrationsApi.md#createcallbacksecret) | **POST** /api/v1/api_secret | Create a Callback Secret
*IntegrationsApi* | [**createCallbackURL**](docs/Api/IntegrationsApi.md#createcallbackurl) | **POST** /api/v1/api_callback | Create a Callback URL
*IntegrationsApi* | [**createDataStreamer**](docs/Api/IntegrationsApi.md#createdatastreamer) | **POST** /api/v2/data_stream | Create Data Stream
*IntegrationsApi* | [**dataStreamerV2ByIdRestart**](docs/Api/IntegrationsApi.md#datastreamerv2byidrestart) | **POST** /api/v2/data_stream/{data_stream_id}/restart | Restart Existing Data Stream
*IntegrationsApi* | [**deleteCallbackSecret**](docs/Api/IntegrationsApi.md#deletecallbacksecret) | **DELETE** /api/v1/api_secret/{api_secret_id} | Delete a Callback Secret
*IntegrationsApi* | [**deleteCallbackURL**](docs/Api/IntegrationsApi.md#deletecallbackurl) | **DELETE** /api/v1/api_callback/{api_callback_id} | Delete a Callback URL
*IntegrationsApi* | [**deleteDataStreamerV2**](docs/Api/IntegrationsApi.md#deletedatastreamerv2) | **DELETE** /api/v2/data_stream/{data_stream_id} | Delete Existing Data Stream
*IntegrationsApi* | [**getAPICallbackSecret**](docs/Api/IntegrationsApi.md#getapicallbacksecret) | **GET** /api/v1/api_secret | List API Callback Secrets
*IntegrationsApi* | [**getAPICallbackURLs**](docs/Api/IntegrationsApi.md#getapicallbackurls) | **GET** /api/v1/api_callback | Retrieve list of API Callback URLs
*IntegrationsApi* | [**getCallbackSecretbyID**](docs/Api/IntegrationsApi.md#getcallbacksecretbyid) | **GET** /api/v1/api_secret/{api_secret_id} | Get a Callback Secret by ID
*IntegrationsApi* | [**getCallbackURLbyID**](docs/Api/IntegrationsApi.md#getcallbackurlbyid) | **GET** /api/v1/api_callback/{api_callback_id} | Get a Callback URL by ID
*IntegrationsApi* | [**getDataStreamerByIdV2**](docs/Api/IntegrationsApi.md#getdatastreamerbyidv2) | **GET** /api/v2/data_stream/{data_stream_id} | Get Details on Existing Data Stream
*IntegrationsApi* | [**getDataStreamerDataStreamType**](docs/Api/IntegrationsApi.md#getdatastreamerdatastreamtype) | **GET** /api/v2/data_stream/type | Get Data Stream Types
*IntegrationsApi* | [**getDataStreamerEnumFilterFieldType**](docs/Api/IntegrationsApi.md#getdatastreamerenumfilterfieldtype) | **GET** /api/v2/data_stream/filter_field_type | Get Possible Data Stream Filter Fields
*IntegrationsApi* | [**getDataStreamerStatuses**](docs/Api/IntegrationsApi.md#getdatastreamerstatuses) | **GET** /api/v2/data_stream/status | Get Possible Data Stream Statuses
*IntegrationsApi* | [**listDataStreamerV2s**](docs/Api/IntegrationsApi.md#listdatastreamerv2s) | **GET** /api/v2/data_stream | List Data Stream configurations of your organization
*IntegrationsApi* | [**patchV2DataStream**](docs/Api/IntegrationsApi.md#patchv2datastream) | **PATCH** /api/v2/data_stream/{data_stream_id} | Modify Existing Data Stream
*LookupsApi* | [**breakoutRegionGet**](docs/Api/LookupsApi.md#breakoutregionget) | **GET** /api/v1/breakout_region | List Breakout Regions
*LookupsApi* | [**countryGet**](docs/Api/LookupsApi.md#countryget) | **GET** /api/v1/country | List Country Codes
*LookupsApi* | [**currencyGet**](docs/Api/LookupsApi.md#currencyget) | **GET** /api/v1/currency | List Currencies
*LookupsApi* | [**dataBlocksizeGet**](docs/Api/LookupsApi.md#datablocksizeget) | **GET** /api/v1/data_blocksize | List Data blocksizes
*LookupsApi* | [**dataThrottleGet**](docs/Api/LookupsApi.md#datathrottleget) | **GET** /api/v1/data_throttle | List Data Throttles
*LookupsApi* | [**esmeInterfaceTypeGet**](docs/Api/LookupsApi.md#esmeinterfacetypeget) | **GET** /api/v1/esme_interface_type | List ESME Interface Types
*LookupsApi* | [**listServiceLevels**](docs/Api/LookupsApi.md#listservicelevels) | **GET** /api/v1/service_level | Get list of service levels
*LookupsApi* | [**ratType**](docs/Api/LookupsApi.md#rattype) | **GET** /api/v1/rat_type | List RAT types
*OperatorApi* | [**operatorGet**](docs/Api/OperatorApi.md#operatorget) | **GET** /api/v1/operator | List Operators
*OrganisationApi* | [**assignRatezoneInclusiveVolume**](docs/Api/OrganisationApi.md#assignratezoneinclusivevolume) | **PUT** /api/v1/organisation/{org_id_or_my}/inclusive_volume/{inclusive_volume_id} | Assign a ratezone inclusive volume to an organisation
*OrganisationApi* | [**getActiveOrganisationInclusiveVolume**](docs/Api/OrganisationApi.md#getactiveorganisationinclusivevolume) | **GET** /api/v1/organisation/{org_id_or_my}/inclusive_volume/active | Get list of active organisation inclusive volumes
*OrganisationApi* | [**getOrganisationDailyStats**](docs/Api/OrganisationApi.md#getorganisationdailystats) | **GET** /api/v1/organisation/{org_id_or_my}/stats/daily | Daily organisation traffic and cost statistics
*OrganisationApi* | [**getOrganisationHourlyStats**](docs/Api/OrganisationApi.md#getorganisationhourlystats) | **GET** /api/v1/organisation/{org_id_or_my}/stats/hourly | Hourly organisation traffic statistics
*OrganisationApi* | [**getOrganisationMonthlyStats**](docs/Api/OrganisationApi.md#getorganisationmonthlystats) | **GET** /api/v1/organisation/{org_id_or_my}/stats | Monthly organisation traffic and cost statistics
*OrganisationApi* | [**myOrganisationGet**](docs/Api/OrganisationApi.md#myorganisationget) | **GET** /api/v1/organisation/my | My Organisation Details
*OrganisationApi* | [**organisationStatusGet**](docs/Api/OrganisationApi.md#organisationstatusget) | **GET** /api/v1/organisation/status | List Organisation Status
*OrganisationApi* | [**statisticsDailyByIdGet**](docs/Api/OrganisationApi.md#statisticsdailybyidget) | **GET** /api/v1/stats/daily | Organisation Usage and Costs Statistics per day for the current month
*OrganisationApi* | [**updateOrganisationTariff**](docs/Api/OrganisationApi.md#updateorganisationtariff) | **PATCH** /api/v1/organisation/{org_id}/tariff | Update assigned tariff
*PasswordManagementAndActivationApi* | [**userActivationPost**](docs/Api/PasswordManagementAndActivationApi.md#useractivationpost) | **POST** /api/v1/user/activation | Activate User
*PasswordManagementAndActivationApi* | [**userActivationResendPost**](docs/Api/PasswordManagementAndActivationApi.md#useractivationresendpost) | **POST** /api/v1/user/activation_resend | Resend User Activation E-mail
*PasswordManagementAndActivationApi* | [**userPasswordPatch**](docs/Api/PasswordManagementAndActivationApi.md#userpasswordpatch) | **PATCH** /api/v1/user/password | Change Password
*SIMApi* | [**getEsimInstallationCode**](docs/Api/SIMApi.md#getesiminstallationcode) | **GET** /api/v1/sim/{sim_id}/installation_code | Get the code to install an eSIM
*SIMApi* | [**registerSIMBatchByBIC**](docs/Api/SIMApi.md#registersimbatchbybic) | **PATCH** /api/v1/sim_batch/bic/{bic} | Register a given batch by BIC
*SIMApi* | [**sIMStatisticsDailyByIdGet**](docs/Api/SIMApi.md#simstatisticsdailybyidget) | **GET** /api/v1/sim/{sim_id}/stats/daily | Daily SIM Usage Statistics
*SIMApi* | [**simByIdDelete**](docs/Api/SIMApi.md#simbyiddelete) | **DELETE** /api/v1/sim/{sim_id} | Delete a SIM
*SIMApi* | [**simByIdGet**](docs/Api/SIMApi.md#simbyidget) | **GET** /api/v1/sim/{sim_id} | SIM Details
*SIMApi* | [**simByIdPatch**](docs/Api/SIMApi.md#simbyidpatch) | **PATCH** /api/v1/sim/{sim_id} | Update a SIM
*SIMApi* | [**simEventPagePerPageSortBySimIdAndQGet**](docs/Api/SIMApi.md#simeventpageperpagesortbysimidandqget) | **GET** /api/v1/sim/{sim_id}/event | List SIM Events
*SIMApi* | [**simPerPageSortByQAndPageGet**](docs/Api/SIMApi.md#simperpagesortbyqandpageget) | **GET** /api/v1/sim | List SIMs
*SIMApi* | [**simStatsByIdGet**](docs/Api/SIMApi.md#simstatsbyidget) | **GET** /api/v1/sim/{sim_id}/stats | SIM Usage and Cost Statistics
*SIMApi* | [**simStatusGet**](docs/Api/SIMApi.md#simstatusget) | **GET** /api/v1/sim/status | List SIM Statuses
*SIMApi* | [**validateSIMBatchByBIC**](docs/Api/SIMApi.md#validatesimbatchbybic) | **GET** /api/v1/sim_batch/bic/{bic} | Validate if a given batch can be registered by BIC
*ServiceLookupsAndConfigurationApi* | [**dnsByIdDelete**](docs/Api/ServiceLookupsAndConfigurationApi.md#dnsbyiddelete) | **DELETE** /api/v1/dns/{dns_id} | Delete DNS config
*ServiceLookupsAndConfigurationApi* | [**dnsGet**](docs/Api/ServiceLookupsAndConfigurationApi.md#dnsget) | **GET** /api/v1/dns | List DNS Configs
*ServiceLookupsAndConfigurationApi* | [**dnsPost**](docs/Api/ServiceLookupsAndConfigurationApi.md#dnspost) | **POST** /api/v1/dns | Create DNS config
*ServiceLookupsAndConfigurationApi* | [**serviceGet**](docs/Api/ServiceLookupsAndConfigurationApi.md#serviceget) | **GET** /api/v1/service | List Services
*ServiceLookupsAndConfigurationApi* | [**serviceTrafficLimitByIdGet**](docs/Api/ServiceLookupsAndConfigurationApi.md#servicetrafficlimitbyidget) | **GET** /api/v1/service/{service_id}/traffic_limit | Get Service Traffic Limit
*ServiceLookupsAndConfigurationApi* | [**trafficLimitGet**](docs/Api/ServiceLookupsAndConfigurationApi.md#trafficlimitget) | **GET** /api/v1/traffic_limit | List Traffic Limits
*ServiceProfilesApi* | [**addTrafficLimit**](docs/Api/ServiceProfilesApi.md#addtrafficlimit) | **PUT** /api/v1/service_profile/{profile_id}/service/{service_id}/traffic_limit/{limit_id} | Add Traffic Limit to Service Profile
*ServiceProfilesApi* | [**deleteQuotaByServiceProfileId**](docs/Api/ServiceProfilesApi.md#deletequotabyserviceprofileid) | **DELETE** /api/v1/service_profile/{profile_id}/quota/{quota_type} | Remove all quotas of assigned endpoints
*ServiceProfilesApi* | [**removeTrafficLimit**](docs/Api/ServiceProfilesApi.md#removetrafficlimit) | **DELETE** /api/v1/service_profile/{profile_id}/service/{service_id}/traffic_limit/{limit_id} | Remove Traffic Limit from a Service Profile
*ServiceProfilesApi* | [**serviceProfileByProfileIdDelete**](docs/Api/ServiceProfilesApi.md#serviceprofilebyprofileiddelete) | **DELETE** /api/v1/service_profile/{profile_id} | Delete a Service Profile
*ServiceProfilesApi* | [**serviceProfileByProfileIdGet**](docs/Api/ServiceProfilesApi.md#serviceprofilebyprofileidget) | **GET** /api/v1/service_profile/{profile_id} | Retrieve a Service Profile
*ServiceProfilesApi* | [**serviceProfileByProfileIdPatch**](docs/Api/ServiceProfilesApi.md#serviceprofilebyprofileidpatch) | **PATCH** /api/v1/service_profile/{profile_id} | Update Service Profile
*ServiceProfilesApi* | [**serviceProfileGet**](docs/Api/ServiceProfilesApi.md#serviceprofileget) | **GET** /api/v1/service_profile | List Service Profiles
*ServiceProfilesApi* | [**serviceProfilePost**](docs/Api/ServiceProfilesApi.md#serviceprofilepost) | **POST** /api/v1/service_profile | Create Service Profile
*ServiceProfilesApi* | [**serviceProfileServiceByProfileAndServiceDelete**](docs/Api/ServiceProfilesApi.md#serviceprofileservicebyprofileandservicedelete) | **DELETE** /api/v1/service_profile/{profile_id}/service/{service_id} | Remove a Service from a Service Profile
*ServiceProfilesApi* | [**serviceProfileServiceByProfileAndServicePut**](docs/Api/ServiceProfilesApi.md#serviceprofileservicebyprofileandserviceput) | **PUT** /api/v1/service_profile/{profile_id}/service/{service_id} | Add a Service to a Service Profile
*TariffPlansApi* | [**getOrganisationActiveTariffPlan**](docs/Api/TariffPlansApi.md#getorganisationactivetariffplan) | **GET** /api/v1/organisation/{org_id_or_my}/tariff_plan/active | Get the active tariff plan for the given organisation
*TariffPlansApi* | [**organisationTariffPlanByOrgIdGet**](docs/Api/TariffPlansApi.md#organisationtariffplanbyorgidget) | **GET** /api/v1/organisation/{org_id}/tariff_plan | List Organisation Tariff Plans
*TariffProfilesApi* | [**tariffProfileByIdDelete**](docs/Api/TariffProfilesApi.md#tariffprofilebyiddelete) | **DELETE** /api/v1/tariff_profile/{tariff_profile_id} | Delete Tariff Profile
*TariffProfilesApi* | [**tariffProfileByIdGet**](docs/Api/TariffProfilesApi.md#tariffprofilebyidget) | **GET** /api/v1/tariff_profile/{tariff_profile_id} | Tariff Profile Details
*TariffProfilesApi* | [**tariffProfileByIdPatch**](docs/Api/TariffProfilesApi.md#tariffprofilebyidpatch) | **PATCH** /api/v1/tariff_profile/{tariff_profile_id} | Update Tariff Profile
*TariffProfilesApi* | [**tariffProfileCoverageByTpIdGet**](docs/Api/TariffProfilesApi.md#tariffprofilecoveragebytpidget) | **GET** /api/v1/tariff_profile/{tariff_profile_id}/coverage | List Tariff Profile Coverage
*TariffProfilesApi* | [**tariffProfileGet**](docs/Api/TariffProfilesApi.md#tariffprofileget) | **GET** /api/v1/tariff_profile | List Tariff Profiles
*TariffProfilesApi* | [**tariffProfileInclusiveVolumeAssignment**](docs/Api/TariffProfilesApi.md#tariffprofileinclusivevolumeassignment) | **PUT** /api/v1/tariff_profile/{tariff_profile_id}/inclusive_volume/{inclusive_volume_id} | Assign Inclusive Volume to Tarriff Profile
*TariffProfilesApi* | [**tariffProfileInclusiveVolumeRemoveAssignment**](docs/Api/TariffProfilesApi.md#tariffprofileinclusivevolumeremoveassignment) | **DELETE** /api/v1/tariff_profile/{tariff_profile_id}/inclusive_volume/{inclusive_volume_id} | Unassign Inclusive Volume from Tariff Profile
*TariffProfilesApi* | [**tariffProfilePost**](docs/Api/TariffProfilesApi.md#tariffprofilepost) | **POST** /api/v1/tariff_profile | Create Tariff Profile
*TariffProfilesApi* | [**tariffProfileRatezoneSelectionByTpIdAndRzIdDelete**](docs/Api/TariffProfilesApi.md#tariffprofileratezoneselectionbytpidandrziddelete) | **DELETE** /api/v1/tariff_profile/{tariff_profile_id}/ratezone_selection/{ratezone_id} | Delete Ratezone from Tariff Profile
*TariffProfilesApi* | [**tariffProfileRatezoneSelectionByTpIdAndRzIdPut**](docs/Api/TariffProfilesApi.md#tariffprofileratezoneselectionbytpidandrzidput) | **PUT** /api/v1/tariff_profile/{tariff_profile_id}/ratezone_selection/{ratezone_id} | Assign Ratezone to Tarriff Profile
*USSDApi* | [**endpointUssdByIdPost**](docs/Api/USSDApi.md#endpointussdbyidpost) | **POST** /api/v1/endpoint/{endpoint_id}/ussd | Create USSD dialog
*UserManagementApi* | [**userByIdDelete**](docs/Api/UserManagementApi.md#userbyiddelete) | **DELETE** /api/v1/user/{user_id} | Delete User by ID
*UserManagementApi* | [**userByIdDeleteV2**](docs/Api/UserManagementApi.md#userbyiddeletev2) | **DELETE** /api/v2/user/{user_id} | Delete User by ID
*UserManagementApi* | [**userByIdGet**](docs/Api/UserManagementApi.md#userbyidget) | **GET** /api/v1/user/{user_id} | Get User by ID or Username
*UserManagementApi* | [**userByIdPatch**](docs/Api/UserManagementApi.md#userbyidpatch) | **PATCH** /api/v1/user/{user_id} | Update User by ID
*UserManagementApi* | [**userByIdV2CreateSupportToken**](docs/Api/UserManagementApi.md#userbyidv2createsupporttoken) | **POST** /api/v2/user/{user_id}/support_token | Create support access token for given user
*UserManagementApi* | [**userEventPagePerPageSortByUserIdAndQGet**](docs/Api/UserManagementApi.md#usereventpageperpagesortbyuseridandqget) | **GET** /api/v1/user/{user_id}/event | List User Events
*UserManagementApi* | [**userPerPageSortByQAndPageGet**](docs/Api/UserManagementApi.md#userperpagesortbyqandpageget) | **GET** /api/v1/user | List User Accounts
*UserManagementApi* | [**userPerPageSortByQAndPagePost**](docs/Api/UserManagementApi.md#userperpagesortbyqandpagepost) | **POST** /api/v1/user | Create User
*UserManagementApi* | [**userRoleByIdAndRoleIdDelete**](docs/Api/UserManagementApi.md#userrolebyidandroleiddelete) | **DELETE** /api/v1/user/{user_id}/role/{role_id} | Delete User Role
*UserManagementApi* | [**userRoleByIdAndRoleIdPut**](docs/Api/UserManagementApi.md#userrolebyidandroleidput) | **PUT** /api/v1/user/{user_id}/role/{role_id} | Assign Role to User
*UserManagementApi* | [**userRoleGet**](docs/Api/UserManagementApi.md#userroleget) | **GET** /api/v1/user/role | List User Roles
*UserManagementApi* | [**userRolePermissionByIdGet**](docs/Api/UserManagementApi.md#userrolepermissionbyidget) | **GET** /api/v1/user/{user_id}/role/permission | List User Role Permissions
*UserManagementApi* | [**userStatusGet**](docs/Api/UserManagementApi.md#userstatusget) | **GET** /api/v1/user/status | List User Statuses

## Documentation For Models

 - [AccountActivationrequest](docs/Model/AccountActivationrequest.md)
 - [ActionOnExhaustion](docs/Model/ActionOnExhaustion.md)
 - [ActivateBatch](docs/Model/ActivateBatch.md)
 - [ActivateMFAKeyRequest](docs/Model/ActivateMFAKeyRequest.md)
 - [Apiv1cncbreakoutStatus](docs/Model/Apiv1cncbreakoutStatus.md)
 - [Apiv1eventEventSeverity](docs/Model/Apiv1eventEventSeverity.md)
 - [Apiv1eventEventSource](docs/Model/Apiv1eventEventSource.md)
 - [Apiv1eventEventType](docs/Model/Apiv1eventEventType.md)
 - [Apiv1eventOrganisation](docs/Model/Apiv1eventOrganisation.md)
 - [Apiv1eventUser](docs/Model/Apiv1eventUser.md)
 - [Apiv1organisationorgIdOrMyinclusiveVolumeactiveCurrency](docs/Model/Apiv1organisationorgIdOrMyinclusiveVolumeactiveCurrency.md)
 - [Apiv1organisationorgIdOrMyinclusiveVolumeactiveTariff](docs/Model/Apiv1organisationorgIdOrMyinclusiveVolumeactiveTariff.md)
 - [Apiv1organisationorgIdOrMyinclusiveVolumeactiveTariffRatezone](docs/Model/Apiv1organisationorgIdOrMyinclusiveVolumeactiveTariffRatezone.md)
 - [Apiv1organisationorgIdtariffPlanServiceLevel](docs/Model/Apiv1organisationorgIdtariffPlanServiceLevel.md)
 - [Apiv1organisationorgIdtariffPlanTariffPlan](docs/Model/Apiv1organisationorgIdtariffPlanTariffPlan.md)
 - [Apiv1organisationorgIdtariffPlanTariffPlanCurrency](docs/Model/Apiv1organisationorgIdtariffPlanTariffPlanCurrency.md)
 - [Apiv1organisationorgIdtariffPlanTariffPlanPrice](docs/Model/Apiv1organisationorgIdtariffPlanTariffPlanPrice.md)
 - [Apiv1organisationorgIdtariffPlanTariffPlanServiceLevel](docs/Model/Apiv1organisationorgIdtariffPlanTariffPlanServiceLevel.md)
 - [Apiv1organisationorgIdtariffPlanTariffPlanStatus](docs/Model/Apiv1organisationorgIdtariffPlanTariffPlanStatus.md)
 - [Apiv1organisationorgIdtariffPlanTariffPlanVisibility](docs/Model/Apiv1organisationorgIdtariffPlanTariffPlanVisibility.md)
 - [Apiv1serviceserviceIdtrafficLimitPeriod](docs/Model/Apiv1serviceserviceIdtrafficLimitPeriod.md)
 - [Apiv1simCustomerOrg](docs/Model/Apiv1simCustomerOrg.md)
 - [Apiv1simsimIdstatsLastMonth](docs/Model/Apiv1simsimIdstatsLastMonth.md)
 - [Apiv1simsimIdstatsLastMonthData](docs/Model/Apiv1simsimIdstatsLastMonthData.md)
 - [Apiv1tariffProfileTariff](docs/Model/Apiv1tariffProfileTariff.md)
 - [Apiv1tariffProfileTariffCurrency](docs/Model/Apiv1tariffProfileTariffCurrency.md)
 - [Apiv1userStatus](docs/Model/Apiv1userStatus.md)
 - [Apiv1usermfakeyIdStatus](docs/Model/Apiv1usermfakeyIdStatus.md)
 - [Apiv2dataStreamDestination](docs/Model/Apiv2dataStreamDestination.md)
 - [Apiv2dataStreamFilters](docs/Model/Apiv2dataStreamFilters.md)
 - [Apiv2dataStreamdataStreamIdStatus](docs/Model/Apiv2dataStreamdataStreamIdStatus.md)
 - [ApplicationToken](docs/Model/ApplicationToken.md)
 - [Authentication](docs/Model/Authentication.md)
 - [AuthenticationResponse](docs/Model/AuthenticationResponse.md)
 - [ChangePassword422Error](docs/Model/ChangePassword422Error.md)
 - [ChangePasswordrequest](docs/Model/ChangePasswordrequest.md)
 - [ChangeQuota422Error](docs/Model/ChangeQuota422Error.md)
 - [CloudConnectBreakoutType](docs/Model/CloudConnectBreakoutType.md)
 - [Country](docs/Model/Country.md)
 - [CreateApplicationTokenrequest](docs/Model/CreateApplicationTokenrequest.md)
 - [CreateApplicationTokenresponse](docs/Model/CreateApplicationTokenresponse.md)
 - [CreateCloudConnectTGWRequest](docs/Model/CreateCloudConnectTGWRequest.md)
 - [CreateCloudConnectVPNRequest](docs/Model/CreateCloudConnectVPNRequest.md)
 - [CreateCloudConnectVPNRequest1](docs/Model/CreateCloudConnectVPNRequest1.md)
 - [CreateMFAKeyResponse](docs/Model/CreateMFAKeyResponse.md)
 - [CreateTariffProfilerequest](docs/Model/CreateTariffProfilerequest.md)
 - [CreateUserrequest](docs/Model/CreateUserrequest.md)
 - [CreateaDNSentryrequest](docs/Model/CreateaDNSentryrequest.md)
 - [CreateaServiceProfilerequest](docs/Model/CreateaServiceProfilerequest.md)
 - [Currency](docs/Model/Currency.md)
 - [DataStreamDataStreamIdBody](docs/Model/DataStreamDataStreamIdBody.md)
 - [ESIMInstallationCodeInJSONFormat](docs/Model/ESIMInstallationCodeInJSONFormat.md)
 - [Endpoint](docs/Model/Endpoint.md)
 - [Endpoint1](docs/Model/Endpoint1.md)
 - [Endpoint2](docs/Model/Endpoint2.md)
 - [EndpointQuota](docs/Model/EndpointQuota.md)
 - [EndpointQuota1](docs/Model/EndpointQuota1.md)
 - [EndpointRuntimeData](docs/Model/EndpointRuntimeData.md)
 - [Event](docs/Model/Event.md)
 - [FormFactor](docs/Model/FormFactor.md)
 - [GetHourlyOrganisationStatsResponse](docs/Model/GetHourlyOrganisationStatsResponse.md)
 - [GetHourlyOrganisationStatsResponseData](docs/Model/GetHourlyOrganisationStatsResponseData.md)
 - [GetHourlyOrganisationStatsResponseSms](docs/Model/GetHourlyOrganisationStatsResponseSms.md)
 - [GetMonthlyOrganisationStatsResponse](docs/Model/GetMonthlyOrganisationStatsResponse.md)
 - [GetMonthlyOrganisationStatsResponseInclusiveVolume](docs/Model/GetMonthlyOrganisationStatsResponseInclusiveVolume.md)
 - [GetMonthlyOrganisationStatsResponsePrepaidBalance](docs/Model/GetMonthlyOrganisationStatsResponsePrepaidBalance.md)
 - [GetMonthlyOrganisationStatsResponseSim](docs/Model/GetMonthlyOrganisationStatsResponseSim.md)
 - [GetOrganisationActiveTariffPlanResponse](docs/Model/GetOrganisationActiveTariffPlanResponse.md)
 - [GetOrganisationActiveTariffPlanResponseAppliedPrice](docs/Model/GetOrganisationActiveTariffPlanResponseAppliedPrice.md)
 - [GetOrganisationActiveTariffPlanResponseAppliedPriceSimActivatedRate](docs/Model/GetOrganisationActiveTariffPlanResponseAppliedPriceSimActivatedRate.md)
 - [GetOrganisationActiveTariffPlanResponseTariffPlan](docs/Model/GetOrganisationActiveTariffPlanResponseTariffPlan.md)
 - [GetOrganisationActiveTariffPlanResponseTariffPlanPrice](docs/Model/GetOrganisationActiveTariffPlanResponseTariffPlanPrice.md)
 - [GetOrganisationActiveTariffPlanResponseTariffPlanPriceSimActivatedRate](docs/Model/GetOrganisationActiveTariffPlanResponseTariffPlanPriceSimActivatedRate.md)
 - [GetOrganisationActiveTariffPlanResponseTariffPlanRuntime](docs/Model/GetOrganisationActiveTariffPlanResponseTariffPlanRuntime.md)
 - [GetdetailsofSMSresponse](docs/Model/GetdetailsofSMSresponse.md)
 - [HasId](docs/Model/HasId.md)
 - [InclusiveVolumeInclusiveVolumeIdBody](docs/Model/InclusiveVolumeInclusiveVolumeIdBody.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse201](docs/Model/InlineResponse201.md)
 - [InlineResponse404](docs/Model/InlineResponse404.md)
 - [InlineResponse422](docs/Model/InlineResponse422.md)
 - [ListofAllAvailableSIMStatusesresponse](docs/Model/ListofAllAvailableSIMStatusesresponse.md)
 - [ListofApplicationTokensresponse](docs/Model/ListofApplicationTokensresponse.md)
 - [ListofSMSresponse](docs/Model/ListofSMSresponse.md)
 - [Listoftrusteddevicesresponse](docs/Model/Listoftrusteddevicesresponse.md)
 - [MFAKeyStatusLookupresponse](docs/Model/MFAKeyStatusLookupresponse.md)
 - [MFAKeyTypeLookupresponse](docs/Model/MFAKeyTypeLookupresponse.md)
 - [Model40xResponse](docs/Model/Model40xResponse.md)
 - [OneOfapiv1organisationorgIdtariffPlanTariffPlanPriceSimActivatedRateItems](docs/Model/OneOfapiv1organisationorgIdtariffPlanTariffPlanPriceSimActivatedRateItems.md)
 - [OneOfapiv2dataStreamDestinationCredentials](docs/Model/OneOfapiv2dataStreamDestinationCredentials.md)
 - [OrganisationDailyTrafficObject](docs/Model/OrganisationDailyTrafficObject.md)
 - [OrganisationDailyTrafficObjectTrafficType](docs/Model/OrganisationDailyTrafficObjectTrafficType.md)
 - [OrganisationTrafficStatisticsMonthObject](docs/Model/OrganisationTrafficStatisticsMonthObject.md)
 - [OrganisationTrafficStatisticsObject](docs/Model/OrganisationTrafficStatisticsObject.md)
 - [PatchTariffProfilerequest](docs/Model/PatchTariffProfilerequest.md)
 - [QuotaStatus](docs/Model/QuotaStatus.md)
 - [RATType](docs/Model/RATType.md)
 - [ResendActivationMailrequest](docs/Model/ResendActivationMailrequest.md)
 - [ResponseOfActivatableSIMBatch](docs/Model/ResponseOfActivatableSIMBatch.md)
 - [ResponseSchemaForSIMStatistics](docs/Model/ResponseSchemaForSIMStatistics.md)
 - [RetrieveAvailableAddressSpacesresponse](docs/Model/RetrieveAvailableAddressSpacesresponse.md)
 - [RetrieveAvailableBreakoutRegionsresponse](docs/Model/RetrieveAvailableBreakoutRegionsresponse.md)
 - [RetrieveAvailableCountriesresponse](docs/Model/RetrieveAvailableCountriesresponse.md)
 - [RetrieveAvailableCurrenciesresponse](docs/Model/RetrieveAvailableCurrenciesresponse.md)
 - [RetrieveAvailableDataBlocksizesresponse](docs/Model/RetrieveAvailableDataBlocksizesresponse.md)
 - [RetrieveAvailableDataThrottlesresponse](docs/Model/RetrieveAvailableDataThrottlesresponse.md)
 - [RetrieveAvailableESMEInterfaceTypesresponse](docs/Model/RetrieveAvailableESMEInterfaceTypesresponse.md)
 - [RetrieveAvailableServicesresponse](docs/Model/RetrieveAvailableServicesresponse.md)
 - [RetrieveAvailableUserStatusesresponse](docs/Model/RetrieveAvailableUserStatusesresponse.md)
 - [RetrieveConnectivityInformationresponse](docs/Model/RetrieveConnectivityInformationresponse.md)
 - [RetrieveCoverageresponse](docs/Model/RetrieveCoverageresponse.md)
 - [RetrieveEndpointConnectivityStatusresponse](docs/Model/RetrieveEndpointConnectivityStatusresponse.md)
 - [RetrieveEndpointStatisticsresponse](docs/Model/RetrieveEndpointStatisticsresponse.md)
 - [RetrieveEventTypesresponse](docs/Model/RetrieveEventTypesresponse.md)
 - [RetrieveEventsresponse](docs/Model/RetrieveEventsresponse.md)
 - [RetrieveEventsresponse4](docs/Model/RetrieveEventsresponse4.md)
 - [RetrieveOperatorBlacklistresponse](docs/Model/RetrieveOperatorBlacklistresponse.md)
 - [RetrieveOrganisationStatusesresponse](docs/Model/RetrieveOrganisationStatusesresponse.md)
 - [RetrievePrepaidBalanceresponse](docs/Model/RetrievePrepaidBalanceresponse.md)
 - [RetrieveServiceProfileListresponse](docs/Model/RetrieveServiceProfileListresponse.md)
 - [RetrieveaSingleServiceProfileresponse](docs/Model/RetrieveaSingleServiceProfileresponse.md)
 - [RetrieveavailableTrafficLimitsresponse](docs/Model/RetrieveavailableTrafficLimitsresponse.md)
 - [RetrieveownIPAddressSpacesresponse](docs/Model/RetrieveownIPAddressSpacesresponse.md)
 - [RetrievetheUserresponse](docs/Model/RetrievetheUserresponse.md)
 - [SMSQuota](docs/Model/SMSQuota.md)
 - [ServiceProfile](docs/Model/ServiceProfile.md)
 - [Sim](docs/Model/Sim.md)
 - [SimEntry](docs/Model/SimEntry.md)
 - [SimEntry1](docs/Model/SimEntry1.md)
 - [SimManufacturer](docs/Model/SimManufacturer.md)
 - [SimModel](docs/Model/SimModel.md)
 - [StartingaUSSDDialogrequest](docs/Model/StartingaUSSDDialogrequest.md)
 - [StartingaUSSDDialogresponse](docs/Model/StartingaUSSDDialogresponse.md)
 - [Status](docs/Model/Status.md)
 - [SubmitMTSMSrequest](docs/Model/SubmitMTSMSrequest.md)
 - [SuccessfulBatchActivation](docs/Model/SuccessfulBatchActivation.md)
 - [TariffProfile](docs/Model/TariffProfile.md)
 - [TariffProfile1](docs/Model/TariffProfile1.md)
 - [TariffProfile2](docs/Model/TariffProfile2.md)
 - [TariffProfileInclusiveVolume](docs/Model/TariffProfileInclusiveVolume.md)
 - [TariffProfileInclusiveVolumeCurrency](docs/Model/TariffProfileInclusiveVolumeCurrency.md)
 - [TariffProfileInclusiveVolumeRatezone](docs/Model/TariffProfileInclusiveVolumeRatezone.md)
 - [UpdateEndpoint](docs/Model/UpdateEndpoint.md)
 - [UpdateEndpointConnectivityByIdRequest](docs/Model/UpdateEndpointConnectivityByIdRequest.md)
 - [UpdatePrepaidBalanceresponse](docs/Model/UpdatePrepaidBalanceresponse.md)
 - [UpdateSIM](docs/Model/UpdateSIM.md)
 - [UpdateServiceProfile](docs/Model/UpdateServiceProfile.md)
 - [UpdateTariffRequest](docs/Model/UpdateTariffRequest.md)
 - [UpdateUserrequest](docs/Model/UpdateUserrequest.md)
 - [User](docs/Model/User.md)
 - [UserByIdV2CreateSupportTokenRequest](docs/Model/UserByIdV2CreateSupportTokenRequest.md)
 - [UserByIdV2CreateSupportTokenRequest1](docs/Model/UserByIdV2CreateSupportTokenRequest1.md)
 - [UserMfaBody](docs/Model/UserMfaBody.md)
 - [V1ApiSecretBody](docs/Model/V1ApiSecretBody.md)
 - [V2DataStreamBody](docs/Model/V2DataStreamBody.md)

## Documentation For Authorization


## bearerAuth

- **Type**: HTTP bearer authentication


## Author



