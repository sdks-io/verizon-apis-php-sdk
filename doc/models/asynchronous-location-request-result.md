
# Asynchronous Location Request Result

## Structure

`AsynchronousLocationRequestResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `txid` | `?string` | Optional | The transaction ID of the report. | getTxid(): ?string | setTxid(?string txid): void |
| `status` | [`?string(ReportStatusEnum)`](../../doc/models/report-status-enum.md) | Optional | Status of the report. | getStatus(): ?string | setStatus(?string status): void |
| `estimatedDuration` | `?string` | Optional | Estimated number of minutes required to complete the report. | getEstimatedDuration(): ?string | setEstimatedDuration(?string estimatedDuration): void |

## Example (as JSON)

```json
{
  "txid": "2017-12-11Te8b47da2-3a45-46cf-9903-61815e1e97e9",
  "status": "COMPLETED",
  "estimatedDuration": "estimatedDuration2"
}
```

