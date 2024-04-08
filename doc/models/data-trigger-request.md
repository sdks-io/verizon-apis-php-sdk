
# Data Trigger Request

## Structure

`DataTriggerRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `comparator` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getComparator(): ?string | setComparator(?string comparator): void |
| `threshold` | `?int` | Optional | **Constraints**: `>= 0`, `<= 100` | getThreshold(): ?int | setThreshold(?int threshold): void |
| `thresholdUnit` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getThresholdUnit(): ?string | setThresholdUnit(?string thresholdUnit): void |

## Example (as JSON)

```json
{
  "comparator": "comparator0",
  "threshold": 22,
  "thresholdUnit": "thresholdUnit8"
}
```

