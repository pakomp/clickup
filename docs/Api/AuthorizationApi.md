# Msn\Apis\Clickup\AuthorizationApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2OauthTokenPost()**](AuthorizationApi.md#apiV2OauthTokenPost) | **POST** /api/v2/oauth/token | Get Access Token |
| [**apiV2UserGet()**](AuthorizationApi.md#apiV2UserGet) | **GET** /api/v2/user | Get Authorized User |


## `apiV2OauthTokenPost()`

```php
apiV2OauthTokenPost($client_id, $client_secret, $code)
```

Get Access Token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 'client_id_example'; // string
$client_secret = 'client_secret_example'; // string
$code = 'code_example'; // string

try {
    $apiInstance->apiV2OauthTokenPost($client_id, $client_secret, $code);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->apiV2OauthTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | [optional] |
| **client_secret** | **string**|  | [optional] |
| **code** | **string**|  | [optional] |

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

## `apiV2UserGet()`

```php
apiV2UserGet()
```

Get Authorized User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\AuthorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2UserGet();
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationApi->apiV2UserGet: ', $e->getMessage(), PHP_EOL;
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
