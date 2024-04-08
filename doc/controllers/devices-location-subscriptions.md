# Devices Location Subscriptions

```php
$devicesLocationSubscriptionsController = $client->getDevicesLocationSubscriptionsController();
```

## Class Name

`DevicesLocationSubscriptionsController`

## Methods

* [Get Location Service Subscription Status](../../doc/controllers/devices-location-subscriptions.md#get-location-service-subscription-status)
* [Get Location Service Usage](../../doc/controllers/devices-location-subscriptions.md#get-location-service-usage)


# Get Location Service Subscription Status

This subscriptions endpoint retrieves an account's current location subscription status.

```php
function getLocationServiceSubscriptionStatus(string $account): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier in "##########-#####". |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceLocationSubscription`](../../doc/models/device-location-subscription.md).

## Example Usage

```php
$account = '0000123456-00001';

$apiResponse = $devicesLocationSubscriptionsController->getLocationServiceSubscriptionStatus($account);
```

## Example Response *(as JSON)*

```json
{
  "accountName": "2024009649-00001",
  "locType": "TS-LOC-COARSE-CellID-5K",
  "maxAllowance": "5000",
  "purchaseTime": "2017-05-10 06:25:25.171 +0000 UTC"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`DeviceLocationResultException`](../../doc/models/device-location-result-exception.md) |


# Get Location Service Usage

This endpoint allows user to search for billable usage for accounts based on the provided date range.

```php
function getLocationServiceUsage(BillUsageRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`BillUsageRequest`](../../doc/models/bill-usage-request.md) | Body, Required | Request to obtain billable usage for accounts. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type `array`.

## Example Usage

```php
$body = BillUsageRequestBuilder::init(
    '1234567890-00001',
    '04-01-2018',
    '04-30-2018'
)
    ->usageForAllAccounts(true)
    ->build();

$apiResponse = $devicesLocationSubscriptionsController->getLocationServiceUsage($body);
```

## Example Response

```
{
  "accountName": "1223334444-00001",
  "usageForAllAcounts": false,
  "skuName": "TS-LOC-COARSE-CellID-Aggr",
  "transactionsAllowed": "5000",
  "totalTransactionCount": "350",
  "PrimaryAccount": {
    "accountName": "1223334444-00001",
    "transactionsCount": "125"
  },
  "ManagedAccounts": []
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`DeviceLocationResultException`](../../doc/models/device-location-result-exception.md) |

