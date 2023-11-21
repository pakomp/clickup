# msn\TeamsUserGroupsApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2GroupGet()**](TeamsUserGroupsApi.md#apiV2GroupGet) | **GET** /api/v2/group | Get Teams |
| [**apiV2GroupGroupIdDelete()**](TeamsUserGroupsApi.md#apiV2GroupGroupIdDelete) | **DELETE** /api/v2/group/group_id | Delete a Team |
| [**apiV2GroupGroupIdPut()**](TeamsUserGroupsApi.md#apiV2GroupGroupIdPut) | **PUT** /api/v2/group/group_id | Update Team |
| [**apiV2TeamTeamIdGroupPost()**](TeamsUserGroupsApi.md#apiV2TeamTeamIdGroupPost) | **POST** /api/v2/team/team_id/group | Create a Team |


## `apiV2GroupGet()`

```php
apiV2GroupGet()
```

Get Teams

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TeamsUserGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2GroupGet();
} catch (Exception $e) {
    echo 'Exception when calling TeamsUserGroupsApi->apiV2GroupGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2GroupGroupIdDelete()`

```php
apiV2GroupGroupIdDelete()
```

Delete a Team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TeamsUserGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2GroupGroupIdDelete();
} catch (Exception $e) {
    echo 'Exception when calling TeamsUserGroupsApi->apiV2GroupGroupIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2GroupGroupIdPut()`

```php
apiV2GroupGroupIdPut($body)
```

Update Team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TeamsUserGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->apiV2GroupGroupIdPut($body);
} catch (Exception $e) {
    echo 'Exception when calling TeamsUserGroupsApi->apiV2GroupGroupIdPut: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdGroupPost()`

```php
apiV2TeamTeamIdGroupPost($body)
```

Create a Team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\TeamsUserGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->apiV2TeamTeamIdGroupPost($body);
} catch (Exception $e) {
    echo 'Exception when calling TeamsUserGroupsApi->apiV2TeamTeamIdGroupPost: ', $e->getMessage(), PHP_EOL;
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
