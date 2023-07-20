
# V3 License Summary

Information for FOTA licenses assigned to devices.

## Structure

`V3LicenseSummary`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | Account identifier. | getAccountName(): string | setAccountName(string accountName): void |
| `totalLicenses` | `?int` | Optional | Total FOTA license count. | getTotalLicenses(): ?int | setTotalLicenses(?int totalLicenses): void |
| `assignedLicenses` | `int` | Required | Assigned FOTA license count. | getAssignedLicenses(): int | setAssignedLicenses(int assignedLicenses): void |
| `hasMoreData` | `bool` | Required | True if there are more devices to retrieve. | getHasMoreData(): bool | setHasMoreData(bool hasMoreData): void |
| `lastSeenDeviceId` | `?string` | Optional | Last seen device identifier. | getLastSeenDeviceId(): ?string | setLastSeenDeviceId(?string lastSeenDeviceId): void |
| `maxPageSize` | `int` | Required | Maximum page size. | getMaxPageSize(): int | setMaxPageSize(int maxPageSize): void |
| `deviceList` | [`?(V3LicenseDevice[])`](../../doc/models/v3-license-device.md) | Optional | Device IMEI list. | getDeviceList(): ?array | setDeviceList(?array deviceList): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "totalLicenses": 5000,
  "assignedLicenses": 4319,
  "hasMoreData": true,
  "lastSeenDeviceId": "1000",
  "maxPageSize": 1000,
  "deviceList": [
    {
      "deviceId": "15-digit IMEI",
      "assignmentTime": "2017-11-29 20:15:42.738 +0000 UTC"
    },
    {
      "deviceId": "15-digit IMEI",
      "assignmentTime": "2017-11-29 20:15:42.738 +0000 UTC"
    }
  ]
}
```

