
# Billable Usage Report

Bill usage report.

## Structure

`BillableUsageReport`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | Account identifier. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `usageForAllAccounts` | `?bool` | Optional | The usage is for a single or multiple accounts. | getUsageForAllAccounts(): ?bool | setUsageForAllAccounts(?bool usageForAllAccounts): void |
| `skuName` | `?string` | Optional | SKU Name of the service subscription. | getSkuName(): ?string | setSkuName(?string skuName): void |
| `transactionsAllowed` | `?string` | Optional | The number of location requests included with the subscription type. | getTransactionsAllowed(): ?string | setTransactionsAllowed(?string transactionsAllowed): void |
| `totalTransactionCount` | `?string` | Optional | The total number of billable device location requests during the reporting period from all included accounts. | getTotalTransactionCount(): ?string | setTotalTransactionCount(?string totalTransactionCount): void |
| `primaryAccount` | [`?ServiceUsage`](../../doc/models/service-usage.md) | Optional | - | getPrimaryAccount(): ?ServiceUsage | setPrimaryAccount(?ServiceUsage primaryAccount): void |
| `managedAccounts` | [`?(ServiceUsage[])`](../../doc/models/service-usage.md) | Optional | Zero or more managed accounts. | getManagedAccounts(): ?array | setManagedAccounts(?array managedAccounts): void |

## Example (as JSON)

```json
{
  "accountName": "1223334444-00001",
  "usageForAllAccounts": false,
  "skuName": "TS-LOC-COARSE-CellID-Aggr",
  "transactionsAllowed": "5000",
  "totalTransactionCount": "350",
  "PrimaryAccount": {
    "accountName": "1223334444-00001",
    "transactionsCount": "125"
  },
  "ManagedAccounts": []
}
```

