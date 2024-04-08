# Firmware V1

```php
$firmwareV1Controller = $client->getFirmwareV1Controller();
```

## Class Name

`FirmwareV1Controller`

## Methods

* [List Available Firmware](../../doc/controllers/firmware-v1.md#list-available-firmware)
* [Schedule Firmware Upgrade](../../doc/controllers/firmware-v1.md#schedule-firmware-upgrade)
* [List Firmware Upgrade Details](../../doc/controllers/firmware-v1.md#list-firmware-upgrade-details)
* [Update Firmware Upgrade Devices](../../doc/controllers/firmware-v1.md#update-firmware-upgrade-devices)
* [Cancel Scheduled Firmware Upgrade](../../doc/controllers/firmware-v1.md#cancel-scheduled-firmware-upgrade)


# List Available Firmware

Lists all device firmware images available for an account, based on the devices registered to that account.

```php
function listAvailableFirmware(string $account): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier in "##########-#####". |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`Firmware[]`](../../doc/models/firmware.md).

## Example Usage

```php
$account = '0242078689-00001';

$apiResponse = $firmwareV1Controller->listAvailableFirmware($account);
```

## Example Response *(as JSON)*

```json
[
  {
    "firmwareName": "FOTA_Verizon_Model-A_01To02_HF",
    "participantName": "0402196254-00001",
    "launchDate": "2018-04-01T16:03:00.000Z",
    "releaseNote": "",
    "model": "Model-A",
    "make": "Verizon",
    "fromVersion": "VerizonFirmwareVersion-01",
    "toVersion": "VerizonFirmwareVersion-02"
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV1ResultException`](../../doc/models/fota-v1-result-exception.md) |


# Schedule Firmware Upgrade

Schedules a firmware upgrade for devices.

```php
function scheduleFirmwareUpgrade(FirmwareUpgradeRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`FirmwareUpgradeRequest`](../../doc/models/firmware-upgrade-request.md) | Body, Required | Details of the firmware upgrade request. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`FirmwareUpgrade`](../../doc/models/firmware-upgrade.md).

## Example Usage

```php
$body = FirmwareUpgradeRequestBuilder::init(
    '0402196254-00001',
    'FOTA_Verizon_Model-A_01To02_HF',
    'VerizonFirmwareVersion-02',
    DateTimeHelper::fromRfc3339DateTimeRequired('2018-04-01T16:03:00.000Z'),
    [
        '990003425730535',
        '990000473475989'
    ]
)->build();

$apiResponse = $firmwareV1Controller->scheduleFirmwareUpgrade($body);
```

## Example Response *(as JSON)*

```json
{
  "id": "e3a8d88a-04c6-4ef3-b039-89b62f91e962",
  "accountName": "0242078689-00001",
  "firmwareName": "FOTA_Verizon_Model-A_01To02_HF",
  "firmwareTo": "VerizonFirmwareVersion-02",
  "startDate": "2018-04-01",
  "status": "RequestPending",
  "deviceList": [
    {
      "deviceId": "990003425730535",
      "status": "RequestPending"
    },
    {
      "deviceId": "990000473475989",
      "status": "RequestPending"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV1ResultException`](../../doc/models/fota-v1-result-exception.md) |


# List Firmware Upgrade Details

Returns information about a specified upgrade, include the target date of the upgrade, the list of devices in the upgrade, and the status of the upgrade for each device.

```php
function listFirmwareUpgradeDetails(string $account, string $upgradeId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier in "##########-#####". |
| `upgradeId` | `string` | Template, Required | The UUID of the upgrade, returned by POST /upgrades when the upgrade was scheduled. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`FirmwareUpgrade`](../../doc/models/firmware-upgrade.md).

## Example Usage

```php
$account = '0242078689-00001';

$upgradeId = 'e3a8d88a-04c6-4ef3-b039-89b62f91e962';

$apiResponse = $firmwareV1Controller->listFirmwareUpgradeDetails(
    $account,
    $upgradeId
);
```

## Example Response *(as JSON)*

```json
{
  "id": "60b5d639-ccdc-4db8-8824-069bd94c95bf",
  "accountName": "0402196254-00001",
  "firmwareName": "FOTA_Verizon_Model-A_01To02_HF",
  "firmwareTo": "VerizonFirmwareVersion-02",
  "startDate": "2018-04-01",
  "status": "Queued",
  "deviceList": [
    {
      "deviceId": "900000000000002",
      "status": "Device Accepted",
      "resultReason": "success"
    },
    {
      "deviceId": "900000000000003",
      "status": "Device Accepted",
      "resultReason": "success"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV1ResultException`](../../doc/models/fota-v1-result-exception.md) |


# Update Firmware Upgrade Devices

Add or remove devices from a scheduled upgrade.

```php
function updateFirmwareUpgradeDevices(
    string $account,
    string $upgradeId,
    FirmwareUpgradeChangeRequest $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier in "##########-#####". |
| `upgradeId` | `string` | Template, Required | The UUID of the upgrade, returned by POST /upgrades when the upgrade was scheduled. |
| `body` | [`FirmwareUpgradeChangeRequest`](../../doc/models/firmware-upgrade-change-request.md) | Body, Required | List of devices to add or remove. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`FirmwareUpgradeChangeResult`](../../doc/models/firmware-upgrade-change-result.md).

## Example Usage

```php
$account = '0242078689-00001';

$upgradeId = 'e3a8d88a-04c6-4ef3-b039-89b62f91e962';

$body = FirmwareUpgradeChangeRequestBuilder::init(
    FirmwareTypeListEnum::APPEND,
    [
        '15-digit IMEI',
        '15-digit IMEI'
    ]
)->build();

$apiResponse = $firmwareV1Controller->updateFirmwareUpgradeDevices(
    $account,
    $upgradeId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "accountName": "0000123456-00001",
  "id": "60b5d639-ccdc-4db8-8824-069bd94c95bf",
  "deviceList": [
    {
      "deviceId": "15-digit IMEI",
      "status": "AddDeviceSucceed",
      "Reason": "Device added Successfully"
    },
    {
      "deviceId": "15-digit IMEI",
      "status": "AddDeviceSucceed",
      "Reason": "Device added Successfully"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV1ResultException`](../../doc/models/fota-v1-result-exception.md) |


# Cancel Scheduled Firmware Upgrade

Cancel a scheduled firmware upgrade.

```php
function cancelScheduledFirmwareUpgrade(string $account, string $upgradeId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier in "##########-#####". |
| `upgradeId` | `string` | Template, Required | The UUID of the scheduled upgrade that you want to cancel. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`FotaV1SuccessResult`](../../doc/models/fota-v1-success-result.md).

## Example Usage

```php
$account = '0242078689-00001';

$upgradeId = 'e3a8d88a-04c6-4ef3-b039-89b62f91e962';

$apiResponse = $firmwareV1Controller->cancelScheduledFirmwareUpgrade(
    $account,
    $upgradeId
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

