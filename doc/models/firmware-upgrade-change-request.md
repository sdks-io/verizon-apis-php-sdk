
# Firmware Upgrade Change Request

List of devices to add or remove.

## Structure

`FirmwareUpgradeChangeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`string(FirmwareTypeListEnum)`](../../doc/models/firmware-type-list-enum.md) | Required | Possible values are `append` or `remove` | getType(): string | setType(string type): void |
| `deviceList` | `string[]` | Required | The IMEIs of the devices. | getDeviceList(): array | setDeviceList(array deviceList): void |

## Example (as JSON)

```json
{
  "type": "append",
  "deviceList": [
    "15-digit IMEI",
    "15-digit IMEI"
  ]
}
```

