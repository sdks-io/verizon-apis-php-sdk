
# Aggregate Usage Error

Error reported by a device.

## Structure

`AggregateUsageError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `imei` | `?string` | Optional | International Mobile Equipment Identifier. This is the ID of the device reporting errors. | getImei(): ?string | setImei(?string imei): void |
| `errorMessage` | `?string` | Optional | A general error message. | getErrorMessage(): ?string | setErrorMessage(?string errorMessage): void |
| `errorResponse` | [`?IErrorMessage`](../../doc/models/i-error-message.md) | Optional | Error message. | getErrorResponse(): ?IErrorMessage | setErrorResponse(?IErrorMessage errorResponse): void |

## Example (as JSON)

```json
{
  "errorResponse": {
    "httpStatusCode": "200 OK",
    "errorCode": "INVALID_ACCESS",
    "errorMessage": "errorMessage4",
    "detailErrorMessage": "detailErrorMessage6"
  },
  "imei": "imei0",
  "errorMessage": "errorMessage4"
}
```

