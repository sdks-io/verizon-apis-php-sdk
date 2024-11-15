
# Devices Consent Result

## Structure

`DevicesConsentResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | Account identifier in "##########-#####". | getAccountName(): ?string | setAccountName(?string accountName): void |
| `allDevice` | `?bool` | Optional | Exclude all devices or not? | getAllDevice(): ?bool | setAllDevice(?bool allDevice): void |
| `hasMoreData` | `?bool` | Optional | Are there more devices to retrieve or not? | getHasMoreData(): ?bool | setHasMoreData(?bool hasMoreData): void |
| `totalCount` | `?int` | Optional | Total number of excluded devices in the account. | getTotalCount(): ?int | setTotalCount(?int totalCount): void |
| `updateTime` | `?string` | Optional | Last update time. | getUpdateTime(): ?string | setUpdateTime(?string updateTime): void |
| `exclusion` | `?(string[])` | Optional | Device ID list. | getExclusion(): ?array | setExclusion(?array exclusion): void |

## Example (as JSON)

```json
{
  "accountName": "2024009649-00001",
  "allDevice": false,
  "hasMoreData": false,
  "totalCount": 4,
  "updateTime": "2018-05-18 19:20:50.076 +0000 UTC",
  "exclusion": [
    "990003420535375",
    "420535399000375",
    "A100003861E585",
    "205353759900034"
  ]
}
```

