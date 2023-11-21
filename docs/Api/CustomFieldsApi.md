# msn\CustomFieldsApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2ListListIdFieldGet()**](CustomFieldsApi.md#apiV2ListListIdFieldGet) | **GET** /api/v2/list/list_id/field | Get Accessible Custom Fields |
| [**apiV2TaskTaskIdFieldFieldIdDelete()**](CustomFieldsApi.md#apiV2TaskTaskIdFieldFieldIdDelete) | **DELETE** /api/v2/task/task_id/field/field_id | Remove Custom Field Value |
| [**apiV2TaskTaskIdFieldFieldIdPost()**](CustomFieldsApi.md#apiV2TaskTaskIdFieldFieldIdPost) | **POST** /api/v2/task/task_id/field/field_id | Set Custom Field Value |


## `apiV2ListListIdFieldGet()`

```php
apiV2ListListIdFieldGet($content_type)
```

Get Accessible Custom Fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2ListListIdFieldGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->apiV2ListListIdFieldGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TaskTaskIdFieldFieldIdDelete()`

```php
apiV2TaskTaskIdFieldFieldIdDelete($content_type)
```

Remove Custom Field Value

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2TaskTaskIdFieldFieldIdDelete($content_type);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->apiV2TaskTaskIdFieldFieldIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiV2TaskTaskIdFieldFieldIdPost()`

```php
apiV2TaskTaskIdFieldFieldIdPost($content_type, $body)
```

Set Custom Field Value

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2TaskTaskIdFieldFieldIdPost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->apiV2TaskTaskIdFieldFieldIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**|  | [optional] |
| **body** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
