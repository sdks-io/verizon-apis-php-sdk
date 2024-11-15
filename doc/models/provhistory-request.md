
# Provhistory Request

## Structure

`ProvhistoryRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Z a-z 0-9 \-]{3,32}$` | getAccountName(): ?string | setAccountName(?string accountName): void |
| `deviceFilter` | [`?(GIODeviceId[])`](../../doc/models/gio-device-id.md) | Optional | **Constraints**: *Maximum Items*: `100` | getDeviceFilter(): ?array | setDeviceFilter(?array deviceFilter): void |
| `earliest` | `?DateTime` | Optional | - | getEarliest(): ?\DateTime | setEarliest(?\DateTime earliest): void |
| `latest` | `?DateTime` | Optional | - | getLatest(): ?\DateTime | setLatest(?\DateTime latest): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "earliest": "10/15/2021 04:49:35",
  "latest": "10/15/2021 04:49:49",
  "deviceFilter": [
    {
      "kind": "kind2",
      "id": "id4"
    }
  ]
}
```

