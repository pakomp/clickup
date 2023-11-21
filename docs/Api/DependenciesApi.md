# Msn\Apis\Clickup\DependenciesApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2TaskTaskIdDependencyDelete()**](DependenciesApi.md#apiV2TaskTaskIdDependencyDelete) | **DELETE** /api/v2/task/task_id/dependency | Delete Dependency |
| [**apiV2TaskTaskIdDependencyPost()**](DependenciesApi.md#apiV2TaskTaskIdDependencyPost) | **POST** /api/v2/task/task_id/dependency | Add Dependency |
| [**apiV2TaskTaskIdLinkLinksToDelete()**](DependenciesApi.md#apiV2TaskTaskIdLinkLinksToDelete) | **DELETE** /api/v2/task/task_id/link/links_to | Delete Task Link |
| [**apiV2TaskTaskIdLinkLinksToPost()**](DependenciesApi.md#apiV2TaskTaskIdLinkLinksToPost) | **POST** /api/v2/task/task_id/link/links_to | Add Task Link |


## `apiV2TaskTaskIdDependencyDelete()`

```php
apiV2TaskTaskIdDependencyDelete($depends_on, $dependency_of)
```

Delete Dependency

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\DependenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$depends_on = task_id; // string
$dependency_of = task_id; // string

try {
    $apiInstance->apiV2TaskTaskIdDependencyDelete($depends_on, $dependency_of);
} catch (Exception $e) {
    echo 'Exception when calling DependenciesApi->apiV2TaskTaskIdDependencyDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **depends_on** | **string**|  | [optional] |
| **dependency_of** | **string**|  | [optional] |

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

## `apiV2TaskTaskIdDependencyPost()`

```php
apiV2TaskTaskIdDependencyPost($content_type, $body)
```

Add Dependency

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\DependenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2TaskTaskIdDependencyPost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling DependenciesApi->apiV2TaskTaskIdDependencyPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TaskTaskIdLinkLinksToDelete()`

```php
apiV2TaskTaskIdLinkLinksToDelete()
```

Delete Task Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\DependenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TaskTaskIdLinkLinksToDelete();
} catch (Exception $e) {
    echo 'Exception when calling DependenciesApi->apiV2TaskTaskIdLinkLinksToDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TaskTaskIdLinkLinksToPost()`

```php
apiV2TaskTaskIdLinkLinksToPost()
```

Add Task Link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\DependenciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TaskTaskIdLinkLinksToPost();
} catch (Exception $e) {
    echo 'Exception when calling DependenciesApi->apiV2TaskTaskIdLinkLinksToPost: ', $e->getMessage(), PHP_EOL;
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
