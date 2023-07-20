
# Cluster Configuration

## Structure

`ClusterConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `tags` | [`?EdgeServiceLaunchParams`](../../doc/models/edge-service-launch-params.md) | Optional | - | getTags(): ?EdgeServiceLaunchParams | setTags(?EdgeServiceLaunchParams tags): void |
| `endPointAccessType` | [`?string(ClusterConfigEndpointAccessTypeEnum)`](../../doc/models/cluster-config-endpoint-access-type-enum.md) | Optional | **Default**: `ClusterConfigEndpointAccessTypeEnum::PRIVATEACCESS` | getEndPointAccessType(): ?string | setEndPointAccessType(?string endPointAccessType): void |
| `autoCreateNetworkInfra` | `?bool` | Optional | **Default**: `true` | getAutoCreateNetworkInfra(): ?bool | setAutoCreateNetworkInfra(?bool autoCreateNetworkInfra): void |
| `infraIPv4range` | `?string` | Optional | **Default**: `'192.168.0.0/16'` | getInfraIPv4range(): ?string | setInfraIPv4range(?string infraIPv4range): void |
| `networkNatMode` | [`?string(NetworkNatModeEnum)`](../../doc/models/network-nat-mode-enum.md) | Optional | **Default**: `NetworkNatModeEnum::SINGLE` | getNetworkNatMode(): ?string | setNetworkNatMode(?string networkNatMode): void |
| `availabilityZones` | [`?(IdList[])`](../../doc/models/id-list.md) | Optional | **Constraints**: *Maximum Items*: `100` | getAvailabilityZones(): ?array | setAvailabilityZones(?array availabilityZones): void |
| `privateNetworkInfraIds` | [`?(IdList[])`](../../doc/models/id-list.md) | Optional | **Constraints**: *Maximum Items*: `100` | getPrivateNetworkInfraIds(): ?array | setPrivateNetworkInfraIds(?array privateNetworkInfraIds): void |
| `publicNetworkInfraIds` | [`?(IdList[])`](../../doc/models/id-list.md) | Optional | **Constraints**: *Maximum Items*: `100` | getPublicNetworkInfraIds(): ?array | setPublicNetworkInfraIds(?array publicNetworkInfraIds): void |

## Example (as JSON)

```json
{
  "autoCreateNetworkInfra": true,
  "networkNatMode": "single",
  "tags": {
    "key": "key0",
    "value": "value2"
  },
  "endPointAccessType": "privatePublicAccess",
  "infraIPv4range": "infraIPv4range0"
}
```

