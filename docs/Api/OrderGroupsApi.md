# Swagger\Client\OrderGroupsApi

All URIs are relative to *https://ws.visbook.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiWebentityOrdergroupsGet**](OrderGroupsApi.md#apiwebentityordergroupsget) | **GET** /api/{webentity}/ordergroups | Gets all order groups belonging to the authorized customer.
[**apiWebentityOrdergroupsIdGet**](OrderGroupsApi.md#apiwebentityordergroupsidget) | **GET** /api/{webentity}/ordergroups/{id} | Gets the specified order group by id.
[**apiWebentityOrdergroupsPut**](OrderGroupsApi.md#apiwebentityordergroupsput) | **PUT** /api/{webentity}/ordergroups | Refund specific order group by id.
[**apiWebentityOrdergroupsTokenOrderGroupIdOrderIdGet**](OrderGroupsApi.md#apiwebentityordergroupstokenordergroupidorderidget) | **GET** /api/{webentity}/ordergroups/{token}/{orderGroupId}/{orderId} | Gets the specified order group by id and valid access token.

# **apiWebentityOrdergroupsGet**
> \Swagger\Client\Model\OrderGroupViewModel[] apiWebentityOrdergroupsGet($webentity)

Gets all order groups belonging to the authorized customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityOrdergroupsGet($webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderGroupsApi->apiWebentityOrdergroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\OrderGroupViewModel[]**](../Model/OrderGroupViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityOrdergroupsIdGet**
> \Swagger\Client\Model\OrderGroupViewModel apiWebentityOrdergroupsIdGet($id, $webentity)

Gets the specified order group by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The order group identifier.
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityOrdergroupsIdGet($id, $webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderGroupsApi->apiWebentityOrdergroupsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The order group identifier. |
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\OrderGroupViewModel**](../Model/OrderGroupViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityOrdergroupsPut**
> \Swagger\Client\Model\OkResult apiWebentityOrdergroupsPut($webentity, $id)

Refund specific order group by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 
$id = 56; // int | The order group identifier.

try {
    $result = $apiInstance->apiWebentityOrdergroupsPut($webentity, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderGroupsApi->apiWebentityOrdergroupsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |
 **id** | **int**| The order group identifier. | [optional]

### Return type

[**\Swagger\Client\Model\OkResult**](../Model/OkResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityOrdergroupsTokenOrderGroupIdOrderIdGet**
> \Swagger\Client\Model\OrderGroupWithDueDateViewModel apiWebentityOrdergroupsTokenOrderGroupIdOrderIdGet($token, $order_group_id, $order_id, $webentity)

Gets the specified order group by id and valid access token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OrderGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | token.
$order_group_id = 56; // int | orderGroupId.
$order_id = 56; // int | orderId.
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityOrdergroupsTokenOrderGroupIdOrderIdGet($token, $order_group_id, $order_id, $webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderGroupsApi->apiWebentityOrdergroupsTokenOrderGroupIdOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| token. |
 **order_group_id** | **int**| orderGroupId. |
 **order_id** | **int**| orderId. |
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\OrderGroupWithDueDateViewModel**](../Model/OrderGroupWithDueDateViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

