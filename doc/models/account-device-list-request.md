
# Account Device List Request

Request for listing account devices.

## Structure

`AccountDeviceListRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | The billing account for which a list of devices is returned. If you don't specify an accountName, the list includes all devices to which you have access. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `deviceId` | [`?DeviceId`](../../doc/models/device-id.md) | Optional | An identifier for a single device. | getDeviceId(): ?DeviceId | setDeviceId(?DeviceId deviceId): void |
| `filter` | [`?AccountDeviceListFilter`](../../doc/models/account-device-list-filter.md) | Optional | Filter for a list of devices. | getFilter(): ?AccountDeviceListFilter | setFilter(?AccountDeviceListFilter filter): void |
| `currentState` | `?string` | Optional | The name of a device state, to only include devices in that state. | getCurrentState(): ?string | setCurrentState(?string currentState): void |
| `customFields` | [`?(CustomFields[])`](../../doc/models/custom-fields.md) | Optional | Custom field names and values, if you want to only include devices that have matching values. | getCustomFields(): ?array | setCustomFields(?array customFields): void |
| `earliest` | `?string` | Optional | Only include devices that were added after this date and time. | getEarliest(): ?string | setEarliest(?string earliest): void |
| `groupName` | `?string` | Optional | Only include devices that are in this device group. | getGroupName(): ?string | setGroupName(?string groupName): void |
| `latest` | `?string` | Optional | Only include devices that were added before this date and time. | getLatest(): ?string | setLatest(?string latest): void |
| `servicePlan` | `?string` | Optional | Only include devices that have this service plan. | getServicePlan(): ?string | setServicePlan(?string servicePlan): void |
| `maxNumberOfDevices` | `?int` | Optional | **Constraints**: `>= 0`, `<= 100` | getMaxNumberOfDevices(): ?int | setMaxNumberOfDevices(?int maxNumberOfDevices): void |
| `largestDeviceIdSeen` | `?int` | Optional | **Constraints**: `>= 0`, `<= 100` | getLargestDeviceIdSeen(): ?int | setLargestDeviceIdSeen(?int largestDeviceIdSeen): void |

## Example (as JSON)

```json
{
  "accountName": "0786890242-00001",
  "filter": {
    "deviceIdentifierFilters": [
      {
        "kind": "iccid",
        "contains": "4259",
        "startswith": "startswith8",
        "endswith": "endswith0"
      }
    ]
  },
  "deviceId": {
    "id": "id0",
    "kind": "kind8"
  },
  "currentState": "currentState0",
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

