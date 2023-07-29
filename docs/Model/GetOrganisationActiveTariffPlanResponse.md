# GetOrganisationActiveTariffPlanResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organisation_id** | **float** |  | [optional] 
**start_date** | **string** |  | [optional] 
**expiry_date** | **string** | the end date of the tariff_plan, or null if it is open end | [optional] 
**sim_activated_rate** | **float** |  | [optional] 
**sim_activated_idle_rate** | **float** |  | [optional] 
**sim_suspended_rate** | **float** |  | [optional] 
**sim_suspended_active_rate** | **float** |  | [optional] 
**sim_activated_amount** | **float** | the number of activated SIMs this month | [optional] 
**applied_price** | [**\Swagger\Client\Model\GetOrganisationActiveTariffPlanResponseAppliedPrice**](GetOrganisationActiveTariffPlanResponseAppliedPrice.md) |  | [optional] 
**tariff_plan** | [**\Swagger\Client\Model\GetOrganisationActiveTariffPlanResponseTariffPlan**](GetOrganisationActiveTariffPlanResponseTariffPlan.md) |  | [optional] 
**tariff_plan_runtime** | [**\Swagger\Client\Model\GetOrganisationActiveTariffPlanResponseTariffPlanRuntime**](GetOrganisationActiveTariffPlanResponseTariffPlanRuntime.md) |  | [optional] 
**active** | **bool** |  | [optional] 
**applied_rate** | **float** |  | [optional] 
**id** | **float** |  | [optional] 
**service_level** | [**\Swagger\Client\Model\Apiv1organisationorgIdtariffPlanTariffPlanServiceLevel**](Apiv1organisationorgIdtariffPlanTariffPlanServiceLevel.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

