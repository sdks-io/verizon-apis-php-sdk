# Device Location Callbacks

```php
$deviceLocationCallbacksController = $client->getDeviceLocationCallbacksController();
```

## Class Name

`DeviceLocationCallbacksController`

## Methods

* [List Registered Callbacks](../../doc/controllers/device-location-callbacks.md#list-registered-callbacks)
* [Register Callback](../../doc/controllers/device-location-callbacks.md#register-callback)
* [Deregister Callback](../../doc/controllers/device-location-callbacks.md#deregister-callback)


# List Registered Callbacks

Returns a list of all registered callback URLs for the account.

```php
function listRegisteredCallbacks(string $account): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account number. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceLocationCallback[]`](../../doc/models/device-location-callback.md).

## Example Usage

```php
$account = '0252012345-00001';

$apiResponse = $deviceLocationCallbacksController->listRegisteredCallbacks($account);
```

## Example Response *(as JSON)*

```json
[
  {
    "name": "Location",
    "url": "http://10.120.102.147:50569/CallbackListener/Location.asmx"
  },
  {
    "name": "Location",
    "url": "http://10.120.102.147:50569/CallbackListener/DeviceLocation.asmx"
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`DeviceLocationResultException`](../../doc/models/device-location-result-exception.md) |


# Register Callback

Provide a URL to receive messages from a ThingSpace callback service.

```php
function registerCallback(string $account, DeviceLocationCallback $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account number. |
| `body` | [`DeviceLocationCallback`](../../doc/models/device-location-callback.md) | Body, Required | Request to register a callback. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`CallbackRegistrationResult`](../../doc/models/callback-registration-result.md).

## Example Usage

```php
$account = '0252012345-00001';

$body = DeviceLocationCallbackBuilder::init(
    CallbackServiceNameEnum::LOCATION,
    'http://10.120.102.183:50559/CallbackListener/LocationServiceMessages.asmx'
)->build();

$apiResponse = $deviceLocationCallbacksController->registerCallback(
    $account,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "account": "0212312345-00001",
  "name": "Location"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`DeviceLocationResultException`](../../doc/models/device-location-result-exception.md) |


# Deregister Callback

Deregister a URL to stop receiving callback messages.

```php
function deregisterCallback(string $account, string $service): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account number. |
| `service` | [`string(CallbackServiceNameEnum)`](../../doc/models/callback-service-name-enum.md) | Template, Required | Callback service name. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceLocationSuccessResult`](../../doc/models/device-location-success-result.md).

## Example Usage

```php
$account = '0252012345-00001';

$service = CallbackServiceNameEnum::LOCATION;

$apiResponse = $deviceLocationCallbacksController->deregisterCallback(
    $account,
    $service
);
```

## Example Response *(as JSON)*

```json
{
  "success": true
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`DeviceLocationResultException`](../../doc/models/device-location-result-exception.md) |

