
# Callback Action Result

Response to a callback action.

## Structure

`CallbackActionResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | The name of the billing account. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `serviceName` | `?string` | Optional | The name of the callback service that was registered/deregistered. | getServiceName(): ?string | setServiceName(?string serviceName): void |

## Example (as JSON)

```json
{
  "accountName": "122333444-00002",
  "serviceName": "CarrierService"
}
```

