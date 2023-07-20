
# Upload and Schedule File Response

## Structure

`UploadAndScheduleFileResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Updgrade identifier. | getId(): ?string | setId(?string id): void |
| `accountName` | `?string` | Optional | Account identifer. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `campaignName` | `?string` | Optional | The campaign name. | getCampaignName(): ?string | setCampaignName(?string campaignName): void |
| `softwareName` | `?string` | Optional | Software name. | getSoftwareName(): ?string | setSoftwareName(?string softwareName): void |
| `softwareFrom` | `?string` | Optional | Old software name. | getSoftwareFrom(): ?string | setSoftwareFrom(?string softwareFrom): void |
| `softwareTo` | `?string` | Optional | New software name. | getSoftwareTo(): ?string | setSoftwareTo(?string softwareTo): void |
| `fileName` | `?string` | Optional | The name of the file you are upgrading to. | getFileName(): ?string | setFileName(?string fileName): void |
| `fileVersion` | `?string` | Optional | The version of the file you are upgrading to. | getFileVersion(): ?string | setFileVersion(?string fileVersion): void |
| `distributionType` | `?string` | Optional | Valid values | getDistributionType(): ?string | setDistributionType(?string distributionType): void |
| `make` | `?string` | Optional | Applicable make. | getMake(): ?string | setMake(?string make): void |
| `model` | `?string` | Optional | Applicable model. | getModel(): ?string | setModel(?string model): void |
| `startDate` | `?string` | Optional | Campaign start date. | getStartDate(): ?string | setStartDate(?string startDate): void |
| `endDate` | `?string` | Optional | Campaign end date. | getEndDate(): ?string | setEndDate(?string endDate): void |
| `downloadAfterDate` | `?string` | Optional | Specifies the starting date the client should download the package. If null, client downloads as soon as possible. | getDownloadAfterDate(): ?string | setDownloadAfterDate(?string downloadAfterDate): void |
| `downloadTimeWindowList` | [`?(DownloadTimeWindow[])`](../../doc/models/download-time-window.md) | Optional | List of allowed download time windows. | getDownloadTimeWindowList(): ?array | setDownloadTimeWindowList(?array downloadTimeWindowList): void |
| `installAfterDate` | `?string` | Optional | The date after which you install the package. If null, install as soon as possible. | getInstallAfterDate(): ?string | setInstallAfterDate(?string installAfterDate): void |
| `installTimeWindowList` | [`?(DownloadTimeWindow[])`](../../doc/models/download-time-window.md) | Optional | List of allowed install time windows. | getInstallTimeWindowList(): ?array | setInstallTimeWindowList(?array installTimeWindowList): void |
| `deviceList` | `?(string[])` | Optional | Device IMEI list. | getDeviceList(): ?array | setDeviceList(?array deviceList): void |
| `status` | `?string` | Optional | Software update status. | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "id": "60b5d639-ccdc-4db8-8824-069bd94c95bf",
  "accountName": "0242078689-00001",
  "campaignName": "FOTA_Verizon_Upgrade",
  "softwareName": "FOTA_Verizon_Model-A_02To03_HF",
  "softwareFrom": "FOTA_Verizon_Model-A_00To01_HF",
  "softwareTo": "FOTA_Verizon_Model-A_02To03_HF",
  "fileName": "configfile-Verizon_VZW1_hello-world.txt",
  "fileVersion": "1.0",
  "distributionType": "HTTP",
  "make": "Verizon",
  "model": "Model-A",
  "startDate": "2021-02-08",
  "endDate": "2021-02-08",
  "downloadAfterDate": "2021-02-08",
  "status": "pending"
}
```

