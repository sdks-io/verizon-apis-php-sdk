# Diagnostics Callbacks

```php
$diagnosticsCallbacksController = $client->getDiagnosticsCallbacksController();
```

## Class Name

`DiagnosticsCallbacksController`

## Methods

* [Get Diagnostics Subscription Callback Info](../../doc/controllers/diagnostics-callbacks.md#get-diagnostics-subscription-callback-info)
* [Register Diagnostics Callback URL](../../doc/controllers/diagnostics-callbacks.md#register-diagnostics-callback-url)
* [Unregister Diagnostics Callback](../../doc/controllers/diagnostics-callbacks.md#unregister-diagnostics-callback)


# Get Diagnostics Subscription Callback Info

This endpoint allows user to get the registered callback information of an existing diagnostics subscription.

```php
function getDiagnosticsSubscriptionCallbackInfo(string $accountName): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Query, Required | Account identifier. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceDiagnosticsCallback[]`](../../doc/models/device-diagnostics-callback.md).

## Example Usage

```php
$accountName = '0000123456-00001';

$apiResponse = $diagnosticsCallbacksController->getDiagnosticsSubscriptionCallbackInfo($accountName);
```

## Example Response *(as JSON)*

```json
[
  {
    "accountName": "TestQAAccount",
    "serviceName": "string",
    "endpoint": "https://yourwebsite.com",
    "httpHeaders": {},
    "createdOn": "2019-09-07T23:57:53.292Z"
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`DeviceDiagnosticsResultException`](../../doc/models/device-diagnostics-result-exception.md) |


# Register Diagnostics Callback URL

This endpoint allows user update the callback HTTPS address of an existing diagnostics subscription.

```php
function registerDiagnosticsCallbackURL(CallbackRegistrationRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CallbackRegistrationRequest`](../../doc/models/callback-registration-request.md) | Body, Required | Callback URL registration request. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceDiagnosticsCallback`](../../doc/models/device-diagnostics-callback.md).

## Example Usage

```php
$body = CallbackRegistrationRequestBuilder::init(
    'TestQAAccount',
    'Diagnostics',
    'https://yourwebsite.com'
)
    ->httpHeaders(ApiHelper::deserialize('{}'))
    ->build();

$apiResponse = $diagnosticsCallbacksController->registerDiagnosticsCallbackURL($body);
```

## Example Response *(as JSON)*

```json
{
  "accountName": "TestQAAccount",
  "serviceName": "string",
  "endpoint": "https://yourwebsite.com",
  "httpHeaders": {},
  "createdOn": "2019-09-07T23:57:53.292Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`DeviceDiagnosticsResultException`](../../doc/models/device-diagnostics-result-exception.md) |


# Unregister Diagnostics Callback

This endpoint allows user to delete a registered callback URL and credential.

```php
function unregisterDiagnosticsCallback(string $accountName, string $serviceName): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Query, Required | Account identifier. |
| `serviceName` | `string` | Query, Required | Service name for callback notification. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceDiagnosticsCallback`](../../doc/models/device-diagnostics-callback.md).

## Example Usage

```php
$accountName = '0000123456-00001';

$serviceName = 'string';

$apiResponse = $diagnosticsCallbacksController->unregisterDiagnosticsCallback(
    $accountName,
    $serviceName
);
```

## Example Response *(as JSON)*

```json
{
  "accountName": "TestQAAccount",
  "serviceName": "string",
  "endpoint": "https://yourwebsite.com",
  "httpHeaders": {},
  "createdOn": "2019-09-07T23:57:53.292Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`DeviceDiagnosticsResultException`](../../doc/models/device-diagnostics-result-exception.md) |

