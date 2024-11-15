
# Create Device Group Request

Create request for a new device group and optionally add devices to the group.

## Structure

`CreateDeviceGroupRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | The Verizon billing account that the device group will belong to. An account name is usually numeric, and must include any leading zeros. | getAccountName(): string | setAccountName(string accountName): void |
| `groupDescription` | `string` | Required | A description for the device group. | getGroupDescription(): string | setGroupDescription(string groupDescription): void |
| `groupName` | `string` | Required | The name for the new device group. This name must be unique within the specified account. | getGroupName(): string | setGroupName(string groupName): void |
| `devicesToAdd` | [`?(DeviceId[])`](../../doc/models/device-id.md) | Optional | Zero or more devices to add to the device group. You can use POST /devices/actions/list to get a list of all devices in the account. | getDevicesToAdd(): ?array | setDevicesToAdd(?array devicesToAdd): void |

## Example (as JSON)

```json
{
  "accountName": "10001234-0001",
  "groupName": "NV tanks",
  "groupDescription": "Nevada tank level monitors.",
  "devicesToAdd": [
    {
      "kind": "imei",
      "id": "990003420535537"
    }
  ]
}
```

