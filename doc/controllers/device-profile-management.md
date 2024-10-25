# Device Profile Management

```php
$deviceProfileManagementController = $client->getDeviceProfileManagementController();
```

## Class Name

`DeviceProfileManagementController`

## Methods

* [Activate Device Through Profile](../../doc/controllers/device-profile-management.md#activate-device-through-profile)
* [Profile to Activate Device](../../doc/controllers/device-profile-management.md#profile-to-activate-device)
* [Profile to Deactivate Device](../../doc/controllers/device-profile-management.md#profile-to-deactivate-device)
* [Profile to Set Fallback Attribute](../../doc/controllers/device-profile-management.md#profile-to-set-fallback-attribute)


# Activate Device Through Profile

Uses the profile to bring the device under management.

```php
function activateDeviceThroughProfile(ActivateDeviceProfileRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ActivateDeviceProfileRequest`](../../doc/models/activate-device-profile-request.md) | Body, Required | Device Profile Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`RequestResponse`](../../doc/models/request-response.md).

## Example Usage

```php
$body = ActivateDeviceProfileRequestBuilder::init(
    [
        DeviceListBuilder::init()
            ->deviceIds(
                [
                    DeviceIdBuilder::init(
                        '32-digit EID',
                        'eid'
                    )->build(),
                    DeviceIdBuilder::init(
                        '15-digit IMEI',
                        'imei'
                    )->build()
                ]
            )->build()
    ],
    '0000123456-00001'
)
    ->servicePlan('The service plan name')
    ->mdnZipCode('five digit zip code')
    ->build();

$apiResponse = $deviceProfileManagementController->activateDeviceThroughProfile($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`RestErrorResponseException`](../../doc/models/rest-error-response-exception.md) |


# Profile to Activate Device

Uses the profile to activate the device.

```php
function profileToActivateDevice(ProfileRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ProfileRequest`](../../doc/models/profile-request.md) | Body, Required | Device Profile Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`RequestResponse`](../../doc/models/request-response.md).

## Example Usage

```php
$body = ProfileRequestBuilder::init(
    '0000123456-00001',
    [
        DeviceListBuilder::init()->build()
    ]
)
    ->carrierName('the name of the mobile service provider')
    ->servicePlan('The service plan name')
    ->mdnZipCode('five digit zip code')
    ->build();

$apiResponse = $deviceProfileManagementController->profileToActivateDevice($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`RestErrorResponseException`](../../doc/models/rest-error-response-exception.md) |


# Profile to Deactivate Device

Uses the profile to deactivate the device.

```php
function profileToDeactivateDevice(DeactivateDeviceProfileRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeactivateDeviceProfileRequest`](../../doc/models/deactivate-device-profile-request.md) | Body, Required | Device Profile Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`RequestResponse`](../../doc/models/request-response.md).

## Example Usage

```php
$body = DeactivateDeviceProfileRequestBuilder::init(
    '0000123456-00001',
    'a short code for the reason action was taken'
)
    ->carrierName('the name of the mobile service provider')
    ->etfWaiver(true)
    ->checkFallbackProfile(false)
    ->build();

$apiResponse = $deviceProfileManagementController->profileToDeactivateDevice($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`RestErrorResponseException`](../../doc/models/rest-error-response-exception.md) |


# Profile to Set Fallback Attribute

Allows the profile to set the fallback attribute to the device.

```php
function profileToSetFallbackAttribute(SetFallbackAttributeRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`SetFallbackAttributeRequest`](../../doc/models/set-fallback-attribute-request.md) | Body, Required | Device Profile Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`RequestResponse`](../../doc/models/request-response.md).

## Example Usage

```php
$body = SetFallbackAttributeRequestBuilder::init(
    [
        DeviceListBuilder::init()->build()
    ],
    '0000123456-00001'
)
    ->carrierName('the name of the mobile service provider')
    ->build();

$apiResponse = $deviceProfileManagementController->profileToSetFallbackAttribute($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`RestErrorResponseException`](../../doc/models/rest-error-response-exception.md) |

