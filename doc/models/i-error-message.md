
# I Error Message

Error message.

## Structure

`IErrorMessage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errorCode` | [`?string(ErrorResponseCodeEnum)`](../../doc/models/error-response-code-enum.md) | Optional | Error Code. | getErrorCode(): ?string | setErrorCode(?string errorCode): void |
| `errorMessage` | `?string` | Optional | Details and additional information about the error code. | getErrorMessage(): ?string | setErrorMessage(?string errorMessage): void |
| `httpStatusCode` | [`?string(HttpStatusCodeEnum)`](../../doc/models/http-status-code-enum.md) | Optional | HTML error code and description. | getHttpStatusCode(): ?string | setHttpStatusCode(?string httpStatusCode): void |
| `detailErrorMessage` | `?string` | Optional | More detail and information about the HTML error code. | getDetailErrorMessage(): ?string | setDetailErrorMessage(?string detailErrorMessage): void |

## Example (as JSON)

```json
{
  "httpStatusCode": "200 OK",
  "errorCode": "INVALID_ACCESS",
  "errorMessage": "errorMessage4",
  "detailErrorMessage": "detailErrorMessage6"
}
```

