
# V3 Device

Device information.

## Structure

`V3Device`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | `string` | Required | Device IMEI. | getDeviceId(): string | setDeviceId(string deviceId): void |
| `requestStatus` | `?string` | Optional | Success or failure. | getRequestStatus(): ?string | setRequestStatus(?string requestStatus): void |
| `resultReason` | `?string` | Optional | - | getResultReason(): ?string | setResultReason(?string resultReason): void |
| `mdn` | `?string` | Optional | MDN. | getMdn(): ?string | setMdn(?string mdn): void |
| `model` | `?string` | Optional | Device model. | getModel(): ?string | setModel(?string model): void |
| `make` | `?string` | Optional | Device make. | getMake(): ?string | setMake(?string make): void |
| `firmware` | `?string` | Optional | Device firmware version. | getFirmware(): ?string | setFirmware(?string firmware): void |
| `fotaEligible` | `?bool` | Optional | Value=true if the device software can be upgraded over the air using the Software Management Services API. | getFotaEligible(): ?bool | setFotaEligible(?bool fotaEligible): void |
| `status` | `?string` | Optional | Device status. | getStatus(): ?string | setStatus(?string status): void |
| `licenseAssigned` | `?bool` | Optional | License assigned device. | getLicenseAssigned(): ?bool | setLicenseAssigned(?bool licenseAssigned): void |
| `protocol` | `?string` | Optional | Firmware protocol. Valid values include: LWM2M, OMADM, HTTP or NONE. | getProtocol(): ?string | setProtocol(?string protocol): void |
| `softwareList` | [`?(V3SoftwareInfo[])`](../../doc/models/v3-software-info.md) | Optional | List of sofware.<br>**Constraints**: *Maximum Items*: `1000` | getSoftwareList(): ?array | setSoftwareList(?array softwareList): void |
| `fileList` | [`?(V3SoftwareInfo[])`](../../doc/models/v3-software-info.md) | Optional | List of files.<br>**Constraints**: *Maximum Items*: `1000` | getFileList(): ?array | setFileList(?array fileList): void |
| `createTime` | `?string` | Optional | The date and time of when the device is created. | getCreateTime(): ?string | setCreateTime(?string createTime): void |
| `statusTime` | `?string` | Optional | The date and time of when the device firmware or software is updated. | getStatusTime(): ?string | setStatusTime(?string statusTime): void |
| `updateTime` | `?string` | Optional | The date and time of when the device is updated. | getUpdateTime(): ?string | setUpdateTime(?string updateTime): void |
| `refreshTime` | `?string` | Optional | The date and time of when the device is refreshed. | getRefreshTime(): ?string | setRefreshTime(?string refreshTime): void |
| `lastConnectionTime` | `?DateTime` | Optional | The date and time of when the device reachability is checked. | getLastConnectionTime(): ?\DateTime | setLastConnectionTime(?\DateTime lastConnectionTime): void |

## Example (as JSON)

```json
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
  "requestStatus": "requestStatus6",
  "resultReason": "resultReason6"
}
```

