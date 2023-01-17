# OrderExtendedForOrderGroupViewModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | [**\Swagger\Client\Model\OrderId**](OrderId.md) |  | [optional] 
**ordered_at** | [**\DateTime**](\DateTime.md) | Gets or sets OrderedAt. | [optional] 
**last_changed_at** | [**\DateTime**](\DateTime.md) | Gets or sets LastChangedAt. | [optional] 
**cancelled_at** | [**\DateTime**](\DateTime.md) | Gets or sets CancelledAt. | [optional] 
**from** | [**\DateTime**](\DateTime.md) | Gets or sets From date. | [optional] 
**to** | [**\DateTime**](\DateTime.md) | Gets or sets To date. | [optional] 
**status** | [**\Swagger\Client\Model\OrderStatusViewModel**](OrderStatusViewModel.md) |  | [optional] 
**order_group_id** | [**\Swagger\Client\Model\OrderGroupId**](OrderGroupId.md) |  | [optional] 
**bookings** | [**\Swagger\Client\Model\BookingViewModel[]**](BookingViewModel.md) | Gets or sets order bookings list. | [optional] 
**bookings_count** | **int** | Gets or sets bookings count in order. | [optional] 
**order_total_price** | **double** | Gets or sets order total price. | [optional] 
**order_total_paid** | **double** | Gets or sets order total paid. | [optional] 
**encrypted_company_id** | **string** | Gets or sets encrypted company Id. | [optional] 
**pdfs_endpoint** | **string** | Gets or sets pdfs endpoint. | [optional] 
**pdfs** | [**\Swagger\Client\Model\PdfViewModel[]**](PdfViewModel.md) | Gets or sets pdfs info. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

