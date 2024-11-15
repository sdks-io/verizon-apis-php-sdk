
# Promo Alert 1

## Structure

`PromoAlert1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filterCriteria` | `?(array[])` | Optional | - | getFilterCriteria(): ?array | setFilterCriteria(?array filterCriteria): void |
| `condition` | [`?(Keyschunk2[])`](../../doc/models/keyschunk-2.md) | Optional | - | getCondition(): ?array | setCondition(?array condition): void |
| `enablePromoExp` | `?bool` | Optional | - | getEnablePromoExp(): ?bool | setEnablePromoExp(?bool enablePromoExp): void |

## Example (as JSON)

```json
{
  "enablePromoExp": true,
  "filterCriteria": [
    {
      "key1": "val1",
      "key2": "val2"
    },
    {
      "key1": "val1",
      "key2": "val2"
    },
    {
      "key1": "val1",
      "key2": "val2"
    }
  ],
  "condition": [
    {
      "dataPercentage50": false,
      "dataPercentage75": false,
      "dataPercentage90": false,
      "dataPercentage100": false,
      "smsPercentage50": false
    },
    {
      "dataPercentage50": false,
      "dataPercentage75": false,
      "dataPercentage90": false,
      "dataPercentage100": false,
      "smsPercentage50": false
    }
  ]
}
```

