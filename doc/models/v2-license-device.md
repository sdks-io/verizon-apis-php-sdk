
# V2 License Device

Device IMEI list.

## Structure

`V2LicenseDevice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | `string` | Required | Device IMEI. | getDeviceId(): string | setDeviceId(string deviceId): void |
| `assignmentTime` | `?string` | Optional | License assignment time. | getAssignmentTime(): ?string | setAssignmentTime(?string assignmentTime): void |

## Example (as JSON)

```json
{
  "deviceId": "990003425730535",
  "assignmentTime": "2017-11-29T16:03:42.000Z"
}
```

