# Msn\Apis\Clickup\AttachmentsApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2TaskTaskIdAttachmentPost()**](AttachmentsApi.md#apiV2TaskTaskIdAttachmentPost) | **POST** /api/v2/task/task_id/attachment | Create Task Attachment |


## `apiV2TaskTaskIdAttachmentPost()`

```php
apiV2TaskTaskIdAttachmentPost($attachment)
```

Create Task Attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->apiV2TaskTaskIdAttachmentPost($attachment);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->apiV2TaskTaskIdAttachmentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachment** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[apikeyAuth](../../README.md#apikeyAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
