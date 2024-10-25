# Thing Space Qualityof Service API Actions

```php
$thingSpaceQualityofServiceAPIActionsController = $client->getThingSpaceQualityofServiceAPIActionsController();
```

## Class Name

`ThingSpaceQualityofServiceAPIActionsController`

## Methods

* [Create a Thing Space Quality of Service API Subscription](../../doc/controllers/thing-space-qualityof-service-api-actions.md#create-a-thing-space-quality-of-service-api-subscription)
* [Stop a Thing Space Quality of Service API Subscription](../../doc/controllers/thing-space-qualityof-service-api-actions.md#stop-a-thing-space-quality-of-service-api-subscription)


# Create a Thing Space Quality of Service API Subscription

Creates a QoS elevation subscription ID and activates the subscription.

```php
function createAThingSpaceQualityOfServiceAPISubscription(SubscribeRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`SubscribeRequest`](../../doc/models/subscribe-request.md) | Body, Required | The request details to create a ThingSpace Quality of Service API subscription. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`M201success`](../../doc/models/m201-success.md).

## Example Usage

```php
$body = SubscribeRequestBuilder::init(
    '0000123456-00001',
    [
        QosDeviceInfoBuilder::init(
            QosDeviceIdBuilder::init()
                ->id('10-digit phone number')
                ->kind('mdn')
                ->build(),
            [
                FlowInfoBuilder::init()
                    ->flowServer('[IPv6 address]:port')
                    ->flowDevice('[IPv6 address]:port')
                    ->flowDirection('UPLINK')
                    ->flowProtocol('UDP')
                    ->qciOption('Premium')
                    ->build()
            ]
        )
            ->deviceIPv6Addr('IPv6 address')
            ->build()
    ]
)->build();

$apiResponse = $thingSpaceQualityOfServiceAPIActionsController->createAThingSpaceQualityOfServiceAPISubscription($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error Response | [`DefaultResponseException`](../../doc/models/default-response-exception.md) |


# Stop a Thing Space Quality of Service API Subscription

Stops an active ThingSpace Quality of Service API subscription using the account name and the subscription ID.

```php
function stopAThingSpaceQualityOfServiceAPISubscription(
    string $accountName,
    string $qosSubscriptionId
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Query, Required | - |
| `qosSubscriptionId` | `string` | Query, Required | - |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`M201success`](../../doc/models/m201-success.md).

## Example Usage

```php
$accountName = '0000123456-00001';

$qosSubscriptionId = 'QoS subscription ID';

$apiResponse = $thingSpaceQualityOfServiceAPIActionsController->stopAThingSpaceQualityOfServiceAPISubscription(
    $accountName,
    $qosSubscriptionId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error Response | [`DefaultResponseException`](../../doc/models/default-response-exception.md) |

