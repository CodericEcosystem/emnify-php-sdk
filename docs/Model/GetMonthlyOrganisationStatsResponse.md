# GetMonthlyOrganisationStatsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current_month** | [**\CodericEcosystem\EmnifySdk\Model\OrganisationTrafficStatisticsMonthObject**](OrganisationTrafficStatisticsMonthObject.md) |  | [optional] 
**last_month** | [**\CodericEcosystem\EmnifySdk\Model\OrganisationTrafficStatisticsMonthObject**](OrganisationTrafficStatisticsMonthObject.md) |  | [optional] 
**sim** | [**\CodericEcosystem\EmnifySdk\Model\GetMonthlyOrganisationStatsResponseSim**](GetMonthlyOrganisationStatsResponseSim.md) |  | [optional] 
**service_profiles** | **float** | Amount of service profiles | [optional] 
**tariff_profiles** | **float** | Amount of service profiles | [optional] 
**users** | **float** | Amount of users | [optional] 
**active_chargeable_sims** | **float** | Amount of active SIMs that will be charged within the current month. This field is omitted if there are no chargeable SIMs. | [optional] 
**hosting_fees** | **float** | Total of SIM hosting fees for all &#x60;active_chargeable_sims&#x60;. This field is omitted if there are no chargeable SIMs. | [optional] 
**inclusive_volume** | [**\CodericEcosystem\EmnifySdk\Model\GetMonthlyOrganisationStatsResponseInclusiveVolume**](GetMonthlyOrganisationStatsResponseInclusiveVolume.md) |  | [optional] 
**prepaid_balance** | [**\CodericEcosystem\EmnifySdk\Model\GetMonthlyOrganisationStatsResponsePrepaidBalance**](GetMonthlyOrganisationStatsResponsePrepaidBalance.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

