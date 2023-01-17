# PaySpecificOrderModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | [**\Swagger\Client\Model\OrderId**](OrderId.md) |  | 
**order_group_id** | [**\Swagger\Client\Model\OrderGroupId**](OrderGroupId.md) |  | 
**token** | **string** | Gets or sets token. | 
**success_url** | **string** | Gets or sets Success url. If user successfully paid he will be redirected to this url.  OrdergroupId will be appended to this url Api.Features.Checkout.PaySpecificOrderModel.OrderGroupId. | 
**error_url** | **string** | Gets or sets Error url. If user has an error during payment process he will be redirected to this url.  Error code will be appended to this url Api.Features.Checkout.ProcessPaymentStatus. | 
**payment_type** | [**\Swagger\Client\Model\WebEntityPaymentTypeViewModel**](WebEntityPaymentTypeViewModel.md) |  | [optional] 
**amount** | **double** | Gets or sets amount money of all reservations prices. | 
**accepted_terms** | **bool** | Gets or sets a value indicating whether it indicates whether a user agrees to the terms or not. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

