
# Service Usage

## Structure

`ServiceUsage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | Account identifier. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `transactionsCount` | `?string` | Optional | Total requests for the account during the reporting period. | getTransactionsCount(): ?string | setTransactionsCount(?string transactionsCount): void |

## Example (as JSON)

```json
{
  "accountName": "3333355555-00001",
  "transactionsCount": "200"
}
```

