# Device SMS Messaging

```php
$deviceSMSMessagingController = $client->getDeviceSMSMessagingController();
```

## Class Name

`DeviceSMSMessagingController`

## Methods

* [Send an Sms Message](../../doc/controllers/device-sms-messaging.md#send-an-sms-message)
* [Get Sms Messages](../../doc/controllers/device-sms-messaging.md#get-sms-messages)
* [Start Sms Message Delivery](../../doc/controllers/device-sms-messaging.md#start-sms-message-delivery)
* [List Sms Message History](../../doc/controllers/device-sms-messaging.md#list-sms-message-history)


# Send an Sms Message

Sends an SMS message to one device. Messages are queued on the M2M MC Platform and sent as soon as possible, but they may be delayed due to traffic and routing considerations.

```php
function sendAnSmsMessage(GIOSMSSendRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`GIOSMSSendRequest`](../../doc/models/giosms-send-request.md) | Body, Required | SMS message to an indiividual device. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`GIORequestResponse`](../../doc/models/gio-request-response.md).

## Example Usage

```php
$body = GIOSMSSendRequestBuilder::init(
    [
        GIODeviceIdBuilder::init(
            'eid',
            '12345678901234567890123456789012'
        )->build()
    ],
    'A text message'
)->build();

$apiResponse = $deviceSMSMessagingController->sendAnSmsMessage($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`GIORestErrorResponseException`](../../doc/models/gio-rest-error-response-exception.md) |


# Get Sms Messages

Retrieves queued SMS messages sent by all M2M MC devices associated with an account.

```php
function getSmsMessages(string $accountName, ?string $next = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Template, Required | Numeric account name |
| `next` | `?string` | Query, Optional | Continue the previous query from the pageUrl in Location Header |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`SmsMessagesResponse`](../../doc/models/sms-messages-response.md).

## Example Usage

```php
$accountName = '0000123456-00001';

$next = 'TheURLForTheNextQuery';

$apiResponse = $deviceSMSMessagingController->getSmsMessages(
    $accountName,
    $next
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`GIORestErrorResponseException`](../../doc/models/gio-rest-error-response-exception.md) |


# Start Sms Message Delivery

Starts delivery of SMS messages for the specified account.

```php
function startSmsMessageDelivery(string $accountName): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Template, Required | Numeric account name |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`SuccessResponse`](../../doc/models/success-response.md).

## Example Usage

```php
$accountName = '0000123456-00001';

$apiResponse = $deviceSMSMessagingController->startSmsMessageDelivery($accountName);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`GIORestErrorResponseException`](../../doc/models/gio-rest-error-response-exception.md) |


# List Sms Message History

Returns a list of sms history for a given device during a specified time frame.

```php
function listSmsMessageHistory(SMSEventHistoryRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`SMSEventHistoryRequest`](../../doc/models/sms-event-history-request.md) | Body, Required | Device Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`GIORequestResponse`](../../doc/models/gio-request-response.md).

## Example Usage

```php
$body = SMSEventHistoryRequestBuilder::init(
    GIODeviceIdBuilder::init(
        'eid',
        '12345678901234567890123456789012'
    )->build()
)->build();

$apiResponse = $deviceSMSMessagingController->listSmsMessageHistory($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`GIORestErrorResponseException`](../../doc/models/gio-rest-error-response-exception.md) |

