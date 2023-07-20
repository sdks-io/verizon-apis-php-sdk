
# Service Resume Result

## Structure

`ServiceResumeResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$` | getRequestId(): ?string | setRequestId(?string requestId): void |
| `correlationId` | `?string` | Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$` | getCorrelationId(): ?string | setCorrelationId(?string correlationId): void |
| `message` | `?string` | Optional | **Constraints**: *Maximum Length*: `500`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getMessage(): ?string | setMessage(?string message): void |
| `status` | `?string` | Optional | **Constraints**: *Maximum Length*: `15`, *Pattern*: `^[A-Za-z]{1,15}$` | getStatus(): ?string | setStatus(?string status): void |
| `subStatus` | `?string` | Optional | **Constraints**: *Maximum Length*: `15`, *Pattern*: `^[A-Za-z]{1,15}$` | getSubStatus(): ?string | setSubStatus(?string subStatus): void |

## Example (as JSON)

```json
{
  "requestId": "requestId2",
  "correlationId": "correlationId0",
  "message": "message0",
  "status": "status8",
  "subStatus": "subStatus6"
}
```

