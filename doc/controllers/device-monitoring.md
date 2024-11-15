# Device Monitoring

```php
$deviceMonitoringController = $client->getDeviceMonitoringController();
```

## Class Name

`DeviceMonitoringController`

## Methods

* [Device Reachability](../../doc/controllers/device-monitoring.md#device-reachability)
* [Stop Device Reachability](../../doc/controllers/device-monitoring.md#stop-device-reachability)


# Device Reachability

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
                    DeviceIdBuilder::init(
                        '89148000004292933820',
                        'iccid'
                    )->build(),
                    DeviceIdBuilder::init(
                        '89148000003164287919',
                        'iccid'
                    )->build()
                ]
            )->build()
    ],
    '2019-12-02T15:00:00-08:00Z'
)->build();

$apiResponse = $deviceMonitoringController->deviceReachability($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error Response | [`RestErrorResponseException`](../../doc/models/rest-error-response-exception.md) |


# Stop Device Reachability

```php
function stopDeviceReachability(?StopMonitorRequest $body = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?StopMonitorRequest`](../../doc/models/stop-monitor-request.md) | Body, Optional | - |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`RequestResponse`](../../doc/models/request-response.md).

## Example Usage

```php
$body = StopMonitorRequestBuilder::init(
    '0242123520-00001',
    [
        '35596ca6-bab4-4333-a914-42b4fc2da54c'
    ]
)->build();

$apiResponse = $deviceMonitoringController->stopDeviceReachability($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error Response | [`RestErrorResponseException`](../../doc/models/rest-error-response-exception.md) |

