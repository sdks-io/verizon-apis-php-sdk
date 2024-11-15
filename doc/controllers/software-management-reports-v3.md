# Software Management Reports V3

```php
$softwareManagementReportsV3Controller = $client->getSoftwareManagementReportsV3Controller();
```

## Class Name

`SoftwareManagementReportsV3Controller`

## Methods

* [Get Campaign History by Status](../../doc/controllers/software-management-reports-v3.md#get-campaign-history-by-status)
* [Get Device Firmware Upgrade History](../../doc/controllers/software-management-reports-v3.md#get-device-firmware-upgrade-history)
* [Get Campaign Device Status](../../doc/controllers/software-management-reports-v3.md#get-campaign-device-status)


# Get Campaign History by Status

Retrieve a list of campaigns for an account that have a specified campaign status.

```php
function getCampaignHistoryByStatus(
    string $acc,
    string $campaignStatus,
    ?string $lastSeenCampaignId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acc` | `string` | Template, Required | Account identifier. |
| `campaignStatus` | [`string(CampaignStatusEnum)`](../../doc/models/campaign-status-enum.md) | Query, Required | Campaign status. |
| `lastSeenCampaignId` | `?string` | Query, Optional | Last seen campaign Id. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`V3CampaignHistory`](../../doc/models/v3-campaign-history.md).

## Example Usage

```php
$acc = '0000123456-00001';

$campaignStatus = CampaignStatusEnum::CAMPAIGNREQUESTPENDING;

$lastSeenCampaignId = '60b5d639-ccdc-4db8-8824-069bd94c95bf';

$apiResponse = $softwareManagementReportsV3Controller->getCampaignHistoryByStatus(
    $acc,
    $campaignStatus,
    $lastSeenCampaignId
);
```

## Example Response *(as JSON)*

```json
{
  "hasMoreData": true,
  "lastSeenCampaignId": "60b5d639-ccdc-4db8-8824-069bd94c95bf",
  "campaignList": [
    {
      "accountName": "0000123456-00001",
      "id": "60b5d639-ccdc-4db8-8824-069bd94c95bf",
      "campaignName": "FOTA_Verizon_Upgrade",
      "firmwareName": "FOTA_Verizon_Model-A_02To03_HF",
      "firmwareFrom": "FOTA_Verizon_Model-A_00To01_HF",
      "firmwareTo": "FOTA_Verizon_Model-A_02To03_HF",
      "make": "Verizon",
      "model": "Model-A",
      "status": "CampaignEnded",
      "startDate": "2020-08-21",
      "endDate": "2020-08-22",
      "campaignTimeWindowList": [
        {
          "startTime": 20,
          "endTime": 21
        }
      ]
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV3ResultException`](../../doc/models/fota-v3-result-exception.md) |


# Get Device Firmware Upgrade History

Retrieve campaign history for a specific device.

```php
function getDeviceFirmwareUpgradeHistory(string $acc, string $deviceId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acc` | `string` | Template, Required | Account identifier. |
| `deviceId` | `string` | Template, Required | Device IMEI identifier. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceFirmwareUpgrade[]`](../../doc/models/device-firmware-upgrade.md).

## Example Usage

```php
$acc = '0000123456-00001';

$deviceId = '15-digit IMEI';

$apiResponse = $softwareManagementReportsV3Controller->getDeviceFirmwareUpgradeHistory(
    $acc,
    $deviceId
);
```

## Example Response *(as JSON)*

```json
[
  {
    "deviceId": "15-digit IMEI",
    "campaignId": "252d7ffc-7e35-11ec-931d-76f56843c393",
    "accountName": "0000123456-00001",
    "firmwareName": "SEQUANSCommunications_GM01Q_SR1.2.0.0-10657_SR1.2.0.0-10512",
    "firmwareFrom": "SR1.2.0.0-10657",
    "firmwareTo": "SR1.2.0.0-10512",
    "startDate": "2022-01-25",
    "reportUpdatedTime": "2022-01-26 03:45:01.608 +0000 UTC",
    "status": "UpgradeSuccess",
    "reason": "Upgrade completed successfully"
  },
  {
    "deviceId": "15-digit IMEI",
    "campaignId": "8f5e9a4a-6ce2-11ec-ace7-3ea293843397",
    "accountName": "0000123456-00001",
    "firmwareName": "SEQUANSCommunications_GM01Q_SR1.2.0.0-10512_SR1.2.0.0-10657",
    "firmwareFrom": "SR1.2.0.0-10512",
    "firmwareTo": "SR1.2.0.0-10657",
    "startDate": "2022-01-03",
    "reportUpdatedTime": "2022-01-04 02:45:00.67 +0000 UTC",
    "status": "UpgradeSuccess",
    "reason": "Upgrade completed successfully"
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV3ResultException`](../../doc/models/fota-v3-result-exception.md) |


# Get Campaign Device Status

Retrieve a list of all devices in a campaign and the status of each device.

```php
function getCampaignDeviceStatus(string $acc, string $campaignId, ?string $lastSeenDeviceId = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acc` | `string` | Template, Required | Account identifier. |
| `campaignId` | `string` | Template, Required | Campaign identifier. |
| `lastSeenDeviceId` | `?string` | Query, Optional | Last seen device identifier. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`V3CampaignDevice`](../../doc/models/v3-campaign-device.md).

## Example Usage

```php
$acc = '0000123456-00001';

$campaignId = 'f858b8c4-2153-11ec-8c44-aeb16d1aa652';

$lastSeenDeviceId = '15-digit IMEI';

$apiResponse = $softwareManagementReportsV3Controller->getCampaignDeviceStatus(
    $acc,
    $campaignId,
    $lastSeenDeviceId
);
```

## Example Response *(as JSON)*

```json
{
  "totalDevice": 2689,
  "hasMoreData": true,
  "lastSeenDeviceId": "15-digit IMEI",
  "maxPageSize": 1000,
  "deviceList": [
    {
      "deviceId": "15-digit IMEI",
      "status": "UpgradePending",
      "resultReason": "Upgrade pending, the device upgrade is estimated to be scheduled for 06 Oct 22 18:05 UTC",
      "updatedTime": "2022-08-05T21:05:27.129Z",
      "recentAttemptTime": "2022-10-05T21:05:01.19Z",
      "nextAttemptTime": "2022-10-06T18:35:00Z"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV3ResultException`](../../doc/models/fota-v3-result-exception.md) |

