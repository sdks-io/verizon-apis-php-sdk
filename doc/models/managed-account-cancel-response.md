
# Managed Account Cancel Response

## Structure

`ManagedAccountCancelResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `txid` | `string` | Required | Transaction identifier | getTxid(): string | setTxid(string txid): void |
| `accountName` | `string` | Required | Managed account identifier | getAccountName(): string | setAccountName(string accountName): void |
| `paccountName` | `string` | Required | Primary account identifier | getPaccountName(): string | setPaccountName(string paccountName): void |
| `serviceName` | [`string(ServiceNameEnum)`](../../doc/models/service-name-enum.md) | Required | Service name<br>**Default**: `ServiceNameEnum::LOCATION` | getServiceName(): string | setServiceName(string serviceName): void |
| `status` | `string` | Required | Deactivate/cancel status, Success or Fail | getStatus(): string | setStatus(string status): void |
| `reason` | `string` | Required | Detailed reason | getReason(): string | setReason(string reason): void |

## Example (as JSON)

```json
{
  "txid": "4fbff332-ece4-42ef-9f02-7e3bdc90bd28",
  "accountName": "1223334444-00001",
  "paccountName": "1223334444-00001",
  "serviceName": "Location",
  "status": "Success",
  "reason": "Success"
}
```

