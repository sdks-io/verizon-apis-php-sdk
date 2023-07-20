# Service Instances

```php
$serviceInstancesController = $client->getServiceInstancesController();
```

## Class Name

`ServiceInstancesController`

## Methods

* [Retrieve Service Instance](../../doc/controllers/service-instances.md#retrieve-service-instance)
* [List Services Instances](../../doc/controllers/service-instances.md#list-services-instances)


# Retrieve Service Instance

Retrieve information of a service instance.

```php
function retrieveServiceInstance(
    string $serviceInstanceId,
    string $accountName,
    ?bool $cluster = false
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `serviceInstanceId` | `string` | Template, Required | Unique Id of the service instance.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$` |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `cluster` | `?bool` | Query, Optional | **Default**: `false` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ServiceInstancesResultSetItem`](../../doc/models/service-instances-result-set-item.md).

## Example Usage

```php
$serviceInstanceId = 'e0abe65f-b294-4673-a60c-d31f26ca7a8c';

$accountName = 'test_account1';

$cluster = false;

$apiResponse = $serviceInstancesController->retrieveServiceInstance(
    $serviceInstanceId,
    $accountName,
    $cluster
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


# List Services Instances

Retrieve all instances for all services.

```php
function listServicesInstances(
    string $accountName,
    ?string $offset = null,
    ?string $state = null,
    ?string $limit = null,
    ?string $searchbyname = null,
    ?array $listofstate = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `offset` | `?string` | Query, Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `state` | `?string` | Query, Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `limit` | `?string` | Query, Optional | **Constraints**: *Maximum Length*: `64` |
| `searchbyname` | `?string` | Query, Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `listofstate` | `?(string[])` | Query, Optional | **Constraints**: *Maximum Items*: `100`, *Maximum Length*: `128`, *Pattern*: `^(.*)$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ServiceInstancesResult`](../../doc/models/service-instances-result.md).

## Example Usage

```php
$accountName = 'test_account1';

$state = 'NOT_READY';

$searchbyname = 'PQAService-Demo-08182022';

$apiResponse = $serviceInstancesController->listServicesInstances(
    $accountName,
    $state,
    $searchbyname
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

