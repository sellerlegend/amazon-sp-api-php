# OrderMetricsInterval

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**interval** | **
string** | The interval of time based on requested granularity (ex. Hour, Day, etc.) If this is the first or the last interval from the list, it might contain incomplete data if the requested interval doesn&#x27;t align with the requested granularity (ex. request interval 2018-09-01T02:00:00Z--2018-09-04T19:00:00Z and granularity day will result in Sept 1st UTC day and Sept 4th UTC days having partial data). |
**unit_count** | **int** | The number of units in orders based on the specified filters. |
**order_item_count** | **int** | The number of order items based on the specified filters. |
**order_count** | **int** | The number of orders based on the specified filters. |
**average_unit_price** | [**\Swagger\Client\Models\Money**](Money.md) |  |
**total_sales** | [**\Swagger\Client\Models\Money**](Money.md) |  |

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

