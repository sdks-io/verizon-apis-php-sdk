
# Device Firmware List

Device Firmware Information.

## Structure

`DeviceFirmwareList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | Account name. | getAccountName(): string | setAccountName(string accountName): void |
| `deviceFirmwarVersionList` | [`?(DeviceFirmwareVersion[])`](../../doc/models/device-firmware-version.md) | Optional | List of device & firmware. | getDeviceFirmwarVersionList(): ?array | setDeviceFirmwarVersionList(?array deviceFirmwarVersionList): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "deviceFirmwarVersionList": [
    {
      "deviceId": "15-digit IMEI",
      "status": "FirmwareVersionUpdateSuccess",
      "firmwareVersion": "SR1.2.0.0-10657",
      "reason": "reason8",
      "firmwareVersionUpdateTime": "2016-03-13T12:52:32.123Z"
    }
  ]
}
```

