
# Service Launch Request Result

## Structure

`ServiceLaunchRequestResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique service profile ID. | getId(): ?string | setId(?string id): void |
| `name` | `?string` | Optional | Service request name.<br>**Constraints**: *Maximum Length*: `50`, *Pattern*: `^(.*)$` | getName(): ?string | setName(?string name): void |
| `serviceName` | `?string` | Optional | Service being deployed.<br>**Constraints**: *Maximum Length*: `50`, *Pattern*: `^(.*)$` | getServiceName(): ?string | setServiceName(?string serviceName): void |
| `state` | [`?string(ServiceLaunchStateEnum)`](../../doc/models/service-launch-state-enum.md) | Optional | **Constraints**: *Maximum Length*: `60`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getState(): ?string | setState(?string state): void |
| `serviceVersion` | `?string` | Optional | Service version being deployed.<br>**Constraints**: *Maximum Length*: `50`, *Pattern*: `^(.*)$` | getServiceVersion(): ?string | setServiceVersion(?string serviceVersion): void |
| `serviceId` | `?string` | Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^(.*)$` | getServiceId(): ?string | setServiceId(?string serviceId): void |
| `serviceProfileId` | `?string` | Optional | The service profile ID that is created during the post-service API.<br>**Constraints**: *Maximum Length*: `50`, *Pattern*: `^(.*)$` | getServiceProfileId(): ?string | setServiceProfileId(?string serviceProfileId): void |
| `cspProfileId` | `?string` | Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^(.*)$` | getCspProfileId(): ?string | setCspProfileId(?string cspProfileId): void |
| `configFiles` | [`?(ConfigFileItem[])`](../../doc/models/config-file-item.md) | Optional | **Constraints**: *Maximum Items*: `100` | getConfigFiles(): ?array | setConfigFiles(?array configFiles): void |
| `linkedServiceInstances` | [`?(LinkedServiceInstance[])`](../../doc/models/linked-service-instance.md) | Optional | **Constraints**: *Maximum Items*: `100` | getLinkedServiceInstances(): ?array | setLinkedServiceInstances(?array linkedServiceInstances): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `updatedBy` | `?string` | Optional | **Constraints**: *Maximum Length*: `500`, *Pattern*: `^(.*)$` | getUpdatedBy(): ?string | setUpdatedBy(?string updatedBy): void |

## Example (as JSON)

```json
{
  "createdAt": "2022-08-19T13:06:26.541Z",
  "id": "f865bb78-dd8b-4261-83ed-c3e3e081fe50",
  "linkedServiceInstances": [
    {
      "id": "e0abe65f-b294-4673-a60c-d31f26ca7a8c"
    }
  ],
  "name": "mdp_launch_request_908762",
  "serviceId": "8a29c449-f88e-4b79-8248-2c2e5e86fd98",
  "serviceName": "mongodb-customer-prerun-2",
  "serviceProfileId": "2c5c1fb6-a1fe-4de3-8a6e-e2d0663eacf5",
  "serviceVersion": "2.3.4",
  "state": "INSTANTIATED",
  "updatedAt": "2022-08-19T13:07:36.242Z"
}
```

