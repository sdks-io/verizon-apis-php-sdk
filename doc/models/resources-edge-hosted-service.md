
# Resources Edge Hosted Service

Edge hosted service represented by Service Endpoint definition.

## Structure

`ResourcesEdgeHostedService`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ern` | `?string` | Optional | Edge Resource Name. A string identifier for a set of edge resources.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9-_]{3,32}$` | getErn(): ?string | setErn(?string ern): void |
| `serviceEndpoint` | [`?ResourcesServiceEndpoint`](../../doc/models/resources-service-endpoint.md) | Optional | Service Endpoint path, address, and port. | getServiceEndpoint(): ?ResourcesServiceEndpoint | setServiceEndpoint(?ResourcesServiceEndpoint serviceEndpoint): void |
| `applicationServerProviderId` | `?string` | Optional | Unique ID representing the Edge Application Provider.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getApplicationServerProviderId(): ?string | setApplicationServerProviderId(?string applicationServerProviderId): void |
| `applicationId` | `?string` | Optional | Unique ID representing the Edge Application.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getApplicationId(): ?string | setApplicationId(?string applicationId): void |
| `serviceDescription` | `?string` | Optional | **Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getServiceDescription(): ?string | setServiceDescription(?string serviceDescription): void |

## Example (as JSON)

```json
{
  "ern": "LASVEGAS_NV_WL",
  "applicationServerProviderId": "AWS",
  "applicationId": "IogspaceJan15",
  "serviceDescription": "ThieIt",
  "serviceEndpoint": {
    "URI": "URI6",
    "FQDN": "FQDN2",
    "IPv4Address": "IPv4Address4",
    "IPv6Address": "IPv6Address8",
    "port": 16
  }
}
```

