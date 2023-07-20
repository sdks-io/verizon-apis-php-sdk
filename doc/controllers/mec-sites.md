# MEC Sites

```php
$mECSitesController = $client->getMECSitesController();
```

## Class Name

`MECSitesController`

## Methods

* [List ERN Cluster Namespaces](../../doc/controllers/mec-sites.md#list-ern-cluster-namespaces)
* [List MEC Site Locations](../../doc/controllers/mec-sites.md#list-mec-site-locations)


# List ERN Cluster Namespaces

Retrieve all clusters for the customer.

```php
function listERNClusterNamespaces(
    string $userId,
    string $role,
    string $customerId,
    string $requestId,
    ?string $eRN = null,
    ?string $name = null,
    ?string $offset = null,
    ?string $limit = null,
    ?string $correlationId = null,
    ?string $clusterState = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `string` | Header, Required | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `role` | `string` | Header, Required | **Constraints**: *Maximum Length*: `500` |
| `customerId` | `string` | Header, Required | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `requestId` | `string` | Header, Required | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `eRN` | `?string` | Query, Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `name` | `?string` | Query, Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `offset` | `?string` | Query, Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `limit` | `?string` | Query, Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` |
| `clusterState` | [`?string(ClusterStateEnum)`](../../doc/models/cluster-state-enum.md) | Query, Optional | **Constraints**: *Maximum Length*: `32` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ClustersNamespaces`](../../doc/models/clusters-namespaces.md).

## Example Usage

```php
$userId = 'userId0';

$role = 'role6';

$customerId = 'customerId6';

$requestId = 'requestId2';

$apiResponse = $mECSitesController->listERNClusterNamespaces(
    $userId,
    $role,
    $customerId,
    $requestId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 404 | Not found. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| Default | Unexpected error. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |


# List MEC Site Locations

Supports fetching MEC locations so the user can view the city.

```php
function listMECSiteLocations(?string $accountName = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `?string` | Header, Optional | User account name.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[A-Za-z0-9]` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`MECSiteLocationsResult`](../../doc/models/mec-site-locations-result.md).

## Example Usage

```php
$accountName = 'test_account1';

$apiResponse = $mECSitesController->listMECSiteLocations($accountName);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error Response. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |

