# Swagger\Client\PdfApi

All URIs are relative to *https://ws.visbook.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiWebentityPdfEncryptedCompanyIdOrderIdGet**](PdfApi.md#apiwebentitypdfencryptedcompanyidorderidget) | **GET** /api/{webentity}/pdf/{encryptedCompanyId}/{orderId} | Generate pdf file for encryptedCompanyId order.
[**apiWebentityPdfEncryptedCompanyIdOrderIdVisdocIdGet**](PdfApi.md#apiwebentitypdfencryptedcompanyidorderidvisdocidget) | **GET** /api/{webentity}/pdf/{encryptedCompanyId}/{orderId}/{visdocId} | Stream pdf file.

# **apiWebentityPdfEncryptedCompanyIdOrderIdGet**
> \Swagger\Client\Model\OrderPdfViewModel[] apiWebentityPdfEncryptedCompanyIdOrderIdGet($encrypted_company_id, $order_id, $webentity)

Generate pdf file for encryptedCompanyId order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$encrypted_company_id = "encrypted_company_id_example"; // string | The encrypted company identifier.
$order_id = new \Swagger\Client\Model\OrderId(); // \Swagger\Client\Model\OrderId | The order identifier.
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityPdfEncryptedCompanyIdOrderIdGet($encrypted_company_id, $order_id, $webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->apiWebentityPdfEncryptedCompanyIdOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_company_id** | **string**| The encrypted company identifier. |
 **order_id** | [**\Swagger\Client\Model\OrderId**](../Model/.md)| The order identifier. |
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\OrderPdfViewModel[]**](../Model/OrderPdfViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityPdfEncryptedCompanyIdOrderIdVisdocIdGet**
> string apiWebentityPdfEncryptedCompanyIdOrderIdVisdocIdGet($encrypted_company_id, $order_id, $visdoc_id, $webentity)

Stream pdf file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$encrypted_company_id = "encrypted_company_id_example"; // string | The encrypted company identifier.
$order_id = new \Swagger\Client\Model\OrderId(); // \Swagger\Client\Model\OrderId | The order identifier.
$visdoc_id = 56; // int | The visdoc Id.
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityPdfEncryptedCompanyIdOrderIdVisdocIdGet($encrypted_company_id, $order_id, $visdoc_id, $webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->apiWebentityPdfEncryptedCompanyIdOrderIdVisdocIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_company_id** | **string**| The encrypted company identifier. |
 **order_id** | [**\Swagger\Client\Model\OrderId**](../Model/.md)| The order identifier. |
 **visdoc_id** | **int**| The visdoc Id. |
 **webentity** | **int**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

