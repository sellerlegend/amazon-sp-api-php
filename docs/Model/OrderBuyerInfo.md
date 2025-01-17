# OrderBuyerInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | **string** | An Amazon-defined order identifier, in 3-7-7 format. |
**buyer_email** | **string** | The anonymized email address of the buyer. | [optional]
**buyer_name** | **string** | The name of the buyer. | [optional]
**buyer_county** | **string** | The county of the buyer. | [optional]
**buyer_tax_info** | [**\Swagger\Client\Models\BuyerTaxInfo**](BuyerTaxInfo.md) |  | [optional]
**purchase_order_number** | **
string** | The purchase order (PO) number entered by the buyer at checkout. Returned only for orders where the buyer entered a PO number at checkout. | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

