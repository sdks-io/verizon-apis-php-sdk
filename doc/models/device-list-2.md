
# Device List 2

## Structure

`DeviceList2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ids` | [`?(Id[])`](../../doc/models/id.md) | Optional | **Constraints**: *Maximum Items*: `100` | getIds(): ?array | setIds(?array ids): void |

## Example (as JSON)

```json
{
  "ids": [
    {
      "id": "id1",
      "kind": "iccid"
    },
    {
      "id": "id2",
      "kind": "imei"
    }
  ]
}
```

