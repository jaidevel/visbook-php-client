# Swagger\Client\CheckoutApi

All URIs are relative to *https://ws.visbook.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiWebentityCheckoutPaymenttypesGet**](CheckoutApi.md#apiwebentitycheckoutpaymenttypesget) | **GET** /api/{webentity}/checkout/paymenttypes | Get payment types and their settings.
[**apiWebentityCheckoutPayorderPost**](CheckoutApi.md#apiwebentitycheckoutpayorderpost) | **POST** /api/{webentity}/checkout/payorder | Pay specific order.
[**apiWebentityCheckoutPost**](CheckoutApi.md#apiwebentitycheckoutpost) | **POST** /api/{webentity}/checkout | Post checkout  Create user if not exists, update if exists, register payment, extend reservation for X minutes.
[**apiWebentityCheckoutUserinfoPost**](CheckoutApi.md#apiwebentitycheckoutuserinfopost) | **POST** /api/{webentity}/checkout/userinfo | Get fields for guest.

# **apiWebentityCheckoutPaymenttypesGet**
> \Swagger\Client\Model\WebEntityPaymentSettingsViewModel apiWebentityCheckoutPaymenttypesGet($webentity)

Get payment types and their settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityCheckoutPaymenttypesGet($webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->apiWebentityCheckoutPaymenttypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\WebEntityPaymentSettingsViewModel**](../Model/WebEntityPaymentSettingsViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityCheckoutPayorderPost**
> \Swagger\Client\Model\CheckoutResponse apiWebentityCheckoutPayorderPost($webentity, $body)

Pay specific order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 
$body = new \Swagger\Client\Model\PaySpecificOrderModel(); // \Swagger\Client\Model\PaySpecificOrderModel | PaySpecificOrderModel model.

try {
    $result = $apiInstance->apiWebentityCheckoutPayorderPost($webentity, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->apiWebentityCheckoutPayorderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |
 **body** | [**\Swagger\Client\Model\PaySpecificOrderModel**](../Model/PaySpecificOrderModel.md)| PaySpecificOrderModel model. | [optional]

### Return type

[**\Swagger\Client\Model\CheckoutResponse**](../Model/CheckoutResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityCheckoutPost**
> \Swagger\Client\Model\CheckoutResponse apiWebentityCheckoutPost($webentity, $body)

Post checkout  Create user if not exists, update if exists, register payment, extend reservation for X minutes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 
$body = new \Swagger\Client\Model\CheckoutModel(); // \Swagger\Client\Model\CheckoutModel | Checkout model.

try {
    $result = $apiInstance->apiWebentityCheckoutPost($webentity, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->apiWebentityCheckoutPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |
 **body** | [**\Swagger\Client\Model\CheckoutModel**](../Model/CheckoutModel.md)| Checkout model. | [optional]

### Return type

[**\Swagger\Client\Model\CheckoutResponse**](../Model/CheckoutResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityCheckoutUserinfoPost**
> \Swagger\Client\Model\Field[] apiWebentityCheckoutUserinfoPost($webentity, $body)

Get fields for guest.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 
$body = array(new \Swagger\Client\Model\ReservationViewModel()); // \Swagger\Client\Model\ReservationViewModel[] | Reservations info.

try {
    $result = $apiInstance->apiWebentityCheckoutUserinfoPost($webentity, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->apiWebentityCheckoutUserinfoPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |
 **body** | [**\Swagger\Client\Model\ReservationViewModel[]**](../Model/ReservationViewModel.md)| Reservations info. | [optional]

### Return type

[**\Swagger\Client\Model\Field[]**](../Model/Field.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

