# SIM Actions

```php
$sIMActionsController = $client->getSIMActionsController();
```

## Class Name

`SIMActionsController`

## Methods

* [Newactivatecode](../../doc/controllers/sim-actions.md#newactivatecode)
* [Setactivate Using POST](../../doc/controllers/sim-actions.md#setactivate-using-post)
* [Setdeactivate Using POST](../../doc/controllers/sim-actions.md#setdeactivate-using-post)


# Newactivatecode

System assign a new activation code to reactivate a deactivated device. **Note:** the previously assigned ICCID must be used to request a new activation code.

```php
function newactivatecode(ESIMProfileRequest2 $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ESIMProfileRequest2`](../../doc/models/esim-profile-request-2.md) | Body, Required | Device Profile Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ESIMRequestResponse`](../../doc/models/esim-request-response.md).

## Example Usage

```php
$body = ESIMProfileRequest2Builder::init()
    ->devices(
        [
            ESIMDeviceListBuilder::init()
                ->deviceIds(
                    [
                        DeviceId2Builder::init()
                            ->id('15-digit IMEI')
                            ->kind('imei')
                            ->build(),
                        DeviceId2Builder::init()
                            ->id('20-digit ICCID')
                            ->kind('iccid')
                            ->build()
                    ]
                )
                ->build()
        ]
    )
    ->accountName('0000123456-00001')
    ->servicePlan('the service plan name')
    ->mdnZipCode('five digit zip code')
    ->build();

$apiResponse = $sIMActionsController->newactivatecode($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "d1f08526-5443-4054-9a29-4456490ea9f8"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 401 | Unauthorized | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 403 | Forbidden | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 404 | Not Found / Does not exist | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 406 | Format / Request Unacceptable | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 429 | Too many requests | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| Default | Error response | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |


# Setactivate Using POST

Uses the profile to activate the SIM.

```php
function setactivateUsingPOST(ESIMProfileRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ESIMProfileRequest`](../../doc/models/esim-profile-request.md) | Body, Required | Device Profile Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ESIMRequestResponse`](../../doc/models/esim-request-response.md).

## Example Usage

```php
$body = ESIMProfileRequestBuilder::init()
    ->devices(
        [
            ESIMDeviceListBuilder::init()
                ->deviceIds(
                    [
                        DeviceId2Builder::init()
                            ->id('32-digit EID')
                            ->kind('eid')
                            ->build(),
                        DeviceId2Builder::init()
                            ->id('15-digit IMEI')
                            ->kind('imei')
                            ->build(),
                        DeviceId2Builder::init()
                            ->id('20-digit ICCID')
                            ->kind('iccid (ICCID is only used for reactivation)')
                            ->build()
                    ]
                )
                ->build()
        ]
    )
    ->carrierName('Verizon Wireless')
    ->accountName('0000123456-00001')
    ->servicePlan('the service plan name')
    ->mdnZipCode('five digit zip code')
    ->build();

$apiResponse = $sIMActionsController->setactivateUsingPOST($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "d1f08526-5443-4054-9a29-4456490ea9f8"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 401 | Unauthorized | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 403 | Forbidden | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 404 | Not Found / Does not exist | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 406 | Format / Request Unacceptable | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 429 | Too many requests | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| Default | Error response | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |


# Setdeactivate Using POST

Uses the profile to deactivate the SIM.

```php
function setdeactivateUsingPOST(ProfileRequest2 $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ProfileRequest2`](../../doc/models/profile-request-2.md) | Body, Required | Device Profile Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ESIMRequestResponse`](../../doc/models/esim-request-response.md).

## Example Usage

```php
$body = ProfileRequest2Builder::init()
    ->accountName('0000123456-00001')
    ->carrierName('Verizon Wireless')
    ->reasonCode('FF')
    ->etfWaiver(true)
    ->checkFallbackProfile(false)
    ->build();

$apiResponse = $sIMActionsController->setdeactivateUsingPOST($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "d1f08526-5443-4054-9a29-4456490ea9f8"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 401 | Unauthorized | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 403 | Forbidden | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 404 | Not Found / Does not exist | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 406 | Format / Request Unacceptable | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 429 | Too many requests | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| Default | Error response | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |

