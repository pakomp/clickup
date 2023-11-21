# msn\TasksApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2ListListIdTaskGet()**](TasksApi.md#apiV2ListListIdTaskGet) | **GET** /api/v2/list/list_id/task | Get Tasks |
| [**apiV2ListListIdTaskPost()**](TasksApi.md#apiV2ListListIdTaskPost) | **POST** /api/v2/list/list_id/task | Create a Task |
| [**apiV2TaskBulkTimeInStatusTaskIdsGet()**](TasksApi.md#apiV2TaskBulkTimeInStatusTaskIdsGet) | **GET** /api/v2/task/bulk_time_in_status/task_ids | Get Bulk Tasks&#39; Time in Status |
| [**apiV2TaskTaskIdDelete()**](TasksApi.md#apiV2TaskTaskIdDelete) | **DELETE** /api/v2/task/task_id | Delete a Task |
| [**apiV2TaskTaskIdGet()**](TasksApi.md#apiV2TaskTaskIdGet) | **GET** /api/v2/task/task_id | Get Task |
| [**apiV2TaskTaskIdPut()**](TasksApi.md#apiV2TaskTaskIdPut) | **PUT** /api/v2/task/task_id | Update a Task |
| [**apiV2TaskTaskIdTimeInStatusGet()**](TasksApi.md#apiV2TaskTaskIdTimeInStatusGet) | **GET** /api/v2/task/task_id/time_in_status | Get Task&#39;s Time in Status |
| [**apiV2TeamTeamIdTaskGet()**](TasksApi.md#apiV2TeamTeamIdTaskGet) | **GET** /api/v2/team/team_id/task | Get Filtered Team Tasks |


## `apiV2ListListIdTaskGet()`

```php
apiV2ListListIdTaskGet($content_type)
```

Get Tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2ListListIdTaskGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->apiV2ListListIdTaskGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ListListIdTaskPost()`

```php
apiV2ListListIdTaskPost($content_type, $body)
```

Create a Task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2ListListIdTaskPost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->apiV2ListListIdTaskPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TaskBulkTimeInStatusTaskIdsGet()`

```php
apiV2TaskBulkTimeInStatusTaskIdsGet()
```

Get Bulk Tasks' Time in Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TaskBulkTimeInStatusTaskIdsGet();
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->apiV2TaskBulkTimeInStatusTaskIdsGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TaskTaskIdDelete()`

```php
apiV2TaskTaskIdDelete($content_type)
```

Delete a Task

Please delete previously created/updated task for continuity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2TaskTaskIdDelete($content_type);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->apiV2TaskTaskIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TaskTaskIdGet()`

```php
apiV2TaskTaskIdGet($content_type)
```

Get Task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2TaskTaskIdGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->apiV2TaskTaskIdGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TaskTaskIdPut()`

```php
apiV2TaskTaskIdPut($content_type, $body)
```

Update a Task

Paste task_id from previously created task.  Make sure to update all fields when testing to make sure they are all updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2TaskTaskIdPut($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->apiV2TaskTaskIdPut: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TaskTaskIdTimeInStatusGet()`

```php
apiV2TaskTaskIdTimeInStatusGet()
```

Get Task's Time in Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TaskTaskIdTimeInStatusGet();
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->apiV2TaskTaskIdTimeInStatusGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdTaskGet()`

```php
apiV2TeamTeamIdTaskGet($)
```

Get Filtered Team Tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ = '_example'; // string

try {
    $apiInstance->apiV2TeamTeamIdTaskGet($);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->apiV2TeamTeamIdTaskGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **** | **string**|  | [optional] |

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
