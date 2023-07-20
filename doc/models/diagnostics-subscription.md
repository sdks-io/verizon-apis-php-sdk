
# Diagnostics Subscription

Status of the diagnostic services subscription.

## Structure

`DiagnosticsSubscription`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | Account identifier in "##########-#####". An account name is usually numeric, and must include any leading zeros. | getAccountName(): string | setAccountName(string accountName): void |
| `createdOn` | `DateTime` | Required | The date and time of when the subscription was created. | getCreatedOn(): \DateTime | setCreatedOn(\DateTime createdOn): void |
| `lastUpdated` | `DateTime` | Required | The date and time of when the subscription was last updated. | getLastUpdated(): \DateTime | setLastUpdated(\DateTime lastUpdated): void |
| `totalAllowed` | `int` | Required | Number of licenses currently assigned to devices. | getTotalAllowed(): int | setTotalAllowed(int totalAllowed): void |
| `totalUsed` | `int` | Required | Number of licenses currently used by the devices. | getTotalUsed(): int | setTotalUsed(int totalUsed): void |
| `skuName` | `string` | Required | Name of the SKU for the account. | getSkuName(): string | setSkuName(string skuName): void |

## Example (as JSON)

```json
{
  "accountName": "TestQAAccount",
  "skuName": "TS-BUNDLE-KTO-DIAGNOSTIC-MRC",
  "totalAllowed": 100,
  "totalUsed": 50,
  "createdOn": "2019-08-29T00:47:59.240Z",
  "lastUpdated": "2019-08-29T00:47:59.240Z"
}
```

