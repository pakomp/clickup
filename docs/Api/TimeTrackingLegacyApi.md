# Msn\Apis\Clickup\TimeTrackingLegacyApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2TaskTaskIdTimeGet()**](TimeTrackingLegacyApi.md#apiV2TaskTaskIdTimeGet) | **GET** /api/v2/task/task_id/time/ | Get Time Tracked |
| [**apiV2TaskTaskIdTimeIntervalIdDelete()**](TimeTrackingLegacyApi.md#apiV2TaskTaskIdTimeIntervalIdDelete) | **DELETE** /api/v2/task/task_id/time/interval_id | Delete Time Tracked |
| [**apiV2TaskTaskIdTimeIntervalIdPut()**](TimeTrackingLegacyApi.md#apiV2TaskTaskIdTimeIntervalIdPut) | **PUT** /api/v2/task/task_id/time/interval_id | Edit Time Tracked |
| [**apiV2TaskTaskIdTimePost()**](TimeTrackingLegacyApi.md#apiV2TaskTaskIdTimePost) | **POST** /api/v2/task/task_id/time | Track Time |


## `apiV2TaskTaskIdTimeGet()`

```php
apiV2TaskTaskIdTimeGet($content_type)
```

Get Time Tracked

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TimeTrackingLegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2TaskTaskIdTimeGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingLegacyApi->apiV2TaskTaskIdTimeGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TaskTaskIdTimeIntervalIdDelete()`

```php
apiV2TaskTaskIdTimeIntervalIdDelete($content_type)
```

Delete Time Tracked

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TimeTrackingLegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2TaskTaskIdTimeIntervalIdDelete($content_type);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingLegacyApi->apiV2TaskTaskIdTimeIntervalIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TaskTaskIdTimeIntervalIdPut()`

```php
apiV2TaskTaskIdTimeIntervalIdPut($content_type, $body)
```

Edit Time Tracked

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TimeTrackingLegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2TaskTaskIdTimeIntervalIdPut($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingLegacyApi->apiV2TaskTaskIdTimeIntervalIdPut: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TaskTaskIdTimePost()`

```php
apiV2TaskTaskIdTimePost($content_type, $body)
```

Track Time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TimeTrackingLegacyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2TaskTaskIdTimePost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingLegacyApi->apiV2TaskTaskIdTimePost: ', $e->getMessage(), PHP_EOL;
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
