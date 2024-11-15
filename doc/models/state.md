
# State

Each service includes custom states.

## Structure

`State`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | The name of the state. | getName(): ?string | setName(?string name): void |
| `workflowSequenceNumber` | `?float` | Optional | The workflow sequence number of this state. | getWorkflowSequenceNumber(): ?float | setWorkflowSequenceNumber(?float workflowSequenceNumber): void |
| `servicePlans` | `?(string[])` | Optional | The service plans that can be used to charge for services for devices in this state. | getServicePlans(): ?array | setServicePlans(?array servicePlans): void |

## Example (as JSON)

```json
{
  "name": "Svc1 Activate",
  "workflowSequenceNumber": 1.0,
  "servicePlans": [
    "4523aef7250f67205fd5",
    "4d4090c0f2d48814c94d"
  ]
}
```

