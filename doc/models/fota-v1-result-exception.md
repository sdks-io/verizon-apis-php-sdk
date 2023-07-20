
# Fota V1 Result Exception

Response in case of any errors.

## Structure

`FotaV1ResultException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errorCode` | `string` | Required | Error response code. | getErrorCode(): string | setErrorCode(string errorCode): void |
| `errorMessage` | `string` | Required | Description of the error. | getErrorMessage(): string | setErrorMessage(string errorMessage): void |

## Example (as JSON)

```json
{
  "errorCode": "error code string",
  "errorMessage": "error message string"
}
```

