
# V2 License Summary

Summary of license assignment.

## Structure

`V2LicenseSummary`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | Account identifier. | getAccountName(): string | setAccountName(string accountName): void |
| `totalLicense` | `?int` | Optional | Total FOTA license count. | getTotalLicense(): ?int | setTotalLicense(?int totalLicense): void |
| `assignedLicenses` | `int` | Required | Assigned FOTA license count. | getAssignedLicenses(): int | setAssignedLicenses(int assignedLicenses): void |
| `hasMoreData` | `bool` | Required | True if there are more devices to retrieve. | getHasMoreData(): bool | setHasMoreData(bool hasMoreData): void |
| `lastSeenDeviceId` | `?string` | Optional | Last seen device identifier. | getLastSeenDeviceId(): ?string | setLastSeenDeviceId(?string lastSeenDeviceId): void |
| `maxPageSize` | `int` | Required | Maximum page size. | getMaxPageSize(): int | setMaxPageSize(int maxPageSize): void |
| `deviceList` | [`?(V2LicenseDevice[])`](../../doc/models/v2-license-device.md) | Optional | Device IMEI list. | getDeviceList(): ?array | setDeviceList(?array deviceList): void |

## Example (as JSON)

```json
{
  "accountName": "0402196254-00001",
  "totalLicense": 5000,
  "assignedLicenses": 4319,
  "hasMoreData": true,
  "lastSeenDeviceId": "1000",
  "maxPageSize": 10,
  "deviceList": [
    {
      "deviceId": "990003425730535",
      "assignmentTime": "2017-11-29T16:03:42.000Z"
    },
    {
      "deviceId": "990000473475989",
      "assignmentTime": "2017-11-29T16:03:42.000Z"
    },
    {
      "deviceId": "990000347475989",
      "assignmentTime": "2017-11-29T16:03:42.000Z"
    },
    {
      "deviceId": "990007303425535",
      "assignmentTime": "2017-11-29T16:03:42.000Z"
    }
  ]
}
```

