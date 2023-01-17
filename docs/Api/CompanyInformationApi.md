# Swagger\Client\CompanyInformationApi

All URIs are relative to *https://ws.visbook.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiWebentityCompanyinformationGet**](CompanyInformationApi.md#apiwebentitycompanyinformationget) | **GET** /api/{webentity}/companyinformation | Return information about the current company.
[**apiWebentityCompanyinformationIdGet**](CompanyInformationApi.md#apiwebentitycompanyinformationidget) | **GET** /api/{webentity}/companyinformation/{id} | Return company information by encrypted company Id.

# **apiWebentityCompanyinformationGet**
> \Swagger\Client\Model\CompanyInformationViewModel apiWebentityCompanyinformationGet($webentity)

Return information about the current company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanyInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityCompanyinformationGet($webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyInformationApi->apiWebentityCompanyinformationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\CompanyInformationViewModel**](../Model/CompanyInformationViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiWebentityCompanyinformationIdGet**
> \Swagger\Client\Model\CompanyInformationViewModel apiWebentityCompanyinformationIdGet($id, $webentity)

Return company information by encrypted company Id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CompanyInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The encrypted company identifier.
$webentity = 56; // int | 

try {
    $result = $apiInstance->apiWebentityCompanyinformationIdGet($id, $webentity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyInformationApi->apiWebentityCompanyinformationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The encrypted company identifier. |
 **webentity** | **int**|  |

### Return type

[**\Swagger\Client\Model\CompanyInformationViewModel**](../Model/CompanyInformationViewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

