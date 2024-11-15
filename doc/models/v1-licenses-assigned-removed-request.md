
# V1 Licenses Assigned Removed Request

IMEIs of the devices to assign licenses to.

## Structure

`V1LicensesAssignedRemovedRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceList` | `string[]` | Required | The IMEIs of the devices. | getDeviceList(): array | setDeviceList(array deviceList): void |

## Example (as JSON)

```json
{
  "deviceList": [
    "900000000000001",
    "900000000000998",
    "900000000000999"
  ]
}
```

