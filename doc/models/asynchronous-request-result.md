
# Asynchronous Request Result

A successful request returns the request ID and the current status.

## Structure

`AsynchronousRequestResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | The unique ID of the asynchronous request. | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | [`?string(RequestStatusEnum)`](../../doc/models/request-status-enum.md) | Optional | The current status of the callback response. | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "requestId": "86c83330-4bf5-4235-9c4e-a83f93aeae4c",
  "status": "Success"
}
```

