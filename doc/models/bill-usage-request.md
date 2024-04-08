
# Bill Usage Request

Bill usage request.

## Structure

`BillUsageRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | Account identifier. | getAccountName(): string | setAccountName(string accountName): void |
| `startDate` | `string` | Required | Start date to search for billable usage, mm-dd-yyyy. | getStartDate(): string | setStartDate(string startDate): void |
| `endDate` | `string` | Required | End date to search for billable usage, mm-dd-yyyy. | getEndDate(): string | setEndDate(string endDate): void |
| `usageForAllAccounts` | `?bool` | Optional | Request usage for single or multiple accounts. | getUsageForAllAccounts(): ?bool | setUsageForAllAccounts(?bool usageForAllAccounts): void |

## Example (as JSON)

```json
{
  "accountName": "1234567890-00001",
  "startDate": "04-01-2018",
  "endDate": "04-30-2018",
  "usageForAllAccounts": true
}
```

