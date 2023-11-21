# Msn\Apis\Clickup\ViewsApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2FolderFolderIdViewGet()**](ViewsApi.md#apiV2FolderFolderIdViewGet) | **GET** /api/v2/folder/folder_id/view | Get Folder Views |
| [**apiV2FolderFolderIdViewPost()**](ViewsApi.md#apiV2FolderFolderIdViewPost) | **POST** /api/v2/folder/folder_id/view | Create Folder View |
| [**apiV2ListListIdViewGet()**](ViewsApi.md#apiV2ListListIdViewGet) | **GET** /api/v2/list/list_id/view | Get List Views |
| [**apiV2ListListIdViewPost()**](ViewsApi.md#apiV2ListListIdViewPost) | **POST** /api/v2/list/list_id/view | Create List View |
| [**apiV2SpaceSpaceIdViewGet()**](ViewsApi.md#apiV2SpaceSpaceIdViewGet) | **GET** /api/v2/space/space_id/view | Get Space Views |
| [**apiV2SpaceSpaceIdViewPost()**](ViewsApi.md#apiV2SpaceSpaceIdViewPost) | **POST** /api/v2/space/space_id/view | Create Space View |
| [**apiV2TeamTeamIdViewGet()**](ViewsApi.md#apiV2TeamTeamIdViewGet) | **GET** /api/v2/team/team_id/view | Get Team Views |
| [**apiV2TeamTeamIdViewPost()**](ViewsApi.md#apiV2TeamTeamIdViewPost) | **POST** /api/v2/team/team_id/view | Create Team View |
| [**apiV2ViewViewIdDelete()**](ViewsApi.md#apiV2ViewViewIdDelete) | **DELETE** /api/v2/view/view_id | Delete a View |
| [**apiV2ViewViewIdGet()**](ViewsApi.md#apiV2ViewViewIdGet) | **GET** /api/v2/view/view_id | Get View |
| [**apiV2ViewViewIdPut()**](ViewsApi.md#apiV2ViewViewIdPut) | **PUT** /api/v2/view/view_id | Update View |
| [**apiV2ViewViewIdTaskGet()**](ViewsApi.md#apiV2ViewViewIdTaskGet) | **GET** /api/v2/view/view_id/task | Get View Tasks |


## `apiV2FolderFolderIdViewGet()`

```php
apiV2FolderFolderIdViewGet($content_type)
```

Get Folder Views

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2FolderFolderIdViewGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling ViewsApi->apiV2FolderFolderIdViewGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2FolderFolderIdViewPost()`

```php
apiV2FolderFolderIdViewPost($content_type, $body)
```

Create Folder View

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2FolderFolderIdViewPost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ViewsApi->apiV2FolderFolderIdViewPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ListListIdViewGet()`

```php
apiV2ListListIdViewGet($content_type)
```

Get List Views

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2ListListIdViewGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling ViewsApi->apiV2ListListIdViewGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ListListIdViewPost()`

```php
apiV2ListListIdViewPost($content_type, $body)
```

Create List View

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2ListListIdViewPost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ViewsApi->apiV2ListListIdViewPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2SpaceSpaceIdViewGet()`

```php
apiV2SpaceSpaceIdViewGet($content_type)
```

Get Space Views

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2SpaceSpaceIdViewGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling ViewsApi->apiV2SpaceSpaceIdViewGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2SpaceSpaceIdViewPost()`

```php
apiV2SpaceSpaceIdViewPost($content_type, $body)
```

Create Space View

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2SpaceSpaceIdViewPost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ViewsApi->apiV2SpaceSpaceIdViewPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdViewGet()`

```php
apiV2TeamTeamIdViewGet($content_type)
```

Get Team Views

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2TeamTeamIdViewGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling ViewsApi->apiV2TeamTeamIdViewGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdViewPost()`

```php
apiV2TeamTeamIdViewPost($content_type, $body)
```

Create Team View

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2TeamTeamIdViewPost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ViewsApi->apiV2TeamTeamIdViewPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ViewViewIdDelete()`

```php
apiV2ViewViewIdDelete($content_type)
```

Delete a View

Please paste view_id from a view on \"Everything\" for continuity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2ViewViewIdDelete($content_type);
} catch (Exception $e) {
    echo 'Exception when calling ViewsApi->apiV2ViewViewIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ViewViewIdGet()`

```php
apiV2ViewViewIdGet($content_type)
```

Get View

Please paste view_id from \"API V2 View\" on \"API V2 Test Space\" for continuity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2ViewViewIdGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling ViewsApi->apiV2ViewViewIdGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ViewViewIdPut()`

```php
apiV2ViewViewIdPut($content_type, $body)
```

Update View

Please paste view_id from \"API V2 View\" on \"API V2 Test Space\" for continuity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2ViewViewIdPut($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ViewsApi->apiV2ViewViewIdPut: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ViewViewIdTaskGet()`

```php
apiV2ViewViewIdTaskGet($content_type, $page)
```

Get View Tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\ViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$page = 0; // int

try {
    $apiInstance->apiV2ViewViewIdTaskGet($content_type, $page);
} catch (Exception $e) {
    echo 'Exception when calling ViewsApi->apiV2ViewViewIdTaskGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**|  | [optional] |
| **page** | **int**|  | [optional] |

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
