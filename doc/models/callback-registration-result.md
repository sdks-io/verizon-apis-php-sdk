
# Callback Registration Result

## Structure

`CallbackRegistrationResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `account` | `?string` | Optional | The name of the account that registered the callback URL. | getAccount(): ?string | setAccount(?string account): void |
| `name` | [`?string(CallbackServiceNameEnum)`](../../doc/models/callback-service-name-enum.md) | Optional | The name of the callback service. | getName(): ?string | setName(?string name): void |

## Example (as JSON)

```json
{
  "account": "0212312345-00001",
  "name": "Location"
}
```

