# Msn\Apis\Clickup\FoldersApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2FolderFolderIdDelete()**](FoldersApi.md#apiV2FolderFolderIdDelete) | **DELETE** /api/v2/folder/folder_id | Delete a Folder |
| [**apiV2FolderFolderIdGet()**](FoldersApi.md#apiV2FolderFolderIdGet) | **GET** /api/v2/folder/folder_id | Get Folder |
| [**apiV2FolderFolderIdPut()**](FoldersApi.md#apiV2FolderFolderIdPut) | **PUT** /api/v2/folder/folder_id | Update a Folder |
| [**apiV2SpaceSpaceIdFolderGet()**](FoldersApi.md#apiV2SpaceSpaceIdFolderGet) | **GET** /api/v2/space/space_id/folder | Get Folders |
| [**apiV2SpaceSpaceIdFolderPost()**](FoldersApi.md#apiV2SpaceSpaceIdFolderPost) | **POST** /api/v2/space/space_id/folder | Create a Folder |


## `apiV2FolderFolderIdDelete()`

```php
apiV2FolderFolderIdDelete($content_type)
```

Delete a Folder

Please paste previously updated folder_id for continuity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2FolderFolderIdDelete($content_type);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->apiV2FolderFolderIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2FolderFolderIdGet()`

```php
apiV2FolderFolderIdGet($content_type)
```

Get Folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2FolderFolderIdGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->apiV2FolderFolderIdGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2FolderFolderIdPut()`

```php
apiV2FolderFolderIdPut($content_type, $body)
```

Update a Folder

Please paste previously created folder_id for continuity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2FolderFolderIdPut($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->apiV2FolderFolderIdPut: ', $e->getMessage(), PHP_EOL;
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

## `apiV2SpaceSpaceIdFolderGet()`

```php
apiV2SpaceSpaceIdFolderGet($content_type)
```

Get Folders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2SpaceSpaceIdFolderGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->apiV2SpaceSpaceIdFolderGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2SpaceSpaceIdFolderPost()`

```php
apiV2SpaceSpaceIdFolderPost($content_type, $body)
```

Create a Folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2SpaceSpaceIdFolderPost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->apiV2SpaceSpaceIdFolderPost: ', $e->getMessage(), PHP_EOL;
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
