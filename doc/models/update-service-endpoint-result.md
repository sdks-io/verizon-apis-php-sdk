
# Update Service Endpoint Result

Response to update registered Service Endpoint information.

## Structure

`UpdateServiceEndpointResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `?string` | Optional | HTTP status code.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getStatus(): ?string | setStatus(?string status): void |
| `message` | `?string` | Optional | EdgeAppServices are updated or error details in case of an error.<br>**Constraints**: *Maximum Length*: `64` | getMessage(): ?string | setMessage(?string message): void |

## Example (as JSON)

```json
{
  "status": "Success",
  "message": "EdgeAppServices are updated"
}
```

