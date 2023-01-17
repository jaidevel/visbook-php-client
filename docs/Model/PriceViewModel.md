# PriceViewModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Gets or sets price Id. | [optional] 
**name** | **string** | Gets or sets price name. | [optional] 
**price_type** | [**\Swagger\Client\Model\PriceTypeViewModel**](PriceTypeViewModel.md) |  | [optional] 
**pension_type** | [**\Swagger\Client\Model\PensionTypeViewModel**](PensionTypeViewModel.md) |  | [optional] 
**discount1** | **double** | Gets or sets discount. | [optional] 
**discount2** | **double** | Gets or sets discount. | [optional] 
**original_price_per_step** | **double** | Gets or sets base price. | [optional] 
**price_per_step** | **double** | Gets or sets price per step. | [optional] 
**calculated_price** | **double** | Gets or sets calculated price. Price for full period calculating with day stair price, number of persons, number of days etc. | [optional] 
**available_number_of_people** | [**\Swagger\Client\Model\AvailableNumberOfPeopleViewModel[]**](AvailableNumberOfPeopleViewModel.md) | Gets or sets available number of people for price. | [optional] 
**steps** | [**\Swagger\Client\Model\StepViewModel[]**](StepViewModel.md) | Gets or sets steps for price. | [optional] 
**price_age_group** | [**\Swagger\Client\Model\PriceAgeGroupResultViewModel[]**](PriceAgeGroupResultViewModel.md) | Gets or sets price age groups. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

