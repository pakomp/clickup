# Msn\Apis\Clickup\TimeTracking20Api

All URIs are relative to https://api.clickup.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiV2TeamTeamIdTimeEntriesCurrentGet()**](TimeTracking20Api.md#apiV2TeamTeamIdTimeEntriesCurrentGet) | **GET** /api/v2/team/team_id/time_entries/current | Get Running Time Entry |
| [**apiV2TeamTeamIdTimeEntriesGet()**](TimeTracking20Api.md#apiV2TeamTeamIdTimeEntriesGet) | **GET** /api/v2/team/team_id/time_entries | Get Time Entries Within a Date Range |
| [**apiV2TeamTeamIdTimeEntriesPost()**](TimeTracking20Api.md#apiV2TeamTeamIdTimeEntriesPost) | **POST** /api/v2/team/team_id/time_entries | Create a Time Entry |
| [**apiV2TeamTeamIdTimeEntriesStartTimerIdPost()**](TimeTracking20Api.md#apiV2TeamTeamIdTimeEntriesStartTimerIdPost) | **POST** /api/v2/team/team_id/time_entries/start/{timer_id} | Start a Time Entry |
| [**apiV2TeamTeamIdTimeEntriesStopPost()**](TimeTracking20Api.md#apiV2TeamTeamIdTimeEntriesStopPost) | **POST** /api/v2/team/team_id/time_entries/stop | Stop Running Time Entry |
| [**apiV2TeamTeamIdTimeEntriesTagsDelete()**](TimeTracking20Api.md#apiV2TeamTeamIdTimeEntriesTagsDelete) | **DELETE** /api/v2/team/team_id/time_entries/tags | Remove Tags From Time Entry |
| [**apiV2TeamTeamIdTimeEntriesTagsGet()**](TimeTracking20Api.md#apiV2TeamTeamIdTimeEntriesTagsGet) | **GET** /api/v2/team/team_id/time_entries/tags | Get All Time Entry Tags |
| [**apiV2TeamTeamIdTimeEntriesTagsPost()**](TimeTracking20Api.md#apiV2TeamTeamIdTimeEntriesTagsPost) | **POST** /api/v2/team/team_id/time_entries/tags | Add Tags to Time Entries |
| [**apiV2TeamTeamIdTimeEntriesTagsPut()**](TimeTracking20Api.md#apiV2TeamTeamIdTimeEntriesTagsPut) | **PUT** /api/v2/team/team_id/time_entries/tags | Rename Time Entry Tags |
| [**apiV2TeamTeamIdTimeEntriesTimeEntryIdDelete()**](TimeTracking20Api.md#apiV2TeamTeamIdTimeEntriesTimeEntryIdDelete) | **DELETE** /api/v2/team/team_id/time_entries/time_entry_id | Delete a Time Entry |
| [**apiV2TeamTeamIdTimeEntriesTimeEntryIdGet()**](TimeTracking20Api.md#apiV2TeamTeamIdTimeEntriesTimeEntryIdGet) | **GET** /api/v2/team/team_id/time_entries/time_entry_id | Get Singular Time Entry |
| [**apiV2TeamTeamIdTimeEntriesTimerIdHistoryGet()**](TimeTracking20Api.md#apiV2TeamTeamIdTimeEntriesTimerIdHistoryGet) | **GET** /api/v2/team/team_Id/time_entries/timer_id/history | Get Time Entry History |
| [**apiV2TeamTeamIdTimeEntriesTimerIdPut()**](TimeTracking20Api.md#apiV2TeamTeamIdTimeEntriesTimerIdPut) | **PUT** /api/v2/team/team_id/time_entries/timer_id | Update a Time Entry |


## `apiV2TeamTeamIdTimeEntriesCurrentGet()`

```php
apiV2TeamTeamIdTimeEntriesCurrentGet()
```

Get Running Time Entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TimeTracking20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TeamTeamIdTimeEntriesCurrentGet();
} catch (Exception $e) {
    echo 'Exception when calling TimeTracking20Api->apiV2TeamTeamIdTimeEntriesCurrentGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdTimeEntriesGet()`

```php
apiV2TeamTeamIdTimeEntriesGet()
```

Get Time Entries Within a Date Range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TimeTracking20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TeamTeamIdTimeEntriesGet();
} catch (Exception $e) {
    echo 'Exception when calling TimeTracking20Api->apiV2TeamTeamIdTimeEntriesGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdTimeEntriesPost()`

```php
apiV2TeamTeamIdTimeEntriesPost($body)
```

Create a Time Entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TimeTracking20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->apiV2TeamTeamIdTimeEntriesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling TimeTracking20Api->apiV2TeamTeamIdTimeEntriesPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdTimeEntriesStartTimerIdPost()`

```php
apiV2TeamTeamIdTimeEntriesStartTimerIdPost($timer_id)
```

Start a Time Entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TimeTracking20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timer_id = 'timer_id_example'; // string

try {
    $apiInstance->apiV2TeamTeamIdTimeEntriesStartTimerIdPost($timer_id);
} catch (Exception $e) {
    echo 'Exception when calling TimeTracking20Api->apiV2TeamTeamIdTimeEntriesStartTimerIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timer_id** | **string**|  | |

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

## `apiV2TeamTeamIdTimeEntriesStopPost()`

```php
apiV2TeamTeamIdTimeEntriesStopPost()
```

Stop Running Time Entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TimeTracking20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TeamTeamIdTimeEntriesStopPost();
} catch (Exception $e) {
    echo 'Exception when calling TimeTracking20Api->apiV2TeamTeamIdTimeEntriesStopPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdTimeEntriesTagsDelete()`

```php
apiV2TeamTeamIdTimeEntriesTagsDelete($content_type)
```

Remove Tags From Time Entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TimeTracking20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$content_type = application/json; // string

try {
    $apiInstance->apiV2TeamTeamIdTimeEntriesTagsDelete($content_type);
} catch (Exception $e) {
    echo 'Exception when calling TimeTracking20Api->apiV2TeamTeamIdTimeEntriesTagsDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdTimeEntriesTagsGet()`

```php
apiV2TeamTeamIdTimeEntriesTagsGet()
```

Get All Time Entry Tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TimeTracking20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TeamTeamIdTimeEntriesTagsGet();
} catch (Exception $e) {
    echo 'Exception when calling TimeTracking20Api->apiV2TeamTeamIdTimeEntriesTagsGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdTimeEntriesTagsPost()`

```php
apiV2TeamTeamIdTimeEntriesTagsPost($body)
```

Add Tags to Time Entries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TimeTracking20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->apiV2TeamTeamIdTimeEntriesTagsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling TimeTracking20Api->apiV2TeamTeamIdTimeEntriesTagsPost: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdTimeEntriesTagsPut()`

```php
apiV2TeamTeamIdTimeEntriesTagsPut($body)
```

Rename Time Entry Tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TimeTracking20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->apiV2TeamTeamIdTimeEntriesTagsPut($body);
} catch (Exception $e) {
    echo 'Exception when calling TimeTracking20Api->apiV2TeamTeamIdTimeEntriesTagsPut: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdTimeEntriesTimeEntryIdDelete()`

```php
apiV2TeamTeamIdTimeEntriesTimeEntryIdDelete()
```

Delete a Time Entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TimeTracking20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TeamTeamIdTimeEntriesTimeEntryIdDelete();
} catch (Exception $e) {
    echo 'Exception when calling TimeTracking20Api->apiV2TeamTeamIdTimeEntriesTimeEntryIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdTimeEntriesTimeEntryIdGet()`

```php
apiV2TeamTeamIdTimeEntriesTimeEntryIdGet()
```

Get Singular Time Entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TimeTracking20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TeamTeamIdTimeEntriesTimeEntryIdGet();
} catch (Exception $e) {
    echo 'Exception when calling TimeTracking20Api->apiV2TeamTeamIdTimeEntriesTimeEntryIdGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdTimeEntriesTimerIdHistoryGet()`

```php
apiV2TeamTeamIdTimeEntriesTimerIdHistoryGet()
```

Get Time Entry History

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TimeTracking20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiV2TeamTeamIdTimeEntriesTimerIdHistoryGet();
} catch (Exception $e) {
    echo 'Exception when calling TimeTracking20Api->apiV2TeamTeamIdTimeEntriesTimerIdHistoryGet: ', $e->getMessage(), PHP_EOL;
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

## `apiV2TeamTeamIdTimeEntriesTimerIdPut()`

```php
apiV2TeamTeamIdTimeEntriesTimerIdPut($body)
```

Update a Time Entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Msn\Apis\Clickup\Api\TimeTracking20Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->apiV2TeamTeamIdTimeEntriesTimerIdPut($body);
} catch (Exception $e) {
    echo 'Exception when calling TimeTracking20Api->apiV2TeamTeamIdTimeEntriesTimerIdPut: ', $e->getMessage(), PHP_EOL;
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
