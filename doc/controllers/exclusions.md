# Exclusions

Excluding or including devices (by consent) for location service

```php
$exclusionsController = $client->getExclusionsController();
```

## Class Name

`ExclusionsController`


# Devices Location Give Consent Async

Create a consent record to use location services as an asynchronous request.

```php
function devicesLocationGiveConsentAsync(?AccountConsentCreate $body = null): ConsentTransactionID
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?AccountConsentCreate`](../../doc/models/account-consent-create.md) | Body, Optional | Account details to create a consent record. |

## Response Type

[`ConsentTransactionID`](../../doc/models/consent-transaction-id.md)

## Example Usage

```php
$result = $exclusionsController->devicesLocationGiveConsentAsync();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Unexpected error. | [`DeviceLocationResultException`](../../doc/models/device-location-result-exception.md) |

