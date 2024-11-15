
# V3 Time Window

Time window.

## Structure

`V3TimeWindow`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startTime` | `int` | Required | Start hour in range [0..23], current hour >= startTime. | getStartTime(): int | setStartTime(int startTime): void |
| `endTime` | `int` | Required | End hour in range [1..24], current hour < endTime. | getEndTime(): int | setEndTime(int endTime): void |

## Example (as JSON)

```json
{
  "startTime": 18,
  "endTime": 22
}
```

