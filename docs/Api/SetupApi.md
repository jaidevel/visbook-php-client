# Swagger\Client\SetupApi

All URIs are relative to *https://ws.visbook.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiWebentitySetupGet**](SetupApi.md#apiwebentitysetupget) | **GET** /api/{webentity}/setup | Get Setup by web entity Id.
[**apiWebentitySetupTermsPost**](SetupApi.md#apiwebentitysetuptermspost) | **POST** /api/{webentity}/setup/terms | Returns terms for web entity.

# **apiWebentitySetupGet**
> \Swagger\Client\Model\SetupViewModel apiWebentitySetupGet($webentity)

Get Setup by web entity Id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentitySetupGet($webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupApi->apiWebentitySetupGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\SetupViewModel**](../Model/SetupViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentitySetupTermsPost**
> \Swagger\Client\Model\TermsViewModel apiWebentitySetupTermsPost($webentity, $body)

Returns terms for web entity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SetupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 
$body = array(new \Swagger\Client\Model\ReservationViewModel()); // \Swagger\Client\Model\ReservationViewModel[] | Read only list reservations.

try {
    $result = $apiInstance->apiWebentitySetupTermsPost($webentity, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SetupApi->apiWebentitySetupTermsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |
 **body** | [**\Swagger\Client\Model\ReservationViewModel[]**](../Model/ReservationViewModel.md)| Read only list reservations. | [optional]

### Return type

[**\Swagger\Client\Model\TermsViewModel**](../Model/TermsViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

