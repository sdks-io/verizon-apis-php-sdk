
# History Search Filter

The selected device and attributes for which a request should retrieve data.

## Structure

`HistorySearchFilter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | Account name identifier. | getAccountName(): string | setAccountName(string accountName): void |
| `device` | [`Device`](../../doc/models/device.md) | Required | Identifies a particular IoT device. | getDevice(): Device | setDevice(Device device): void |
| `attributes` | [`?HistorySearchFilterAttributes`](../../doc/models/history-search-filter-attributes.md) | Optional | Streaming RF parameters for which you want to retrieve history data. | getAttributes(): ?HistorySearchFilterAttributes | setAttributes(?HistorySearchFilterAttributes attributes): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "device": {
    "id": "15-digit IMEI",
    "kind": "IMEI"
  },
  "attributes": {
    "name": "LINK_QUALITY"
  }
}
```

