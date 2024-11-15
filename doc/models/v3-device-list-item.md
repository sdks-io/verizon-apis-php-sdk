
# V3 Device List Item

Device changed.

## Structure

`V3DeviceListItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | `?string` | Optional | Device IMEI. | getDeviceId(): ?string | setDeviceId(?string deviceId): void |
| `status` | `?string` | Optional | Success or failure. | getStatus(): ?string | setStatus(?string status): void |
| `reason` | `?string` | Optional | Result reason. | getReason(): ?string | setReason(?string reason): void |

## Example (as JSON)

```json
{
  "deviceId": "15-digit IMEI",
  "status": "AddDeviceSucceed",
  "Reason": "Device added Successfully"
}
```

