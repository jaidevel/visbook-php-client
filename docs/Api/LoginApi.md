# Swagger\Client\LoginApi

All URIs are relative to *https://ws.visbook.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiWebentityLoginRequestEmailPost**](LoginApi.md#apiwebentityloginrequestemailpost) | **POST** /api/{webentity}/login/request/email | Requests an email token.
[**apiWebentityLoginRequestSmsPost**](LoginApi.md#apiwebentityloginrequestsmspost) | **POST** /api/{webentity}/login/request/sms | Requests an sms token.
[**apiWebentityLogoutPost**](LoginApi.md#apiwebentitylogoutpost) | **POST** /api/{webentity}/logout | Logout customer.

# **apiWebentityLoginRequestEmailPost**
> \Swagger\Client\Model\NoContentResult apiWebentityLoginRequestEmailPost($webentity, $email)

Requests an email token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 
$email = "email_example"; // string | 

try {
    $result = $apiInstance->apiWebentityLoginRequestEmailPost($webentity, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->apiWebentityLoginRequestEmailPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |
 **email** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\NoContentResult**](../Model/NoContentResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityLoginRequestSmsPost**
> \Swagger\Client\Model\NoContentResult apiWebentityLoginRequestSmsPost($webentity, $phone_number, $country_code)

Requests an sms token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 
$phone_number = "phone_number_example"; // string | 
$country_code = "country_code_example"; // string | 

try {
    $result = $apiInstance->apiWebentityLoginRequestSmsPost($webentity, $phone_number, $country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->apiWebentityLoginRequestSmsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |
 **phone_number** | **string**|  | [optional]
 **country_code** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\NoContentResult**](../Model/NoContentResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityLogoutPost**
> \Swagger\Client\Model\OkResult apiWebentityLogoutPost($webentity)

Logout customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityLogoutPost($webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->apiWebentityLogoutPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\OkResult**](../Model/OkResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

