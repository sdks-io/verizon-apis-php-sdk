# Connectivity Callbacks

```php
$connectivityCallbacksController = $client->getConnectivityCallbacksController();
```

## Class Name

`ConnectivityCallbacksController`

## Methods

* [List Registered Callbacks](../../doc/controllers/connectivity-callbacks.md#list-registered-callbacks)
* [Register Callback](../../doc/controllers/connectivity-callbacks.md#register-callback)
* [Deregister Callback](../../doc/controllers/connectivity-callbacks.md#deregister-callback)


# List Registered Callbacks

Returns the name and endpoint URL of the callback listening services registered for a given account.

```php
function listRegisteredCallbacks(string $aname): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `aname` | `string` | Template, Required | Account name. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ConnectivityManagementCallback[]`](../../doc/models/connectivity-management-callback.md).

## Example Usage

```php
$aname = '0252012345-00001';

$apiResponse = $connectivityCallbacksController->listRegisteredCallbacks($aname);
```

## Example Response *(as JSON)*

```json
[
  {
    "accountName": "0252012345-00001",
    "serviceName": "CarrierService",
    "url": "http://10.120.102.147:50569/CallbackListener/Carrier.asmx"
  },
  {
    "accountName": "0252012345-00001",
    "password": "drowssap",
    "serviceName": "DeviceUsage",
    "url": "http://10.120.102.147:50569/CallbackListener/Usage.asmx",
    "username": "zaffod"
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Register Callback

You are responsible for creating and running a listening process on your server at that URL.

```php
function registerCallback(string $aname, RegisterCallbackRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `aname` | `string` | Template, Required | Account name. |
| `body` | [`RegisterCallbackRequest`](../../doc/models/register-callback-request.md) | Body, Required | Request to register a callback. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`CallbackActionResult`](../../doc/models/callback-action-result.md).

## Example Usage

```php
$aname = 'TestAccount-2';

$body = RegisterCallbackRequestBuilder::init(
    'CarrierService',
    'https://mock.thingspace.verizon.com/webhook'
)->build();

$apiResponse = $connectivityCallbacksController->registerCallback(
    $aname,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "accountName": "122333444-00002",
  "serviceName": "CarrierService"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Deregister Callback

Stops ThingSpace from sending callback messages for the specified account and service.

```php
function deregisterCallback(string $aname, string $sname): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `aname` | `string` | Template, Required | Account name. |
| `sname` | `string` | Template, Required | Service name. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`CallbackActionResult`](../../doc/models/callback-action-result.md).

## Example Usage

```php
$aname = '1223334444-00001';

$sname = 'CarrierService';

$apiResponse = $connectivityCallbacksController->deregisterCallback(
    $aname,
    $sname
);
```

## Example Response *(as JSON)*

```json
{
  "accountName": "1223334444-00001",
  "serviceName": "CarrierService"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |

