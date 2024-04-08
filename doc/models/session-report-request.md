
# Session Report Request

Request for obtaining a session report.

## Structure

`SessionReportRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountNumber` | `string` | Required | Account Number. | getAccountNumber(): string | setAccountNumber(string accountNumber): void |
| `imei` | `string` | Required | Device ids. | getImei(): string | setImei(string imei): void |
| `startDate` | `?string` | Optional | Start date of session to include. If not specified  information will be shown from the earliest available (180 days). Can be either date in ISO 8601 format or predefined constants. | getStartDate(): ?string | setStartDate(?string startDate): void |
| `endDate` | `?string` | Optional | End date of session to include. If not specified  information will be shown to the latest available. Can be either date in ISO 8601 format or predefined constants. | getEndDate(): ?string | setEndDate(?string endDate): void |
| `durationLow` | `?int` | Optional | The Low value of session duration. | getDurationLow(): ?int | setDurationLow(?int durationLow): void |
| `durationHigh` | `?int` | Optional | The High value of session duration. | getDurationHigh(): ?int | setDurationHigh(?int durationHigh): void |

## Example (as JSON)

```json
{
  "accountNumber": "0844021539-00001",
  "startDate": "2022-12-09T22:01:06.217Z",
  "endDate": "2022-12-09T22:01:08.734Z",
  "imei": "709312034493372",
  "durationLow": 224,
  "durationHigh": 92
}
```

