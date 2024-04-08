
# Device Filter

Specify the kind of the device identifier, the type of match, and the string that you want to match.

## Structure

`DeviceFilter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `account` | `?string` | Optional | The the billing account that the devices belong to. | getAccount(): ?string | setAccount(?string account): void |
| `groupName` | `?string` | Optional | Only include devices that are in this device group. | getGroupName(): ?string | setGroupName(?string groupName): void |
| `servicePlan` | `?string` | Optional | Only include devices that have this service plan. | getServicePlan(): ?string | setServicePlan(?string servicePlan): void |
| `customFields` | [`?(CustomFields[])`](../../doc/models/custom-fields.md) | Optional | Custom field names and values, if you want to only include devices that have matching values. | getCustomFields(): ?array | setCustomFields(?array customFields): void |

## Example (as JSON)

```json
{
  "groupName": "Short-Haul Trucks",
  "customFields": [
    {
      "key": "CustomField1",
      "value": "East Region Trucks"
    }
  ],
  "account": "account8",
  "servicePlan": "servicePlan2"
}
```

