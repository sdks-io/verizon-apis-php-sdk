
# MEC Performance Query Result

Result of the query for obtaining MEC performance metrics.

## Structure

`MECPerformanceQueryResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | Name of the parameter. | getName(): ?string | setName(?string name): void |
| `data` | `?(array<?string>)` | Optional | Parameter values. | getData(): ?array | setData(?array data): void |

## Example (as JSON)

```json
{
  "name": "NetworkAvailability",
  "data": [
    "100",
    "percent",
    "high"
  ]
}
```

