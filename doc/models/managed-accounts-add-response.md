
# Managed Accounts Add Response

## Structure

`ManagedAccountsAddResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `txId` | `?string` | Optional | Transaction identifier | getTxId(): ?string | setTxId(?string txId): void |
| `statusList` | [`?(StatusList[])`](../../doc/models/status-list.md) | Optional | - | getStatusList(): ?array | setStatusList(?array statusList): void |

## Example (as JSON)

```json
{
  "TxId": "2c90bd28-ece4-42ef-9f02-7e3bd4fbff33",
  "statusList": [
    {
      "id": "id6",
      "status": "status8",
      "reason": "reason8"
    }
  ]
}
```

