
# Check in History Item

Check-in history for a device.

## Structure

`CheckInHistoryItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | `string` | Required | Device IMEI. | getDeviceId(): string | setDeviceId(string deviceId): void |
| `clientType` | `string` | Required | Type of client. | getClientType(): string | setClientType(string clientType): void |
| `result` | `string` | Required | - | getResult(): string | setResult(string result): void |
| `failureType` | `string` | Required | - | getFailureType(): string | setFailureType(string failureType): void |
| `timeCompleted` | `DateTime` | Required | - | getTimeCompleted(): \DateTime | setTimeCompleted(\DateTime timeCompleted): void |

## Example (as JSON)

```json
{
  "deviceId": "990013907835573",
  "clientType": "clientType6",
  "result": "result8",
  "failureType": "failureType8",
  "timeCompleted": "10/22/2020 19:35:07"
}
```

