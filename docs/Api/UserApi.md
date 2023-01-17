# Swagger\Client\UserApi

All URIs are relative to *https://ws.visbook.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiWebentityUserDelete**](UserApi.md#apiwebentityuserdelete) | **DELETE** /api/{webentity}/user | Anonymize user for current company and all related companies.
[**apiWebentityUserGet**](UserApi.md#apiwebentityuserget) | **GET** /api/{webentity}/user | Get user data with the most recent order.
[**apiWebentityUserPut**](UserApi.md#apiwebentityuserput) | **PUT** /api/{webentity}/user | Update user data for current company and all related companies. Can be partially updated.

# **apiWebentityUserDelete**
> \Swagger\Client\Model\AnonymizationViewModel apiWebentityUserDelete($webentity)

Anonymize user for current company and all related companies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityUserDelete($webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiWebentityUserDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\AnonymizationViewModel**](../Model/AnonymizationViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityUserGet**
> \Swagger\Client\Model\UserViewModel apiWebentityUserGet($webentity)

Get user data with the most recent order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityUserGet($webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiWebentityUserGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\UserViewModel**](../Model/UserViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityUserPut**
> \Swagger\Client\Model\AcceptedResult apiWebentityUserPut($webentity, $body)

Update user data for current company and all related companies. Can be partially updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 
$body = new \Swagger\Client\Model\ChangeUserInfoViewModel(); // \Swagger\Client\Model\ChangeUserInfoViewModel | User data with otp.

try {
    $result = $apiInstance->apiWebentityUserPut($webentity, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiWebentityUserPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |
 **body** | [**\Swagger\Client\Model\ChangeUserInfoViewModel**](../Model/ChangeUserInfoViewModel.md)| User data with otp. | [optional]

### Return type

[**\Swagger\Client\Model\AcceptedResult**](../Model/AcceptedResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

