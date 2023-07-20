
# Create Service Launch Request

## Structure

`CreateServiceLaunchRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Name of the received request.<br>**Constraints**: *Maximum Length*: `50`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getName(): string | setName(string name): void |
| `serviceName` | `?string` | Optional | Service being deployed.<br>**Constraints**: *Maximum Length*: `50`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getServiceName(): ?string | setServiceName(?string serviceName): void |
| `cspProfileId` | `string` | Required | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getCspProfileId(): string | setCspProfileId(string cspProfileId): void |
| `serviceProfileId` | `string` | Required | The service profile ID that is created during the post-service API.<br>**Constraints**: *Maximum Length*: `50`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getServiceProfileId(): string | setServiceProfileId(string serviceProfileId): void |
| `serviceVersion` | `?string` | Optional | Service version being deployed.<br>**Constraints**: *Maximum Length*: `50`, *Pattern*: `^(.*)$` | getServiceVersion(): ?string | setServiceVersion(?string serviceVersion): void |

## Example (as JSON)

```json
{
  "name": "MdpTest3",
  "serviceName": "mongodbdemo0710",
  "serviceVersion": "2.5.6",
  "serviceProfileId": "6789409c-12c3-4fc9-b64f-71d1611c4f09",
  "cspProfileId": "6789409c-12c3-4fc9-b64f-71d1611c4f09"
}
```

