# InlineResponse20010

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**name** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**user_id** | **int** |  | [optional] 
**creation_date** | **string** | The date this attachment was created in UTC | [optional] 
**accept_attachment_expiry_date** | **string** | The expiry date of the accept attachment state in UTC. This will only be returned if the breakout is of type &#x60;Transit Gateway (type_id: 1)&#x60; and in Status &#x60;Pending AWS Actvation (status_id: 2)&#x60; | [optional] 
**termination_date** | **string** |  | [optional] 
**aws_transit_gateway_attachment_id** | **string** |  | [optional] 
**aws_vpn_connection_id** | **string** | This is only set when the breakout is a VPN attachment | [optional] 
**status** | [**\CodericEcosystem\EmnifySdk\Model\Apiv1cncbreakoutStatus**](Apiv1cncbreakoutStatus.md) |  | [optional] 
**type** | [**\CodericEcosystem\EmnifySdk\Model\Apiv1cncbreakoutStatus**](Apiv1cncbreakoutStatus.md) |  | [optional] 
**region** | **string** | The customer region that this attachment belongs to | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

