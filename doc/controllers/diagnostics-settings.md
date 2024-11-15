# Diagnostics Settings

```php
$diagnosticsSettingsController = $client->getDiagnosticsSettingsController();
```

## Class Name

`DiagnosticsSettingsController`


# List Diagnostics Settings

This endpoint retrieves diagnostics settings synchronously.

```php
function listDiagnosticsSettings(string $accountName, string $devices): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Query, Required | Account identifier. |
| `devices` | `string` | Query, Required | Devices list format: [{"id":"{imei1}","kind":"imei"},{"id":"{imei2}","kind":"imei"}]. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DiagnosticObservationSetting[]`](../../doc/models/diagnostic-observation-setting.md).

## Example Usage

```php
$accountName = '0000123456-00001';

$devices = '[{"id":"864508030026238","kind":"IMEI"},{"id":"864508030026238","kind":"IMEI"}]';

$apiResponse = $diagnosticsSettingsController->listDiagnosticsSettings(
    $accountName,
    $devices
);
```

## Example Response *(as JSON)*

```json
[
  {
    "accountName": "string",
    "device": {
      "id": "864508030026238",
      "kind": "IMEI"
    },
    "attributes": [
      {
        "name": "MANUFACTURER",
        "value": "string",
        "createdOn": "2019-09-07T23:08:03.532Z",
        "isObservable": true,
        "isObserving": true,
        "frequency": {
          "value": 5,
          "unit": "SECOND"
        }
      }
    ]
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response. | [`DeviceDiagnosticsResultException`](../../doc/models/device-diagnostics-result-exception.md) |

