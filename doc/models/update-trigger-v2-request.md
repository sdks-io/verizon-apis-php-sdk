
# Update Trigger V2 Request

Update Trigger Request

## Structure

`UpdateTriggerV2Request`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `triggerId` | `?string` | Optional | - | getTriggerId(): ?string | setTriggerId(?string triggerId): void |
| `triggerName` | `?string` | Optional | - | getTriggerName(): ?string | setTriggerName(?string triggerName): void |
| `ecpdId` | `?string` | Optional | - | getEcpdId(): ?string | setEcpdId(?string ecpdId): void |
| `deviceGroupName` | `?string` | Optional | - | getDeviceGroupName(): ?string | setDeviceGroupName(?string deviceGroupName): void |
| `triggerCategory` | `?string` | Optional | - | getTriggerCategory(): ?string | setTriggerCategory(?string triggerCategory): void |
| `pricePlanTrigger` | [`?PricePlanTrigger`](../../doc/models/price-plan-trigger.md) | Optional | - | getPricePlanTrigger(): ?PricePlanTrigger | setPricePlanTrigger(?PricePlanTrigger pricePlanTrigger): void |
| `notification` | [`?Notification`](../../doc/models/notification.md) | Optional | - | getNotification(): ?Notification | setNotification(?Notification notification): void |
| `active` | `?bool` | Optional | - | getActive(): ?bool | setActive(?bool active): void |

## Example (as JSON)

```json
{
  "triggerId": "triggerId4",
  "triggerName": "triggerName6",
  "ecpdId": "ecpdId0",
  "deviceGroupName": "deviceGroupName4",
  "triggerCategory": "triggerCategory8"
}
```

