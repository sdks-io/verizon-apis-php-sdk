
# Location Report Status

Status of the report.

## Structure

`LocationReportStatus`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `txid` | `?string` | Optional | The transaction ID of the report. | getTxid(): ?string | setTxid(?string txid): void |
| `status` | [`?string(ReportStatusEnum)`](../../doc/models/report-status-enum.md) | Optional | Status of the report. | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "txid": "2c90bd28-ece4-42ef-9f02-7e3bd4fbff33",
  "status": "QUEUED"
}
```

