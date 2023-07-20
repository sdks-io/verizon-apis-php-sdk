# Software Management Callbacks V1

```php
$softwareManagementCallbacksV1Controller = $client->getSoftwareManagementCallbacksV1Controller();
```

## Class Name

`SoftwareManagementCallbacksV1Controller`

## Methods

* [List Registered Callbacks](../../doc/controllers/software-management-callbacks-v1.md#list-registered-callbacks)
* [Register Callback](../../doc/controllers/software-management-callbacks-v1.md#register-callback)
* [Deregister Callback](../../doc/controllers/software-management-callbacks-v1.md#deregister-callback)


# List Registered Callbacks

Returns the name and endpoint URL of the callback listening services registered for a given account.

```php
function listRegisteredCallbacks(string $account): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier in "##########-#####". |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`RegisteredCallbacks[]`](../../doc/models/registered-callbacks.md).

## Example Usage

```php
$account = '0242078689-00001';

$apiResponse = $softwareManagementCallbacksV1Controller->listRegisteredCallbacks($account);
```

## Example Response *(as JSON)*

```json
[
  {
    "aname": "0252012345-00001",
    "name": "Fota",
    "url": "http://10.120.102.183:50559/CallbackListener/FirmwareServiceMessages.asmx"
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV1ResultException`](../../doc/models/fota-v1-result-exception.md) |


# Register Callback

Registers a URL to receive RESTful messages from a callback service when new firmware versions are available and when upgrades start and finish.

```php
function registerCallback(string $account, FotaV1CallbackRegistrationRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier in "##########-#####". |
| `body` | [`FotaV1CallbackRegistrationRequest`](../../doc/models/fota-v1-callback-registration-request.md) | Body, Required | Callback details. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`FotaV1CallbackRegistrationResult`](../../doc/models/fota-v1-callback-registration-result.md).

## Example Usage

```php
$account = '0242078689-00001';

$body = FotaV1CallbackRegistrationRequestBuilder::init(
    'Fota',
    'https://10.120.102.183:50559/CallbackListener/FirmwareServiceMessages.asmx'
)->build();

$apiResponse = $softwareManagementCallbacksV1Controller->registerCallback(
    $account,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "accountName": "0204563412-00001",
  "serviceName": "Fota"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV1ResultException`](../../doc/models/fota-v1-result-exception.md) |


# Deregister Callback

Deregisters the callback endpoint and stops ThingSpace from sending FOTA callback messages for the specified account.

```php
function deregisterCallback(string $account, string $service): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier in "##########-#####". |
| `service` | [`string(CallbackServiceEnum)`](../../doc/models/callback-service-enum.md) | Template, Required | Callback type. Must be 'Fota' for Software Management Services API. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`FotaV1SuccessResult`](../../doc/models/fota-v1-success-result.md).

## Example Usage

```php
$account = '0242078689-00001';

$service = CallbackServiceEnum::FOTA;

$apiResponse = $softwareManagementCallbacksV1Controller->deregisterCallback(
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
| 400 | Unexpected error. | [`FotaV1ResultException`](../../doc/models/fota-v1-result-exception.md) |

