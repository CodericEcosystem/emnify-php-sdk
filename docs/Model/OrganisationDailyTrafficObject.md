# OrganisationDailyTrafficObject

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cost** | **string** | Total cost | [optional] 
**currency_id** | **string** |  | [optional] 
**currency** | [**\Emnify\EmnifySdk\Model\Currency**](Currency.md) |  | [optional] 
**traffic_type_id** | **string** |  | [optional] 
**traffic_type** | [**\Emnify\EmnifySdk\Model\OrganisationDailyTrafficObjectTrafficType**](OrganisationDailyTrafficObjectTrafficType.md) |  | [optional] 
**volume** | **string** | Total consumption (&#x60;volume_rx&#x60; + &#x60;volume_tx&#x60;) | [optional] 
**volume_rx** | **string** | * For traffic type &#x60;5&#x60; (&#x60;Data&#x60;): Downloaded data * For traffic type &#x60;6&#x60; (&#x60;SMS&#x60;): SMS MT | [optional] 
**volume_tx** | **string** | * For traffic type &#x60;5&#x60; (&#x60;Data&#x60;): Uploaded data * For traffic type &#x60;6&#x60; (&#x60;SMS&#x60;): SMS MO | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

