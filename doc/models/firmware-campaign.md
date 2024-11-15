
# Firmware Campaign

Firmware upgrade information.

## Structure

`FirmwareCampaign`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Upgrade identifier. | getId(): string | setId(string id): void |
| `accountName` | `string` | Required | Account identifier. | getAccountName(): string | setAccountName(string accountName): void |
| `campaignName` | `?string` | Optional | Campaign name. | getCampaignName(): ?string | setCampaignName(?string campaignName): void |
| `firmwareName` | `?string` | Optional | Firmware name (for firmware upgrade only). | getFirmwareName(): ?string | setFirmwareName(?string firmwareName): void |
| `firmwareFrom` | `string` | Required | Old firmware version (for firmware upgrade only). | getFirmwareFrom(): string | setFirmwareFrom(string firmwareFrom): void |
| `firmwareTo` | `string` | Required | New firmware version (for firmware upgrade only). | getFirmwareTo(): string | setFirmwareTo(string firmwareTo): void |
| `protocol` | `string` | Required | Available values: LWM2M.<br>**Default**: `'LWM2M'` | getProtocol(): string | setProtocol(string protocol): void |
| `make` | `string` | Required | - | getMake(): string | setMake(string make): void |
| `model` | `string` | Required | - | getModel(): string | setModel(string model): void |
| `startDate` | `DateTime` | Required | Campaign start date. | getStartDate(): \DateTime | setStartDate(\DateTime startDate): void |
| `endDate` | `DateTime` | Required | Campaign end date. | getEndDate(): \DateTime | setEndDate(\DateTime endDate): void |
| `campaignTimeWindowList` | [`?(V3TimeWindow[])`](../../doc/models/v3-time-window.md) | Optional | List of allowed campaign time windows. | getCampaignTimeWindowList(): ?array | setCampaignTimeWindowList(?array campaignTimeWindowList): void |
| `status` | `string` | Required | Campaign status. | getStatus(): string | setStatus(string status): void |

## Example (as JSON)

```json
{
  "id": "f858b8c4-2153-11ec-8c44-aeb16d1aa652",
  "accountName": "0000123456-00001",
  "campaignName": "Smart FOTA - test 4",
  "firmwareName": "SEQUANSCommunications_GM01Q_SR1.2.0.0-10512_SR1.2.0.0-10657",
  "protocol": "LWM2M",
  "firmwareFrom": "SR1.2.0.0-10512",
  "firmwareTo": "SR1.2.0.0-10657",
  "make": "SEQUANS Communications",
  "model": "GM01Q",
  "status": "CampaignRequestPending",
  "startDate": "2021-09-29",
  "endDate": "2021-10-01",
  "campaignTimeWindowList": [
    {
      "startTime": 18,
      "endTime": 22
    }
  ]
}
```

