# msn\WebhooksApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2TeamTeamIdWebhookGet()**](WebhooksApi.md#apiV2TeamTeamIdWebhookGet) | **GET** /api/v2/team/team_id/webhook | Get Webhooks |
| [**apiV2TeamTeamIdWebhookPost()**](WebhooksApi.md#apiV2TeamTeamIdWebhookPost) | **POST** /api/v2/team/team_id/webhook | Create a Webhook |
| [**apiV2WebhookWebhookIdDelete()**](WebhooksApi.md#apiV2WebhookWebhookIdDelete) | **DELETE** /api/v2/webhook/webhook_id | Delete a Webhook |
| [**apiV2WebhookWebhookIdPut()**](WebhooksApi.md#apiV2WebhookWebhookIdPut) | **PUT** /api/v2/webhook/webhook_id | Update Webhook |


## `apiV2TeamTeamIdWebhookGet()`

```php
apiV2TeamTeamIdWebhookGet($content_type)
```

Get Webhooks

Please create another webhook and test afterward

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2TeamTeamIdWebhookGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->apiV2TeamTeamIdWebhookGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdWebhookPost()`

```php
apiV2TeamTeamIdWebhookPost($content_type, $body)
```

Create a Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2TeamTeamIdWebhookPost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->apiV2TeamTeamIdWebhookPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2WebhookWebhookIdDelete()`

```php
apiV2WebhookWebhookIdDelete($content_type)
```

Delete a Webhook

Please paste webhook_id from previously created webhook for continuity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2WebhookWebhookIdDelete($content_type);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->apiV2WebhookWebhookIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2WebhookWebhookIdPut()`

```php
apiV2WebhookWebhookIdPut($body)
```

Update Webhook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new msn\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->apiV2WebhookWebhookIdPut($body);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->apiV2WebhookWebhookIdPut: ', $e->getMessage(), PHP_EOL;
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
