# Msn\Apis\Clickup\TaskTemplatesApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2ListListIdTaskTemplateTemplateIdPost()**](TaskTemplatesApi.md#apiV2ListListIdTaskTemplateTemplateIdPost) | **POST** /api/v2/list/list_id/taskTemplate/template_id | Create Task From Template |
| [**apiV2TeamTeamIdTaskTemplateGet()**](TaskTemplatesApi.md#apiV2TeamTeamIdTaskTemplateGet) | **GET** /api/v2/team/team_id/taskTemplate | Get Task Templates |


## `apiV2ListListIdTaskTemplateTemplateIdPost()`

```php
apiV2ListListIdTaskTemplateTemplateIdPost($content_type, $body)
```

Create Task From Template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TaskTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2ListListIdTaskTemplateTemplateIdPost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling TaskTemplatesApi->apiV2ListListIdTaskTemplateTemplateIdPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdTaskTemplateGet()`

```php
apiV2TeamTeamIdTaskTemplateGet($page)
```

Get Task Templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TaskTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 0; // int

try {
    $apiInstance->apiV2TeamTeamIdTaskTemplateGet($page);
} catch (Exception $e) {
    echo 'Exception when calling TaskTemplatesApi->apiV2TeamTeamIdTaskTemplateGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
