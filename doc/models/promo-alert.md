
# Promo Alert

## Structure

`PromoAlert`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filterCriteria` | [`?(ReadySimServicePlan[])`](../../doc/models/ready-sim-service-plan.md) | Optional | - | getFilterCriteria(): ?array | setFilterCriteria(?array filterCriteria): void |
| `condition` | [`?(Keyschunk2[])`](../../doc/models/keyschunk-2.md) | Optional | - | getCondition(): ?array | setCondition(?array condition): void |
| `enablePromoExp` | `?bool` | Optional | - | getEnablePromoExp(): ?bool | setEnablePromoExp(?bool enablePromoExp): void |

## Example (as JSON)

```json
{
  "enablePromoExp": true,
  "filterCriteria": [
    {
      "servicePlan": "servicePlan4"
    },
    {
      "servicePlan": "servicePlan4"
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

