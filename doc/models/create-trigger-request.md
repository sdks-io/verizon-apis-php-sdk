
# Create Trigger Request

## Structure

`CreateTriggerRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getAccountName(): ?string | setAccountName(?string accountName): void |
| `anomalyTriggerRequest` | [`?AnomalyTriggerRequest`](../../doc/models/anomaly-trigger-request.md) | Optional | The details of the UsageAnomaly trigger. | getAnomalyTriggerRequest(): ?AnomalyTriggerRequest | setAnomalyTriggerRequest(?AnomalyTriggerRequest anomalyTriggerRequest): void |
| `dataTriggerRequest` | [`?DataTriggerRequest`](../../doc/models/data-trigger-request.md) | Optional | - | getDataTriggerRequest(): ?DataTriggerRequest | setDataTriggerRequest(?DataTriggerRequest dataTriggerRequest): void |
| `groupName` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getGroupName(): ?string | setGroupName(?string groupName): void |
| `name` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getName(): ?string | setName(?string name): void |
| `sessionTriggerRequest` | [`?SessionTriggerRequest`](../../doc/models/session-trigger-request.md) | Optional | - | getSessionTriggerRequest(): ?SessionTriggerRequest | setSessionTriggerRequest(?SessionTriggerRequest sessionTriggerRequest): void |
| `smsTriggerRequest` | [`?SMSTriggerRequest`](../../doc/models/sms-trigger-request.md) | Optional | - | getSmsTriggerRequest(): ?SMSTriggerRequest | setSmsTriggerRequest(?SMSTriggerRequest smsTriggerRequest): void |
| `triggerCategory` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getTriggerCategory(): ?string | setTriggerCategory(?string triggerCategory): void |
| `triggerCycle` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getTriggerCycle(): ?string | setTriggerCycle(?string triggerCycle): void |

## Example (as JSON)

```json
{
  "anomalyTriggerRequest": {
    "accountNames": "0000123456-00001",
    "includeAbnormal": true,
    "includeVeryAbnormal": true,
    "includeUnderExpectedUsage": true,
    "includeOverExpectedUsage": true
  },
  "accountName": "accountName6",
  "dataTriggerRequest": {
    "comparator": "comparator2",
    "threshold": 242,
    "thresholdUnit": "thresholdUnit6"
  },
  "groupName": "groupName2",
  "name": "name2"
}
```

