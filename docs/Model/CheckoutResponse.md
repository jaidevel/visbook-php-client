# CheckoutResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_url** | **string** | Gets terminal url. User will be redirected to this url if payment successfully registered. | [optional] 
**checkout_status** | [**\Swagger\Client\Model\CheckoutStatus**](CheckoutStatus.md) |  | [optional] 
**expired_reservations** | [**\Swagger\Client\Model\ReservationCompanyRelation[]**](ReservationCompanyRelation.md) | Gets or sets list with expired reservations. | [optional] 
**giftcards_balance** | **map[string,double]** | Gets or sets list of used giftcards balance. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

