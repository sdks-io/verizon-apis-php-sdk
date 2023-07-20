
# Cluster Provider Params

## Structure

`ClusterProviderParams`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `modifiedAt` | `?string` | Optional | - | getModifiedAt(): ?string | setModifiedAt(?string modifiedAt): void |
| `params` | `?string` | Optional | - | getParams(): ?string | setParams(?string params): void |
| `paramsType` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getParamsType(): ?int | setParamsType(?int paramsType): void |
| `genData` | `?string` | Optional | - | getGenData(): ?string | setGenData(?string genData): void |

## Example (as JSON)

```json
{
  "created_at": "created_at2",
  "modified_at": "modified_at6",
  "params": "params6",
  "params_type": 20,
  "gen_data": "gen_data4"
}
```

