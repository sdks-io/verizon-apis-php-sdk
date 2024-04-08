
# Usage History

## Structure

`UsageHistory`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bytesUsed` | `?int` | Optional | - | getBytesUsed(): ?int | setBytesUsed(?int bytesUsed): void |
| `serviceplan` | `?string` | Optional | - | getServiceplan(): ?string | setServiceplan(?string serviceplan): void |
| `smsUsed` | `?int` | Optional | - | getSmsUsed(): ?int | setSmsUsed(?int smsUsed): void |
| `moSMS` | `?int` | Optional | - | getMoSMS(): ?int | setMoSMS(?int moSMS): void |
| `mtSMS` | `?int` | Optional | - | getMtSMS(): ?int | setMtSMS(?int mtSMS): void |
| `source` | `?string` | Optional | - | getSource(): ?string | setSource(?string source): void |
| `eventDateTime` | `?DateTime` | Optional | - | getEventDateTime(): ?\DateTime | setEventDateTime(?\DateTime eventDateTime): void |

## Example (as JSON)

```json
{
  "bytesUsed": 3072,
  "serviceplan": "The serviceplan name",
  "source": "Raw Usage",
  "eventDateTime": "08/15/2021 00:00:00",
  "smsUsed": 250,
  "moSMS": 100,
  "mtSMS": 92
}
```

