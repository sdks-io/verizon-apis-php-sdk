# 5G Edge Platforms

```php
$m5gEdgePlatformsController = $client->getM5gEdgePlatformsController();
```

## Class Name

`M5gEdgePlatformsController`

## Methods

* [List MEC Platforms](../../doc/controllers/5g-edge-platforms.md#list-mec-platforms)
* [List Regions](../../doc/controllers/5g-edge-platforms.md#list-regions)


# List MEC Platforms

Returns a list of optimal MEC Platforms where you can register your deployed application. **Note:** If a query is sent with all of the parameters, it will fail with a "400" error. You can search based on the following parameter combinations - region plus Service Profile ID and subscriber density (density is optional but recommended), region plus UEIdentity(Including UEIdentity Type) or Service Profile ID plus UEIdentity(Including UEIdentity Type).

```php
function listMECPlatforms(
    ?string $region = null,
    ?string $serviceProfileId = null,
    ?int $subscriberDensity = null,
    ?string $uEIdentityType = null,
    ?string $uEIdentity = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `region` | `?string` | Query, Optional | MEC region name. Current valid values are US_WEST_2 and US_EAST_1. |
| `serviceProfileId` | `?string` | Query, Optional | Unique identifier of the service profile. |
| `subscriberDensity` | `?int` | Query, Optional | Minimum number of 4G/5G subscribers per square kilometer. |
| `uEIdentityType` | [`?string(UserEquipmentIdentityTypeEnum)`](../../doc/models/user-equipment-identity-type-enum.md) | Query, Optional | Type of User Equipment identifier used in `UEIdentity`. |
| `uEIdentity` | `?string` | Query, Optional | The identifier value for User Equipment. The type of identifier is defined by the 'UEIdentityType' parameter. The`IPAddress`format can be IPv4 or IPv6. |

## Requires scope

### oAuth2

`discovery:read`, `serviceprofile:read`, `serviceprofile:write`, `serviceregistry:read`, `serviceregistry:write`, `ts.application.ro`, `ts.mec.fullaccess`, `ts.mec.limitaccess`

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ListMECPlatformsResult`](../../doc/models/list-mec-platforms-result.md).

## Example Usage

```php
$region = 'US_WEST_2';

$uEIdentityType = UserEquipmentIdentityTypeEnum::IPADDRESS;

$uEIdentity = '2600:1010:b1d0:0000:0000:0000:0000:0012';

$apiResponse = $m5gEdgePlatformsController->listMECPlatforms(
    $region,
    null,
    null,
    $uEIdentityType,
    $uEIdentity
);
```

## Example Response *(as JSON)*

```json
{
  "MECPlatforms": [
    {
      "ern": "5x4VBwmfZbzSL3",
      "zone": "e5oV52kMGjDLhnJSsLJZL",
      "region": "US_WEST_2",
      "status": "unknown"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | HTTP 400 Bad Request. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |
| 401 | HTTP 401 Unauthorized. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |
| Default | HTTP 500 Internal Server Error. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |


# List Regions

List the geographical regions available, based on the user's bearer token. **Note:** Country code, Metropolitan area, Area and Zone are future functionality and will currently return a "null" value.

```php
function listRegions(): ApiResponse
```

## Requires scope

### oAuth2

`discovery:read`, `serviceprofile:read`, `serviceprofile:write`, `serviceregistry:read`, `serviceregistry:write`, `ts.application.ro`, `ts.mec.fullaccess`, `ts.mec.limitaccess`

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ListRegionsResult`](../../doc/models/list-regions-result.md).

## Example Usage

```php
$apiResponse = $m5gEdgePlatformsController->listRegions();
```

## Example Response *(as JSON)*

```json
{
  "regions": [
    {
      "regionId": "consectetur",
      "name": "US_EAST_1",
      "countryCode": "nr",
      "metro": "e1D",
      "area": "IdUESF"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | HTTP 400 Bad Request. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |
| 401 | HTTP 401 Unauthorized. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |
| Default | HTTP 500 Internal Server Error. | [`EdgeDiscoveryResultException`](../../doc/models/edge-discovery-result-exception.md) |

