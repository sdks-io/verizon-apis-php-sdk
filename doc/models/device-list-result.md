
# Device List Result

Device list information.

## Structure

`DeviceListResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | Account name. | getAccountName(): string | setAccountName(string accountName): void |
| `deviceCount` | `int` | Required | Total device count. | getDeviceCount(): int | setDeviceCount(int deviceCount): void |
| `deviceList` | [`V3Device[]`](../../doc/models/v3-device.md) | Required | List of devices with id in IMEI.<br>**Constraints**: *Maximum Items*: `1000` | getDeviceList(): array | setDeviceList(array deviceList): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "deviceCount": 1,
  "deviceList": [
    {
      "deviceId": "15-digit IMEI",
      "mdn": "10-digit MDN",
      "model": "GM01Q",
      "make": "SEQUANS COMMUNICATIONS",
      "firmware": "SR1.2.0.0-10657",
      "fotaEligible": true,
      "licenseAssigned": true,
      "status": "Active",
      "protocol": "LWM2M",
      "createTime": "2021-06-03 00:03:56.079 +0000 UTC",
      "statusTime": "2021-06-03 00:03:56.079 +0000 UTC",
      "refreshTime": "2021-06-03 00:03:56.079 +0000 UTC",
      "lastConnectionTime": "2012-04-23T18:25:43.511Z",
      "requestStatus": "requestStatus2",
      "resultReason": "resultReason2"
    }
  ]
}
```

