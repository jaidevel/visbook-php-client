# WebProductUnitViewModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Gets the name of the standard. | [optional] 
**default_name** | **string** | Gets default web product standard name (not translated). | [optional] 
**unit_name** | **string** | Gets the name of the unit, if a unit is published (as opposed to a standard). Else null. | [optional] 
**default_unit_name** | **string** | Gets the default (not translated) name of the unit, if a unit is published (as opposed to a standard). Else null. | [optional] 
**web_product_id** | **int** | Gets the id of the web entity product id. | [optional] 
**sort_index** | **int** | Gets sort index. | [optional] 
**type** | [**\Swagger\Client\Model\BookingTypeViewModel**](BookingTypeViewModel.md) |  | [optional] 
**max_people** | **int** | Gets max people for web product. | [optional] 
**min_people** | **int** | Gets min people for web product. | [optional] 
**default_people** | **int** | Gets default number of people for web product. | [optional] 
**encrypted_company_id** | **string** | Gets or sets company Id (encrypted). | [optional] 
**description** | [**\Swagger\Client\Model\DescriptionViewModel**](DescriptionViewModel.md) |  | [optional] 
**images** | [**\Swagger\Client\Model\WebProductImageViewModel[]**](WebProductImageViewModel.md) | Gets or sets list of images for web product. | [optional] 
**additional_services** | [**\Swagger\Client\Model\ServiceViewModel[]**](ServiceViewModel.md) | Gets or sets list of additional services for unit. | [optional] 
**additional_merchandises** | [**\Swagger\Client\Model\MerchandiseViewModel[]**](MerchandiseViewModel.md) | Gets or sets list of additional merchandises for unit. | [optional] 
**product_group** | [**\Swagger\Client\Model\ProductGroupViewModel**](ProductGroupViewModel.md) |  | [optional] 
**properties** | [**map[string,null]**](.md) | Gets or sets web product properties. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

