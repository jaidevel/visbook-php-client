# CheckoutModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reservations** | [**\Swagger\Client\Model\ReservationViewModel[]**](ReservationViewModel.md) | Gets or sets list of reservations. | 
**success_url** | **string** | Gets or sets Success url. If user successfully paid he will be redirected to this url.  OrdergroupId will be appended to this url Visbook.Ipserver.Communicator.Shared.Models.OrderGroupId. | 
**error_url** | **string** | Gets or sets Error url. If user has an error during payment process he will be redirected to this url.  Error code will be appended to this url Api.Features.Checkout.ProcessPaymentStatus. | 
**payment_type** | [**\Swagger\Client\Model\WebEntityPaymentTypeViewModel**](WebEntityPaymentTypeViewModel.md) |  | 
**amount** | **double** | Gets or sets amount money of all reservations prices. | 
**customer** | [**\Swagger\Client\Model\BaseUserInfoViewModel**](BaseUserInfoViewModel.md) |  | 
**accepted_terms** | **bool** | Gets or sets a value indicating whether it indicates whether a user agrees to the terms or not. | 
**external_reference** | **string** | Gets or sets external reference. | [optional] 
**notes** | **string** | Gets or sets notes. | [optional] 
**giftcards** | **string[]** | Gets or sets giftcards list. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

