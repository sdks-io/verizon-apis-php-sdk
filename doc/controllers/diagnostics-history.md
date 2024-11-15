# Diagnostics History

```php
$diagnosticsHistoryController = $client->getDiagnosticsHistoryController();
```

## Class Name

`DiagnosticsHistoryController`


# Get Diagnostics History

This endpoint allows the user to get the history data.

```php
function getDiagnosticsHistory(HistorySearchRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`HistorySearchRequest`](../../doc/models/history-search-request.md) | Body, Required | History data information. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`History[]`](../../doc/models/history.md).

## Example Usage

```php
$body = HistorySearchRequestBuilder::init(
    HistorySearchFilterBuilder::init(
        '0000123456-00001',
        DeviceBuilder::init(
            '15-digit IMEI',
            'IMEI'
        )->build()
    )
        ->attributes(
            HistorySearchFilterAttributesBuilder::init()
                ->name(AttributeIdentifierEnum::LINK_QUALITY)
                ->build()
        )
        ->build()
)->build();

$apiResponse = $diagnosticsHistoryController->getDiagnosticsHistory($body);
```

## Example Response *(as JSON)*

```json
[
  {
    "accountName": "0000123456-00001",
    "attributes": {
      "createdOn": "2022-02-10T16:02:21.406Z",
      "name": "LINK_QUALITY",
      "value": "47"
    },
    "device": {
      "id": "15-digit IMEI",
      "kind": "IMEI"
    }
  },
  {
    "accountName": "0000123456-00001",
    "attributes": {
      "createdOn": "2022-02-10T16:02:05.316Z",
      "name": "LINK_QUALITY",
      "value": "47"
    },
    "device": {
      "id": "15-digit IMEI",
      "kind": "IMEI"
    }
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response. | [`DeviceDiagnosticsResultException`](../../doc/models/device-diagnostics-result-exception.md) |

