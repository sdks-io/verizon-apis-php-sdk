
# Resource Base

Resource Base of the service.

## Structure

`ResourceBase`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `unit` | `?string` | Optional | Resource unit ex :MB.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]!,+\-=_:.&*%\s]+$` | getUnit(): ?string | setUnit(?string unit): void |
| `value` | `?int` | Optional | Resource value e.g. 200MB.<br>**Constraints**: `>= 0`, `<= 1024` | getValue(): ?int | setValue(?int value): void |
| `max` | `?int` | Optional | Resource max value e.g. 400MB.<br>**Constraints**: `>= 0`, `<= 1024` | getMax(): ?int | setMax(?int max): void |
| `min` | `?int` | Optional | Resource min value e.g. 10MB.<br>**Constraints**: `>= 0`, `<= 1024` | getMin(): ?int | setMin(?int min): void |

## Example (as JSON)

```json
{
  "unit": "MB",
  "value": 200,
  "max": 400,
  "min": 10
}
```

