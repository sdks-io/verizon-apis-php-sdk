
# Managed Accounts Get All Response

## Structure

`ManagedAccountsGetAllResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | Account Name | getAccountName(): ?string | setAccountName(?string accountName): void |
| `managedAccAddedList` | [`?(ManagedAccAddedList[])`](../../doc/models/managed-acc-added-list.md) | Optional | - | getManagedAccAddedList(): ?array | setManagedAccAddedList(?array managedAccAddedList): void |
| `managedAccProvisionedList` | [`?(ManagedAccProvisionedList[])`](../../doc/models/managed-acc-provisioned-list.md) | Optional | - | getManagedAccProvisionedList(): ?array | setManagedAccProvisionedList(?array managedAccProvisionedList): void |

## Example (as JSON)

```json
{
  "accountName": "0212312345-00001",
  "ManagedAccAddedList": [
    {
      "id": "id3",
      "txid": "txid9"
    },
    {
      "id": "id4",
      "txid": "txid8"
    },
    {
      "id": "id5",
      "txid": "txid7"
    }
  ],
  "managedAccProvisionedList": [
    {
      "id": "id1",
      "txid": "txid1"
    },
    {
      "id": "id2",
      "txid": "txid0"
    },
    {
      "id": "id3",
      "txid": "txid9"
    }
  ]
}
```

