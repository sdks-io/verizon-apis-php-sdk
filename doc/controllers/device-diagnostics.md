# Device Diagnostics

```php
$deviceDiagnosticsController = $client->getDeviceDiagnosticsController();
```

## Class Name

`DeviceDiagnosticsController`

## Methods

* [Device Reachability Status Using POST](../../doc/controllers/device-diagnostics.md#device-reachability-status-using-post)
* [Retrieve Active Monitors Using POST](../../doc/controllers/device-diagnostics.md#retrieve-active-monitors-using-post)


# Device Reachability Status Using POST

If the devices do not already exist in the account, this API resource adds them before activation.

```php
function deviceReachabilityStatusUsingPOST(NotificationReportStatusRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`NotificationReportStatusRequest`](../../doc/models/notification-report-status-request.md) | Body, Required | Retrieve Reachability Report Status for a device. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = NotificationReportStatusRequestBuilder::init(
    '0868924207-00001',
    DeviceIdBuilder::init(
        '990013907835573',
        'imei'
    )->build(),
    'requestType6'
)->build();

$apiResponse = $deviceDiagnosticsController->deviceReachabilityStatusUsingPOST($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "595f5c44-c31c-4552-8670-020a1545a84d"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Retrieve Active Monitors Using POST

Retrieve all the active monitors.

```php
function retrieveActiveMonitorsUsingPOST(RetrieveMonitorsRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`RetrieveMonitorsRequest`](../../doc/models/retrieve-monitors-request.md) | Body, Required | Retrieve Monitor Request. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = RetrieveMonitorsRequestBuilder::init(
    '0868924207-00001',
    [
        AccountDeviceListBuilder::init(
            [
                DeviceIdBuilder::init(
                    '990013907835573',
                    'imei'
                )->build(),
                DeviceIdBuilder::init(
                    '89141390780800784259',
                    'iccid'
                )->build()
            ]
        )->build(),
        AccountDeviceListBuilder::init(
            [
                DeviceIdBuilder::init(
                    '990013907884259',
                    'imei'
                )->build(),
                DeviceIdBuilder::init(
                    '89141390780800735573',
                    'iccid'
                )->build()
            ]
        )->build()
    ]
)
    ->monitorType('monitorType')
    ->build();

$apiResponse = $deviceDiagnosticsController->retrieveActiveMonitorsUsingPOST($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "595f5c44-c31c-4552-8670-020a1545a84d"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |

