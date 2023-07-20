
# V3 Account Device

Device information.

## Structure

`V3AccountDevice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | `string` | Required | Device identifier. | getDeviceId(): string | setDeviceId(string deviceId): void |
| `mdn` | `string` | Required | MDN. | getMdn(): string | setMdn(string mdn): void |
| `model` | `string` | Required | Device model. | getModel(): string | setModel(string model): void |
| `make` | `string` | Required | Device make. | getMake(): string | setMake(string make): void |
| `firmware` | `string` | Required | Device firmware version. | getFirmware(): string | setFirmware(string firmware): void |
| `fotaEligible` | `bool` | Required | Value=true if the device software can be upgraded over the air using the Software Management Services API. | getFotaEligible(): bool | setFotaEligible(bool fotaEligible): void |
| `status` | `string` | Required | Device status. | getStatus(): string | setStatus(string status): void |
| `licenseAssigned` | `bool` | Required | License assigned device. | getLicenseAssigned(): bool | setLicenseAssigned(bool licenseAssigned): void |
| `protocol` | `string` | Required | Firmware protocol. Valid values include: LWM2M, OMADM, HTTP or NONE. | getProtocol(): string | setProtocol(string protocol): void |
| `softwareList` | [`V3SoftwareInfo[]`](../../doc/models/v3-software-info.md) | Required | List of sofware. | getSoftwareList(): array | setSoftwareList(array softwareList): void |
| `fileList` | [`?(V3SoftwareInfo[])`](../../doc/models/v3-software-info.md) | Optional | List of files. | getFileList(): ?array | setFileList(?array fileList): void |
| `createTime` | `?string` | Optional | The date and time of when the device is created. | getCreateTime(): ?string | setCreateTime(?string createTime): void |
| `upgradeTime` | `?string` | Optional | The date and time of when the device firmware or software is updated. | getUpgradeTime(): ?string | setUpgradeTime(?string upgradeTime): void |
| `updateTime` | `?string` | Optional | The date and time of when the device is updated. | getUpdateTime(): ?string | setUpdateTime(?string updateTime): void |
| `refreshTime` | `?string` | Optional | The date and time of when the device is refreshed. | getRefreshTime(): ?string | setRefreshTime(?string refreshTime): void |

## Example (as JSON)

```json
{
  "deviceId": "15-digit device ID",
  "mdn": "10-digit MDN",
  "model": "BG96",
  "make": "QUECTEL",
  "firmware": "BG96MAR04A04M1G",
  "fotaEligible": false,
  "status": "Active",
  "licenseAssigned": true,
  "protocol": "LWM2M",
  "softwareList": [
    {
      "name": "VZ_MDM_IOT",
      "version": "0.14",
      "upgradeTime": "2012-04-23T18:25:43.511Z"
    }
  ],
  "fileList": [
    {
      "name": "VZ_MDM_IOT",
      "version": "0.14",
      "upgradeTime": "2012-04-23T18:25:43.511Z"
    }
  ],
  "createTime": "2021-06-03 00:03:56.079 +0000 UTC",
  "upgradeTime": "2021-06-03 00:03:56.079 +0000 UTC",
  "updateTime": "2021-06-03 00:03:56.079 +0000 UTC",
  "refreshTime": "2021-06-03 00:03:56.079 +0000 UTC"
}
```

