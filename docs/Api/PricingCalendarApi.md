# Swagger\Client\PricingCalendarApi

All URIs are relative to *https://ws.visbook.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiWebentityPricingcalendarGet**](PricingCalendarApi.md#apiwebentitypricingcalendarget) | **GET** /api/{webentity}/pricingcalendar | Get lowest price available for every day for an entire month.

# **apiWebentityPricingcalendarGet**
> \Swagger\Client\Model\PriceCalendarItemViewModelCalendarViewModel apiWebentityPricingcalendarGet($month, $guests_ages, $booking_type, $standard_id, $webentity)

Get lowest price available for every day for an entire month.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PricingCalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$month = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Gets or sets Month. Format yyyy-MM.
$guests_ages = "guests_ages_example"; // string | Gets or sets GuestsAges.
$booking_type = new \Swagger\Client\Model\BookingTypePriceCalendarViewModel(); // \Swagger\Client\Model\BookingTypePriceCalendarViewModel | Gets or sets BookingTypeViewModel.
$standard_id = new \Swagger\Client\Model\StandardId(); // \Swagger\Client\Model\StandardId | Gets or sets StandardId.
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityPricingcalendarGet($month, $guests_ages, $booking_type, $standard_id, $webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingCalendarApi->apiWebentityPricingcalendarGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **month** | **\DateTime**| Gets or sets Month. Format yyyy-MM. |
 **guests_ages** | **string**| Gets or sets GuestsAges. |
 **booking_type** | [**\Swagger\Client\Model\BookingTypePriceCalendarViewModel**](../Model/.md)| Gets or sets BookingTypeViewModel. |
 **standard_id** | [**\Swagger\Client\Model\StandardId**](../Model/.md)| Gets or sets StandardId. |
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\PriceCalendarItemViewModelCalendarViewModel**](../Model/PriceCalendarItemViewModelCalendarViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

