# Promotion Period Information

```php
$promotionPeriodInformationController = $client->getPromotionPeriodInformationController();
```

## Class Name

`PromotionPeriodInformationController`

## Methods

* [Get Promo Device Usage History](../../doc/controllers/promotion-period-information.md#get-promo-device-usage-history)
* [Get Promo Device Aggregate Usage History](../../doc/controllers/promotion-period-information.md#get-promo-device-aggregate-usage-history)


# Get Promo Device Usage History

Retrieves the usage history of a device during the promotion period.

```php
function getPromoDeviceUsageHistory(RequestBodyForUsage1 $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`RequestBodyForUsage1`](../../doc/models/request-body-for-usage-1.md) | Body, Required | Retrieve Aggregate Usage |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ResponseToUsageQuery`](../../doc/models/response-to-usage-query.md).

## Example Usage

```php
$body = RequestBodyForUsage1Builder::init()
    ->startTime(DateTimeHelper::fromRfc3339DateTime('08/15/2021 00:00:00'))
    ->endTime(DateTimeHelper::fromRfc3339DateTime('08/16/2021 00:00:00'))
    ->build();

$apiResponse = $promotionPeriodInformationController->getPromoDeviceUsageHistory($body);
```

## Example Response *(as JSON)*

```json
{
  "hasmoredata": false,
  "deviceId": {
    "kind": "iccid",
    "id": "20-digit iccid"
  },
  "usageHistory": [
    {
      "bytesUsed": 3072,
      "serviceplan": "The serviceplan name",
      "smsUsed": 0,
      "moSMS": 0,
      "mtSMS": 0,
      "source": "Raw Usage",
      "eventDateTime": "2021-08-15T00:00:00Z"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | All error responses will be in this format | [`ReadySimRestErrorResponseException`](../../doc/models/ready-sim-rest-error-response-exception.md) |


# Get Promo Device Aggregate Usage History

Retrieves the aggregate usage for an account using pseudo-MDN during the promotional period using a callback.

```php
function getPromoDeviceAggregateUsageHistory(RequestBodyForUsage $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`RequestBodyForUsage`](../../doc/models/request-body-for-usage.md) | Body, Required | Retrieve Aggregate Usage |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`UsageRequestResponse`](../../doc/models/usage-request-response.md).

## Example Usage

```php
$body = RequestBodyForUsageBuilder::init()
    ->accountId('0000123456-000001')
    ->startTime(DateTimeHelper::fromRfc3339DateTime('08/15/2021 00:00:00'))
    ->endTime(DateTimeHelper::fromRfc3339DateTime('08/16/2021 00:00:00'))
    ->build();

$apiResponse = $promotionPeriodInformationController->getPromoDeviceAggregateUsageHistory($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "be1b5958-3e11-41db-9abd-b1b7618c0035"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`ReadySimRestErrorResponseException`](../../doc/models/ready-sim-rest-error-response-exception.md) |

