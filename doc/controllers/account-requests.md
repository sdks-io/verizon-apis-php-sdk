# Account Requests

```php
$accountRequestsController = $client->getAccountRequestsController();
```

## Class Name

`AccountRequestsController`


# Get Current Asynchronous Request Status

Returns the current status of an asynchronous request that was made for a single device.

```php
function getCurrentAsynchronousRequestStatus(string $aname, string $requestId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `aname` | `string` | Template, Required | Account name. |
| `requestId` | `string` | Template, Required | UUID from synchronous response. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`AsynchronousRequestResult`](../../doc/models/asynchronous-request-result.md).

## Example Usage

```php
$aname = '0252012345-00001';

$requestId = '86c83330-4bf5-4235-9c4e-a83f93aeae4c';

$apiResponse = $accountRequestsController->getCurrentAsynchronousRequestStatus(
    $aname,
    $requestId
);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "86c83330-4bf5-4235-9c4e-a83f93aeae4c",
  "status": "Success"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |

