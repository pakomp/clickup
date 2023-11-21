# Msn\Apis\Clickup\UsersApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2TeamTeamIdUserPost()**](UsersApi.md#apiV2TeamTeamIdUserPost) | **POST** /api/v2/team/team_id/user | Invite User to Workspace |
| [**apiV2TeamTeamIdUserUserIdDelete()**](UsersApi.md#apiV2TeamTeamIdUserUserIdDelete) | **DELETE** /api/v2/team/team_id/user/user_id | Remove User From Workspace |
| [**apiV2TeamTeamIdUserUserIdGet()**](UsersApi.md#apiV2TeamTeamIdUserUserIdGet) | **GET** /api/v2/team/team_id/user/user_id | Get User |
| [**apiV2TeamTeamIdUserUserIdPut()**](UsersApi.md#apiV2TeamTeamIdUserUserIdPut) | **PUT** /api/v2/team/team_id/user/user_id | Edit User on Workspace |


## `apiV2TeamTeamIdUserPost()`

```php
apiV2TeamTeamIdUserPost($body)
```

Invite User to Workspace

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->apiV2TeamTeamIdUserPost($body);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->apiV2TeamTeamIdUserPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdUserUserIdDelete()`

```php
apiV2TeamTeamIdUserUserIdDelete()
```

Remove User From Workspace

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TeamTeamIdUserUserIdDelete();
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->apiV2TeamTeamIdUserUserIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdUserUserIdGet()`

```php
apiV2TeamTeamIdUserUserIdGet()
```

Get User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TeamTeamIdUserUserIdGet();
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->apiV2TeamTeamIdUserUserIdGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdUserUserIdPut()`

```php
apiV2TeamTeamIdUserUserIdPut($body)
```

Edit User on Workspace

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->apiV2TeamTeamIdUserUserIdPut($body);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->apiV2TeamTeamIdUserUserIdPut: ', $e->getMessage(), PHP_EOL;
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
