
# Firmware

Firmware information.

## Structure

`Firmware`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firmwareName` | `?string` | Optional | The name of the firmware image, provided by the device manufacturer. | getFirmwareName(): ?string | setFirmwareName(?string firmwareName): void |
| `participantName` | `?string` | Optional | Internal reference; can be ignored. | getParticipantName(): ?string | setParticipantName(?string participantName): void |
| `launchDate` | `?DateTime` | Optional | The release date of the firmware image. | getLaunchDate(): ?\DateTime | setLaunchDate(?\DateTime launchDate): void |
| `releaseNote` | `?string` | Optional | Additional information about the release. | getReleaseNote(): ?string | setReleaseNote(?string releaseNote): void |
| `model` | `?string` | Optional | The device model that the firmware applies to. | getModel(): ?string | setModel(?string model): void |
| `make` | `?string` | Optional | The device make that the firmware applies to. | getMake(): ?string | setMake(?string make): void |
| `fromVersion` | `?string` | Optional | The firmware version that must currently be on the device to upgrade. | getFromVersion(): ?string | setFromVersion(?string fromVersion): void |
| `toVersion` | `?string` | Optional | The firmware version that will be on the device after an upgrade. | getToVersion(): ?string | setToVersion(?string toVersion): void |

## Example (as JSON)

```json
{
  "firmwareName": "FOTA_Verizon_Model-A_01To02_HF",
  "participantName": "0402196254-00001",
  "launchDate": "2018-04-01T16:03:00.000Z",
  "releaseNote": "",
  "model": "Model-A",
  "make": "Verizon",
  "fromVersion": "VerizonFirmwareVersion-01",
  "toVersion": "VerizonFirmwareVersion-02"
}
```

