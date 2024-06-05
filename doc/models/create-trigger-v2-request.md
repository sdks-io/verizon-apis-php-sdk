
# Create Trigger V2 Request

Create Trigger Request

## Structure

`CreateTriggerV2Request`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
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
  "triggerName": "triggerName4",
  "ecpdId": "ecpdId0",
  "deviceGroupName": "deviceGroupName4",
  "triggerCategory": "triggerCategory8",
  "pricePlanTrigger": {
    "accountGroupShare": {
      "accountGroupShareIndividual": {
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
    }
  }
}
```

