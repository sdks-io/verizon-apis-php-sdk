
# Managed Accounts Provision Request

## Structure

`ManagedAccountsProvisionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | Managed account identifier | getAccountName(): string | setAccountName(string accountName): void |
| `paccountName` | `string` | Required | Primary Account identifier | getPaccountName(): string | setPaccountName(string paccountName): void |
| `serviceName` | [`string(ServiceNameEnum)`](../../doc/models/service-name-enum.md) | Required | Service name<br>**Default**: `ServiceNameEnum::LOCATION` | getServiceName(): string | setServiceName(string serviceName): void |
| `type` | `string` | Required | SKU name | getType(): string | setType(string type): void |
| `txid` | `string` | Required | Transaction identifier returned by add request | getTxid(): string | setTxid(string txid): void |

## Example (as JSON)

```json
{
  "accountName": "1223334444-00001",
  "paccountName": "1223334444-00001",
  "serviceName": "Location",
  "type": "TS-LOC-COARSE-CellID-5K",
  "txid": "d4fbff33-ece4-9f02-42ef-2c90bd287e3b"
}
```

