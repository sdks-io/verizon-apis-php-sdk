
# Resources Service Profile With Id

Information about the resource requirements and service characteristics of an edge application. Includes serviceProfileId. Used when retrieving a service profile.

## Structure

`ResourcesServiceProfileWithId`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `serviceProfileId` | `?string` | Optional | Unique identifier for a service profile. | getServiceProfileId(): ?string | setServiceProfileId(?string serviceProfileId): void |
| `clientType` | [`string(ClientTypeEnum)`](../../doc/models/client-type-enum.md) | Required | The category of application client. | getClientType(): string | setClientType(string clientType): void |
| `ecspFilter` | `?string` | Optional | Identity of the preferred Edge Computing Service Provider.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getEcspFilter(): ?string | setEcspFilter(?string ecspFilter): void |
| `clientSchedule` | `?string` | Optional | The expected operation schedule of the application client (e.g. time windows).<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9 ]{3,32}$` | getClientSchedule(): ?string | setClientSchedule(?string clientSchedule): void |
| `clientServiceArea` | `?string` | Optional | The expected location(s) (e.g. route) of the hosting UE during the Client's operation schedule.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9 ]{3,32}$` | getClientServiceArea(): ?string | setClientServiceArea(?string clientServiceArea): void |
| `networkResources` | [`?NetworkResourcesType`](../../doc/models/network-resources-type.md) | Optional | Network resources of a service profile. | getNetworkResources(): ?NetworkResourcesType | setNetworkResources(?NetworkResourcesType networkResources): void |
| `computeResources` | [`?ComputeResourcesType`](../../doc/models/compute-resources-type.md) | Optional | Compute resources of a service profile. | getComputeResources(): ?ComputeResourcesType | setComputeResources(?ComputeResourcesType computeResources): void |
| `properties` | [`?MECPlatformsAdditionalSupportInfo`](../../doc/models/mec-platforms-additional-support-info.md) | Optional | Additional service support information for the MEC platform. | getProperties(): ?MECPlatformsAdditionalSupportInfo | setProperties(?MECPlatformsAdditionalSupportInfo properties): void |

## Example (as JSON)

```json
{
  "serviceProfileId": "4054ea9a-593e-4776-b488-697b1bfa4f3b",
  "clientType": "ComputerVision",
  "ecspFilter": "Verizon",
  "clientSchedule": "time windows",
  "clientServiceArea": "BAY AREA",
  "networkResources": {
    "minBandwidthKbits": 252,
    "serviceContinuitySupport": false,
    "maxRequestRate": 138,
    "maxLatencyMs": 146,
    "minAvailability": 194
  }
}
```

