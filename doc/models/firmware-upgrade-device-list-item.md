
# Firmware Upgrade Device List Item

A JSON object for each device that was included in the upgrade, showing the device IMEI, the status of the upgrade, and additional information about the status.

## Structure

`FirmwareUpgradeDeviceListItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | `?string` | Optional | Device IMEI. | getDeviceId(): ?string | setDeviceId(?string deviceId): void |
| `status` | `?string` | Optional | The status of the upgrade for this device. | getStatus(): ?string | setStatus(?string status): void |
| `resultReason` | `?string` | Optional | Additional details about the status. Not included when status='Request Pending.' | getResultReason(): ?string | setResultReason(?string resultReason): void |

## Example (as JSON)

```json
{
  "deviceId": "900000000000002",
  "status": "Device Accepted",
  "resultReason": "success"
}
```

