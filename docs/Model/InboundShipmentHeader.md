# InboundShipmentHeader

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_name** | **
string** | The name for the shipment. Use a naming convention that helps distinguish between shipments over time, such as the date the shipment was created. |
**ship_from_address** | [**\Swagger\Client\Models\Address**](Address.md) |  |
**destination_fulfillment_center_id** | **
string** | The identifier for the fulfillment center to which the shipment will be shipped. Get this value from the InboundShipmentPlan object in the response returned by the createInboundShipmentPlan operation. |
**are_cases_required** | **
bool** | Indicates whether or not an inbound shipment contains case-packed boxes. Note: A shipment must contain either all case-packed boxes or all individually packed boxes. Possible values:  true - All boxes in the shipment must be case packed. false - All boxes in the shipment must be individually packed. Note: If AreCasesRequired &#x3D; true for an inbound shipment, then the value of QuantityInCase must be greater than zero for every item in the shipment. Otherwise the service returns an error. | [optional]
**shipment_status** | [**\Swagger\Client\Models\ShipmentStatus**](ShipmentStatus.md) |  |
**label_prep_preference** | [**\Swagger\Client\Models\LabelPrepPreference**](LabelPrepPreference.md) |  |
**intended_box_contents_source** | [**
\Swagger\Client\Models\IntendedBoxContentsSource**](IntendedBoxContentsSource.md) |  | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

