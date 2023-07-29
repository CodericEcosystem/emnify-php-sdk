# OrganisationTrafficStatisticsObject

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cost** | **float** | Total cost | [optional] 
**month** | **string** | The month that the data has been accumulated in &#x60;YYYY-MM-01&#x60; format | [optional] 
**currency** | [**\Swagger\Client\Model\Currency**](Currency.md) |  | [optional] 
**traffic_type** | [**\Swagger\Client\Model\OrganisationDailyTrafficObjectTrafficType**](OrganisationDailyTrafficObjectTrafficType.md) |  | [optional] 
**volume** | **float** | Total consumption (&#x60;volume_rx&#x60; + &#x60;volume_tx&#x60;) | [optional] 
**volume_rx** | **float** | * For traffic type &#x60;5&#x60; (&#x60;Data&#x60;): Downloaded data * For traffic type &#x60;6&#x60; (&#x60;SMS&#x60;): SMS MT | [optional] 
**volume_tx** | **float** | * For traffic type &#x60;5&#x60; (&#x60;Data&#x60;): Uploaded data * For traffic type &#x60;6&#x60; (&#x60;SMS&#x60;): SMS MO | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

