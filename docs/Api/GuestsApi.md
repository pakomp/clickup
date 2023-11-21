# msn\GuestsApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2FolderFolderIdGuestGuestIdDelete()**](GuestsApi.md#apiV2FolderFolderIdGuestGuestIdDelete) | **DELETE** /api/v2/folder/folder_id/guest/guest_id | Remove Guest from Folder |
| [**apiV2FolderFolderIdGuestGuestIdPost()**](GuestsApi.md#apiV2FolderFolderIdGuestGuestIdPost) | **POST** /api/v2/folder/folder_id/guest/guest_id | Add Guest to Folder |
| [**apiV2ListListIdGuestGuestIdDelete()**](GuestsApi.md#apiV2ListListIdGuestGuestIdDelete) | **DELETE** /api/v2/list/list_id/guest/guest_id | Remove Guest from List |
| [**apiV2ListListIdGuestGuestIdPost()**](GuestsApi.md#apiV2ListListIdGuestGuestIdPost) | **POST** /api/v2/list/list_id/guest/guest_id | Add Guest to List |
| [**apiV2TaskTaskIdGuestGuestIdDelete()**](GuestsApi.md#apiV2TaskTaskIdGuestGuestIdDelete) | **DELETE** /api/v2/task/task_id/guest/guest_id | Remove Guest from Task |
| [**apiV2TaskTaskIdGuestGuestIdPost()**](GuestsApi.md#apiV2TaskTaskIdGuestGuestIdPost) | **POST** /api/v2/task/task_id/guest/guest_id | Add Guest to Task |
| [**apiV2TeamTeamIdGuestGuestIdDelete()**](GuestsApi.md#apiV2TeamTeamIdGuestGuestIdDelete) | **DELETE** /api/v2/team/team_id/guest/guest_id | Remove Guest from Workspace |
| [**apiV2TeamTeamIdGuestGuestIdGet()**](GuestsApi.md#apiV2TeamTeamIdGuestGuestIdGet) | **GET** /api/v2/team/team_id/guest/guest_id | Get Guest |
| [**apiV2TeamTeamIdGuestGuestIdPut()**](GuestsApi.md#apiV2TeamTeamIdGuestGuestIdPut) | **PUT** /api/v2/team/team_id/guest/guest_id | Edit Guest on Workspace |
| [**apiV2TeamTeamIdGuestPost()**](GuestsApi.md#apiV2TeamTeamIdGuestPost) | **POST** /api/v2/team/team_id/guest | Invite Guest to Workspace |


## `apiV2FolderFolderIdGuestGuestIdDelete()`

```php
apiV2FolderFolderIdGuestGuestIdDelete()
```

Remove Guest from Folder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2FolderFolderIdGuestGuestIdDelete();
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->apiV2FolderFolderIdGuestGuestIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2FolderFolderIdGuestGuestIdPost()`

```php
apiV2FolderFolderIdGuestGuestIdPost()
```

Add Guest to Folder

JSON Body: {   \"permission_level\": \"read\" || \"comment\" || \"edit\" || \"create\" }

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2FolderFolderIdGuestGuestIdPost();
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->apiV2FolderFolderIdGuestGuestIdPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ListListIdGuestGuestIdDelete()`

```php
apiV2ListListIdGuestGuestIdDelete()
```

Remove Guest from List

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2ListListIdGuestGuestIdDelete();
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->apiV2ListListIdGuestGuestIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2ListListIdGuestGuestIdPost()`

```php
apiV2ListListIdGuestGuestIdPost()
```

Add Guest to List

JSON Body: {   \"permission_level\": \"read\" || \"comment\" || \"edit\" || \"create\" }

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2ListListIdGuestGuestIdPost();
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->apiV2ListListIdGuestGuestIdPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TaskTaskIdGuestGuestIdDelete()`

```php
apiV2TaskTaskIdGuestGuestIdDelete()
```

Remove Guest from Task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TaskTaskIdGuestGuestIdDelete();
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->apiV2TaskTaskIdGuestGuestIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TaskTaskIdGuestGuestIdPost()`

```php
apiV2TaskTaskIdGuestGuestIdPost($body)
```

Add Guest to Task

JSON Body: {   \"permission_level\": \"read\" || \"comment\" || \"edit\" || \"create\" }

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->apiV2TaskTaskIdGuestGuestIdPost($body);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->apiV2TaskTaskIdGuestGuestIdPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdGuestGuestIdDelete()`

```php
apiV2TeamTeamIdGuestGuestIdDelete()
```

Remove Guest from Workspace

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TeamTeamIdGuestGuestIdDelete();
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->apiV2TeamTeamIdGuestGuestIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdGuestGuestIdGet()`

```php
apiV2TeamTeamIdGuestGuestIdGet()
```

Get Guest

All the locations on the Workspace the guest has access too

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TeamTeamIdGuestGuestIdGet();
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->apiV2TeamTeamIdGuestGuestIdGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdGuestGuestIdPut()`

```php
apiV2TeamTeamIdGuestGuestIdPut($body)
```

Edit Guest on Workspace

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->apiV2TeamTeamIdGuestGuestIdPut($body);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->apiV2TeamTeamIdGuestGuestIdPut: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdGuestPost()`

```php
apiV2TeamTeamIdGuestPost($content_type, $body)
```

Invite Guest to Workspace

The type of JSON to fill out: {   \"email\": \"example@gmail.com\",   \"can_edit_tags\": true || false,   \"can_see_time_estimated\": true || false,   \"can_see_time_spent\": true || false }

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\GuestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->apiV2TeamTeamIdGuestPost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling GuestsApi->apiV2TeamTeamIdGuestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **content_type** | **string**|  | [optional] |
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
