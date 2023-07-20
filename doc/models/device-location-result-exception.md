
# Device Location Result Exception

Will be empty if there was no error.

## Structure

`DeviceLocationResultException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errorCode` | `string` | Required | - | getErrorCode(): string | setErrorCode(string errorCode): void |
| `errorMessage` | `string` | Required | - | getErrorMessage(): string | setErrorMessage(string errorMessage): void |

## Example (as JSON)

```json
{
  "errorCode": "The type of error, such as INVALID_REQUEST.",
  "errorMessage": "Additional error information."
}
```

