# Service Launch Requests

```php
$serviceLaunchRequestsController = $client->getServiceLaunchRequestsController();
```

## Class Name

`ServiceLaunchRequestsController`

## Methods

* [Create Service Launch Request](../../doc/controllers/service-launch-requests.md#create-service-launch-request)
* [Get Service Launch Request](../../doc/controllers/service-launch-requests.md#get-service-launch-request)
* [Submit Service Launch Request](../../doc/controllers/service-launch-requests.md#submit-service-launch-request)


# Create Service Launch Request

Create a request for launching a service.

```php
function createServiceLaunchRequest(
    string $accountName,
    string $userName,
    ?string $correlationId = null,
    ?CreateServiceLaunchRequest $body = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `userName` | `string` | Header, Required | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `body` | [`?CreateServiceLaunchRequest`](../../doc/models/create-service-launch-request.md) | Body, Optional | Request for launching a service. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ServiceLaunchRequestResult`](../../doc/models/service-launch-request-result.md).

## Example Usage

```php
$accountName = 'test_account1';

$userName = 'acme-user';

$correlationId = 'eda2cb4e-50ef-4ae8-b304-7d2f0f7a21c1';

$body = CreateServiceLaunchRequestBuilder::init(
    'MdpTest3',
    '6789409c-12c3-4fc9-b64f-71d1611c4f09',
    '6789409c-12c3-4fc9-b64f-71d1611c4f09'
)
    ->serviceName('mongodbdemo0710')
    ->serviceVersion('2.5.6')
    ->build();

$apiResponse = $serviceLaunchRequestsController->createServiceLaunchRequest(
    $accountName,
    $userName,
    $correlationId,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | HTTP 400 Bad Request. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 401 | HTTP 401 Unauthorized. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 404 | HTTP 404 Not found. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| Default | HTTP 500 Internal Server Error. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |


# Get Service Launch Request

Get information related to a service launch request.

```php
function getServiceLaunchRequest(
    string $accountName,
    string $userName,
    ?string $id = null,
    ?string $correlationId = null,
    ?string $name = null,
    ?int $offset = null,
    ?int $limit = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `userName` | `string` | Header, Required | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `id` | `?string` | Query, Optional | Service launch request Id. |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `name` | `?string` | Query, Optional | Service request name.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `offset` | `?int` | Query, Optional | **Constraints**: `>= 0`, `<= 1024` |
| `limit` | `?int` | Query, Optional | **Constraints**: `>= 0`, `<= 1024` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ServiceLaunchRequestsResult`](../../doc/models/service-launch-requests-result.md).

## Example Usage

```php
$accountName = 'test_account1';

$userName = 'acme-user';

$id = 'eda2cb4e-50ef-4ae8-b304-7d2f0f7a21c1';

$correlationId = 'eda2cb4e-50ef-4ae8-b304-7d2f0f7a21c1';

$name = 'MdpTest3';

$offset = 15;

$limit = 16;

$apiResponse = $serviceLaunchRequestsController->getServiceLaunchRequest(
    $accountName,
    $userName,
    $id,
    $correlationId,
    $name,
    $offset,
    $limit
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 401 | Unauthorized. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 403 | Forbidden. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 404 | Not found. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 415 | Unsupported media type. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 429 | Too many requests. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| Default | Unexpected error. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |


# Submit Service Launch Request

This endpoint allows the user to submit a service request that describes the resource requirements of a service. This API submit an object of the service request and moves it to STATE from “DRAFT”  to “INSTANTIATED” and triggers the launch flow.

```php
function submitServiceLaunchRequest(
    string $id,
    string $accountName,
    string $userName,
    ?string $correlationId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | A unique Id assigned to the request by system calling API. |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[A-Za-z0-9]` |
| `userName` | `string` | Header, Required | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[A-Za-z0-9]` |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ServiceLaunchRequestResult`](../../doc/models/service-launch-request-result.md).

## Example Usage

```php
$id = 'eda2cb4e-50ef-4ae8-b304-7d2f0f7a21c1';

$accountName = 'test_account1';

$userName = 'acme-user';

$correlationId = 'eda2cb4e-50ef-4ae8-b304-7d2f0f7a21c1';

$apiResponse = $serviceLaunchRequestsController->submitServiceLaunchRequest(
    $id,
    $accountName,
    $userName,
    $correlationId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | HTTP 400 Bad Request. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 401 | HTTP 401 Unauthorized. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 412 | Precondition Failed. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| Default | HTTP 500 Internal Server Error. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |

