# Software Management Subscriptions V2

```php
$softwareManagementSubscriptionsV2Controller = $client->getSoftwareManagementSubscriptionsV2Controller();
```

## Class Name

`SoftwareManagementSubscriptionsV2Controller`


# Get Account Subscription Status

This endpoint retrieves a FOTA subscription by account.

```php
function getAccountSubscriptionStatus(string $account): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `account` | `string` | Template, Required | Account identifier. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`FotaV2Subscription`](../../doc/models/fota-v2-subscription.md).

## Example Usage

```php
$account = '0000123456-00001';

$apiResponse = $softwareManagementSubscriptionsV2Controller->getAccountSubscriptionStatus($account);
```

## Example Response *(as JSON)*

```json
{
  "accountName": "00000000000-123345",
  "purchaseType": "TS-HFOTA-EVNT,TS-HFOTA-MRC",
  "licenseCount": 500,
  "licenseUsedCount": 400,
  "updateTime": "2020-09-17T21:11:32.170Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV2ResultException`](../../doc/models/fota-v2-result-exception.md) |

