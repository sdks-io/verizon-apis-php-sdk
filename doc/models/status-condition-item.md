
# Status Condition Item

## Structure

`StatusConditionItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `lastHeartbeatTime` | `?DateTime` | Optional | - | getLastHeartbeatTime(): ?\DateTime | setLastHeartbeatTime(?\DateTime lastHeartbeatTime): void |
| `lastTransitionTime` | `?DateTime` | Optional | - | getLastTransitionTime(): ?\DateTime | setLastTransitionTime(?\DateTime lastTransitionTime): void |
| `reason` | `?string` | Optional | - | getReason(): ?string | setReason(?string reason): void |
| `message` | `?string` | Optional | - | getMessage(): ?string | setMessage(?string message): void |

## Example (as JSON)

```json
{
  "lastHeartbeatTime": "08/19/2022 13:07:42",
  "lastTransitionTime": "08/19/2022 13:07:42",
  "type": "type0",
  "status": "status8",
  "reason": "reason4"
}
```

