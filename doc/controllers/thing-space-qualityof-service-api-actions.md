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
function createAThingSpaceQualityOfServiceAPISubscription(SubscribeRequest $body): M201success
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`SubscribeRequest`](../../doc/models/subscribe-request.md) | Body, Required | The request details to create a ThingSpace Quality of Service API subscription. |

## Response Type

[`M201success`](../../doc/models/m201-success.md)

## Example Usage

```php
$body = SubscribeRequestBuilder::init()
    ->accountName('0000123456-00001')
    ->build();

$result = $thingSpaceQualityOfServiceAPIActionsController->createAThingSpaceQualityOfServiceAPISubscription($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error Response | [`MDefaultException`](../../doc/models/m-default-exception.md) |


# Stop a Thing Space Quality of Service API Subscription

Stops an active ThingSpace Quality of Service API subscription using the account name and the subscription ID.

```php
function stopAThingSpaceQualityOfServiceAPISubscription(
    string $accountName,
    string $qosSubscriptionId
): M201success
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Query, Required | - |
| `qosSubscriptionId` | `string` | Query, Required | - |

## Response Type

[`M201success`](../../doc/models/m201-success.md)

## Example Usage

```php
$accountName = '0000123456-00001';

$qosSubscriptionId = 'QoS subscription ID';

$result = $thingSpaceQualityOfServiceAPIActionsController->stopAThingSpaceQualityOfServiceAPISubscription(
    $accountName,
    $qosSubscriptionId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error Response | [`MDefaultException`](../../doc/models/m-default-exception.md) |

