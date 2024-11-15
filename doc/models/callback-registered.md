
# Callback Registered

Registered callback listener.

## Structure

`CallbackRegistered`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | The billing account number for which callback messages will be sent. | getAccountName(): string | setAccountName(string accountName): void |
| `name` | `string` | Required | The name of the callback service, which identifies the type and format of messages that will be sent to the registered URL. | getName(): string | setName(string name): void |

## Example (as JSON)

```json
{
  "accountName": "0844021539-00001",
  "name": "BullseyeReporting"
}
```

