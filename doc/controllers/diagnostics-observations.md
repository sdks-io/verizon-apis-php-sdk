# Diagnostics Observations

```php
$diagnosticsObservationsController = $client->getDiagnosticsObservationsController();
```

## Class Name

`DiagnosticsObservationsController`

## Methods

* [Start Diagnostics Observation](../../doc/controllers/diagnostics-observations.md#start-diagnostics-observation)
* [Stop Diagnostics Observation](../../doc/controllers/diagnostics-observations.md#stop-diagnostics-observation)


# Start Diagnostics Observation

This endpoint allows the user to start or change observe diagnostics.

```php
function startDiagnosticsObservation(ObservationRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ObservationRequest`](../../doc/models/observation-request.md) | Body, Required | Request for device observation information. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DiagnosticsObservationResult`](../../doc/models/diagnostics-observation-result.md).

## Example Usage

```php
$body = ObservationRequestBuilder::init(
    'TestQAAccount',
    [
        DeviceBuilder::init(
            '864508030026238',
            'IMEI'
        )->build()
    ],
    [
        ObservationRequestAttributeBuilder::init()
            ->name(AttributeIdentifierEnum::RADIO_SIGNAL_STRENGTH)
            ->build(),
        ObservationRequestAttributeBuilder::init()
            ->name(AttributeIdentifierEnum::LINK_QUALITY)
            ->build(),
        ObservationRequestAttributeBuilder::init()
            ->name(AttributeIdentifierEnum::NETWORK_BEARER)
            ->build(),
        ObservationRequestAttributeBuilder::init()
            ->name(AttributeIdentifierEnum::CELL_ID)
            ->build()
    ]
)
    ->frequency(
        NumericalDataBuilder::init()
            ->value(15)
            ->unit(NumericalDataUnitEnum::SECOND)
            ->build()
    )
    ->duration(
        NumericalDataBuilder::init()
            ->value(15)
            ->unit(NumericalDataUnitEnum::SECOND)
            ->build()
    )
    ->build();

$apiResponse = $diagnosticsObservationsController->startDiagnosticsObservation($body);
```

## Example Response *(as JSON)*

```json
{
  "createdOn": "2019-09-10T19:05:33.33Z",
  "transactionID": "9c7bb124-11f5-4ff3-8a88-0eec1ba99205",
  "status": "CANCEL_OBSERVE_PENDING"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response. | [`DeviceDiagnosticsResultException`](../../doc/models/device-diagnostics-result-exception.md) |


# Stop Diagnostics Observation

This endpoint allows the user to stop or reset observe diagnostics.

```php
function stopDiagnosticsObservation(string $transactionId, string $accountName): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transactionId` | `string` | Query, Required | The ID value associated with the transaction. |
| `accountName` | `string` | Query, Required | The numeric account name. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DiagnosticsObservationResult`](../../doc/models/diagnostics-observation-result.md).

## Example Usage

```php
$transactionId = '5f4bd2ff-5d7f-444d-af17-3f6a80bb2a94';

$accountName = '0000123456-00001';

$apiResponse = $diagnosticsObservationsController->stopDiagnosticsObservation(
    $transactionId,
    $accountName
);
```

## Example Response *(as JSON)*

```json
{
  "createdOn": "2019-09-10T19:05:33.33Z",
  "transactionID": "9c7bb124-11f5-4ff3-8a88-0eec1ba99205",
  "status": "CANCEL_OBSERVE_PENDING"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response. | [`DeviceDiagnosticsResultException`](../../doc/models/device-diagnostics-result-exception.md) |

