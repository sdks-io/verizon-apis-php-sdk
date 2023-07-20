
# Create Service Profile Request

## Structure

`CreateServiceProfileRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | Name for a service profile.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^(.*)$` | getName(): ?string | setName(?string name): void |
| `serviceName` | `?string` | Optional | Service being deployed.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^(.*)$` | getServiceName(): ?string | setServiceName(?string serviceName): void |
| `serviceVersion` | `?string` | Optional | Service version being deployed.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getServiceVersion(): ?string | setServiceVersion(?string serviceVersion): void |
| `customerID` | `?string` | Optional | Id of particular customer.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^(.*)$` | getCustomerID(): ?string | setCustomerID(?string customerID): void |
| `linkedServiceInstances` | [`?(LinkedServiceInstance[])`](../../doc/models/linked-service-instance.md) | Optional | - | getLinkedServiceInstances(): ?array | setLinkedServiceInstances(?array linkedServiceInstances): void |
| `accessIntents` | [`?AccessIntents`](../../doc/models/access-intents.md) | Optional | - | getAccessIntents(): ?AccessIntents | setAccessIntents(?AccessIntents accessIntents): void |
| `placementIntents` | [`?PlacementIntents`](../../doc/models/placement-intents.md) | Optional | - | getPlacementIntents(): ?PlacementIntents | setPlacementIntents(?PlacementIntents placementIntents): void |
| `deploymentLocations` | [`?(DeploymentLocation[])`](../../doc/models/deployment-location.md) | Optional | - | getDeploymentLocations(): ?array | setDeploymentLocations(?array deploymentLocations): void |

## Example (as JSON)

```json
{
  "name": "mongo-pmec-profile-mdp7",
  "serviceName": "mongodb-customer-prerun",
  "serviceVersion": "1.0.0",
  "customerID": "customerID8",
  "linkedServiceInstances": [
    {
      "id": "00000a3b-0000-0000-0000-000000000000"
    },
    {
      "id": "00000a3c-0000-0000-0000-000000000000"
    }
  ]
}
```

