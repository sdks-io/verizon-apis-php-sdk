# Service Profiles

```php
$serviceProfilesController = $client->getServiceProfilesController();
```

## Class Name

`ServiceProfilesController`

## Methods

* [Create Service Profile](../../doc/controllers/service-profiles.md#create-service-profile)
* [List Service Profiles](../../doc/controllers/service-profiles.md#list-service-profiles)
* [Get Service Profile](../../doc/controllers/service-profiles.md#get-service-profile)
* [Update Service Profile](../../doc/controllers/service-profiles.md#update-service-profile)
* [Delete Service Profile](../../doc/controllers/service-profiles.md#delete-service-profile)


# Create Service Profile

Creates a service profile that describes the resource requirements of a service.

```php
function createServiceProfile(ResourcesServiceProfile $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ResourcesServiceProfile`](../../doc/models/resources-service-profile.md) | Body, Required | The request body passes all of the needed parameters to create a service profile. Parameters will be edited here rather than the **Parameters** section above. The `maxLatencyMs` and `clientType` parameters are both required in the request body. **Note:** The `maxLatencyMs` value must be submitted in multiples of 5. Additionally, "GPU" is future functionality and the values are not captured. |

## Requires scope

### oAuth2

`discovery:read`, `serviceprofile:read`, `serviceprofile:write`, `serviceregistry:read`, `serviceregistry:write`, `ts.application.ro`, `ts.mec.fullaccess`, `ts.mec.limitaccess`

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`CreateServiceProfileResult`](../../doc/models/create-service-profile-result.md).

## Example Usage

```php
$body = ResourcesServiceProfileBuilder::init(
    ClientTypeEnum::V2_X
)
    ->ecspFilter('Verizon')
    ->clientSchedule('time windows')
    ->clientServiceArea('BAY AREA')
    ->networkResources(
        NetworkResourcesTypeBuilder::init(
            20
        )
            ->minBandwidthKbits(1)
            ->serviceContinuitySupport(true)
            ->maxRequestRate(15)
            ->minAvailability(1)
            ->build()
    )
    ->computeResources(
        ComputeResourcesTypeBuilder::init()
            ->gPU(
                GPUBuilder::init()
                    ->minCoreClockMHz(1)
                    ->minMemoryClockMHz(35740)
                    ->minBandwidthGBs(588)
                    ->minTFLOPS(33)
                    ->build()
            )
            ->minRAMGB(1)
            ->minStorageGB(1)
            ->build()
    )
    ->build();

$apiResponse = $serviceProfilesController->createServiceProfile($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | HTTP 400 Bad Request. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |
| 401 | HTTP 401 Unauthorized. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |
| Default | HTTP 500 Internal Server Error. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |


# List Service Profiles

List all service profiles registered under your API key.

```php
function listServiceProfiles(): ApiResponse
```

## Requires scope

### oAuth2

`discovery:read`, `serviceprofile:read`, `serviceprofile:write`, `serviceregistry:read`, `serviceregistry:write`, `ts.application.ro`, `ts.mec.fullaccess`, `ts.mec.limitaccess`

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ListServiceProfilesResult`](../../doc/models/list-service-profiles-result.md).

## Example Usage

```php
$apiResponse = $serviceProfilesController->listServiceProfiles();
```

## Example Response *(as JSON)*

```json
{
  "status": "Success",
  "data": [
    "serviceProfileId"
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | HTTP 400 Bad Request. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |
| 401 | HTTP 401 Unauthorized. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |
| Default | HTTP 500 Internal Server Error. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |


# Get Service Profile

Returns a specified service profile.

```php
function getServiceProfile(string $serviceProfileId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `serviceProfileId` | `string` | Template, Required | - |

## Requires scope

### oAuth2

`discovery:read`, `serviceprofile:read`, `serviceprofile:write`, `serviceregistry:read`, `serviceregistry:write`, `ts.application.ro`, `ts.mec.fullaccess`, `ts.mec.limitaccess`

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ResourcesServiceProfileWithId`](../../doc/models/resources-service-profile-with-id.md).

## Example Usage

```php
$serviceProfileId = 'serviceProfileId2';

$apiResponse = $serviceProfilesController->getServiceProfile($serviceProfileId);
```

## Example Response *(as JSON)*

```json
{
  "serviceProfileId": "4054ea9a-593e-4776-b488-697b1bfa4f3b",
  "ecspFilter": "Verizon",
  "clientSchedule": "time windows",
  "clientServiceArea": "BAY AREA",
  "clientType": "V2X",
  "networkResources": {
    "minBandwidthKbits": 1,
    "serviceContinuitySupport": true,
    "maxRequestRate": 15,
    "maxLatencyMs": 20,
    "minAvailability": 1
  },
  "computeResources": {
    "GPU": {
      "minCoreClockMHz": 1,
      "minMemoryClockMHz": 35740,
      "minBandwidthGBs": 588,
      "minTFLOPS": 33
    },
    "minRAMGB": 1,
    "minStorageGB": 1
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | HTTP 400 Bad Request. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |
| 401 | HTTP 401 Unauthorized. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |
| Default | HTTP 500 Internal Server Error. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |


# Update Service Profile

Update the definition of a Service Profile.

```php
function updateServiceProfile(string $serviceProfileId, ResourcesServiceProfile $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `serviceProfileId` | `string` | Template, Required | - |
| `body` | [`ResourcesServiceProfile`](../../doc/models/resources-service-profile.md) | Body, Required | The request body passes the rest of the needed parameters to create a service profile. The `maxLatencyMs` and `clientType` parameters are both required in the request body. **Note:** The `maxLatencyMs` value must be submitted in multiples of 5. Additionally, "GPU" is future functionality and the values are not captured. Default values to use are shown. |

## Requires scope

### oAuth2

`discovery:read`, `serviceprofile:read`, `serviceprofile:write`, `serviceregistry:read`, `serviceregistry:write`, `ts.application.ro`, `ts.mec.fullaccess`, `ts.mec.limitaccess`

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`UpdateServiceProfileResult`](../../doc/models/update-service-profile-result.md).

## Example Usage

```php
$serviceProfileId = 'serviceProfileId2';

$body = ResourcesServiceProfileBuilder::init(
    ClientTypeEnum::V2_X
)
    ->ecspFilter('Verizon')
    ->clientSchedule('time windows')
    ->clientServiceArea('BAY AREA')
    ->networkResources(
        NetworkResourcesTypeBuilder::init(
            20
        )
            ->minBandwidthKbits(1)
            ->serviceContinuitySupport(true)
            ->maxRequestRate(15)
            ->minAvailability(1)
            ->build()
    )
    ->computeResources(
        ComputeResourcesTypeBuilder::init()
            ->gPU(
                GPUBuilder::init()
                    ->minCoreClockMHz(1)
                    ->build()
            )
            ->minRAMGB(1)
            ->minStorageGB(1)
            ->build()
    )
    ->build();

$apiResponse = $serviceProfilesController->updateServiceProfile(
    $serviceProfileId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "status": "Success",
  "message": "Service Profile Updated"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | HTTP 400 Bad Request. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |
| 401 | HTTP 401 Unauthorized. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |
| Default | HTTP 500 Internal Server Error. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |


# Delete Service Profile

Delete Service Profile based on unique service profile ID.

```php
function deleteServiceProfile(string $serviceProfileId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `serviceProfileId` | `string` | Template, Required | - |

## Requires scope

### oAuth2

`discovery:read`, `serviceprofile:read`, `serviceprofile:write`, `serviceregistry:read`, `serviceregistry:write`, `ts.application.ro`, `ts.mec.fullaccess`, `ts.mec.limitaccess`

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeleteServiceProfileResult`](../../doc/models/delete-service-profile-result.md).

## Example Usage

```php
$serviceProfileId = 'serviceProfileId2';

$apiResponse = $serviceProfilesController->deleteServiceProfile($serviceProfileId);
```

## Example Response *(as JSON)*

```json
{
  "status": "Success",
  "message": "Service Profile Deleted"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | HTTP 400 Bad Request. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |
| 401 | HTTP 401 Unauthorized. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |
| Default | HTTP 500 Internal Server Error. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |

