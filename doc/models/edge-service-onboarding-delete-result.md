
# Edge Service Onboarding Delete Result

Response to delete a service.

## Structure

`EdgeServiceOnboardingDeleteResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `?string` | Optional | Message confirms if the action was success or failure.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]!,+\-=_:.&*%\s]+$` | getMessage(): ?string | setMessage(?string message): void |
| `status` | `?string` | Optional | Will provide the current status of the action.<br>**Constraints**: *Maximum Length*: `15`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]!,+\-=_:.&*%\s]+$` | getStatus(): ?string | setStatus(?string status): void |
| `subStatus` | `?string` | Optional | Displays the proper response with status.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]!,+\-=_:.&*%\s]+$` | getSubStatus(): ?string | setSubStatus(?string subStatus): void |

## Example (as JSON)

```json
{
  "message": "service deleted succesfully",
  "status": "success",
  "subStatus": "service delete - success"
}
```

