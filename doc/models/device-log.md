
# Device Log

Device logging information.

## Structure

`DeviceLog`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | `string` | Required | Device IMEI. | getDeviceId(): string | setDeviceId(string deviceId): void |
| `logTime` | `DateTime` | Required | Time of log. | getLogTime(): \DateTime | setLogTime(\DateTime logTime): void |
| `logType` | `string` | Required | Log type (one of SoftwareUpdate, Event, UserNotification, AgentService, Wireless, WirelessWeb, MobileBroadbandModem, WindowsMDM). | getLogType(): string | setLogType(string logType): void |
| `eventLog` | `string` | Required | Event log. | getEventLog(): string | setEventLog(string eventLog): void |
| `binaryLogFileBase64` | `string` | Required | Base64-encoded contents of binary log file. | getBinaryLogFileBase64(): string | setBinaryLogFileBase64(string binaryLogFileBase64): void |
| `binaryLogFilename` | `string` | Required | File name of binary log file. | getBinaryLogFilename(): string | setBinaryLogFilename(string binaryLogFilename): void |

## Example (as JSON)

```json
{
  "deviceId": "990013907835573",
  "logTime": "10/22/2020 19:29:50",
  "logType": "logType6",
  "eventLog": "eventLog0",
  "binaryLogFileBase64": "binaryLogFileBase644",
  "binaryLogFilename": "binaryLogFilename0"
}
```

