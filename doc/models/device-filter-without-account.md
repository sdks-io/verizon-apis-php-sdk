
# Device Filter Without Account

Filter for devices without account.

## Structure

`DeviceFilterWithoutAccount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `groupName` | `?string` | Optional | Only include devices that are in this device group. | getGroupName(): ?string | setGroupName(?string groupName): void |
| `servicePlan` | `?string` | Optional | Only include devices that have this service plan. | getServicePlan(): ?string | setServicePlan(?string servicePlan): void |
| `customFields` | [`?(CustomFields[])`](../../doc/models/custom-fields.md) | Optional | Custom field names and values, if you want to only include devices that have matching values. | getCustomFields(): ?array | setCustomFields(?array customFields): void |

## Example (as JSON)

```json
{
  "groupName": "suspended devices",
  "servicePlan": "servicePlan4",
  "customFields": [
    {
      "key": "key0",
      "value": "value2"
    },
    {
      "key": "key0",
      "value": "value2"
    }
  ]
}
```

