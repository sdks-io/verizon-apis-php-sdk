
# ESIM Provhistory Request

## Structure

`ESIMProvhistoryRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | - | getAccountName(): ?string | setAccountName(?string accountName): void |
| `deviceFilter` | [`?(DeviceId2[])`](../../doc/models/device-id-2.md) | Optional | **Constraints**: *Maximum Items*: `100` | getDeviceFilter(): ?array | setDeviceFilter(?array deviceFilter): void |
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
      "id": "id4",
      "kind": "kind2"
    },
    {
      "id": "id4",
      "kind": "kind2"
    },
    {
      "id": "id4",
      "kind": "kind2"
    }
  ]
}
```

