# Software Management Callbacks V3

```php
$softwareManagementCallbacksV3Controller = $client->getSoftwareManagementCallbacksV3Controller();
```

## Class Name

`SoftwareManagementCallbacksV3Controller`

## Methods

* [List Registered Callbacks](../../doc/controllers/software-management-callbacks-v3.md#list-registered-callbacks)
* [Update Callback](../../doc/controllers/software-management-callbacks-v3.md#update-callback)
* [Register Callback](../../doc/controllers/software-management-callbacks-v3.md#register-callback)
* [Deregister Callback](../../doc/controllers/software-management-callbacks-v3.md#deregister-callback)


# List Registered Callbacks

This endpoint allows user to get the registered callback information.

```php
function listRegisteredCallbacks(string $acc): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acc` | `string` | Template, Required | Account identifier. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`FotaV3CallbackSummary`](../../doc/models/fota-v3-callback-summary.md).

## Example Usage

```php
$acc = '0000123456-00001';

$apiResponse = $softwareManagementCallbacksV3Controller->listRegisteredCallbacks($acc);
```

## Example Response *(as JSON)*

```json
{
  "url": "http://10.120.102.183:50559/CallbackListener/FirmwareServiceMessages.asmx"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV3ResultException`](../../doc/models/fota-v3-result-exception.md) |


# Update Callback

This endpoint allows the user to update the HTTPS callback address.

```php
function updateCallback(string $acc, FotaV3CallbackRegistrationRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acc` | `string` | Template, Required | Account identifier. |
| `body` | [`FotaV3CallbackRegistrationRequest`](../../doc/models/fota-v3-callback-registration-request.md) | Body, Required | Callback URL registration. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`FotaV3CallbackRegistrationResult`](../../doc/models/fota-v3-callback-registration-result.md).

## Example Usage

```php
$acc = '0000123456-00001';

$body = FotaV3CallbackRegistrationRequestBuilder::init()
    ->url('https://255.255.11.135:50559/CallbackListener/FirmwareServiceMessages.asmx')
    ->build();

$apiResponse = $softwareManagementCallbacksV3Controller->updateCallback(
    $acc,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "url": "https://255.255.11.135:50559/CallbackListener/FirmwareServiceMessages.asmx"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV3ResultException`](../../doc/models/fota-v3-result-exception.md) |


# Register Callback

This endpoint allows the user to create the HTTPS callback address.

```php
function registerCallback(string $acc, FotaV3CallbackRegistrationRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acc` | `string` | Template, Required | Account identifier. |
| `body` | [`FotaV3CallbackRegistrationRequest`](../../doc/models/fota-v3-callback-registration-request.md) | Body, Required | Callback URL registration. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`FotaV3CallbackRegistrationResult`](../../doc/models/fota-v3-callback-registration-result.md).

## Example Usage

```php
$acc = '0000123456-00001';

$body = FotaV3CallbackRegistrationRequestBuilder::init()
    ->url('https://255.255.11.135:50559/CallbackListener/FirmwareServiceMessages.asmx')
    ->build();

$apiResponse = $softwareManagementCallbacksV3Controller->registerCallback(
    $acc,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "url": "https://255.255.11.135:50559/CallbackListener/FirmwareServiceMessages.asmx"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV3ResultException`](../../doc/models/fota-v3-result-exception.md) |


# Deregister Callback

This endpoint allows user to delete a previously registered callback URL.

```php
function deregisterCallback(string $acc): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acc` | `string` | Template, Required | Account identifier. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`FotaV3SuccessResult`](../../doc/models/fota-v3-success-result.md).

## Example Usage

```php
$acc = '0000123456-00001';

$apiResponse = $softwareManagementCallbacksV3Controller->deregisterCallback($acc);
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
| 400 | Unexpected error. | [`FotaV3ResultException`](../../doc/models/fota-v3-result-exception.md) |

