# Diagnostics Factory Reset

```php
$diagnosticsFactoryResetController = $client->getDiagnosticsFactoryResetController();
```

## Class Name

`DiagnosticsFactoryResetController`


# Decives Restart

Performs a device reboot or a factory reset on the modem portion of the device.

```php
function decivesRestart(DeviceResetRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeviceResetRequest`](../../doc/models/device-reset-request.md) | Body, Required | A request to perform a device reboot. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DiagnosticsObservationResult`](../../doc/models/diagnostics-observation-result.md).

## Example Usage

```php
$body = DeviceResetRequestBuilder::init()
    ->accountName('0642233522-00003')
    ->action('reboot')
    ->devices(
        [
            DeviceBuilder::init(
                '355154080648401',
                'IMEI'
            )->build()
        ]
    )->build();

$apiResponse = $diagnosticsFactoryResetController->decivesRestart($body);
```

## Example Response *(as JSON)*

```json
{
  "createdOn": "2019-02-03T06:48:07",
  "transactionID": "9c7bb124-11f5-4ff3-8a88-0eec1ba99205",
  "status": "FACTORY_RESET_PENDING"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response. | [`DeviceDiagnosticsResultException`](../../doc/models/device-diagnostics-result-exception.md) |

