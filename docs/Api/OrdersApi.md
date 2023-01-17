# Swagger\Client\OrdersApi

All URIs are relative to *https://ws.visbook.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiWebentityOrdersGet**](OrdersApi.md#apiwebentityordersget) | **GET** /api/{webentity}/orders | List the logged in guest&#x27;s orders for current company.
[**apiWebentityOrdersIdGet**](OrdersApi.md#apiwebentityordersidget) | **GET** /api/{webentity}/orders/{id} | Returns specific order data by identified id.              If encryptedCompanyId empty, current companyId will be used.

# **apiWebentityOrdersGet**
> \Swagger\Client\Model\OrderExtendedViewModel[] apiWebentityOrdersGet($webentity)

List the logged in guest's orders for current company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityOrdersGet($webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiWebentityOrdersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\OrderExtendedViewModel[]**](../Model/OrderExtendedViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityOrdersIdGet**
> \Swagger\Client\Model\OrderExtendedViewModel apiWebentityOrdersIdGet($id, $webentity, $encrypted_company_id)

Returns specific order data by identified id.              If encryptedCompanyId empty, current companyId will be used.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The order identifier.
$webentity = 56; // int | 
$encrypted_company_id = "encrypted_company_id_example"; // string | The encrypted company Id.

try {
    $result = $apiInstance->apiWebentityOrdersIdGet($id, $webentity, $encrypted_company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->apiWebentityOrdersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The order identifier. |
 **webentity** | **int**|  |
 **encrypted_company_id** | **string**| The encrypted company Id. | [optional]

### Return type

[**\Swagger\Client\Model\OrderExtendedViewModel**](../Model/OrderExtendedViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

