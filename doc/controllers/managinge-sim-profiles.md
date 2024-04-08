# Managinge SIM Profiles

```php
$managingeSIMProfilesController = $client->getManagingeSIMProfilesController();
```

## Class Name

`ManagingeSIMProfilesController`

## Methods

* [Activate a Device Profile](../../doc/controllers/managinge-sim-profiles.md#activate-a-device-profile)
* [Enable a Device Profile](../../doc/controllers/managinge-sim-profiles.md#enable-a-device-profile)
* [Deactivate a Device Profile](../../doc/controllers/managinge-sim-profiles.md#deactivate-a-device-profile)
* [Enable a Device Profile for Download](../../doc/controllers/managinge-sim-profiles.md#enable-a-device-profile-for-download)
* [Download a Device Profile](../../doc/controllers/managinge-sim-profiles.md#download-a-device-profile)
* [Delete a Device Profile](../../doc/controllers/managinge-sim-profiles.md#delete-a-device-profile)


# Activate a Device Profile

Activate a device with either a lead or local profile.

```php
function activateADeviceProfile(GIOProfileRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`GIOProfileRequest`](../../doc/models/gio-profile-request.md) | Body, Required | Device Profile Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`GIORequestResponse`](../../doc/models/gio-request-response.md).

## Example Usage

```php
$body = GIOProfileRequestBuilder::init(
    [
        GIODeviceListBuilder::init()->build()
    ],
    '0000123456-00001'
)
    ->mdnZipCode('12345')
    ->servicePlan('service plan name')
    ->build();

$apiResponse = $managingESIMProfilesController->activateADeviceProfile($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`GIORestErrorResponseException`](../../doc/models/gio-rest-error-response-exception.md) |


# Enable a Device Profile

Enable a device lead or local profile.

```php
function enableADeviceProfile(DeviceProfileRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeviceProfileRequest`](../../doc/models/device-profile-request.md) | Body, Required | Device Profile Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`GIORequestResponse`](../../doc/models/gio-request-response.md).

## Example Usage

```php
$body = DeviceProfileRequestBuilder::init()
    ->accountName('0000123456-00001')
    ->servicePlan('service plan name')
    ->build();

$apiResponse = $managingESIMProfilesController->enableADeviceProfile($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`GIORestErrorResponseException`](../../doc/models/gio-rest-error-response-exception.md) |


# Deactivate a Device Profile

Deactivate the lead or local profile. **Note:** to reactivate the profile, use the **Activate** endpoint above.

```php
function deactivateADeviceProfile(GIODeactivateDeviceProfileRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`GIODeactivateDeviceProfileRequest`](../../doc/models/gio-deactivate-device-profile-request.md) | Body, Required | Device Profile Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`GIORequestResponse`](../../doc/models/gio-request-response.md).

## Example Usage

```php
$body = GIODeactivateDeviceProfileRequestBuilder::init()
    ->accountName('0000123456-00001')
    ->servicePlan('service plan name')
    ->etfWaiver(false)
    ->reasonCode('FF')
    ->build();

$apiResponse = $managingESIMProfilesController->deactivateADeviceProfile($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`GIORestErrorResponseException`](../../doc/models/gio-rest-error-response-exception.md) |


# Enable a Device Profile for Download

Enable the Global IoT Orchestration device profile for download.

```php
function enableADeviceProfileForDownload(DeviceProfileRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeviceProfileRequest`](../../doc/models/device-profile-request.md) | Body, Required | Device Profile Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`GIORequestResponse`](../../doc/models/gio-request-response.md).

## Example Usage

```php
$body = DeviceProfileRequestBuilder::init()
    ->accountName('0000123456-00001')
    ->servicePlan('service plan name')
    ->build();

$apiResponse = $managingESIMProfilesController->enableADeviceProfileForDownload($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`GIORestErrorResponseException`](../../doc/models/gio-rest-error-response-exception.md) |


# Download a Device Profile

Download a Global IoT Orchestration device profile.

```php
function downloadADeviceProfile(DeviceProfileRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeviceProfileRequest`](../../doc/models/device-profile-request.md) | Body, Required | Device Profile Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`GIORequestResponse`](../../doc/models/gio-request-response.md).

## Example Usage

```php
$body = DeviceProfileRequestBuilder::init()
    ->accountName('0000123456-00001')
    ->servicePlan('service plan name')
    ->build();

$apiResponse = $managingESIMProfilesController->downloadADeviceProfile($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`GIORestErrorResponseException`](../../doc/models/gio-rest-error-response-exception.md) |


# Delete a Device Profile

Delete a device profile for Global IoT Orchestration. **Note:** the profile must be deactivated first!

```php
function deleteADeviceProfile(DeviceProfileRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeviceProfileRequest`](../../doc/models/device-profile-request.md) | Body, Required | Device Profile Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`GIORequestResponse`](../../doc/models/gio-request-response.md).

## Example Usage

```php
$body = DeviceProfileRequestBuilder::init()
    ->accountName('0000123456-00001')
    ->servicePlan('service plan name')
    ->build();

$apiResponse = $managingESIMProfilesController->deleteADeviceProfile($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`GIORestErrorResponseException`](../../doc/models/gio-rest-error-response-exception.md) |

