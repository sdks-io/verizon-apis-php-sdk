
# Cluster Info Details

Details of the cluster information.

## Structure

`ClusterInfoDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `clusterName` | `string` | Required | Name of the cluster to be used.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getClusterName(): string | setClusterName(string clusterName): void |
| `namespace` | `string` | Required | Namespace name inside cluster.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getNamespace(): string | setNamespace(string namespace): void |

## Example (as JSON)

```json
{
  "clusterName": "ctc-1",
  "namespace": "default"
}
```

