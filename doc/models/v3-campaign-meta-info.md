
# V3 Campaign Meta Info

Campaign and campaign details.

## Structure

`V3CampaignMetaInfo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | Account identifier. | getAccountName(): string | setAccountName(string accountName): void |
| `id` | `string` | Required | Campaign identifier. | getId(): string | setId(string id): void |
| `campaignName` | `?string` | Optional | Campaign name. | getCampaignName(): ?string | setCampaignName(?string campaignName): void |
| `firmwareName` | `?string` | Optional | Firmware name. | getFirmwareName(): ?string | setFirmwareName(?string firmwareName): void |
| `firmwareFrom` | `?string` | Optional | Old firmware version. | getFirmwareFrom(): ?string | setFirmwareFrom(?string firmwareFrom): void |
| `firmwareTo` | `?string` | Optional | New software version. | getFirmwareTo(): ?string | setFirmwareTo(?string firmwareTo): void |
| `protocol` | [`?string(CampaignMetaInfoProtocolEnum)`](../../doc/models/campaign-meta-info-protocol-enum.md) | Optional | Firmware protocol. Valid values include: LWM2M, OMD-DM.<br>**Default**: `CampaignMetaInfoProtocolEnum::LW_M2M` | getProtocol(): ?string | setProtocol(?string protocol): void |
| `make` | `string` | Required | Device make. | getMake(): string | setMake(string make): void |
| `model` | `string` | Required | Device model. | getModel(): string | setModel(string model): void |
| `startDate` | `DateTime` | Required | Campaign start date. | getStartDate(): \DateTime | setStartDate(\DateTime startDate): void |
| `endDate` | `DateTime` | Required | Campaign end date. | getEndDate(): \DateTime | setEndDate(\DateTime endDate): void |
| `campaignTimeWindowList` | [`?(V3TimeWindow[])`](../../doc/models/v3-time-window.md) | Optional | List of allowed campaign time windows. | getCampaignTimeWindowList(): ?array | setCampaignTimeWindowList(?array campaignTimeWindowList): void |
| `status` | `string` | Required | Firmware upgrade status. | getStatus(): string | setStatus(string status): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "id": "60b5d639-ccdc-4db8-8824-069bd94c95bf",
  "campaignName": "FOTA_Verizon_Upgrade",
  "firmwareName": "FOTA_Verizon_Model-A_02To03_HF",
  "firmwareFrom": "FOTA_Verizon_Model-A_00To01_HF",
  "firmwareTo": "FOTA_Verizon_Model-A_02To03_HF",
  "make": "Verizon",
  "model": "Model-A",
  "status": "CampaignEnded",
  "startDate": "2020-08-21",
  "endDate": "2020-08-22",
  "campaignTimeWindowList": [
    {
      "startTime": 20,
      "endTime": 21
    }
  ],
  "protocol": "LWM2M"
}
```

