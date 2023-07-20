# UICC Device Profile Management

```php
$uICCDeviceProfileManagementController = $client->getUICCDeviceProfileManagementController();
```

## Class Name

`UICCDeviceProfileManagementController`

## Methods

* [Disable Local Profile](../../doc/controllers/uicc-device-profile-management.md#disable-local-profile)
* [Download Local Profile to Disable](../../doc/controllers/uicc-device-profile-management.md#download-local-profile-to-disable)
* [Delete Local Profile](../../doc/controllers/uicc-device-profile-management.md#delete-local-profile)
* [Download Local Profile to Enable](../../doc/controllers/uicc-device-profile-management.md#download-local-profile-to-enable)
* [Enable Local Profile](../../doc/controllers/uicc-device-profile-management.md#enable-local-profile)


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
$body = ProfileChangeStateRequestBuilder::init()
    ->devices(
        [
            DeviceListBuilder::init()
                ->deviceIds(
                    [
                        DeviceId1Builder::init()
                            ->id('678912789123453456784008666456')
                            ->kind(KindEnum::EID)
                            ->build(),
                        DeviceId1Builder::init()
                            ->id('78425989148000000840')
                            ->kind(KindEnum::ICCID)
                            ->build()
                    ]
                )
                ->build()
        ]
    )
    ->accountName('1223334444-00001')
    ->smsrOid('1.3.6.1.4.1.31746.1.500.200.101.5')
    ->build();

$apiResponse = $uICCDeviceProfileManagementController->disableLocalProfile($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error Response | [`RestErrorResponseException`](../../doc/models/rest-error-response-exception.md) |


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
$body = ProfileChangeStateRequestBuilder::init()
    ->devices(
        [
            DeviceListBuilder::init()
                ->deviceIds(
                    [
                        DeviceId1Builder::init()
                            ->id('678912789123453456784008666456')
                            ->kind(KindEnum::EID)
                            ->build(),
                        DeviceId1Builder::init()
                            ->id('78425989148000000840')
                            ->kind(KindEnum::ICCID)
                            ->build()
                    ]
                )
                ->build()
        ]
    )
    ->accountName('1223334444-00001')
    ->smsrOid('1.3.6.1.4.1.31746.1.500.200.101.5')
    ->build();

$apiResponse = $uICCDeviceProfileManagementController->downloadLocalProfileToDisable($body);
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
$body = ProfileChangeStateRequestBuilder::init()
    ->devices(
        [
            DeviceListBuilder::init()
                ->deviceIds(
                    [
                        DeviceId1Builder::init()
                            ->id('678912789123453456784008666456')
                            ->kind(KindEnum::EID)
                            ->build(),
                        DeviceId1Builder::init()
                            ->id('78425989148000000840')
                            ->kind(KindEnum::ICCID)
                            ->build()
                    ]
                )
                ->build()
        ]
    )
    ->accountName('1223334444-00001')
    ->smsrOid('1.3.6.1.4.1.31746.1.500.200.101.5')
    ->build();

$apiResponse = $uICCDeviceProfileManagementController->deleteLocalProfile($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error Response | [`RestErrorResponseException`](../../doc/models/rest-error-response-exception.md) |


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
$body = ProfileChangeStateRequestBuilder::init()
    ->devices(
        [
            DeviceListBuilder::init()
                ->deviceIds(
                    [
                        DeviceId1Builder::init()
                            ->id('678912789123453456784008666456')
                            ->kind(KindEnum::EID)
                            ->build(),
                        DeviceId1Builder::init()
                            ->id('78425989148000000840')
                            ->kind(KindEnum::ICCID)
                            ->build()
                    ]
                )
                ->build()
        ]
    )
    ->accountName('1223334444-00001')
    ->smsrOid('1.3.6.1.4.1.31746.1.500.200.101.5')
    ->build();

$apiResponse = $uICCDeviceProfileManagementController->downloadLocalProfileToEnable($body);
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
$body = ProfileChangeStateRequestBuilder::init()
    ->devices(
        [
            DeviceListBuilder::init()
                ->deviceIds(
                    [
                        DeviceId1Builder::init()
                            ->id('678912789123453456784008666456')
                            ->kind(KindEnum::EID)
                            ->build(),
                        DeviceId1Builder::init()
                            ->id('78425989148000000840')
                            ->kind(KindEnum::ICCID)
                            ->build()
                    ]
                )
                ->build()
        ]
    )
    ->accountName('1223334444-00001')
    ->smsrOid('1.3.6.1.4.1.31746.1.500.200.101.5')
    ->build();

$apiResponse = $uICCDeviceProfileManagementController->enableLocalProfile($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error Response | [`RestErrorResponseException`](../../doc/models/rest-error-response-exception.md) |

