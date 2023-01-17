# Swagger\Client\ReservationsApi

All URIs are relative to *https://ws.visbook.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiWebentityReservationsDelete**](ReservationsApi.md#apiwebentityreservationsdelete) | **DELETE** /api/{webentity}/reservations | Cancel reservations.
[**apiWebentityReservationsEncryptedCompanyIdReservationIdPut**](ReservationsApi.md#apiwebentityreservationsencryptedcompanyidreservationidput) | **PUT** /api/{webentity}/reservations/{encryptedCompanyId}/{reservationId} | Update reservation.
[**apiWebentityReservationsPingPost**](ReservationsApi.md#apiwebentityreservationspingpost) | **POST** /api/{webentity}/reservations/ping | Ping reservations. Update life time.
[**apiWebentityReservationsPost**](ReservationsApi.md#apiwebentityreservationspost) | **POST** /api/{webentity}/reservations | Create new reservation.

# **apiWebentityReservationsDelete**
> \Swagger\Client\Model\OkResult apiWebentityReservationsDelete($webentity, $body)

Cancel reservations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 
$body = new \Swagger\Client\Model\ReservationViewModel(); // \Swagger\Client\Model\ReservationViewModel | Data for cancelling reservation.

try {
    $result = $apiInstance->apiWebentityReservationsDelete($webentity, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationsApi->apiWebentityReservationsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |
 **body** | [**\Swagger\Client\Model\ReservationViewModel**](../Model/ReservationViewModel.md)| Data for cancelling reservation. | [optional]

### Return type

[**\Swagger\Client\Model\OkResult**](../Model/OkResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityReservationsEncryptedCompanyIdReservationIdPut**
> \Swagger\Client\Model\OkResult apiWebentityReservationsEncryptedCompanyIdReservationIdPut($encrypted_company_id, $reservation_id, $webentity, $body)

Update reservation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$encrypted_company_id = "encrypted_company_id_example"; // string | encryptedCompanyId.
$reservation_id = new \Swagger\Client\Model\ReservationId(); // \Swagger\Client\Model\ReservationId | reservationId.
$webentity = 56; // int | 
$body = new \Swagger\Client\Model\BaseReservationRequestModel(); // \Swagger\Client\Model\BaseReservationRequestModel | BaseReservationRequestModel.

try {
    $result = $apiInstance->apiWebentityReservationsEncryptedCompanyIdReservationIdPut($encrypted_company_id, $reservation_id, $webentity, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationsApi->apiWebentityReservationsEncryptedCompanyIdReservationIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **encrypted_company_id** | **string**| encryptedCompanyId. |
 **reservation_id** | [**\Swagger\Client\Model\ReservationId**](../Model/.md)| reservationId. |
 **webentity** | **int**|  |
 **body** | [**\Swagger\Client\Model\BaseReservationRequestModel**](../Model/BaseReservationRequestModel.md)| BaseReservationRequestModel. | [optional]

### Return type

[**\Swagger\Client\Model\OkResult**](../Model/OkResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityReservationsPingPost**
> \Swagger\Client\Model\OkResult apiWebentityReservationsPingPost($webentity, $body)

Ping reservations. Update life time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 
$body = array(new \Swagger\Client\Model\ReservationViewModel()); // \Swagger\Client\Model\ReservationViewModel[] | Reservations list.

try {
    $result = $apiInstance->apiWebentityReservationsPingPost($webentity, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationsApi->apiWebentityReservationsPingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |
 **body** | [**\Swagger\Client\Model\ReservationViewModel[]**](../Model/ReservationViewModel.md)| Reservations list. | [optional]

### Return type

[**\Swagger\Client\Model\OkResult**](../Model/OkResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityReservationsPost**
> \Swagger\Client\Model\ReservationViewModel[] apiWebentityReservationsPost($webentity, $body)

Create new reservation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 
$body = new \Swagger\Client\Model\ReservationRequestModel(); // \Swagger\Client\Model\ReservationRequestModel | Model with data for reservation.

try {
    $result = $apiInstance->apiWebentityReservationsPost($webentity, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReservationsApi->apiWebentityReservationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |
 **body** | [**\Swagger\Client\Model\ReservationRequestModel**](../Model/ReservationRequestModel.md)| Model with data for reservation. | [optional]

### Return type

[**\Swagger\Client\Model\ReservationViewModel[]**](../Model/ReservationViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

