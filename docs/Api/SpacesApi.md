# Msn\Apis\Clickup\SpacesApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2SpaceSpaceIdDelete()**](SpacesApi.md#apiV2SpaceSpaceIdDelete) | **DELETE** /api/v2/space/space_id | Delete a Space |
| [**apiV2SpaceSpaceIdGet()**](SpacesApi.md#apiV2SpaceSpaceIdGet) | **GET** /api/v2/space/space_id | Get Space |
| [**apiV2SpaceSpaceIdPut()**](SpacesApi.md#apiV2SpaceSpaceIdPut) | **PUT** /api/v2/space/space_id | Update a Space |
| [**apiV2TeamTeamIdSpaceGet()**](SpacesApi.md#apiV2TeamTeamIdSpaceGet) | **GET** /api/v2/team/team_id/space | Get Spaces |
| [**apiV2TeamTeamIdSpacePost()**](SpacesApi.md#apiV2TeamTeamIdSpacePost) | **POST** /api/v2/team/team_id/space | Create a Space |


## `apiV2SpaceSpaceIdDelete()`

```php
apiV2SpaceSpaceIdDelete($content_type)
```

Delete a Space

Please paste the previously updated space_id for continuity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2SpaceSpaceIdDelete($content_type);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->apiV2SpaceSpaceIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2SpaceSpaceIdGet()`

```php
apiV2SpaceSpaceIdGet($content_type)
```

Get Space

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2SpaceSpaceIdGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->apiV2SpaceSpaceIdGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2SpaceSpaceIdPut()`

```php
apiV2SpaceSpaceIdPut($content_type, $body)
```

Update a Space

Please paste the previously created space_id for continuity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2SpaceSpaceIdPut($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->apiV2SpaceSpaceIdPut: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdSpaceGet()`

```php
apiV2TeamTeamIdSpaceGet($content_type)
```

Get Spaces

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2TeamTeamIdSpaceGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->apiV2TeamTeamIdSpaceGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdSpacePost()`

```php
apiV2TeamTeamIdSpacePost($content_type, $body)
```

Create a Space

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2TeamTeamIdSpacePost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->apiV2TeamTeamIdSpacePost: ', $e->getMessage(), PHP_EOL;
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
