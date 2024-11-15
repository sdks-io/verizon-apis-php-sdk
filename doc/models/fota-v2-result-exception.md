
# Fota V2 Result Exception

Response for error cases.

## Structure

`FotaV2ResultException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errorCode` | `string` | Required | Code of the error. | getErrorCode(): string | setErrorCode(string errorCode): void |
| `errorMessage` | `string` | Required | Details of the error. | getErrorMessage(): string | setErrorMessage(string errorMessage): void |

## Example (as JSON)

```json
{
  "errorCode": "error code string",
  "errorMessage": "error message string"
}
```

