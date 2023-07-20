
# Device Upgrade History

Firmware upgrade information.

## Structure

`DeviceUpgradeHistory`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | `?string` | Optional | Device IMEI. | getDeviceId(): ?string | setDeviceId(?string deviceId): void |
| `id` | `?string` | Optional | The unique identifier for the upgrade. | getId(): ?string | setId(?string id): void |
| `accountName` | `?string` | Optional | The name (number) of the billing account that the device belongs to. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `firmwareFrom` | `?string` | Optional | The firmware version that was on the device before the upgrade. | getFirmwareFrom(): ?string | setFirmwareFrom(?string firmwareFrom): void |
| `firmwareTo` | `?string` | Optional | The name of the firmware version that was on the device after the upgrade. | getFirmwareTo(): ?string | setFirmwareTo(?string firmwareTo): void |
| `startDate` | `?string` | Optional | The date of the upgrade. | getStartDate(): ?string | setStartDate(?string startDate): void |
| `upgradeStartTime` | `?string` | Optional | The date and time that the upgrade actually started for this device. | getUpgradeStartTime(): ?string | setUpgradeStartTime(?string upgradeStartTime): void |
| `status` | `?string` | Optional | The status of the upgrade for this device. | getStatus(): ?string | setStatus(?string status): void |
| `reason` | `?string` | Optional | More information about the status. | getReason(): ?string | setReason(?string reason): void |

## Example (as JSON)

```json
{
  "deviceId": "900000000000001",
  "id": "f574fbb8-b291-4cc7-bf22-4e3f27977558",
  "accountName": "0242078689-00001",
  "firmwareFrom": "VerizonFirmwareVersion-02",
  "firmwareTo": "VerizonFirmwareVersion-03",
  "startDate": "2018-03-05",
  "upgradeStartTime": "2018-03-05T19:07:21Z",
  "status": "UpgradeSuccess",
  "reason": "success"
}
```

