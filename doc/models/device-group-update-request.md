
# Device Group Update Request

Make changes to a device group, including changing the name and description, and adding or removing devices.

## Structure

`DeviceGroupUpdateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `devicesToAdd` | [`?(DeviceId[])`](../../doc/models/device-id.md) | Optional | Zero or more devices to add to the device group, specified by device ID. The devices will be removed from their current device groups. You can use POST /devices/actions/list to get a list of all devices in the account. | getDevicesToAdd(): ?array | setDevicesToAdd(?array devicesToAdd): void |
| `devicesToRemove` | [`?(DeviceId[])`](../../doc/models/device-id.md) | Optional | Zero or more devices to remove from the device group, specified by device ID. The devices will be added to the default device group. | getDevicesToRemove(): ?array | setDevicesToRemove(?array devicesToRemove): void |
| `newGroupDescription` | `?string` | Optional | A new description for the device group. Do not include this parameter to leave the group description unchanged. | getNewGroupDescription(): ?string | setNewGroupDescription(?string newGroupDescription): void |
| `newGroupName` | `?string` | Optional | A new name for the device group. Do not include this parameter if you want to leave the group name unchanged. | getNewGroupName(): ?string | setNewGroupName(?string newGroupName): void |

## Example (as JSON)

```json
{
  "newGroupName": "Western region tanks",
  "newGroupDescription": "All western region tank level monitors.",
  "devicesToAdd": [
    {
      "kind": "imei",
      "id": "990003420535537"
    }
  ],
  "devicesToRemove": [
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

