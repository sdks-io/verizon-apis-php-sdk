
# Api Response Code

ResponseCode and/or a message indicating success or failure of the request.

## Structure

`ApiResponseCode`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `responseCode` | [`string(ResponseCodeEnum)`](../../doc/models/response-code-enum.md) | Required | Possible response codes. | getResponseCode(): string | setResponseCode(string responseCode): void |
| `message` | `string` | Required | More details about the responseCode received. | getMessage(): string | setMessage(string message): void |

## Example (as JSON)

```json
{
  "responseCode": "INVALID_ACCESS",
  "message": "message4"
}
```

