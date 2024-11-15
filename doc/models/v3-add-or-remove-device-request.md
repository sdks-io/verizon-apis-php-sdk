
# V3 Add or Remove Device Request

Devices to add or remove from existing software upgrade information.

## Structure

`V3AddOrRemoveDeviceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required | Operation either 'append' or 'remove' | getType(): string | setType(string type): void |
| `deviceList` | `string[]` | Required | Device IMEI list. | getDeviceList(): array | setDeviceList(array deviceList): void |

## Example (as JSON)

```json
{
  "Type": "remove",
  "deviceList": [
    "15-digit IMEI"
  ]
}
```

