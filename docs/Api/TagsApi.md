# msn\TagsApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2SpaceSpaceIdTagGet()**](TagsApi.md#apiV2SpaceSpaceIdTagGet) | **GET** /api/v2/space/space_id/tag | Get Space Tags |
| [**apiV2SpaceSpaceIdTagPost()**](TagsApi.md#apiV2SpaceSpaceIdTagPost) | **POST** /api/v2/space/space_id/tag | Create a Space Tag |
| [**apiV2SpaceSpaceIdTagTagNameDelete()**](TagsApi.md#apiV2SpaceSpaceIdTagTagNameDelete) | **DELETE** /api/v2/space/space_id/tag/tag_name | Delete a Space Tag |
| [**apiV2SpaceSpaceIdTagTagNamePut()**](TagsApi.md#apiV2SpaceSpaceIdTagTagNamePut) | **PUT** /api/v2/space/space_id/tag/tag_name | Edit a Space Tag |
| [**apiV2TaskTaskIdTagTagNameDelete()**](TagsApi.md#apiV2TaskTaskIdTagTagNameDelete) | **DELETE** /api/v2/task/task_id/tag/tag_name | Remove Tag From Task |
| [**apiV2TaskTaskIdTagTagNamePost()**](TagsApi.md#apiV2TaskTaskIdTagTagNamePost) | **POST** /api/v2/task/task_id/tag/tag_name | Add Tag To Task |


## `apiV2SpaceSpaceIdTagGet()`

```php
apiV2SpaceSpaceIdTagGet()
```

Get Space Tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2SpaceSpaceIdTagGet();
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->apiV2SpaceSpaceIdTagGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2SpaceSpaceIdTagPost()`

```php
apiV2SpaceSpaceIdTagPost($content_type, $body)
```

Create a Space Tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2SpaceSpaceIdTagPost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->apiV2SpaceSpaceIdTagPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2SpaceSpaceIdTagTagNameDelete()`

```php
apiV2SpaceSpaceIdTagTagNameDelete()
```

Delete a Space Tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2SpaceSpaceIdTagTagNameDelete();
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->apiV2SpaceSpaceIdTagTagNameDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2SpaceSpaceIdTagTagNamePut()`

```php
apiV2SpaceSpaceIdTagTagNamePut($content_type, $body)
```

Edit a Space Tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2SpaceSpaceIdTagTagNamePut($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->apiV2SpaceSpaceIdTagTagNamePut: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TaskTaskIdTagTagNameDelete()`

```php
apiV2TaskTaskIdTagTagNameDelete()
```

Remove Tag From Task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TaskTaskIdTagTagNameDelete();
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->apiV2TaskTaskIdTagTagNameDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TaskTaskIdTagTagNamePost()`

```php
apiV2TaskTaskIdTagTagNamePost()
```

Add Tag To Task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TaskTaskIdTagTagNamePost();
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->apiV2TaskTaskIdTagTagNamePost: ', $e->getMessage(), PHP_EOL;
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
