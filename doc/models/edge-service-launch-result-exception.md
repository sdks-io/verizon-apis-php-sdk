
# Edge Service Launch Result Exception

## Structure

`EdgeServiceLaunchResultException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[A-Z]{2,5}_[0-9]{3}_[0-9]{3}$` | getCode(): ?string | setCode(?string code): void |
| `message` | `?string` | Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-\s]{1,64}$` | getMessage(): ?string | setMessage(?string message): void |
| `remedyMessage` | `?string` | Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-\s]{1,64}$` | getRemedyMessage(): ?string | setRemedyMessage(?string remedyMessage): void |

## Example (as JSON)

```json
{
  "code": "WFDM_500_002",
  "message": "Internal server error",
  "remedyMessage": "Contact Support Team."
}
```

