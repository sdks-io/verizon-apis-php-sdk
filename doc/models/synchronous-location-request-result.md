
# Synchronous Location Request Result

## Structure

`SynchronousLocationRequestResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `txid` | `string` | Required | The transaction ID of the report. | getTxid(): string | setTxid(string txid): void |
| `status` | [`string(ReportStatusEnum)`](../../doc/models/report-status-enum.md) | Required | Status of the report. | getStatus(): string | setStatus(string status): void |

## Example (as JSON)

```json
{
  "txid": "4be7c858-0ef9-4b15-a0c1-95061456d835",
  "status": "QUEUED"
}
```

