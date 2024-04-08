
# Device Group Devices Data

Returns the name, description, and list of devices in a device group.

## Structure

`DeviceGroupDevicesData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `?string` | Optional | The description of the device group. | getDescription(): ?string | setDescription(?string description): void |
| `devices` | [`?(AccountDeviceList[])`](../../doc/models/account-device-list.md) | Optional | The devices in the device group. | getDevices(): ?array | setDevices(?array devices): void |
| `hasMoreData` | `?bool` | Optional | False for a status 200 response.True for a status 202 response, indicating that there is more data to be retrieved. | getHasMoreData(): ?bool | setHasMoreData(?bool hasMoreData): void |
| `name` | `?string` | Optional | The name of the device group. | getName(): ?string | setName(?string name): void |

## Example (as JSON)

```json
{
  "name": "Nebraska Trucks",
  "description": "All service trucks in Nebraska.",
  "hasMoreData": false,
  "devices": [
    {
      "deviceIds": [
        {
          "id": "12345",
          "kind": "meid"
        },
        {
          "id": "54321",
          "kind": "mdn"
        }
      ],
      "ipAddress": "ipAddress4"
    }
  ]
}
```

