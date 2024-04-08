# Exclusions

Exclude devices from location services.

```php
$exclusionsController = $client->getExclusionsController();
```

## Class Name

`ExclusionsController`

## Methods

* [Exclude Devices](../../doc/controllers/exclusions.md#exclude-devices)
* [Remove Devices From Exclusion List](../../doc/controllers/exclusions.md#remove-devices-from-exclusion-list)
* [List Excluded Devices](../../doc/controllers/exclusions.md#list-excluded-devices)


# Exclude Devices

This consents endpoint sets a new exclusion list.

```php
function excludeDevices(ConsentRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ConsentRequest`](../../doc/models/consent-request.md) | Body, Required | Request to update account consent exclusion list. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceLocationSuccessResult`](../../doc/models/device-location-success-result.md).

## Example Usage

```php
$body = ConsentRequestBuilder::init(
    '1234567890-00001'
)
    ->allDevice(false)
    ->type('replace')
    ->exclusion(
        [
            '980003420535573',
            '375535024300089',
            'A100003861E585'
        ]
    )
    ->build();

$apiResponse = $exclusionsController->excludeDevices($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`DeviceLocationResultException`](../../doc/models/device-location-result-exception.md) |


# Remove Devices From Exclusion List

Removes devices from the exclusion list so that they can be located with Device Location Services requests.

```php
function removeDevicesFromExclusionList(string $accountName, string $deviceList): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Query, Required | The numeric name of the account. |
| `deviceList` | `string` | Query, Required | A list of the device IDs to remove from the exclusion list. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceLocationSuccessResult`](../../doc/models/device-location-success-result.md).

## Example Usage

```php
$accountName = '0000123456-00001';

$deviceList = 'IMEI';

$apiResponse = $exclusionsController->removeDevicesFromExclusionList(
    $accountName,
    $deviceList
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
| 400 | Unexpected error. | [`DeviceLocationResultException`](../../doc/models/device-location-result-exception.md) |


# List Excluded Devices

This consents endpoint retrieves a list of excluded devices in an account.

```php
function listExcludedDevices(string $account, string $startIndex): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier in "##########-#####". |
| `startIndex` | `string` | Template, Required | Zero-based number of the first record to return. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DevicesConsentResult`](../../doc/models/devices-consent-result.md).

## Example Usage

```php
$account = '0252012345-00001';

$startIndex = '0';

$apiResponse = $exclusionsController->listExcludedDevices(
    $account,
    $startIndex
);
```

## Example Response *(as JSON)*

```json
{
  "accountName": "2024009649-00001",
  "allDevice": false,
  "hasMoreData": false,
  "totalCount": 4,
  "updateTime": "2018-05-18 19:20:50.076 +0000 UTC",
  "exclusion": [
    "990003420535375",
    "420535399000375",
    "A100003861E585",
    "205353759900034"
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`DeviceLocationResultException`](../../doc/models/device-location-result-exception.md) |

