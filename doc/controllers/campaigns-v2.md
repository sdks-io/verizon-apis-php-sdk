# Campaigns V2

```php
$campaignsV2Controller = $client->getCampaignsV2Controller();
```

## Class Name

`CampaignsV2Controller`

## Methods

* [Schedule Campaign Firmware Upgrade](../../doc/controllers/campaigns-v2.md#schedule-campaign-firmware-upgrade)
* [Get Campaign Information](../../doc/controllers/campaigns-v2.md#get-campaign-information)
* [Update Campaign Firmware Devices](../../doc/controllers/campaigns-v2.md#update-campaign-firmware-devices)
* [Cancel Campaign](../../doc/controllers/campaigns-v2.md#cancel-campaign)
* [Update Campaign Dates](../../doc/controllers/campaigns-v2.md#update-campaign-dates)
* [Schedule File Upgrade](../../doc/controllers/campaigns-v2.md#schedule-file-upgrade)
* [Schedule SW Upgrade Http Devices](../../doc/controllers/campaigns-v2.md#schedule-sw-upgrade-http-devices)


# Schedule Campaign Firmware Upgrade

This endpoint allows user to schedule a software upgrade.

```php
function scheduleCampaignFirmwareUpgrade(string $account, CampaignSoftwareUpgrade $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier. |
| `body` | [`CampaignSoftwareUpgrade`](../../doc/models/campaign-software-upgrade.md) | Body, Required | Software upgrade information. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`CampaignSoftware`](../../doc/models/campaign-software.md).

## Example Usage

```php
$account = '0000123456-00001';

$body = CampaignSoftwareUpgradeBuilder::init(
    'FOTA_Verizon_Model-A_02To03_HF',
    'FOTA_Verizon_Model-A_00To01_HF',
    'FOTA_Verizon_Model-A_02To03_HF',
    'HTTP',
    DateTimeHelper::fromSimpleDateRequired('2020-08-21'),
    DateTimeHelper::fromSimpleDateRequired('2020-08-22'),
    [
        '990013907835573',
        '990013907884259'
    ]
)
    ->campaignName('FOTA_Verizon_Upgrade')
    ->downloadAfterDate(DateTimeHelper::fromSimpleDate('2020-08-21'))
    ->downloadTimeWindowList(
        [
            V2TimeWindowBuilder::init(
                20,
                21
            )->build()
        ]
    )
    ->installAfterDate(DateTimeHelper::fromSimpleDate('2020-08-21'))
    ->installTimeWindowList(
        [
            V2TimeWindowBuilder::init(
                22,
                23
            )->build()
        ]
    )->build();

$apiResponse = $campaignsV2Controller->scheduleCampaignFirmwareUpgrade(
    $account,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "id": "60b5d639-ccdc-4db8-8824-069bd94c95bf",
  "accountName": "0402196254-00001",
  "campaignName": "FOTA_Verizon_Upgrade",
  "softwareName": "FOTA_Verizon_Model-A_02To03_HF",
  "distributionType": "HTTP",
  "make": "Verizon",
  "model": "Model-A",
  "softwareFrom": "FOTA_Verizon_Model-A_00To01_HF",
  "softwareTo": "FOTA_Verizon_Model-A_02To03_HF",
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
  "status": "CampaignRequestPending"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV2ResultException`](../../doc/models/fota-v2-result-exception.md) |


# Get Campaign Information

This endpoint allows user to get information of a software upgrade.

```php
function getCampaignInformation(string $account, string $campaignId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier. |
| `campaignId` | `string` | Template, Required | Software upgrade identifier. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`CampaignSoftware`](../../doc/models/campaign-software.md).

## Example Usage

```php
$account = '0000123456-00001';

$campaignId = '60b5d639-ccdc-4db8-8824-069bd94c95bf';

$apiResponse = $campaignsV2Controller->getCampaignInformation(
    $account,
    $campaignId
);
```

## Example Response *(as JSON)*

```json
{
  "id": "60b5d639-ccdc-4db8-8824-069bd94c95bf",
  "accountName": "0402196254-00001",
  "campaignName": "FOTA_Verizon_Upgrade",
  "softwareName": "FOTA_Verizon_Model-A_02To03_HF",
  "distributionType": "HTTP",
  "make": "Verizon",
  "model": "Model-A",
  "softwareFrom": "FOTA_Verizon_Model-A_00To01_HF",
  "softwareTo": "FOTA_Verizon_Model-A_02To03_HF",
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
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV2ResultException`](../../doc/models/fota-v2-result-exception.md) |


# Update Campaign Firmware Devices

This endpoint allows user to Add or Remove devices to an existing software upgrade.

```php
function updateCampaignFirmwareDevices(
    string $account,
    string $campaignId,
    V2AddOrRemoveDeviceRequest $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier. |
| `campaignId` | `string` | Template, Required | Software upgrade information. |
| `body` | [`V2AddOrRemoveDeviceRequest`](../../doc/models/v2-add-or-remove-device-request.md) | Body, Required | Request to add or remove device to existing software upgrade information. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`V2AddOrRemoveDeviceResult`](../../doc/models/v2-add-or-remove-device-result.md).

## Example Usage

```php
$account = '0000123456-00001';

$campaignId = '60b5d639-ccdc-4db8-8824-069bd94c95bf';

$body = V2AddOrRemoveDeviceRequestBuilder::init(
    'remove',
    [
        '990013907884259',
        '990013907835573',
        '990013907833575'
    ]
)->build();

$apiResponse = $campaignsV2Controller->updateCampaignFirmwareDevices(
    $account,
    $campaignId,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV2ResultException`](../../doc/models/fota-v2-result-exception.md) |


# Cancel Campaign

This endpoint allows user to cancel software upgrade. A software upgrade already started can not be cancelled.

```php
function cancelCampaign(string $account, string $campaignId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier. |
| `campaignId` | `string` | Template, Required | Unique identifier of campaign. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`FotaV2SuccessResult`](../../doc/models/fota-v2-success-result.md).

## Example Usage

```php
$account = '0000123456-00001';

$campaignId = '60b5d639-ccdc-4db8-8824-069bd94c95bf';

$apiResponse = $campaignsV2Controller->cancelCampaign(
    $account,
    $campaignId
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
| 400 | Unexpected error. | [`FotaV2ResultException`](../../doc/models/fota-v2-result-exception.md) |


# Update Campaign Dates

This endpoint allows user to change campaign dates and time windows. Fields which need to remain unchanged should be also provided.

```php
function updateCampaignDates(
    string $account,
    string $campaignId,
    V2ChangeCampaignDatesRequest $body
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier. |
| `campaignId` | `string` | Template, Required | Software upgrade information. |
| `body` | [`V2ChangeCampaignDatesRequest`](../../doc/models/v2-change-campaign-dates-request.md) | Body, Required | New dates and time windows. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`CampaignSoftware`](../../doc/models/campaign-software.md).

## Example Usage

```php
$account = '0000123456-00001';

$campaignId = '60b5d639-ccdc-4db8-8824-069bd94c95bf';

$body = V2ChangeCampaignDatesRequestBuilder::init(
    DateTimeHelper::fromSimpleDateRequired('2020-08-21'),
    DateTimeHelper::fromSimpleDateRequired('2020-08-22')
)
    ->downloadAfterDate(DateTimeHelper::fromSimpleDate('2020-08-21'))
    ->downloadTimeWindowList(
        [
            V2TimeWindowBuilder::init(
                3,
                4
            )->build()
        ]
    )
    ->installAfterDate(DateTimeHelper::fromSimpleDate('2020-08-21'))
    ->installTimeWindowList(
        [
            V2TimeWindowBuilder::init(
                5,
                6
            )->build()
        ]
    )->build();

$apiResponse = $campaignsV2Controller->updateCampaignDates(
    $account,
    $campaignId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "id": "60b5d639-ccdc-4db8-8824-069bd94c95bf",
  "accountName": "0402196254-00001",
  "campaignName": "FOTA_Verizon_Upgrade",
  "softwareName": "FOTA_Verizon_Model-A_02To03_HF",
  "distributionType": "HTTP",
  "make": "Verizon",
  "model": "Model-A",
  "softwareFrom": "FOTA_Verizon_Model-A_00To01_HF",
  "softwareTo": "FOTA_Verizon_Model-A_02To03_HF",
  "startDate": "2020-08-21",
  "endDate": "2020-08-22",
  "downloadAfterDate": "2020-08-21",
  "downloadTimeWindowList": [
    {
      "startTime": 3,
      "endTime": 4
    },
    {
      "startTime": 5,
      "endTime": 6
    }
  ],
  "installAfterDate": "2020-08-21",
  "installTimeWindowList": [
    {
      "startTime": 5,
      "endTime": 6
    },
    {
      "startTime": 6,
      "endTime": 7
    }
  ],
  "status": "RequestPending"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV2ResultException`](../../doc/models/fota-v2-result-exception.md) |


# Schedule File Upgrade

You can upload configuration files and schedule them in a campaign to devices.

```php
function scheduleFileUpgrade(string $acc, UploadAndScheduleFileRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acc` | `string` | Template, Required | Account identifier. |
| `body` | [`UploadAndScheduleFileRequest`](../../doc/models/upload-and-schedule-file-request.md) | Body, Required | Device logging information. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`UploadAndScheduleFileResponse`](../../doc/models/upload-and-schedule-file-response.md).

## Example Usage

```php
$acc = '0402196254-00001';

$body = UploadAndScheduleFileRequestBuilder::init()
    ->campaignName('FOTA_Verizon_Upgrade')
    ->fileName('configfile-Verizon_VZW1_hello-world.txt')
    ->fileVersion('1.0')
    ->distributionType('HTTP')
    ->startDate('2021-02-08')
    ->endDate('2021-02-08')
    ->downloadAfterDate('2021-02-08')
    ->build();

$apiResponse = $campaignsV2Controller->scheduleFileUpgrade(
    $acc,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV2ResultException`](../../doc/models/fota-v2-result-exception.md) |


# Schedule SW Upgrade Http Devices

Campaign time windows for downloading and installing software are available as long as the device OEM supports this.

```php
function scheduleSWUpgradeHttpDevices(string $acc, SchedulesSoftwareUpgradeRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acc` | `string` | Template, Required | Account identifier. |
| `body` | [`SchedulesSoftwareUpgradeRequest`](../../doc/models/schedules-software-upgrade-request.md) | Body, Required | Device logging information. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`UploadAndScheduleFileResponse`](../../doc/models/upload-and-schedule-file-response.md).

## Example Usage

```php
$acc = '0402196254-00001';

$body = SchedulesSoftwareUpgradeRequestBuilder::init()
    ->campaignName('FOTA_Verizon_Upgrade')
    ->softwareName('FOTA_Verizon_Model-A_02To03_HF')
    ->softwareFrom('FOTA_Verizon_Model-A_00To01_HF')
    ->softwareTo('FOTA_Verizon_Model-A_02To03_HF')
    ->distributionType('HTTP')
    ->startDate('2020-08-21')
    ->endDate('2020-08-22')
    ->downloadAfterDate('2020-08-21')
    ->downloadTimeWindowList(
        [
            DownloadTimeWindowBuilder::init()
                ->startTime('20')
                ->endTime('21')
                ->build()
        ]
    )
    ->installAfterDate('2020-08-21')
    ->installTimeWindowList(
        [
            DownloadTimeWindowBuilder::init()
                ->startTime('22')
                ->endTime('23')
                ->build()
        ]
    )
    ->deviceList(
        [
            '990013907835573',
            '990013907884259'
        ]
    )
    ->build();

$apiResponse = $campaignsV2Controller->scheduleSWUpgradeHttpDevices(
    $acc,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "id": "60b5d639-ccdc-4db8-8824-069bd94c95bf",
  "accountName": "0402196254-00001",
  "campaignName": "FOTA_Verizon_Upgrade",
  "softwareName": "FOTA_Verizon_Model-A_02To03_HF",
  "distributionType": "HTTP",
  "make": "Verizon",
  "model": "Model-A",
  "softwareFrom": "FOTA_Verizon_Model-A_00To01_HF",
  "softwareTo": "FOTA_Verizon_Model-A_02To03_HF",
  "startDate": "2020-08-21",
  "endDate": "2020-08-22",
  "downloadAfterDate": "2020-08-21",
  "downloadTimeWindowList": [
    {
      "startTime": "20",
      "endTime": "21"
    }
  ],
  "installAfterDate": "2020-08-21",
  "installTimeWindowList": [
    {
      "startTime": "22",
      "endTime": "23"
    }
  ],
  "status": "CampaignRequestPending"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV2ResultException`](../../doc/models/fota-v2-result-exception.md) |

