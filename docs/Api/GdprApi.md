# Swagger\Client\GdprApi

All URIs are relative to *https://ws.visbook.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiWebentityGdprGet**](GdprApi.md#apiwebentitygdprget) | **GET** /api/{webentity}/gdpr | Generate GDPR report. Create request to GDPR web service.

# **apiWebentityGdprGet**
> \Swagger\Client\Model\StatusCodeResult apiWebentityGdprGet($webentity)

Generate GDPR report. Create request to GDPR web service.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GdprApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityGdprGet($webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GdprApi->apiWebentityGdprGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\StatusCodeResult**](../Model/StatusCodeResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

