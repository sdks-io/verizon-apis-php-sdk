# Account Subscriptions

```php
$accountSubscriptionsController = $client->getAccountSubscriptionsController();
```

## Class Name

`AccountSubscriptionsController`


# List Account Subscriptions

Retrieves the total number of SIM-Secure for IoT subscription licenses purchased for your account by license type, and lists the number of licenses assigned and available for each license type.

```php
function listAccountSubscriptions(SecuritySubscriptionRequest $body, ?string $xRequestID = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`SecuritySubscriptionRequest`](../../doc/models/security-subscription-request.md) | Body, Required | Request for account subscription. |
| `xRequestID` | `?string` | Header, Optional | Transaction Id. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`SecuritySubscriptionResult`](../../doc/models/security-subscription-result.md).

## Example Usage

```php
$body = SecuritySubscriptionRequestBuilder::init()
    ->accountName('000012345600001')
    ->skuNumber('SIMSec-IoT-Lt')
    ->build();

$apiResponse = $accountSubscriptionsController->listAccountSubscriptions($body);
```

## Example Response *(as JSON)*

```json
{
  "accountName": "000012345600001",
  "subscriptionList": [
    {
      "skuNumber": "TS-BUNDLE-KTO-SIMSEC-MRC",
      "licenseType": "Flexible Bundle",
      "licensePurchased": 9,
      "licenseAssigned": 7,
      "licenseAvailable": 1
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| 401 | Unauthorized request. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| 403 | Request forbidden. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| 404 | Not Found / Does not exist. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| 406 | Format / Request Unacceptable. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| 429 | Too many requests. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| Default | Error response. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |

