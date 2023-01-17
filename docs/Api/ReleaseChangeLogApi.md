# Swagger\Client\ReleaseChangeLogApi

All URIs are relative to *https://ws.visbook.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiWebentityReleasechangelogGet**](ReleaseChangeLogApi.md#apiwebentityreleasechangelogget) | **GET** /api/{webentity}/releasechangelog | Get information about changes for all api version.

# **apiWebentityReleasechangelogGet**
> \Swagger\Client\Model\ReleaseChangeLogViewModel apiWebentityReleasechangelogGet($webentity)

Get information about changes for all api version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReleaseChangeLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityReleasechangelogGet($webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReleaseChangeLogApi->apiWebentityReleasechangelogGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\ReleaseChangeLogViewModel**](../Model/ReleaseChangeLogViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

