# Software Management Reports V2

```php
$softwareManagementReportsV2Controller = $client->getSoftwareManagementReportsV2Controller();
```

## Class Name

`SoftwareManagementReportsV2Controller`

## Methods

* [List Available Software](../../doc/controllers/software-management-reports-v2.md#list-available-software)
* [List Account Devices](../../doc/controllers/software-management-reports-v2.md#list-account-devices)
* [Get Device Firmware Upgrade History](../../doc/controllers/software-management-reports-v2.md#get-device-firmware-upgrade-history)
* [Get Campaign History by Status](../../doc/controllers/software-management-reports-v2.md#get-campaign-history-by-status)
* [Get Campaign Device Status](../../doc/controllers/software-management-reports-v2.md#get-campaign-device-status)


# List Available Software

This endpoint allows user to list a certain type of software of an account.

```php
function listAvailableSoftware(string $account, ?string $distributionType = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier. |
| `distributionType` | `?string` | Query, Optional | Filter distributionType to get specific type of software. Value is LWM2M, OMD-DM or HTTP. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`SoftwarePackage[]`](../../doc/models/software-package.md).

## Example Usage

```php
$account = '0000123456-00001';

$distributionType = 'HTTP';

$apiResponse = $softwareManagementReportsV2Controller->listAvailableSoftware(
    $account,
    $distributionType
);
```

## Example Response *(as JSON)*

```json
[
  {
    "softwareName": "FOTA_Verizon_Model-A_02To03_HF",
    "launchDate": "2020-08-31",
    "releaseNote": "",
    "model": "Model-A",
    "make": "Verizon",
    "distributionType": "HTTP",
    "devicePlatformId": "IoT"
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV2ResultException`](../../doc/models/fota-v2-result-exception.md) |


# List Account Devices

The device endpoint gets devices information of an account.

```php
function listAccountDevices(
    string $account,
    ?string $lastSeenDeviceId = null,
    ?string $distributionType = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier. |
| `lastSeenDeviceId` | `?string` | Query, Optional | Last seen device identifier. |
| `distributionType` | `?string` | Query, Optional | Filter distributionType to get specific type of devices. Values is LWM2M, OMD-DM or HTTP. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`V2AccountDeviceList`](../../doc/models/v2-account-device-list.md).

## Example Usage

```php
$account = '0000123456-00001';

$lastSeenDeviceId = '15-digit IMEI';

$distributionType = 'HTTP';

$apiResponse = $softwareManagementReportsV2Controller->listAccountDevices(
    $account,
    $lastSeenDeviceId,
    $distributionType
);
```

## Example Response *(as JSON)*

```json
{
  "accountName": "0000123456-00001",
  "hasMoreData": true,
  "lastSeenDeviceId": "15-digit IMEI",
  "maxPageSize": 1000,
  "deviceList": [
    {
      "deviceId": "15-digit IMEI",
      "mdn": "10-digit MDN",
      "model": "Model-A",
      "make": "Verizon",
      "fotaEligible": true,
      "appFotaEligible": true,
      "licenseAssigned": true,
      "distributionType": "HTTP",
      "softwareList": [
        {
          "name": "FOTA_Verizon_Model-A_02To03_HF",
          "version": "3",
          "upgradeTime": "2020-09-08T19:00:51.541Z"
        }
      ],
      "createTime": "2021-06-03 00:03:56.079 +0000 UTC",
      "upgradeTime": "2021-06-03 00:03:56.079 +0000 UTC",
      "updateTime": "2021-06-03 00:03:56.079 +0000 UTC",
      "refreshTime": "2021-06-03 00:03:56.079 +0000 UTC"
    },
    {
      "deviceId": "15-digit IMEI",
      "mdn": "10-digit MDN",
      "model": "Model-A",
      "make": "Verizon",
      "fotaEligible": true,
      "appFotaEligible": true,
      "licenseAssigned": true,
      "distributionType": "HTTP",
      "softwareList": [
        {
          "name": "FOTA_Verizon_Model-A_02To03_HF",
          "version": "3",
          "upgradeTime": "2020-09-08T19:00:51.541Z"
        }
      ],
      "createTime": "2021-06-03 00:03:56.079 +0000 UTC",
      "upgradeTime": "2021-06-03 00:03:56.079 +0000 UTC",
      "updateTime": "2021-06-03 00:03:56.079 +0000 UTC",
      "refreshTime": "2021-06-03 00:03:56.079 +0000 UTC"
    },
    {
      "deviceId": "15-digit IMEI",
      "mdn": "10-digit MDN",
      "model": "Model-A",
      "make": "Verizon",
      "fotaEligible": true,
      "appFotaEligible": true,
      "licenseAssigned": true,
      "distributionType": "HTTP",
      "softwareList": [
        {
          "name": "FOTA_Verizon_Model-A_02To03_HF",
          "version": "3",
          "upgradeTime": "2020-09-08T19:00:51.541Z"
        }
      ],
      "createTime": "2021-06-03 00:03:56.079 +0000 UTC",
      "upgradeTime": "2021-06-03 00:03:56.079 +0000 UTC",
      "updateTime": "2021-06-03 00:03:56.079 +0000 UTC",
      "refreshTime": "2021-06-03 00:03:56.079 +0000 UTC"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV2ResultException`](../../doc/models/fota-v2-result-exception.md) |


# Get Device Firmware Upgrade History

The endpoint allows user to get software upgrade history of a device based on device IMEI.

```php
function getDeviceFirmwareUpgradeHistory(string $account, string $deviceId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier. |
| `deviceId` | `string` | Template, Required | Device IMEI identifier. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceSoftwareUpgrade[]`](../../doc/models/device-software-upgrade.md).

## Example Usage

```php
$account = '0000123456-00001';

$deviceId = '990013907835573';

$apiResponse = $softwareManagementReportsV2Controller->getDeviceFirmwareUpgradeHistory(
    $account,
    $deviceId
);
```

## Example Response *(as JSON)*

```json
[
  {
    "deviceId": "990013907835573",
    "id": "60b5d639-ccdc-4db8-8824-069bd94c95bf",
    "accountName": "0402196254-00001",
    "softwareName": "FOTA_Verizon_Model-A_02To03_HF",
    "startDate": "2018-03-05",
    "status": "UpgradeSuccess",
    "reason": "success"
  },
  {
    "deviceId": "990013907835573",
    "id": "50d5d639-aaca-3ca7-7713-958ac83b84ae",
    "accountName": "0402196254-00001",
    "softwareName": "VerizonSoftwareVersion-01",
    "startDate": "2018-02-20",
    "status": "UpgradeSuccess",
    "reason": "success"
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV2ResultException`](../../doc/models/fota-v2-result-exception.md) |


# Get Campaign History by Status

The report endpoint allows user to get campaign history of an account for specified status.

```php
function getCampaignHistoryByStatus(
    string $account,
    string $campaignStatus,
    ?string $lastSeenCampaignId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier. |
| `campaignStatus` | `string` | Query, Required | Status of the campaign. |
| `lastSeenCampaignId` | `?string` | Query, Optional | Last seen campaign Id. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`V2CampaignHistory`](../../doc/models/v2-campaign-history.md).

## Example Usage

```php
$account = '0000123456-00001';

$campaignStatus = 'campaignStatus6';

$lastSeenCampaignId = '60b5d639-ccdc-4db8-8824-069bd94c95bf';

$apiResponse = $softwareManagementReportsV2Controller->getCampaignHistoryByStatus(
    $account,
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
      "accountName": "0402196254-00001",
      "id": "60b5d639-ccdc-4db8-8824-069bd94c95bf",
      "campaignName": "FOTA_Verizon_Upgrade",
      "softwareName": "FOTA_Verizon_Model-A_02To03_HF",
      "distributionType": "HTTP",
      "softwareFrom": "FOTA_Verizon_Model-A_00To01_HF",
      "softwareTo": "FOTA_Verizon_Model-A_02To03_HF",
      "make": "Verizon",
      "model": "Model-A",
      "startDate": "2020-08-21",
      "endDate": "2020-08-22",
      "downloadAfterDate": "2020-08-21",
      "downloadTimeWindowList": [
        {
          "startTime": 20,
          "endTime": 21
        }
      ],
      "installAfterDate": "2020-08-21",
      "installTimeWindowList": [
        {
          "startTime": 22,
          "endTime": 23
        }
      ],
      "status": "CampaignEnded"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV2ResultException`](../../doc/models/fota-v2-result-exception.md) |


# Get Campaign Device Status

The report endpoint allows user to get the full list of device of a campaign.

```php
function getCampaignDeviceStatus(
    string $account,
    string $campaignId,
    ?string $lastSeenDeviceId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier. |
| `campaignId` | `string` | Template, Required | Campaign identifier. |
| `lastSeenDeviceId` | `?string` | Query, Optional | Last seen device identifier. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`V2CampaignDevice`](../../doc/models/v2-campaign-device.md).

## Example Usage

```php
$account = '0000123456-00001';

$campaignId = '60b5d639-ccdc-4db8-8824-069bd94c95bf';

$lastSeenDeviceId = '15-digit IMEI';

$apiResponse = $softwareManagementReportsV2Controller->getCampaignDeviceStatus(
    $account,
    $campaignId,
    $lastSeenDeviceId
);
```

## Example Response *(as JSON)*

```json
{
  "totalDevice": 1148,
  "hasMoreData": true,
  "lastSeenDeviceId": "15-digit IMEI",
  "maxPageSize": 1000,
  "deviceList": [
    {
      "deviceId": "15-digit IMEI",
      "status": "UpgradeSuccess",
      "resultReason": "DownloadInstallSucceeded"
    },
    {
      "deviceId": "15-digit IMEI",
      "status": "UpgradeSuccess",
      "resultReason": "DownloadInstallSucceeded"
    },
    {
      "deviceId": "15-digit IMEI",
      "status": "UpgradeSuccess",
      "resultReason": "DownloadInstallSucceeded"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV2ResultException`](../../doc/models/fota-v2-result-exception.md) |

