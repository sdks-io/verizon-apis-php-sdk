
# Upload Configuration Files Response

## Structure

`UploadConfigurationFilesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fileName` | `?string` | Optional | The name of the file you are upgrading to. | getFileName(): ?string | setFileName(?string fileName): void |
| `fileVersion` | `?string` | Optional | The version of the file you are upgrading to. | getFileVersion(): ?string | setFileVersion(?string fileVersion): void |
| `launchDate` | `?DateTime` | Optional | Software launch date. | getLaunchDate(): ?\DateTime | setLaunchDate(?\DateTime launchDate): void |
| `releaseNote` | `?string` | Optional | Software release note. | getReleaseNote(): ?string | setReleaseNote(?string releaseNote): void |
| `model` | `?string` | Optional | Software applicable device model. | getModel(): ?string | setModel(?string model): void |
| `make` | `?string` | Optional | Software applicable device make. | getMake(): ?string | setMake(?string make): void |
| `distributionType` | `?string` | Optional | LWM2M, OMD-DM or HTTP. | getDistributionType(): ?string | setDistributionType(?string distributionType): void |
| `devicePlatformId` | `?string` | Optional | The platform (Android, iOS, etc.) that the software can be applied to. | getDevicePlatformId(): ?string | setDevicePlatformId(?string devicePlatformId): void |
| `localTargetPath` | `?string` | Optional | Local target path on the device. | getLocalTargetPath(): ?string | setLocalTargetPath(?string localTargetPath): void |

## Example (as JSON)

```json
{
  "fileName": "hello-world.txt",
  "fileVersion": "1.0",
  "launchDate": "2020-08-31",
  "releaseNote": "note",
  "model": "Model-A",
  "make": "Verizon",
  "distributionType": "HTTP",
  "devicePlatformId": "IoT",
  "localTargetPath": "IoT"
}
```

