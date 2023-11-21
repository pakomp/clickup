# Msn\Apis\Clickup\ChecklistsApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2ChecklistChecklistIdChecklistItemChecklistItemIdDelete()**](ChecklistsApi.md#apiV2ChecklistChecklistIdChecklistItemChecklistItemIdDelete) | **DELETE** /api/v2/checklist/checklist_id/checklist_item/checklist_item_id | Delete Checklist Item |
| [**apiV2ChecklistChecklistIdChecklistItemChecklistItemIdPut()**](ChecklistsApi.md#apiV2ChecklistChecklistIdChecklistItemChecklistItemIdPut) | **PUT** /api/v2/checklist/checklist_id/checklist_item/checklist_item_id | Edit Checklist Item |
| [**apiV2ChecklistChecklistIdChecklistItemPost()**](ChecklistsApi.md#apiV2ChecklistChecklistIdChecklistItemPost) | **POST** /api/v2/checklist/checklist_id/checklist_item | Create Checklist Item |
| [**apiV2ChecklistChecklistIdDelete()**](ChecklistsApi.md#apiV2ChecklistChecklistIdDelete) | **DELETE** /api/v2/checklist/checklist_id | Delete Checklist |
| [**apiV2ChecklistChecklistIdPut()**](ChecklistsApi.md#apiV2ChecklistChecklistIdPut) | **PUT** /api/v2/checklist/checklist_id | Edit Checklist |
| [**apiV2TaskTaskIdChecklistPost()**](ChecklistsApi.md#apiV2TaskTaskIdChecklistPost) | **POST** /api/v2/task/task_id/checklist | Create Checklist |


## `apiV2ChecklistChecklistIdChecklistItemChecklistItemIdDelete()`

```php
apiV2ChecklistChecklistIdChecklistItemChecklistItemIdDelete()
```

Delete Checklist Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ChecklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2ChecklistChecklistIdChecklistItemChecklistItemIdDelete();
} catch (Exception $e) {
    echo 'Exception when calling ChecklistsApi->apiV2ChecklistChecklistIdChecklistItemChecklistItemIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `apiV2ChecklistChecklistIdChecklistItemChecklistItemIdPut()`

```php
apiV2ChecklistChecklistIdChecklistItemChecklistItemIdPut($content_type, $body)
```

Edit Checklist Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ChecklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2ChecklistChecklistIdChecklistItemChecklistItemIdPut($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistsApi->apiV2ChecklistChecklistIdChecklistItemChecklistItemIdPut: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ChecklistChecklistIdChecklistItemPost()`

```php
apiV2ChecklistChecklistIdChecklistItemPost($content_type, $body)
```

Create Checklist Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ChecklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2ChecklistChecklistIdChecklistItemPost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistsApi->apiV2ChecklistChecklistIdChecklistItemPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ChecklistChecklistIdDelete()`

```php
apiV2ChecklistChecklistIdDelete($content_type)
```

Delete Checklist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ChecklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2ChecklistChecklistIdDelete($content_type);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistsApi->apiV2ChecklistChecklistIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ChecklistChecklistIdPut()`

```php
apiV2ChecklistChecklistIdPut($content_type, $body)
```

Edit Checklist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ChecklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2ChecklistChecklistIdPut($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistsApi->apiV2ChecklistChecklistIdPut: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TaskTaskIdChecklistPost()`

```php
apiV2TaskTaskIdChecklistPost($content_type, $body)
```

Create Checklist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ChecklistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2TaskTaskIdChecklistPost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistsApi->apiV2TaskTaskIdChecklistPost: ', $e->getMessage(), PHP_EOL;
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
