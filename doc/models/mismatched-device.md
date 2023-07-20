
# Mismatched Device

4G devices with an ICCID (SIM) that was not activated with the expected IMEI (hardware) during a specified time frame.

## Structure

`MismatchedDevice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | The account that the device is associated with. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `mdn` | `?string` | Optional | The assigned phone number of the device. | getMdn(): ?string | setMdn(?string mdn): void |
| `activationDate` | `?string` | Optional | The date and time when the SIM was last activated. | getActivationDate(): ?string | setActivationDate(?string activationDate): void |
| `iccid` | `?string` | Optional | The ID of the SIM. | getIccid(): ?string | setIccid(?string iccid): void |
| `preImei` | `?string` | Optional | The IMEI of the device prior to the SIM OTA activation on simOtaDate. | getPreImei(): ?string | setPreImei(?string preImei): void |
| `postImei` | `?string` | Optional | The IMEI of the device after the SIM OTA activation on simOtaDate. | getPostImei(): ?string | setPostImei(?string postImei): void |
| `simOtaDate` | `?string` | Optional | The date and time of the SIM OTA activation. | getSimOtaDate(): ?string | setSimOtaDate(?string simOtaDate): void |

## Example (as JSON)

```json
{
  "accountName": "0212398765-00001",
  "mdn": "5096300587",
  "activationDate": "2011-01-21T10:55:27-08:00",
  "iccid": "89148000000800784259",
  "preImei": "990003420535573",
  "postImei": "987603420573553",
  "simOtaDate": "2017-12-01T16:00:00-08:00"
}
```

