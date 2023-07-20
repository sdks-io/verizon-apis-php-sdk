
# Selected Service

Service which is selected.

## Structure

`SelectedService`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | Name of the service needs to be deployed.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getName(): ?string | setName(?string name): void |
| `version` | `?string` | Optional | Name of the service user is created.<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[0-9\.]+$` | getVersion(): ?string | setVersion(?string version): void |
| `state` | [`?string(ServiceStateEnum)`](../../doc/models/service-state-enum.md) | Optional | Can have any value as - DRAFT, DESIGN, TESTING, PUBLISH, CERTIFY, READY_TO_USE, DEPRECATE, DELETED.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getState(): ?string | setState(?string state): void |

## Example (as JSON)

```json
{
  "name": "MyService",
  "version": "1.0.0",
  "state": "TESTING"
}
```

