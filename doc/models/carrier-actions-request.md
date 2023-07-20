
# Carrier Actions Request

Request for a carrier action.

## Structure

`CarrierActionsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | The name of a billing account. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `customFields` | [`?(CustomFields[])`](../../doc/models/custom-fields.md) | Optional | Custom field names and values, if you want to only include devices that have matching values. | getCustomFields(): ?array | setCustomFields(?array customFields): void |
| `devices` | [`?(AccountDeviceList[])`](../../doc/models/account-device-list.md) | Optional | The devices for which you want to restore service, specified by device identifier. | getDevices(): ?array | setDevices(?array devices): void |
| `groupName` | `?string` | Optional | The name of a device group, if you want to restore service for all devices in that group. | getGroupName(): ?string | setGroupName(?string groupName): void |
| `servicePlan` | `?string` | Optional | The name of a service plan, if you want to only include devices that have that service plan. | getServicePlan(): ?string | setServicePlan(?string servicePlan): void |

## Example (as JSON)

```json
{
  "devices": [
    {
      "deviceIds": [
        {
          "id": "89148000000800139708",
          "kind": "iccid"
        }
      ]
    }
  ],
  "accountName": "accountName4",
  "customFields": [
    {
      "key": "key0",
      "value": "value2"
    },
    {
      "key": "key1",
      "value": "value3"
    },
    {
      "key": "key2",
      "value": "value4"
    }
  ],
  "groupName": "groupName0",
  "servicePlan": "servicePlan0"
}
```

