# OrderGroupWithDueDateViewModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | [**\Swagger\Client\Model\OrderGroupId**](OrderGroupId.md) |  | [optional] 
**registration_date** | [**\DateTime**](\DateTime.md) | Gets or sets registration date. | [optional] 
**currency** | [**\Swagger\Client\Model\CurrencyViewModel**](CurrencyViewModel.md) |  | [optional] 
**encrypted_booking_company_id** | **string** | Gets or sets the company where the order was initially placed. | [optional] 
**cancellation_rules** | [**\Swagger\Client\Model\CancellationRulesViewModel**](CancellationRulesViewModel.md) |  | [optional] 
**orders** | [**\Swagger\Client\Model\OrderExtendedForOrderGroupViewModel[]**](OrderExtendedForOrderGroupViewModel.md) | Gets or sets orders in order group. | [optional] 
**due_at** | [**\DateTime**](\DateTime.md) | Gets or sets when the payment is due. | [optional] 
**to_be_paid** | **double** | Gets or sets how much money should be paid. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

