
# Device List Query Item

The list of devices in the account.

## Structure

`DeviceListQueryItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | `?string` | Optional | Device IMEI. | getDeviceId(): ?string | setDeviceId(?string deviceId): void |
| `mdn` | `?string` | Optional | The MDN (phone number) of the device. | getMdn(): ?string | setMdn(?string mdn): void |
| `model` | `?string` | Optional | The device model name. | getModel(): ?string | setModel(?string model): void |
| `make` | `?string` | Optional | The device make. | getMake(): ?string | setMake(?string make): void |
| `firmware` | `?string` | Optional | The name of the firmware image currently installed on the device. | getFirmware(): ?string | setFirmware(?string firmware): void |
| `fotaEligible` | `?bool` | Optional | True if the device firmware can be upgraded over the air using the Software Management Services API. | getFotaEligible(): ?bool | setFotaEligible(?bool fotaEligible): void |
| `licenseAssigned` | `?bool` | Optional | True if an MRC license has been assigned to this device. | getLicenseAssigned(): ?bool | setLicenseAssigned(?bool licenseAssigned): void |
| `upgradeTime` | `?string` | Optional | The date and time that the device firmware was last upgraded. If a device has never been upgraded, the upgradeTime will be 01/01/1900 0:0:0. | getUpgradeTime(): ?string | setUpgradeTime(?string upgradeTime): void |

## Example (as JSON)

```json
{
  "deviceId": "900000000000001",
  "mdn": "0000040881",
  "model": "Model-A",
  "make": "Verizon",
  "firmware": "VerizonFirmwareVersion-01",
  "fotaEligible": true,
  "licenseAssigned": true,
  "upgradeTime": "2021-06-03 00:03:56.079 +0000 UTC"
}
```

