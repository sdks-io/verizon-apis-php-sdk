
# V2 Account Device

Account device information.

## Structure

`V2AccountDevice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | `string` | Required | Device identifier. | getDeviceId(): string | setDeviceId(string deviceId): void |
| `mdn` | `string` | Required | MDN. | getMdn(): string | setMdn(string mdn): void |
| `model` | `string` | Required | Device model. | getModel(): string | setModel(string model): void |
| `make` | `string` | Required | Device make. | getMake(): string | setMake(string make): void |
| `fotaEligible` | `bool` | Required | Device FOTA capable. | getFotaEligible(): bool | setFotaEligible(bool fotaEligible): void |
| `appFotaEligible` | `bool` | Required | Device application FOTA capable. | getAppFotaEligible(): bool | setAppFotaEligible(bool appFotaEligible): void |
| `licenseAssigned` | `bool` | Required | License assigned device. | getLicenseAssigned(): bool | setLicenseAssigned(bool licenseAssigned): void |
| `distributionType` | `string` | Required | LWM2M, OMD-DM or HTTP. | getDistributionType(): string | setDistributionType(string distributionType): void |
| `softwareList` | [`V2SoftwareInfo[]`](../../doc/models/v2-software-info.md) | Required | List of sofware. | getSoftwareList(): array | setSoftwareList(array softwareList): void |
| `createTime` | `?string` | Optional | The date and time of when the device is created. | getCreateTime(): ?string | setCreateTime(?string createTime): void |
| `upgradeTime` | `?string` | Optional | The date and time of when the device firmware or software is upgraded. | getUpgradeTime(): ?string | setUpgradeTime(?string upgradeTime): void |
| `updateTime` | `?string` | Optional | The date and time of when the device is updated. | getUpdateTime(): ?string | setUpdateTime(?string updateTime): void |
| `refreshTime` | `?string` | Optional | The date and time of when the device is refreshed. | getRefreshTime(): ?string | setRefreshTime(?string refreshTime): void |

## Example (as JSON)

```json
{
  "deviceId": "15-digit IMEI",
  "mdn": "10-digit MDN",
  "model": "Model-A",
  "make": "Verizon",
  "fotaEligible": true,
  "appFotaEligible": true,
  "licenseAssigned": true,
  "distributionType": "HTTP",
  "softwareList": [
    {
      "name": "FOTA_Verizon_Model-A_02To03_HF",
      "version": "3",
      "upgradeTime": "2020-09-08T19:00:51.541Z"
    }
  ],
  "createTime": "2021-06-03 00:03:56.079 +0000 UTC",
  "upgradeTime": "2021-06-03 00:03:56.079 +0000 UTC",
  "updateTime": "2021-06-03 00:03:56.079 +0000 UTC",
  "refreshTime": "2021-06-03 00:03:56.079 +0000 UTC"
}
```

