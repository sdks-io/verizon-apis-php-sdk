
# Delete Service Profile Result

Response on successful deletion of service profile.

## Structure

`DeleteServiceProfileResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `?string` | Optional | **Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getStatus(): ?string | setStatus(?string status): void |
| `message` | `?string` | Optional | **Constraints**: *Maximum Length*: `32` | getMessage(): ?string | setMessage(?string message): void |

## Example (as JSON)

```json
{
  "status": "Success",
  "message": "Service Profile Deleted"
}
```

