
# Device Software Upgrade

Array of software upgrade objects with the specified status.

## Structure

`DeviceSoftwareUpgrade`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | `string` | Required | Device identifier. | getDeviceId(): string | setDeviceId(string deviceId): void |
| `id` | `string` | Required | Upgrade identifier. | getId(): string | setId(string id): void |
| `accountName` | `string` | Required | Account identifier. | getAccountName(): string | setAccountName(string accountName): void |
| `softwareName` | `?string` | Optional | Software name. | getSoftwareName(): ?string | setSoftwareName(?string softwareName): void |
| `startDate` | `DateTime` | Required | Software upgrade start date. | getStartDate(): \DateTime | setStartDate(\DateTime startDate): void |
| `status` | `string` | Required | Software upgrade status. | getStatus(): string | setStatus(string status): void |
| `reason` | `string` | Required | Software upgrade result reason. | getReason(): string | setReason(string reason): void |

## Example (as JSON)

```json
{
  "deviceId": "990013907835573",
  "id": "60b5d639-ccdc-4db8-8824-069bd94c95bf",
  "accountName": "0402196254-00001",
  "softwareName": "FOTA_Verizon_Model-A_02To03_HF",
  "startDate": "2018-03-05",
  "status": "UpgradeSuccess",
  "reason": "success"
}
```

