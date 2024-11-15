
# Device Firmware Upgrade

Firmware upgrades information.

## Structure

`DeviceFirmwareUpgrade`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | `string` | Required | Device identifier. | getDeviceId(): string | setDeviceId(string deviceId): void |
| `campaignId` | `string` | Required | Campaign identifier. | getCampaignId(): string | setCampaignId(string campaignId): void |
| `accountName` | `string` | Required | Account identifier. | getAccountName(): string | setAccountName(string accountName): void |
| `firmwareName` | `?string` | Optional | Firmware name. | getFirmwareName(): ?string | setFirmwareName(?string firmwareName): void |
| `firmwareFrom` | `?string` | Optional | Old firmware version. | getFirmwareFrom(): ?string | setFirmwareFrom(?string firmwareFrom): void |
| `firmwareTo` | `?string` | Optional | New firmware version. | getFirmwareTo(): ?string | setFirmwareTo(?string firmwareTo): void |
| `startDate` | `DateTime` | Required | Firmware upgrade start date. | getStartDate(): \DateTime | setStartDate(\DateTime startDate): void |
| `status` | `string` | Required | Firmware upgrade status. | getStatus(): string | setStatus(string status): void |
| `reason` | `string` | Required | Software upgrade result reason. | getReason(): string | setReason(string reason): void |
| `reportUpdatedTime` | `?string` | Optional | Report updated time. | getReportUpdatedTime(): ?string | setReportUpdatedTime(?string reportUpdatedTime): void |

## Example (as JSON)

```json
{
  "deviceId": "15-digit IMEI",
  "campaignId": "252d7ffc-7e35-11ec-931d-76f56843c393",
  "accountName": "0000123456-00001",
  "firmwareName": "SEQUANSCommunications_GM01Q_SR1.2.0.0-10657_SR1.2.0.0-10512",
  "firmwareFrom": "SR1.2.0.0-10657",
  "firmwareTo": "SR1.2.0.0-10512",
  "startDate": "2022-01-25",
  "reportUpdatedTime": "2022-01-26 03:45:01.608 +0000 UTC",
  "status": "UpgradeSuccess",
  "reason": "Upgrade completed successfully"
}
```

