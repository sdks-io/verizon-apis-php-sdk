# Software Management Reports V1

```php
$softwareManagementReportsV1Controller = $client->getSoftwareManagementReportsV1Controller();
```

## Class Name

`SoftwareManagementReportsV1Controller`

## Methods

* [List Account Devices](../../doc/controllers/software-management-reports-v1.md#list-account-devices)
* [List Upgrades for Specified Status](../../doc/controllers/software-management-reports-v1.md#list-upgrades-for-specified-status)
* [Get Device Firmware Upgrade History](../../doc/controllers/software-management-reports-v1.md#get-device-firmware-upgrade-history)


# List Account Devices

Returns an array of all devices in the specified account. Each device object includes information needed for managing firmware, including the device make and model, MDN and IMEI, and current firmware version.

```php
function listAccountDevices(string $account, string $startIndex): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier in "##########-#####". |
| `startIndex` | `string` | Template, Required | Only return devices with IMEIs larger than this value. Use 0 for the first request. If `hasMoreData`=true in the response, use the `lastSeenDeviceId` value from the response as the startIndex in the next request. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceListQueryResult`](../../doc/models/device-list-query-result.md).

## Example Usage

```php
$account = '0242078689-00001';

$startIndex = 'startIndex4';

$apiResponse = $softwareManagementReportsV1Controller->listAccountDevices(
    $account,
    $startIndex
);
```

## Example Response *(as JSON)*

```json
{
  "accountName": "0242078698-00001",
  "hasMoreData": true,
  "lastSeenDeviceId": 900000000001000,
  "deviceList": [
    {
      "deviceId": "900000000000001",
      "mdn": "0000040881",
      "model": "Model-A",
      "make": "Verizon",
      "firmware": "VerizonFirmwareVersion-01",
      "fotaEligible": true,
      "licenseAssigned": true,
      "upgradeTime": "2021-06-03 00:03:56.079 +0000 UTC"
    },
    {
      "deviceId": "900000000000999",
      "mdn": "0000041879",
      "model": "Model-A",
      "make": "Verizon",
      "firmware": "VerizonFirmwareVersion-01",
      "fotaEligible": true,
      "licenseAssigned": true,
      "upgradeTime": "2021-06-03 00:03:56.079 +0000 UTC"
    },
    {
      "deviceId": "900000000001000",
      "mdn": "0000041880",
      "model": "Model-A",
      "make": "Verizon",
      "firmware": "VerizonFirmwareVersion-01",
      "fotaEligible": true,
      "licenseAssigned": true,
      "upgradeTime": "2021-06-03 00:03:56.079 +0000 UTC"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV1ResultException`](../../doc/models/fota-v1-result-exception.md) |


# List Upgrades for Specified Status

Returns a list of all upgrades with a specified status.

```php
function listUpgradesForSpecifiedStatus(string $account, string $upgradeStatus, string $startIndex): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier in "##########-#####". |
| `upgradeStatus` | [`string(UpgradeStatusEnum)`](../../doc/models/upgrade-status-enum.md) | Template, Required | The status of the upgrades that you want to retrieve. |
| `startIndex` | `string` | Template, Required | The zero-based number of the first record to return. Set startIndex=0 for the first request. If `hasMoreFlag`=true in the response, use the `lastSeenUpgradeId` value from the response as the startIndex in the next request. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`UpgradeListQueryResult`](../../doc/models/upgrade-list-query-result.md).

## Example Usage

```php
$account = '0242078689-00001';

$upgradeStatus = UpgradeStatusEnum::REQUESTPENDING;

$startIndex = 'startIndex4';

$apiResponse = $softwareManagementReportsV1Controller->listUpgradesForSpecifiedStatus(
    $account,
    $upgradeStatus,
    $startIndex
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV1ResultException`](../../doc/models/fota-v1-result-exception.md) |


# Get Device Firmware Upgrade History

Returns the upgrade history of the specified device from the previous six months.

```php
function getDeviceFirmwareUpgradeHistory(string $account, string $deviceId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier in "##########-#####". |
| `deviceId` | `string` | Template, Required | The IMEI of the device. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceUpgradeHistory[]`](../../doc/models/device-upgrade-history.md).

## Example Usage

```php
$account = '0242078689-00001';

$deviceId = '900000000000001';

$apiResponse = $softwareManagementReportsV1Controller->getDeviceFirmwareUpgradeHistory(
    $account,
    $deviceId
);
```

## Example Response *(as JSON)*

```json
[
  {
    "deviceId": "900000000000001",
    "id": "f574fbb8-b291-4cc7-bf22-4e3f27977558",
    "accountName": "0242078689-00001",
    "firmwareFrom": "VerizonFirmwareVersion-02",
    "firmwareTo": "VerizonFirmwareVersion-03",
    "startDate": "2018-03-05",
    "upgradeStartTime": "2018-03-05T19:07:21Z",
    "status": "UpgradeSuccess",
    "reason": "success"
  },
  {
    "deviceId": "900000000000001",
    "id": "5edade25-c06c-4b13-ba2a-fbb9ada93579",
    "accountName": "0242078689-00001",
    "firmwareFrom": "VerizonFirmwareVersion-01",
    "firmwareTo": "VerizonFirmwareVersion-02",
    "startDate": "2018-02-20",
    "upgradeStartTime": "2018-02-20T00:03:19Z",
    "status": "UpgradeSuccess",
    "reason": "success"
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV1ResultException`](../../doc/models/fota-v1-result-exception.md) |

