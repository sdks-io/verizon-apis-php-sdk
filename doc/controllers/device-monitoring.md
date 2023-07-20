# Device Monitoring

```php
$deviceMonitoringController = $client->getDeviceMonitoringController();
```

## Class Name

`DeviceMonitoringController`

## Methods

* [Stop Device Reachability](../../doc/controllers/device-monitoring.md#stop-device-reachability)
* [Device Reachability](../../doc/controllers/device-monitoring.md#device-reachability)


# Stop Device Reachability

Stop Device Reachability monitors.

```php
function stopDeviceReachability(string $accountName, array $monitorIds): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Query, Required | The numeric name of the account. |
| `monitorIds` | `string[]` | Query, Required | The array contains the monitorIDs (UUID) for which the monitor is to be deleted. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`RequestResponse`](../../doc/models/request-response.md).

## Example Usage

```php
$accountName = '0242123520-00001';

$monitorIds = [
    '35596ca6-bab4-4333-a914-42b4fc2da54c',
    '35596ca6-bab4-4333-a914-42b4fc2da54b'
];

$apiResponse = $deviceMonitoringController->stopDeviceReachability(
    $accountName,
    $monitorIds
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error Response | [`RestErrorResponseException`](../../doc/models/rest-error-response-exception.md) |


# Device Reachability

Register for notification reports based on the request type.

```php
function deviceReachability(NotificationReportRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`NotificationReportRequest`](../../doc/models/notification-report-request.md) | Body, Required | Create Reachability Report Request |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`RequestResponse`](../../doc/models/request-response.md).

## Example Usage

```php
$body = NotificationReportRequestBuilder::init(
    '0242072320-00001',
    'REACHABLE_FOR_DATA',
    [
        DeviceListBuilder::init()
            ->deviceIds(
                [
                    DeviceId1Builder::init()
                        ->id('89148000004292933820')
                        ->kind(KindEnum::ICCID)
                        ->build(),
                    DeviceId1Builder::init()
                        ->id('89148000003164287919')
                        ->kind(KindEnum::ICCID)
                        ->build()
                ]
            )
            ->build()
    ],
    '2019-12-02T15:00:00-08:00Z'
)->build();

$apiResponse = $deviceMonitoringController->deviceReachability($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error Response | [`RestErrorResponseException`](../../doc/models/rest-error-response-exception.md) |

