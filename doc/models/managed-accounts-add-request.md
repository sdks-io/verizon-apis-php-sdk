
# Managed Accounts Add Request

## Structure

`ManagedAccountsAddRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | Account identifier | getAccountName(): string | setAccountName(string accountName): void |
| `serviceName` | [`string(ServiceNameEnum)`](../../doc/models/service-name-enum.md) | Required | Service name<br>**Default**: `ServiceNameEnum::LOCATION` | getServiceName(): string | setServiceName(string serviceName): void |
| `type` | `string` | Required | SKU name | getType(): string | setType(string type): void |
| `managedAccList` | `string[]` | Required | managed account list | getManagedAccList(): array | setManagedAccList(array managedAccList): void |

## Example (as JSON)

```json
{
  "accountName": "1234567890-00001",
  "serviceName": "Location",
  "type": "TS-LOC-COARSE-CellID-Aggr",
  "managedAccList": [
    "1223334444-00001",
    "2334445555-00001",
    "3445556666-00001"
  ]
}
```

