
# Deployment Location

## Structure

`DeploymentLocation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ern` | `?string` | Optional | Edge Resource Number.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^(.*)$` | getErn(): ?string | setErn(?string ern): void |
| `cluster` | [`?DeploymentLocationCluster`](../../doc/models/deployment-location-cluster.md) | Optional | - | getCluster(): ?DeploymentLocationCluster | setCluster(?DeploymentLocationCluster cluster): void |
| `namespace` | [`?DeploymentLocationNamespace`](../../doc/models/deployment-location-namespace.md) | Optional | - | getNamespace(): ?DeploymentLocationNamespace | setNamespace(?DeploymentLocationNamespace namespace): void |

## Example (as JSON)

```json
{
  "ern": "us-east-1-wl1-dfw-wlz-1",
  "cluster": {
    "name": "",
    "id": ""
  },
  "namespace": {
    "name": "",
    "id": ""
  }
}
```

