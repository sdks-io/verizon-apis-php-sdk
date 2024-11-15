
# Retrieves Available Files Response

## Structure

`RetrievesAvailableFilesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fileName` | `?string` | Optional | ThingSpace-generated name of the file. You will use this name when listing or scheduling campaigns for the file. | getFileName(): ?string | setFileName(?string fileName): void |
| `fileVersion` | `?string` | Optional | Version of the file. | getFileVersion(): ?string | setFileVersion(?string fileVersion): void |
| `releaseNote` | `?string` | Optional | Software release note. | getReleaseNote(): ?string | setReleaseNote(?string releaseNote): void |
| `make` | `?string` | Optional | The software-applicable device make. | getMake(): ?string | setMake(?string make): void |
| `model` | `?string` | Optional | The software-applicable device model. | getModel(): ?string | setModel(?string model): void |
| `localTargetPath` | `?string` | Optional | Local target path on the device. | getLocalTargetPath(): ?string | setLocalTargetPath(?string localTargetPath): void |
| `distributionType` | `?string` | Optional | Valid values | getDistributionType(): ?string | setDistributionType(?string distributionType): void |
| `devicePlatformId` | `?string` | Optional | The platform (Android, iOS, etc.,) that the software can be applied to. | getDevicePlatformId(): ?string | setDevicePlatformId(?string devicePlatformId): void |

## Example (as JSON)

```json
{
  "fileName": "configfile-Verizon_VZW1_hello-world.txt",
  "fileVersion": "1.0",
  "releaseNote": "Hello world initial file",
  "make": "Verizon",
  "model": "VZW1",
  "localTargetPath": "/VZWFOTA/hello-world.txt",
  "distributionType": "HTTP",
  "devicePlatformId": "IoT"
}
```

