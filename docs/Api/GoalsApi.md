# Msn\Apis\Clickup\GoalsApi

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2GoalGoalIdDelete()**](GoalsApi.md#apiV2GoalGoalIdDelete) | **DELETE** /api/v2/goal/goal_id | Delete a Goal |
| [**apiV2GoalGoalIdGet()**](GoalsApi.md#apiV2GoalGoalIdGet) | **GET** /api/v2/goal/goal_id | Get Goal |
| [**apiV2GoalGoalIdKeyResultPost()**](GoalsApi.md#apiV2GoalGoalIdKeyResultPost) | **POST** /api/v2/goal/goal_id/key_result | Create a Key Result |
| [**apiV2GoalGoalIdPut()**](GoalsApi.md#apiV2GoalGoalIdPut) | **PUT** /api/v2/goal/goal_id | Update a Goal |
| [**apiV2KeyResultKeyResultIdDelete()**](GoalsApi.md#apiV2KeyResultKeyResultIdDelete) | **DELETE** /api/v2/key_result/key_result_id | Delete a Key Result |
| [**apiV2KeyResultKeyResultIdPut()**](GoalsApi.md#apiV2KeyResultKeyResultIdPut) | **PUT** /api/v2/key_result/key_result_id | Edit a Key Result |
| [**apiV2TeamTeamIdGoalGet()**](GoalsApi.md#apiV2TeamTeamIdGoalGet) | **GET** /api/v2/team/team_id/goal | Get Goals |
| [**apiV2TeamTeamIdGoalPost()**](GoalsApi.md#apiV2TeamTeamIdGoalPost) | **POST** /api/v2/team/team_id/goal | Create a Goal |


## `apiV2GoalGoalIdDelete()`

```php
apiV2GoalGoalIdDelete($content_type)
```

Delete a Goal

Please paste goal_id from previously updated Goal for continuity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2GoalGoalIdDelete($content_type);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->apiV2GoalGoalIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2GoalGoalIdGet()`

```php
apiV2GoalGoalIdGet($content_type)
```

Get Goal

Please paste goal_id after creating another Goal for continuity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2GoalGoalIdGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->apiV2GoalGoalIdGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2GoalGoalIdKeyResultPost()`

```php
apiV2GoalGoalIdKeyResultPost($content_type, $body)
```

Create a Key Result

Please use previously created goal_id created before \"Get Goal\" for continuity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2GoalGoalIdKeyResultPost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->apiV2GoalGoalIdKeyResultPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2GoalGoalIdPut()`

```php
apiV2GoalGoalIdPut($content_type, $body)
```

Update a Goal

Please paste goal_id from previously created Goal for continuity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2GoalGoalIdPut($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->apiV2GoalGoalIdPut: ', $e->getMessage(), PHP_EOL;
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

## `apiV2KeyResultKeyResultIdDelete()`

```php
apiV2KeyResultKeyResultIdDelete($content_type)
```

Delete a Key Result

Please post key_result_id from the previously edited key_result for continuity. Please also delete the previously created Goal created for testing the \"Get Goal\" endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2KeyResultKeyResultIdDelete($content_type);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->apiV2KeyResultKeyResultIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2KeyResultKeyResultIdPut()`

```php
apiV2KeyResultKeyResultIdPut($content_type, $body)
```

Edit a Key Result

Please paste key_result_id from previously created key_result for continuity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2KeyResultKeyResultIdPut($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->apiV2KeyResultKeyResultIdPut: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdGoalGet()`

```php
apiV2TeamTeamIdGoalGet($content_type)
```

Get Goals

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2TeamTeamIdGoalGet($content_type);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->apiV2TeamTeamIdGoalGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdGoalPost()`

```php
apiV2TeamTeamIdGoalPost($content_type, $body)
```

Create a Goal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\GoalsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string
$body = 'body_example'; // string

try {
    $apiInstance->apiV2TeamTeamIdGoalPost($content_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling GoalsApi->apiV2TeamTeamIdGoalPost: ', $e->getMessage(), PHP_EOL;
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
