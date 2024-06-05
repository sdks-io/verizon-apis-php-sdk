
# Change Plan

## Structure

`ChangePlan`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `triggerDate` | `?string` | Optional | - | getTriggerDate(): ?string | setTriggerDate(?string triggerDate): void |
| `sharePlan` | [`?(SharePlan[])`](../../doc/models/share-plan.md) | Optional | - | getSharePlan(): ?array | setSharePlan(?array sharePlan): void |

## Example (as JSON)

```json
{
  "triggerDate": "triggerDate4",
  "sharePlan": [
    {
      "fromCarrierCode": "fromCarrierCode6",
      "toCarrierCode": "toCarrierCode8",
      "criteriaPercentage": 170
    }
  ]
}
```

