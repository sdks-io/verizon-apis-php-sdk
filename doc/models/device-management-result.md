
# Device Management Result

Response to activate service for one or more devices so that they can send and receive data.

## Structure

`DeviceManagementResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | A unique string that associates the request with the results that are sent via a callback service. | getRequestId(): ?string | setRequestId(?string requestId): void |

## Example (as JSON)

```json
{
  "requestId": "24da9f9a-d110-4a54-86b4-93fb76aab83c"
}
```

