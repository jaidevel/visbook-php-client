# Swagger\Client\WebProductsApi

All URIs are relative to *https://ws.visbook.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiWebentityWebproductsFromToGet**](WebProductsApi.md#apiwebentitywebproductsfromtoget) | **GET** /api/{webentity}/webproducts/{from}/{to} | Get list of web products for the period for company and related companies.  Optional filter by product group(s) or/and property(ies).
[**apiWebentityWebproductsFromToWebProductIdGet**](WebProductsApi.md#apiwebentitywebproductsfromtowebproductidget) | **GET** /api/{webentity}/webproducts/{from}/{to}/{webProductId} | Get web product by Id.
[**apiWebentityWebproductsGet**](WebProductsApi.md#apiwebentitywebproductsget) | **GET** /api/{webentity}/webproducts | Get all web products for company and related companies.  Optional filter by product group(s) or/and property(ies).

# **apiWebentityWebproductsFromToGet**
> \Swagger\Client\Model\WebProductsResponseViewModel apiWebentityWebproductsFromToGet($from, $to, $webentity, $groups, $attributes, $number_of_persons)

Get list of web products for the period for company and related companies.  Optional filter by product group(s) or/and property(ies).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Gets or sets from date. Format yyyy-MM-dd.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Gets or sets to date. Format yyyy-MM-dd.
$webentity = 56; // int | 
$groups = array(56); // int[] | Gets or sets filter. Possible usage : ?groups=1,2,3.
$attributes = array('key' => "attributes_example"); // map[string,string] | Gets or sets attributes for filtering.  Possible usage : ?attributes[mountainView]=true&attributes[haveWifi]=true&attributes[baths]=1.
$number_of_persons = 56; // int | Gets or sets number of people.

try {
    $result = $apiInstance->apiWebentityWebproductsFromToGet($from, $to, $webentity, $groups, $attributes, $number_of_persons);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebProductsApi->apiWebentityWebproductsFromToGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| Gets or sets from date. Format yyyy-MM-dd. |
 **to** | **\DateTime**| Gets or sets to date. Format yyyy-MM-dd. |
 **webentity** | **int**|  |
 **groups** | [**int[]**](../Model/int.md)| Gets or sets filter. Possible usage : ?groups&#x3D;1,2,3. | [optional]
 **attributes** | [**map[string,string]**](../Model/string.md)| Gets or sets attributes for filtering.  Possible usage : ?attributes[mountainView]&#x3D;true&amp;attributes[haveWifi]&#x3D;true&amp;attributes[baths]&#x3D;1. | [optional]
 **number_of_persons** | **int**| Gets or sets number of people. | [optional]

### Return type

[**\Swagger\Client\Model\WebProductsResponseViewModel**](../Model/WebProductsResponseViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityWebproductsFromToWebProductIdGet**
> \Swagger\Client\Model\WebProductViewModel apiWebentityWebproductsFromToWebProductIdGet($web_product_id, $from, $to, $webentity, $number_of_persons)

Get web product by Id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$web_product_id = 56; // int | Gets or sets web product Id.
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Gets or sets from date. Format yyyy-MM-dd.
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Gets or sets to date. Format yyyy-MM-dd.
$webentity = 56; // int | 
$number_of_persons = 56; // int | Gets or sets number of people.

try {
    $result = $apiInstance->apiWebentityWebproductsFromToWebProductIdGet($web_product_id, $from, $to, $webentity, $number_of_persons);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebProductsApi->apiWebentityWebproductsFromToWebProductIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_product_id** | **int**| Gets or sets web product Id. |
 **from** | **\DateTime**| Gets or sets from date. Format yyyy-MM-dd. |
 **to** | **\DateTime**| Gets or sets to date. Format yyyy-MM-dd. |
 **webentity** | **int**|  |
 **number_of_persons** | **int**| Gets or sets number of people. | [optional]

### Return type

[**\Swagger\Client\Model\WebProductViewModel**](../Model/WebProductViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityWebproductsGet**
> \Swagger\Client\Model\WebProductUnitViewModel[] apiWebentityWebproductsGet($webentity, $groups, $attributes)

Get all web products for company and related companies.  Optional filter by product group(s) or/and property(ies).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WebProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 
$groups = array(56); // int[] | Gets or sets filter. Possible usage : ?groups=1,2,3.
$attributes = array('key' => "attributes_example"); // map[string,string] | Gets or sets attributes for filtering.  Possible usage : ?attributes[mountainView]=true&attributes[haveWifi]=true&attributes[baths]=1.

try {
    $result = $apiInstance->apiWebentityWebproductsGet($webentity, $groups, $attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebProductsApi->apiWebentityWebproductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |
 **groups** | [**int[]**](../Model/int.md)| Gets or sets filter. Possible usage : ?groups&#x3D;1,2,3. | [optional]
 **attributes** | [**map[string,string]**](../Model/string.md)| Gets or sets attributes for filtering.  Possible usage : ?attributes[mountainView]&#x3D;true&amp;attributes[haveWifi]&#x3D;true&amp;attributes[baths]&#x3D;1. | [optional]

### Return type

[**\Swagger\Client\Model\WebProductUnitViewModel[]**](../Model/WebProductUnitViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

