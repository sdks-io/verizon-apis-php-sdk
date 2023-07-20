
# Services Profile Registration

## Structure

`ServicesProfileRegistration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Id of the service profile. | getId(): ?string | setId(?string id): void |
| `name` | `?string` | Optional | Name for a service profile.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^(.*)$` | getName(): ?string | setName(?string name): void |
| `serviceName` | `?string` | Optional | Service being deployed.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^(.*)$` | getServiceName(): ?string | setServiceName(?string serviceName): void |
| `serviceVersion` | `?string` | Optional | Service version being deployed.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getServiceVersion(): ?string | setServiceVersion(?string serviceVersion): void |
| `currentVersion` | `?string` | Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getCurrentVersion(): ?string | setCurrentVersion(?string currentVersion): void |
| `version` | `?string` | Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getVersion(): ?string | setVersion(?string version): void |
| `state` | [`?string(ServicesProfileRegistrationStateEnum)`](../../doc/models/services-profile-registration-state-enum.md) | Optional | - | getState(): ?string | setState(?string state): void |
| `customerID` | `?string` | Optional | Id of particular customer.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^(.*)$` | getCustomerID(): ?string | setCustomerID(?string customerID): void |
| `createdBy` | `?string` | Optional | **Constraints**: *Maximum Length*: `500`, *Pattern*: `^(.*)$` | getCreatedBy(): ?string | setCreatedBy(?string createdBy): void |
| `createdAt` | `?string` | Optional | **Constraints**: *Maximum Length*: `500`, *Pattern*: `^(.*)$` | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `lastUpdatedBy` | `?string` | Optional | **Constraints**: *Maximum Length*: `500`, *Pattern*: `^(.*)$` | getLastUpdatedBy(): ?string | setLastUpdatedBy(?string lastUpdatedBy): void |
| `lastUpdatedAt` | `?string` | Optional | **Constraints**: *Maximum Length*: `500`, *Pattern*: `^(.*)$` | getLastUpdatedAt(): ?string | setLastUpdatedAt(?string lastUpdatedAt): void |
| `linkedServiceInstances` | [`?(LinkedServiceInstance[])`](../../doc/models/linked-service-instance.md) | Optional | - | getLinkedServiceInstances(): ?array | setLinkedServiceInstances(?array linkedServiceInstances): void |
| `accessIntents` | [`?AccessIntents`](../../doc/models/access-intents.md) | Optional | - | getAccessIntents(): ?AccessIntents | setAccessIntents(?AccessIntents accessIntents): void |
| `placementIntents` | [`?PlacementIntents`](../../doc/models/placement-intents.md) | Optional | - | getPlacementIntents(): ?PlacementIntents | setPlacementIntents(?PlacementIntents placementIntents): void |
| `deploymentLocations` | [`?(DeploymentLocation[])`](../../doc/models/deployment-location.md) | Optional | - | getDeploymentLocations(): ?array | setDeploymentLocations(?array deploymentLocations): void |

## Example (as JSON)

```json
{
  "accessIntents": {},
  "createdAt": "2022-08-03T03:43:17.504Z",
  "createdBy": "acme-user",
  "customerID": "acme",
  "deploymentLocations": [],
  "id": "6789409c-12c3-4fc9-b64f-71d1611c4f09",
  "lastUpdatedAt": "2022-08-03T03:43:17.504Z",
  "linkedServiceInstances": [],
  "name": "mongo-pmec-profile-mdp7",
  "placementIntents": {
    "intentChain": [
      {
        "input": {
          "deploymentLocations": [
            {
              "csp": "AWS_WL",
              "region": "US_WEST_2",
              "zoneId": [
                "us-west-2-wl1-den-wlz-1"
              ]
            }
          ]
        },
        "name": "Compliance"
      }
    ]
  },
  "serviceName": "mongodb-customer-prerun",
  "serviceVersion": "1.0.0",
  "state": "DRAFT",
  "version": "1.0.0",
  "currentVersion": "currentVersion0"
}
```

