
# Clusters Namespaces

## Structure

`ClustersNamespaces`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `location` | [`?ClusterNamespacesLocation`](../../doc/models/cluster-namespaces-location.md) | Optional | - | getLocation(): ?ClusterNamespacesLocation | setLocation(?ClusterNamespacesLocation location): void |
| `cluster` | [`?(ERNCluster[])`](../../doc/models/ern-cluster.md) | Optional | - | getCluster(): ?array | setCluster(?array cluster): void |

## Example (as JSON)

```json
{
  "location": {
    "city": "Dallas",
    "csp": "AWS_WL",
    "ern": "us-east-1-wl1-dfw-wlz-1",
    "latitude": "32.78191623622108",
    "longitude": "-96.78649222062842"
  },
  "cluster": [
    {
      "id": "eda2cb4e-50ef-4ae8-b304-7d2f0f7a21c1",
      "name": "us-south",
      "nameSpace": [
        {
          "id": "eda2cb4e-50ef-4ae8-b304-7d2f0f7a21c1",
          "name": "default"
        },
        {
          "id": "f8dkcb4e-50ef-4ae8-b304-7d2f0f7a21c1",
          "name": "default"
        }
      ]
    }
  ]
}
```

