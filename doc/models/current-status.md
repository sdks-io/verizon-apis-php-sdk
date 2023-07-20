
# Current Status

Will provide the current status of the action.

## Structure

`CurrentStatus`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `?string` | Optional | Will provide the current status of the action.<br>**Constraints**: *Maximum Length*: `20`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!\/,+\-=_:.&*%\s]+$` | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "status": "STARTED"
}
```

