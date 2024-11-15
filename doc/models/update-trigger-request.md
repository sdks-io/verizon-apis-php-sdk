
# Update Trigger Request

## Structure

`UpdateTriggerRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getAccountName(): ?string | setAccountName(?string accountName): void |
| `active` | `?bool` | Optional | - | getActive(): ?bool | setActive(?bool active): void |
| `anomalyTriggerRequest` | [`?AnomalyTriggerRequest`](../../doc/models/anomaly-trigger-request.md) | Optional | The details of the UsageAnomaly trigger. | getAnomalyTriggerRequest(): ?AnomalyTriggerRequest | setAnomalyTriggerRequest(?AnomalyTriggerRequest anomalyTriggerRequest): void |
| `cycleType` | [`?string(CycleTypeEnum)`](../../doc/models/cycle-type-enum.md) | Optional | - | getCycleType(): ?string | setCycleType(?string cycleType): void |
| `dataTriggerRequest` | [`?DataTriggerRequest`](../../doc/models/data-trigger-request.md) | Optional | - | getDataTriggerRequest(): ?DataTriggerRequest | setDataTriggerRequest(?DataTriggerRequest dataTriggerRequest): void |
| `groupName` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getGroupName(): ?string | setGroupName(?string groupName): void |
| `promoAlertTriggerRequest` | [`?PromoAlertTriggerRequest`](../../doc/models/promo-alert-trigger-request.md) | Optional | - | getPromoAlertTriggerRequest(): ?PromoAlertTriggerRequest | setPromoAlertTriggerRequest(?PromoAlertTriggerRequest promoAlertTriggerRequest): void |
| `sessionTriggerRequest` | [`?SessionTriggerRequest`](../../doc/models/session-trigger-request.md) | Optional | - | getSessionTriggerRequest(): ?SessionTriggerRequest | setSessionTriggerRequest(?SessionTriggerRequest sessionTriggerRequest): void |
| `smsTriggerRequest` | [`?SMSTriggerRequest`](../../doc/models/sms-trigger-request.md) | Optional | - | getSmsTriggerRequest(): ?SMSTriggerRequest | setSmsTriggerRequest(?SMSTriggerRequest smsTriggerRequest): void |
| `triggerCategory` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getTriggerCategory(): ?string | setTriggerCategory(?string triggerCategory): void |
| `triggerId` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getTriggerId(): ?string | setTriggerId(?string triggerId): void |
| `triggerName` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getTriggerName(): ?string | setTriggerName(?string triggerName): void |

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
  "accountName": "accountName0",
  "active": false,
  "cycleType": "cycleone",
  "dataTriggerRequest": {
    "comparator": "comparator2",
    "threshold": 242,
    "thresholdUnit": "thresholdUnit6"
  }
}
```

