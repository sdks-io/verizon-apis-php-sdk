# V2 Triggers

Helps to create and manage promo alert triggers

```php
$mV2TriggersController = $client->getMV2TriggersController();
```

## Class Name

`MV2TriggersController`

## Methods

* [Create Trigger](../../doc/controllers/v2-triggers.md#create-trigger)
* [Update Trigger](../../doc/controllers/v2-triggers.md#update-trigger)


# Create Trigger

This creates an individual change plan for account group share.

```php
function createTrigger(CreateTriggerV2Request $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateTriggerV2Request`](../../doc/models/create-trigger-v2-request.md) | Body, Required | - |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`TriggerV2Response`](../../doc/models/trigger-v2-response.md).

## Example Usage

```php
$body = CreateTriggerV2RequestBuilder::init()->build();

$apiResponse = $mV2TriggersController->createTrigger($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error Response | [`RulesEngineRestErrorResponseException`](../../doc/models/rules-engine-rest-error-response-exception.md) |


# Update Trigger

This updates an individual change plan for account group share.

```php
function updateTrigger(
    string $vZM2mToken,
    UpdateTriggerV2Request $body,
    ?string $xRequestID = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `vZM2mToken` | `string` | Header, Required | M2M-MC Session Token |
| `body` | [`UpdateTriggerV2Request`](../../doc/models/update-trigger-v2-request.md) | Body, Required | - |
| `xRequestID` | `?string` | Header, Optional | Transaction Id |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`TriggerV2Response`](../../doc/models/trigger-v2-response.md).

## Example Usage

```php
$vZM2mToken = 'VZ-M2M-Token2';

$body = UpdateTriggerV2RequestBuilder::init()->build();

$apiResponse = $mV2TriggersController->updateTrigger(
    $vZM2mToken,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error Response | [`RulesEngineRestErrorResponseException`](../../doc/models/rules-engine-rest-error-response-exception.md) |

