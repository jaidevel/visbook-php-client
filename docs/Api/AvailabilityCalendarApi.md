# Swagger\Client\AvailabilityCalendarApi

All URIs are relative to *https://ws.visbook.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiWebentityAvailabilityWebProductsIdsMonthGet**](AvailabilityCalendarApi.md#apiwebentityavailabilitywebproductsidsmonthget) | **GET** /api/{webentity}/availability/{webProductsIds}/{month} | Get calendar with available web products for each day in month.

# **apiWebentityAvailabilityWebProductsIdsMonthGet**
> \Swagger\Client\Model\AvailabilityCalendarItemViewModelCalendarViewModel apiWebentityAvailabilityWebProductsIdsMonthGet($web_products_ids, $month, $webentity)

Get calendar with available web products for each day in month.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AvailabilityCalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$web_products_ids = array(56); // int[] | Web products ids array.
$month = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Month. Format yyyy-MM.
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityAvailabilityWebProductsIdsMonthGet($web_products_ids, $month, $webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityCalendarApi->apiWebentityAvailabilityWebProductsIdsMonthGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_products_ids** | [**int[]**](../Model/int.md)| Web products ids array. |
 **month** | **\DateTime**| Month. Format yyyy-MM. |
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\AvailabilityCalendarItemViewModelCalendarViewModel**](../Model/AvailabilityCalendarItemViewModelCalendarViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

