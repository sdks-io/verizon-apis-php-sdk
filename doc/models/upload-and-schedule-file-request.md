
# Upload and Schedule File Request

## Structure

`UploadAndScheduleFileRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `campaignName` | `?string` | Optional | The campaign name. | getCampaignName(): ?string | setCampaignName(?string campaignName): void |
| `fileName` | `?string` | Optional | The name of the file you are upgrading to. | getFileName(): ?string | setFileName(?string fileName): void |
| `fileVersion` | `?string` | Optional | The version of the file you are upgrading to. | getFileVersion(): ?string | setFileVersion(?string fileVersion): void |
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
  "fileName": "configfile-Verizon_VZW1_hello-world.txt",
  "fileVersion": "1.0",
  "distributionType": "HTTP",
  "startDate": "2021-02-08",
  "endDate": "2021-02-08",
  "downloadAfterDate": "2021-02-08"
}
```

