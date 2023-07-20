
# Schedules Software Upgrade Request

## Structure

`SchedulesSoftwareUpgradeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `campaignName` | `?string` | Optional | The campaign name. | getCampaignName(): ?string | setCampaignName(?string campaignName): void |
| `softwareName` | `?string` | Optional | Software name. | getSoftwareName(): ?string | setSoftwareName(?string softwareName): void |
| `softwareFrom` | `?string` | Optional | Old software name. | getSoftwareFrom(): ?string | setSoftwareFrom(?string softwareFrom): void |
| `softwareTo` | `?string` | Optional | New software name. | getSoftwareTo(): ?string | setSoftwareTo(?string softwareTo): void |
| `distributionType` | `?string` | Optional | Valid values | getDistributionType(): ?string | setDistributionType(?string distributionType): void |
| `startDate` | `?string` | Optional | Campaign start date. | getStartDate(): ?string | setStartDate(?string startDate): void |
| `endDate` | `?string` | Optional | Campaign end date. | getEndDate(): ?string | setEndDate(?string endDate): void |
| `downloadAfterDate` | `?string` | Optional | Specifies the starting date the client should download the package. If null, client downloads as soon as possible. | getDownloadAfterDate(): ?string | setDownloadAfterDate(?string downloadAfterDate): void |
| `downloadTimeWindowList` | [`?(DownloadTimeWindow[])`](../../doc/models/download-time-window.md) | Optional | List of allowed download time windows. | getDownloadTimeWindowList(): ?array | setDownloadTimeWindowList(?array downloadTimeWindowList): void |
| `installAfterDate` | `?string` | Optional | The date after which you install the package. If null, install as soon as possible. | getInstallAfterDate(): ?string | setInstallAfterDate(?string installAfterDate): void |
| `installTimeWindowList` | [`?(DownloadTimeWindow[])`](../../doc/models/download-time-window.md) | Optional | List of allowed install time windows. | getInstallTimeWindowList(): ?array | setInstallTimeWindowList(?array installTimeWindowList): void |
| `deviceList` | `?(string[])` | Optional | Device IMEI list. | getDeviceList(): ?array | setDeviceList(?array deviceList): void |

## Example (as JSON)

```json
{
  "campaignName": "FOTA_Verizon_Upgrade",
  "softwareName": "FOTA_Verizon_Model-A_02To03_HF",
  "softwareFrom": "FOTA_Verizon_Model-A_00To01_HF",
  "softwareTo": "FOTA_Verizon_Model-A_02To03_HF",
  "distributionType": "HTTP",
  "startDate": "2021-02-08",
  "endDate": "2021-02-08",
  "downloadAfterDate": "2021-02-08"
}
```

