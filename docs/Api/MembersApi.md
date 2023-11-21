# msn\MembersApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2ListListIdMemberGet()**](MembersApi.md#apiV2ListListIdMemberGet) | **GET** /api/v2/list/list_id/member | Get List Members |
| [**apiV2TaskTaskIdMemberGet()**](MembersApi.md#apiV2TaskTaskIdMemberGet) | **GET** /api/v2/task/task_id/member | Get Task Members |


## `apiV2ListListIdMemberGet()`

```php
apiV2ListListIdMemberGet()
```

Get List Members

    

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2ListListIdMemberGet();
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->apiV2ListListIdMemberGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TaskTaskIdMemberGet()`

```php
apiV2TaskTaskIdMemberGet()
```

Get Task Members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\MembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TaskTaskIdMemberGet();
} catch (Exception $e) {
    echo 'Exception when calling MembersApi->apiV2TaskTaskIdMemberGet: ', $e->getMessage(), PHP_EOL;
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
