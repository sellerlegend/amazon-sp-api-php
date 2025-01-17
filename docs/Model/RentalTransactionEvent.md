# RentalTransactionEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | **string** | An Amazon-defined identifier for an order. | [optional]
**rental_event_type** | **
string** | The type of rental event. Possible values:  * RentalCustomerPayment-Buyout - Transaction type that represents when the customer wants to buy out a rented item.  * RentalCustomerPayment-Extension - Transaction type that represents when the customer wants to extend the rental period.  * RentalCustomerRefund-Buyout - Transaction type that represents when the customer requests a refund for the buyout of the rented item.  * RentalCustomerRefund-Extension - Transaction type that represents when the customer requests a refund over the extension on the rented item.  * RentalHandlingFee - Transaction type that represents the fee that Amazon charges sellers who rent through Amazon.  * RentalChargeFailureReimbursement - Transaction type that represents when Amazon sends money to the seller to compensate for a failed charge.  * RentalLostItemReimbursement - Transaction type that represents when Amazon sends money to the seller to compensate for a lost item. | [optional]
**extension_length** | **
int** | The number of days that the buyer extended an already rented item. This value is only returned for RentalCustomerPayment-Extension and RentalCustomerRefund-Extension events. | [optional]
**posted_date** | [**\Swagger\Client\Models\\DateTime**](\DateTime.md) |  | [optional]
**rental_charge_list** | [**\Swagger\Client\Models\ChargeComponentList**](ChargeComponentList.md) |  | [optional]
**rental_fee_list** | [**\Swagger\Client\Models\FeeComponentList**](FeeComponentList.md) |  | [optional]
**marketplace_name** | **string** | The name of the marketplace. | [optional]
**rental_initial_value** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional]
**rental_reimbursement** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional]
**rental_tax_withheld_list** | [**
\Swagger\Client\Models\TaxWithheldComponentList**](TaxWithheldComponentList.md) |  | [optional]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

