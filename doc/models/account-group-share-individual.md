
# Account Group Share Individual

## Structure

`AccountGroupShareIndividual`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filterCriteria` | [`?FilterCriteriaAccountGroupShare`](../../doc/models/filter-criteria-account-group-share.md) | Optional | - | getFilterCriteria(): ?FilterCriteriaAccountGroupShare | setFilterCriteria(?FilterCriteriaAccountGroupShare filterCriteria): void |
| `condition` | [`?ConditionAccountGroupShare`](../../doc/models/condition-account-group-share.md) | Optional | - | getCondition(): ?ConditionAccountGroupShare | setCondition(?ConditionAccountGroupShare condition): void |
| `action` | [`?ActionAccountGroupShare`](../../doc/models/action-account-group-share.md) | Optional | - | getAction(): ?ActionAccountGroupShare | setAction(?ActionAccountGroupShare action): void |

## Example (as JSON)

```json
{
  "filterCriteria": {
    "ratePlanGroupId": 202
  },
  "condition": {
    "action": "action6"
  },
  "action": {
    "changePlan": {
      "triggerDate": "triggerDate6",
      "sharePlan": [
        {
          "fromCarrierCode": "fromCarrierCode6",
          "toCarrierCode": "toCarrierCode8",
          "criteriaPercentage": 170
        },
        {
          "fromCarrierCode": "fromCarrierCode6",
          "toCarrierCode": "toCarrierCode8",
          "criteriaPercentage": 170
        },
        {
          "fromCarrierCode": "fromCarrierCode6",
          "toCarrierCode": "toCarrierCode8",
          "criteriaPercentage": 170
        }
      ]
    }
  }
}
```

