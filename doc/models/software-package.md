
# Software Package

Software package information.

## Structure

`SoftwarePackage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `softwareName` | `string` | Required | Software name. | getSoftwareName(): string | setSoftwareName(string softwareName): void |
| `launchDate` | `DateTime` | Required | Software launch date. | getLaunchDate(): \DateTime | setLaunchDate(\DateTime launchDate): void |
| `releaseNote` | `?string` | Optional | Software release note reserved for future use. | getReleaseNote(): ?string | setReleaseNote(?string releaseNote): void |
| `model` | `string` | Required | Software applicable device model. | getModel(): string | setModel(string model): void |
| `make` | `string` | Required | Software applicable device make. | getMake(): string | setMake(string make): void |
| `distributionType` | `string` | Required | LWM2M, OMD-DM or HTTP. | getDistributionType(): string | setDistributionType(string distributionType): void |
| `devicePlatformId` | `string` | Required | The platform (Android, iOS, etc.) that the software can be applied to. | getDevicePlatformId(): string | setDevicePlatformId(string devicePlatformId): void |

## Example (as JSON)

```json
{
  "softwareName": "FOTA_Verizon_Model-A_02To03_HF",
  "launchDate": "2020-08-31",
  "releaseNote": "",
  "model": "Model-A",
  "make": "Verizon",
  "distributionType": "HTTP",
  "devicePlatformId": "IoT"
}
```

