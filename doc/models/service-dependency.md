
# Service Dependency

Dependency of the service.

## Structure

`ServiceDependency`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `rank` | `?int` | Optional | The dependency rank.<br>**Constraints**: `<= 2048` | getRank(): ?int | setRank(?int rank): void |
| `type` | [`?string(ServiceTypeEnum)`](../../doc/models/service-type-enum.md) | Optional | Service Type e.g. Installation, Operations, Custom.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getType(): ?string | setType(?string type): void |
| `serviceName` | `?string` | Optional | Name of the dependent service.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getServiceName(): ?string | setServiceName(?string serviceName): void |
| `version` | `?string` | Optional | Version of the service being used.<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[0-9\.]+$` | getVersion(): ?string | setVersion(?string version): void |
| `packageType` | [`?string(ServiceDependencyPackageTypeEnum)`](../../doc/models/service-dependency-package-type-enum.md) | Optional | Deployment package type.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getPackageType(): ?string | setPackageType(?string packageType): void |

## Example (as JSON)

```json
{
  "rank": 0,
  "type": "MY_SERVICE",
  "serviceName": "MecService",
  "version": "1.0.0",
  "packageType": "HELM"
}
```

