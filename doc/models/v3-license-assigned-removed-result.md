
# V3 License Assigned Removed Result

License assignment/removal response.

## Structure

`V3LicenseAssignedRemovedResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | Account name. | getAccountName(): string | setAccountName(string accountName): void |
| `licCount` | `int` | Required | Total license count. | getLicCount(): int | setLicCount(int licCount): void |
| `licUsedCount` | `int` | Required | Assigned license count. | getLicUsedCount(): int | setLicUsedCount(int licUsedCount): void |
| `deviceList` | [`V3DeviceStatus[]`](../../doc/models/v3-device-status.md) | Required | List of devices with id in IMEI. | getDeviceList(): array | setDeviceList(array deviceList): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "licUsedCount": 2,
  "licCount": 1000,
  "deviceList": [
    {
      "deviceId": "15-digit IMEI",
      "status": "UpgradePending",
      "resultReason": "Upgrade pending, the device upgrade is estimated to be scheduled for 06 Oct 22 18:05 UTC",
      "updatedTime": "2022-08-05T21:05:27.129Z",
      "recentAttemptTime": "2022-10-05T21:05:01.19Z",
      "nextAttemptTime": "2022-10-06T18:35:00Z"
    }
  ]
}
```

