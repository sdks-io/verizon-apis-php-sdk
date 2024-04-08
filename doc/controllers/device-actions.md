# Device Actions

```php
$deviceActionsController = $client->getDeviceActionsController();
```

## Class Name

`DeviceActionsController`

## Methods

* [Retrieve the Global Device List](../../doc/controllers/device-actions.md#retrieve-the-global-device-list)
* [Retrieve Device Provisioning History](../../doc/controllers/device-actions.md#retrieve-device-provisioning-history)
* [Get Asynchronous Request Status](../../doc/controllers/device-actions.md#get-asynchronous-request-status)


# Retrieve the Global Device List

Allows the profile to fetch the complete device list. This works with Verizon US and Global profiles.

```php
function retrieveTheGlobalDeviceList(GetDeviceListWithProfilesRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`GetDeviceListWithProfilesRequest`](../../doc/models/get-device-list-with-profiles-request.md) | Body, Required | Device Profile Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`GIORequestResponse`](../../doc/models/gio-request-response.md).

## Example Usage

```php
$body = GetDeviceListWithProfilesRequestBuilder::init(
    '0000123456-00001'
)
    ->provisioningStatusFilter('ACTIVE')
    ->profileStatusFilter('UNKNOWN')
    ->build();

$apiResponse = $deviceActionsController->retrieveTheGlobalDeviceList($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`GIORestErrorResponseException`](../../doc/models/gio-rest-error-response-exception.md) |


# Retrieve Device Provisioning History

Retreive the provisioning history of a specific device or devices.

```php
function retrieveDeviceProvisioningHistory(ProvhistoryRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ProvhistoryRequest`](../../doc/models/provhistory-request.md) | Body, Required | Device Provisioning History |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`GIORequestResponse`](../../doc/models/gio-request-response.md).

## Example Usage

```php
$body = ProvhistoryRequestBuilder::init()
    ->accountName('0000123456-00001')
    ->earliest(DateTimeHelper::fromRfc3339DateTime('10/15/2021 04:49:35'))
    ->latest(DateTimeHelper::fromRfc3339DateTime('10/15/2021 04:49:49'))
    ->build();

$apiResponse = $deviceActionsController->retrieveDeviceProvisioningHistory($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`GIORestErrorResponseException`](../../doc/models/gio-rest-error-response-exception.md) |


# Get Asynchronous Request Status

Get the status of an asynchronous request made with the Device Actions.

```php
function getAsynchronousRequestStatus(string $accountName, string $requestID): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Template, Required | - |
| `requestID` | `string` | Template, Required | - |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`StatusResponse`](../../doc/models/status-response.md).

## Example Usage

```php
$accountName = '0000123456-00001';

$requestID = 'd1f08526-5443-4054-9a29-4456490ea9f8';

$apiResponse = $deviceActionsController->getAsynchronousRequestStatus(
    $accountName,
    $requestID
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`GIORestErrorResponseException`](../../doc/models/gio-rest-error-response-exception.md) |

