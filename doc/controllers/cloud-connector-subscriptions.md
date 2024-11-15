# Cloud Connector Subscriptions

```php
$cloudConnectorSubscriptionsController = $client->getCloudConnectorSubscriptionsController();
```

## Class Name

`CloudConnectorSubscriptionsController`

## Methods

* [Create Subscription](../../doc/controllers/cloud-connector-subscriptions.md#create-subscription)
* [Query Subscription](../../doc/controllers/cloud-connector-subscriptions.md#query-subscription)
* [Delete Subscription](../../doc/controllers/cloud-connector-subscriptions.md#delete-subscription)


# Create Subscription

Create a subscription to define a streaming channel that sends data from devices in the account to an endpoint defined in a target resource.

```php
function createSubscription(CreateSubscriptionRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateSubscriptionRequest`](../../doc/models/create-subscription-request.md) | Body, Required | The request body provides the details of the subscription that you want to create. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`Subscription`](../../doc/models/subscription.md).

## Example Usage

```php
$body = CreateSubscriptionRequestBuilder::init()
    ->accountidentifier(
        AccountIdentifierBuilder::init()
            ->billingaccountid('1223334444-00001')
            ->build()
    )
    ->email('me@mycompany.com')
    ->billingaccountid('1223334444-00001')
    ->streamkind('ts.event')
    ->targetid('{target ID}')
    ->name('Account subscription 1')
    ->allowaggregation(false)
    ->build();

$apiResponse = $cloudConnectorSubscriptionsController->createSubscription($body);
```

## Example Response *(as JSON)*

```json
{
  "configurationfailures": 0,
  "createdon": "2018-12-21T05:05:02.134Z",
  "delegateid": "00000000-0000-0000-0000-000000000000",
  "id": "d8c145dd-6948-67ec-ed9b-6a298806bb4a",
  "kind": "ts.subscription",
  "laststreamingstatus": "",
  "laststreamingtime": "0001-01-01T00:00:00Z",
  "lastupdated": "2018-12-21T05:22:12.178Z",
  "networkfailures": 0,
  "streamfailures": 0,
  "streamkind": "ts.event",
  "targetid": "4e211a0e-e39d-6c32-e15b-d6f07f9e2ec8",
  "version": "1.0",
  "versionid": "5ed6063f-04e0-11e9-8279-02420a5e1b0b"
}
```


# Query Subscription

Search for subscriptions by property values. Returns an array of all matching subscription resources.

```php
function querySubscription(QuerySubscriptionRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`QuerySubscriptionRequest`](../../doc/models/query-subscription-request.md) | Body, Required | The request body specifies fields and values to match. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`Subscription[]`](../../doc/models/subscription.md).

## Example Usage

```php
$body = QuerySubscriptionRequestBuilder::init()
    ->accountidentifier(
        AccountIdentifierBuilder::init()
            ->billingaccountid('1223334444-00001')
            ->build()
    )
    ->resourceidentifier(
        ResourceIdentifierBuilder::init()
            ->id('dd1682d3-2d80-cefc-f3ee-25154800beff')
            ->build()
    )
    ->build();

$apiResponse = $cloudConnectorSubscriptionsController->querySubscription($body);
```

## Example Response *(as JSON)*

```json
[
  {
    "configurationfailures": 0,
    "createdon": "2019-02-13T23:13:24.689Z",
    "delegateid": "00000000-0000-0000-0000-000000000000",
    "disabled": false,
    "email": "me@mycompany.com",
    "id": "98015aed-e984-62be-f049-1d895d2d1812",
    "kind": "ts.subscription",
    "laststreamingstatus": "success",
    "laststreamingtime": "2019-02-20T18:20:45.865Z",
    "lastupdated": "2019-02-13T23:13:24.689Z",
    "networkfailures": 0,
    "streamfailures": 0,
    "streamkind": "ts.event",
    "targetid": "4e112cb3-da1d-6ece-f2c6-bb8700b20b09",
    "targettype": "Amazon Web Services",
    "version": "1.0",
    "versionid": "f68b8862-2fe4-11e9-85fd-02420a4c170d"
  }
]
```


# Delete Subscription

Remove a subscription from a ThingSpace account.

```php
function deleteSubscription(DeleteSubscriptionRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeleteSubscriptionRequest`](../../doc/models/delete-subscription-request.md) | Body, Required | The request body identifies the subscription to delete. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance.

## Example Usage

```php
$body = DeleteSubscriptionRequestBuilder::init()
    ->accountidentifier(
        AccountIdentifierBuilder::init()
            ->billingaccountid('1223334444-00001')
            ->build()
    )
    ->resourceidentifier(
        ResourceIdentifierBuilder::init()
            ->id('f8b112df-739c-6236-f059-106c67bafd99')
            ->build()
    )
    ->build();

$apiResponse = $cloudConnectorSubscriptionsController->deleteSubscription($body);
```

