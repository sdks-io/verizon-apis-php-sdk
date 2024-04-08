
# Device Suspension Status Request

Request to return service suspension information about one or more devices.

## Structure

`DeviceSuspensionStatusRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceIds` | [`?(DeviceId[])`](../../doc/models/device-id.md) | Optional | The devices that you want to include in the request, specified by device identifier. You only need to provide one identifier per device. | getDeviceIds(): ?array | setDeviceIds(?array deviceIds): void |
| `filter` | [`?DeviceFilterWithoutAccount`](../../doc/models/device-filter-without-account.md) | Optional | Filter for devices without account. | getFilter(): ?DeviceFilterWithoutAccount | setFilter(?DeviceFilterWithoutAccount filter): void |
| `accountName` | `?string` | Optional | The name of a billing account. | getAccountName(): ?string | setAccountName(?string accountName): void |

## Example (as JSON)

```json
{
  "filter": {
    "groupName": "suspended devices",
    "servicePlan": "servicePlan6",
    "customFields": [
      {
        "key": "key0",
        "value": "value2"
      },
      {
        "key": "key0",
        "value": "value2"
      },
      {
        "key": "key0",
        "value": "value2"
      }
    ]
  },
  "accountName": "1223334444-00001",
  "deviceIds": [
    {
      "id": "id0",
      "kind": "kind8"
    },
    {
      "id": "id0",
      "kind": "kind8"
    }
  ]
}
```

