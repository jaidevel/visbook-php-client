# Swagger\Client\GiftcardApi

All URIs are relative to *https://ws.visbook.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiWebentityGiftcardBalanceIdGet**](GiftcardApi.md#apiwebentitygiftcardbalanceidget) | **GET** /api/{webentity}/giftcard/balance/{id} | Get giftcard info by Id.

# **apiWebentityGiftcardBalanceIdGet**
> \Swagger\Client\Model\GiftcardViewModel apiWebentityGiftcardBalanceIdGet($id, $webentity)

Get giftcard info by Id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GiftcardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | giftcard id.
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityGiftcardBalanceIdGet($id, $webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftcardApi->apiWebentityGiftcardBalanceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| giftcard id. |
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\GiftcardViewModel**](../Model/GiftcardViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

