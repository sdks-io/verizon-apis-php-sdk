# Firmware V3

```php
$firmwareV3Controller = $client->getFirmwareV3Controller();
```

## Class Name

`FirmwareV3Controller`

## Methods

* [List Available Firmware](../../doc/controllers/firmware-v3.md#list-available-firmware)
* [Synchronize Device Firmware](../../doc/controllers/firmware-v3.md#synchronize-device-firmware)
* [Report Device Firmware](../../doc/controllers/firmware-v3.md#report-device-firmware)


# List Available Firmware

This endpoint allows user to list the firmware of an account.

```php
function listAvailableFirmware(string $acc, string $protocol): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acc` | `string` | Template, Required | Account identifier. |
| `protocol` | [`string(FirmwareProtocolEnum)`](../../doc/models/firmware-protocol-enum.md) | Query, Required | Filter to retrieve a specific protocol type used. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`FirmwarePackage[]`](../../doc/models/firmware-package.md).

## Example Usage

```php
$acc = '0000123456-00001';

$protocol = FirmwareProtocolEnum::LW_M2M;

$apiResponse = $firmwareV3Controller->listAvailableFirmware(
    $acc,
    $protocol
);
```

## Example Response *(as JSON)*

```json
[
  {
    "firmwareName": "VerizonSmartCommunities_LCO-277C4N_BG96MAR04A04M1G_BG96MAR04A04M1G_BETA0130B",
    "firmwareFrom": "BG96MAR04A04M1G",
    "firmwareTo": "BG96MAR04A04M1G_BETA0130B",
    "launchDate": "2012-04-23T18:25:43.511Z",
    "releaseNote": "",
    "model": "LCO-277C4N",
    "make": "Verizon Smart Communities",
    "protocol": "LWM2M"
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV3ResultException`](../../doc/models/fota-v3-result-exception.md) |


# Synchronize Device Firmware

Synchronize ThingSpace with the FOTA server for up to 100 devices.

```php
function synchronizeDeviceFirmware(string $acc, FirmwareIMEI $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acc` | `string` | Template, Required | Account identifier. |
| `body` | [`FirmwareIMEI`](../../doc/models/firmware-imei.md) | Body, Required | DeviceIds to get firmware info synchronously. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceFirmwareList`](../../doc/models/device-firmware-list.md).

## Example Usage

```php
$acc = '0000123456-00001';

$body = FirmwareIMEIBuilder::init(
    [
        '15-digit IMEI'
    ]
)->build();

$apiResponse = $firmwareV3Controller->synchronizeDeviceFirmware(
    $acc,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "accountName": "0000123456-00001",
  "deviceFirmwarVersionList": [
    {
      "deviceId": "15-digit IMEI",
      "status": "FirmwareVersionUpdateSuccess",
      "firmwareVersion": "SR1.2.0.0-10657"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV3ResultException`](../../doc/models/fota-v3-result-exception.md) |


# Report Device Firmware

Ask a device to report its firmware version asynchronously.

```php
function reportDeviceFirmware(string $acc, string $deviceId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acc` | `string` | Template, Required | Account identifier. |
| `deviceId` | `string` | Template, Required | Device identifier. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceFirmwareVersionUpdateResult`](../../doc/models/device-firmware-version-update-result.md).

## Example Usage

```php
$acc = '0000123456-00001';

$deviceId = '15-digit IMEI';

$apiResponse = $firmwareV3Controller->reportDeviceFirmware(
    $acc,
    $deviceId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV3ResultException`](../../doc/models/fota-v3-result-exception.md) |

