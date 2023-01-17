# Swagger\Client\ValidationApi

All URIs are relative to *https://ws.visbook.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiWebentityValidationEmailTokenGet**](ValidationApi.md#apiwebentityvalidationemailtokenget) | **GET** /api/{webentity}/validation/email/{token} | Validates the a previously created token and returns customer data if any.
[**apiWebentityValidationMobileTokenGet**](ValidationApi.md#apiwebentityvalidationmobiletokenget) | **GET** /api/{webentity}/validation/mobile/{token} | Validates the a previously created token and returns customer data if any.

# **apiWebentityValidationEmailTokenGet**
> \Swagger\Client\Model\UserViewModel apiWebentityValidationEmailTokenGet($token, $webentity)

Validates the a previously created token and returns customer data if any.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ValidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Gets or sets the token.
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityValidationEmailTokenGet($token, $webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationApi->apiWebentityValidationEmailTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Gets or sets the token. |
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\UserViewModel**](../Model/UserViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityValidationMobileTokenGet**
> \Swagger\Client\Model\UserViewModel apiWebentityValidationMobileTokenGet($token, $webentity)

Validates the a previously created token and returns customer data if any.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ValidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | Gets or sets the token.
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityValidationMobileTokenGet($token, $webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationApi->apiWebentityValidationMobileTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| Gets or sets the token. |
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\UserViewModel**](../Model/UserViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

