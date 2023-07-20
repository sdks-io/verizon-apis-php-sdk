
# ERN Cluster

## Structure

`ERNCluster`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `name` | `?string` | Optional | User display name.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getName(): ?string | setName(?string name): void |
| `nameSpace` | [`?(NamespaceIdItem[])`](../../doc/models/namespace-id-item.md) | Optional | - | getNameSpace(): ?array | setNameSpace(?array nameSpace): void |

## Example (as JSON)

```json
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
```

