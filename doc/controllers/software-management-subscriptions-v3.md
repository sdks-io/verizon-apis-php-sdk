# Software Management Subscriptions V3

```php
$softwareManagementSubscriptionsV3Controller = $client->getSoftwareManagementSubscriptionsV3Controller();
```

## Class Name

`SoftwareManagementSubscriptionsV3Controller`


# Get Account Subscription Status

This endpoint retrieves a FOTA subscription by account.

```php
function getAccountSubscriptionStatus(string $acc): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acc` | `string` | Template, Required | Account identifier. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`FotaV3Subscription`](../../doc/models/fota-v3-subscription.md).

## Example Usage

```php
$acc = '0000123456-00001';

$apiResponse = $softwareManagementSubscriptionsV3Controller->getAccountSubscriptionStatus($acc);
```

## Example Response *(as JSON)*

```json
{
  "accountName": "0000123456-000001",
  "purchaseType": "TS-HFOTA-EVNT,TS-HFOTA-MRC",
  "licenseCount": 500,
  "licenseUsedCount": 400,
  "updateTime": "2020-09-17T21:11:32.170Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV3ResultException`](../../doc/models/fota-v3-result-exception.md) |

