# E UICC Device Profile Management

```php
$eUICCDeviceProfileManagementController = $client->getEUICCDeviceProfileManagementController();
```

## Class Name

`EUICCDeviceProfileManagementController`

## Methods

* [Download Local Profile to Enable](../../doc/controllers/e-uicc-device-profile-management.md#download-local-profile-to-enable)
* [Download Local Profile to Disable](../../doc/controllers/e-uicc-device-profile-management.md#download-local-profile-to-disable)
* [Enable Local Profile](../../doc/controllers/e-uicc-device-profile-management.md#enable-local-profile)
* [Disable Local Profile](../../doc/controllers/e-uicc-device-profile-management.md#disable-local-profile)
* [Delete Local Profile](../../doc/controllers/e-uicc-device-profile-management.md#delete-local-profile)


# Download Local Profile to Enable

Downloads an eUICC local profile to devices and enables the profile.

```php
function downloadLocalProfileToEnable(ProfileChangeStateRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ProfileChangeStateRequest`](../../doc/models/profile-change-state-request.md) | Body, Required | Device Profile Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = ProfileChangeStateRequestBuilder::init(
    [
        DeviceListBuilder::init()
            ->deviceIds(
                [
                    DeviceIdBuilder::init(
                        '678912789123453456784008666456',
                        'eid'
                    )->build(),
                    DeviceIdBuilder::init(
                        '78425989148000000840',
                        'iccid'
                    )->build()
                ]
            )->build()
    ],
    '1223334444-00001',
    '1.3.6.1.4.1.31746.1.500.200.101.5'
)->build();

$apiResponse = $eUICCDeviceProfileManagementController->downloadLocalProfileToEnable($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "595f5c44-c31c-4552-8670-020a1545a84d"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Download Local Profile to Disable

Downloads an eUICC local profile to devices and leaves the profile disabled.

```php
function downloadLocalProfileToDisable(ProfileChangeStateRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ProfileChangeStateRequest`](../../doc/models/profile-change-state-request.md) | Body, Required | Device Profile Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = ProfileChangeStateRequestBuilder::init(
    [
        DeviceListBuilder::init()
            ->deviceIds(
                [
                    DeviceIdBuilder::init(
                        '678912789123453456784008666456',
                        'eid'
                    )->build(),
                    DeviceIdBuilder::init(
                        '78425989148000000840',
                        'iccid'
                    )->build()
                ]
            )->build()
    ],
    '1223334444-00001',
    '1.3.6.1.4.1.31746.1.500.200.101.5'
)->build();

$apiResponse = $eUICCDeviceProfileManagementController->downloadLocalProfileToDisable($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "595f5c44-c31c-4552-8670-020a1545a84d"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Enable Local Profile

Enable a local profile that has been downloaded to eUICC devices.

```php
function enableLocalProfile(ProfileChangeStateRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ProfileChangeStateRequest`](../../doc/models/profile-change-state-request.md) | Body, Required | Update state |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`RequestResponse`](../../doc/models/request-response.md).

## Example Usage

```php
$body = ProfileChangeStateRequestBuilder::init(
    [
        DeviceListBuilder::init()
            ->deviceIds(
                [
                    DeviceIdBuilder::init(
                        '678912789123453456784008666456',
                        'eid'
                    )->build(),
                    DeviceIdBuilder::init(
                        '78425989148000000840',
                        'iccid'
                    )->build()
                ]
            )->build()
    ],
    '1223334444-00001',
    '1.3.6.1.4.1.31746.1.500.200.101.5'
)->build();

$apiResponse = $eUICCDeviceProfileManagementController->enableLocalProfile($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error Response | [`RestErrorResponseException`](../../doc/models/rest-error-response-exception.md) |


# Disable Local Profile

Disable a local profile on eUICC devices. The default or boot profile will become the enabled profile.

```php
function disableLocalProfile(ProfileChangeStateRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ProfileChangeStateRequest`](../../doc/models/profile-change-state-request.md) | Body, Required | Update state |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`RequestResponse`](../../doc/models/request-response.md).

## Example Usage

```php
$body = ProfileChangeStateRequestBuilder::init(
    [
        DeviceListBuilder::init()
            ->deviceIds(
                [
                    DeviceIdBuilder::init(
                        '678912789123453456784008666456',
                        'eid'
                    )->build(),
                    DeviceIdBuilder::init(
                        '78425989148000000840',
                        'iccid'
                    )->build()
                ]
            )->build()
    ],
    '1223334444-00001',
    '1.3.6.1.4.1.31746.1.500.200.101.5'
)->build();

$apiResponse = $eUICCDeviceProfileManagementController->disableLocalProfile($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error Response | [`RestErrorResponseException`](../../doc/models/rest-error-response-exception.md) |


# Delete Local Profile

Delete a local profile from eUICC devices. If the local profile is enabled, it will first be disabled and the boot or default profile will be enabled.

```php
function deleteLocalProfile(ProfileChangeStateRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ProfileChangeStateRequest`](../../doc/models/profile-change-state-request.md) | Body, Required | Update state |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`RequestResponse`](../../doc/models/request-response.md).

## Example Usage

```php
$body = ProfileChangeStateRequestBuilder::init(
    [
        DeviceListBuilder::init()
            ->deviceIds(
                [
                    DeviceIdBuilder::init(
                        '678912789123453456784008666456',
                        'eid'
                    )->build(),
                    DeviceIdBuilder::init(
                        '78425989148000000840',
                        'iccid'
                    )->build()
                ]
            )->build()
    ],
    '1223334444-00001',
    '1.3.6.1.4.1.31746.1.500.200.101.5'
)->build();

$apiResponse = $eUICCDeviceProfileManagementController->deleteLocalProfile($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error Response | [`RestErrorResponseException`](../../doc/models/rest-error-response-exception.md) |

