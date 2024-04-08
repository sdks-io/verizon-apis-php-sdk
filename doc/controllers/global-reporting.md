# Global Reporting

```php
$globalReportingController = $client->getGlobalReportingController();
```

## Class Name

`GlobalReportingController`

## Methods

* [Deviceprovhistory Using POST](../../doc/controllers/global-reporting.md#deviceprovhistory-using-post)
* [Requeststatususing GET](../../doc/controllers/global-reporting.md#requeststatususing-get)


# Deviceprovhistory Using POST

Retreive the provisioning history of a specific device or devices.

```php
function deviceprovhistoryUsingPOST(ESIMProvhistoryRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ESIMProvhistoryRequest`](../../doc/models/esim-provhistory-request.md) | Body, Required | Device Provisioning History |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ESIMRequestResponse`](../../doc/models/esim-request-response.md).

## Example Usage

```php
$body = ESIMProvhistoryRequestBuilder::init()
    ->accountName('0000123456-00001')
    ->earliest(DateTimeHelper::fromRfc3339DateTime('10/15/2021 04:49:35'))
    ->latest(DateTimeHelper::fromRfc3339DateTime('10/15/2021 04:49:49'))
    ->build();

$apiResponse = $globalReportingController->deviceprovhistoryUsingPOST($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "d1f08526-5443-4054-9a29-4456490ea9f8"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 401 | Unauthorized | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 403 | Forbidden | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 404 | Not Found / Does not exist | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 406 | Format / Request Unacceptable | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 429 | Too many requests | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| Default | Error response | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |


# Requeststatususing GET

Get the status of a request made with the Device Actions.

```php
function requeststatususingGET(string $accountname, string $requestID): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountname` | `string` | Template, Required | - |
| `requestID` | `string` | Template, Required | - |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ESIMStatusResponse`](../../doc/models/esim-status-response.md).

## Example Usage

```php
$accountname = '0000123456-00001';

$requestID = '86c83330-4bf5-4235-9c4e-a83f93aeae4c';

$apiResponse = $globalReportingController->requeststatususingGET(
    $accountname,
    $requestID
);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "d1f08526-5443-4054-9a29-4456490ea9f8",
  "status": "Success",
  "subrequests": [
    {
      "id": "32-digit EID",
      "kind": "eid"
    },
    {
      "status": "success"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 401 | Unauthorized | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 403 | Forbidden | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 404 | Not Found / Does not exist | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 406 | Format / Request Unacceptable | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| 429 | Too many requests | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |
| Default | Error response | [`ESIMRestErrorResponseException`](../../doc/models/esim-rest-error-response-exception.md) |

