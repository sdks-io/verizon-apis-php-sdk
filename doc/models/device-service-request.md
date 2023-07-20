
# Device Service Request

Device information.

## Structure

`DeviceServiceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `imei` | `string` | Required | International Mobile Equipment Identifier. The unique ID of a device.<br>**Constraints**: *Pattern*: `^[0-9]{15}$` | getImei(): string | setImei(string imei): void |
| `bullseyeEnable` | `bool` | Required | Set to Enable (true) or Disable (false). | getBullseyeEnable(): bool | setBullseyeEnable(bool bullseyeEnable): void |

## Example (as JSON)

```json
{
  "imei": "354658090356210",
  "BullseyeEnable": true
}
```

