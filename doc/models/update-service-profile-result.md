
# Update Service Profile Result

Response on successful update of service profile.

## Structure

`UpdateServiceProfileResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `?string` | Optional | HTTP status code.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getStatus(): ?string | setStatus(?string status): void |
| `message` | `?string` | Optional | Service Profile that are updated or error details in case of an error.<br>**Constraints**: *Maximum Length*: `32` | getMessage(): ?string | setMessage(?string message): void |

## Example (as JSON)

```json
{
  "status": "Success",
  "message": "Service Profile Updated"
}
```

