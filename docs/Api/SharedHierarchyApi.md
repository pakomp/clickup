# Msn\Apis\Clickup\SharedHierarchyApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2TeamTeamIdSharedGet()**](SharedHierarchyApi.md#apiV2TeamTeamIdSharedGet) | **GET** /api/v2/team/team_id/shared | Get Shared Hierarchy |


## `apiV2TeamTeamIdSharedGet()`

```php
apiV2TeamTeamIdSharedGet()
```

Get Shared Hierarchy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\SharedHierarchyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TeamTeamIdSharedGet();
} catch (Exception $e) {
    echo 'Exception when calling SharedHierarchyApi->apiV2TeamTeamIdSharedGet: ', $e->getMessage(), PHP_EOL;
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
