# Device Profile Management

```php
$deviceProfileManagementController = $client->getDeviceProfileManagementController();
```

## Class Name

`DeviceProfileManagementController`

## Methods

* [Profile to Set Fallback Attribute](../../doc/controllers/device-profile-management.md#profile-to-set-fallback-attribute)
* [Activate Device Through Profile](../../doc/controllers/device-profile-management.md#activate-device-through-profile)
* [Profile to Activate Device](../../doc/controllers/device-profile-management.md#profile-to-activate-device)
* [Profile to Deactivate Device](../../doc/controllers/device-profile-management.md#profile-to-deactivate-device)


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
$body = SetFallbackAttributeRequestBuilder::init()
    ->accountName('0000123456-00001')
    ->carrierName('the name of the mobile service provider')
    ->build();

$apiResponse = $deviceProfileManagementController->profileToSetFallbackAttribute($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`RestErrorResponseException`](../../doc/models/rest-error-response-exception.md) |


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
$body = ActivateDeviceProfileRequestBuilder::init()
    ->devices(
        [
            DeviceListBuilder::init()
                ->deviceIds(
                    [
                        DeviceId1Builder::init()
                            ->id('32-digit EID')
                            ->kind(KindEnum::EID)
                            ->build(),
                        DeviceId1Builder::init()
                            ->id('15-digit IMEI')
                            ->kind(KindEnum::IMEI)
                            ->build()
                    ]
                )
                ->build()
        ]
    )
    ->accountName('0000123456-00001')
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
$body = ProfileRequestBuilder::init()
    ->carrierName('the name of the mobile service provider')
    ->accountName('0000123456-00001')
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
function profileToDeactivateDevice(ProfileRequest2 $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ProfileRequest2`](../../doc/models/profile-request-2.md) | Body, Required | Device Profile Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`RequestResponse`](../../doc/models/request-response.md).

## Example Usage

```php
$body = ProfileRequest2Builder::init()
    ->accountName('0000123456-00001')
    ->carrierName('the name of the mobile service provider')
    ->reasonCode('a short code for the reason action was taken')
    ->etfWaiver(true)
    ->checkFallbackProfile(false)
    ->build();

$apiResponse = $deviceProfileManagementController->profileToDeactivateDevice($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`RestErrorResponseException`](../../doc/models/rest-error-response-exception.md) |

