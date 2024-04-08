
# GIO Rest Error Response Exception

## Structure

`GIORestErrorResponseException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errorCode` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3`, *Pattern*: `^[0-9]{3,3}$` | getErrorCode(): ?string | setErrorCode(?string errorCode): void |
| `errorMessage` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `1000`, *Pattern*: `^[A-Za-z0-9 ]{3,32}$` | getErrorMessage(): ?string | setErrorMessage(?string errorMessage): void |

## Example (as JSON)

```json
{
  "errorCode": "400",
  "errorMessage": "a brief description of the error"
}
```

