
# V3 Device Status

Device status.

## Structure

`V3DeviceStatus`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | `string` | Required | Device IMEI. | getDeviceId(): string | setDeviceId(string deviceId): void |
| `status` | `string` | Required | Success or failure. | getStatus(): string | setStatus(string status): void |
| `resultReason` | `?string` | Optional | Result reason. | getResultReason(): ?string | setResultReason(?string resultReason): void |
| `updatedTime` | `?DateTime` | Optional | Updated Time. | getUpdatedTime(): ?\DateTime | setUpdatedTime(?\DateTime updatedTime): void |
| `recentAttemptTime` | `?DateTime` | Optional | The most recent attempt time. | getRecentAttemptTime(): ?\DateTime | setRecentAttemptTime(?\DateTime recentAttemptTime): void |
| `nextAttemptTime` | `?DateTime` | Optional | Next attempt time. | getNextAttemptTime(): ?\DateTime | setNextAttemptTime(?\DateTime nextAttemptTime): void |

## Example (as JSON)

```json
{
  "deviceId": "15-digit IMEI",
  "status": "UpgradePending",
  "resultReason": "Upgrade pending, the device upgrade is estimated to be scheduled for 06 Oct 22 18:05 UTC",
  "updatedTime": "2022-08-05T21:05:27.129Z",
  "recentAttemptTime": "2022-10-05T21:05:01.19Z",
  "nextAttemptTime": "2022-10-06T18:35:00Z"
}
```

