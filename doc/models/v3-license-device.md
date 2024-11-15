
# V3 License Device

Device IMEI.

## Structure

`V3LicenseDevice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | `string` | Required | Device IMEI. | getDeviceId(): string | setDeviceId(string deviceId): void |
| `assignmentTime` | `?string` | Optional | License assignment time. | getAssignmentTime(): ?string | setAssignmentTime(?string assignmentTime): void |

## Example (as JSON)

```json
{
  "deviceId": "15-digit IMEI",
  "assignmentTime": "2017-11-29 20:15:42.738 +0000 UTC"
}
```

