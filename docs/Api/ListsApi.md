# msn\ListsApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2FolderFolderIdListGet()**](ListsApi.md#apiV2FolderFolderIdListGet) | **GET** /api/v2/folder/folder_id/list | Get Lists |
| [**apiV2FolderFolderIdListPost()**](ListsApi.md#apiV2FolderFolderIdListPost) | **POST** /api/v2/folder/folder_id/list | Create a List |
| [**apiV2ListListIdDelete()**](ListsApi.md#apiV2ListListIdDelete) | **DELETE** /api/v2/list/list_id | Delete a List |
| [**apiV2ListListIdGet()**](ListsApi.md#apiV2ListListIdGet) | **GET** /api/v2/list/list_id | Get List |
| [**apiV2ListListIdPut()**](ListsApi.md#apiV2ListListIdPut) | **PUT** /api/v2/list/list_id | Update a List |
| [**apiV2ListListIdTaskTaskIdGet()**](ListsApi.md#apiV2ListListIdTaskTaskIdGet) | **GET** /api/v2/list/list_id/task/task_id | Remove Task From List |
| [**apiV2ListListIdTaskTaskIdPost()**](ListsApi.md#apiV2ListListIdTaskTaskIdPost) | **POST** /api/v2/list/list_id/task/task_id | Add Task To List |
| [**apiV2SpaceSpaceIdListGet()**](ListsApi.md#apiV2SpaceSpaceIdListGet) | **GET** /api/v2/space/space_id/list | Get Folderless Lists |
| [**apiV2SpaceSpaceIdListPost()**](ListsApi.md#apiV2SpaceSpaceIdListPost) | **POST** /api/v2/space/space_id/list | Create Folderless List |


## `apiV2FolderFolderIdListGet()`

```php
apiV2FolderFolderIdListGet($content_type)
```

Get Lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2FolderFolderIdListGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->apiV2FolderFolderIdListGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2FolderFolderIdListPost()`

```php
apiV2FolderFolderIdListPost($content_type, $body)
```

Create a List

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2FolderFolderIdListPost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->apiV2FolderFolderIdListPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ListListIdDelete()`

```php
apiV2ListListIdDelete($content_type)
```

Delete a List

Please paste previously updated list_id for continuity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2ListListIdDelete($content_type);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->apiV2ListListIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ListListIdGet()`

```php
apiV2ListListIdGet($content_type)
```

Get List

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2ListListIdGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->apiV2ListListIdGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ListListIdPut()`

```php
apiV2ListListIdPut($content_type, $body)
```

Update a List

Please paste previously created list_id for continuity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2ListListIdPut($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->apiV2ListListIdPut: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ListListIdTaskTaskIdGet()`

```php
apiV2ListListIdTaskTaskIdGet()
```

Remove Task From List

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2ListListIdTaskTaskIdGet();
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->apiV2ListListIdTaskTaskIdGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ListListIdTaskTaskIdPost()`

```php
apiV2ListListIdTaskTaskIdPost()
```

Add Task To List

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2ListListIdTaskTaskIdPost();
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->apiV2ListListIdTaskTaskIdPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2SpaceSpaceIdListGet()`

```php
apiV2SpaceSpaceIdListGet()
```

Get Folderless Lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2SpaceSpaceIdListGet();
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->apiV2SpaceSpaceIdListGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2SpaceSpaceIdListPost()`

```php
apiV2SpaceSpaceIdListPost($body)
```

Create Folderless List

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->apiV2SpaceSpaceIdListPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->apiV2SpaceSpaceIdListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
