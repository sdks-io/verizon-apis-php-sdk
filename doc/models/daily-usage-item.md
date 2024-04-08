
# Daily Usage Item

Contains only dates when device had sessions.

## Structure

`DailyUsageItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startTime` | `?string` | Optional | Start date of session. ISO 8601 format. | getStartTime(): ?string | setStartTime(?string startTime): void |
| `endTime` | `?string` | Optional | End date of session. ISO 8601 format. | getEndTime(): ?string | setEndTime(?string endTime): void |
| `numBytes` | `?int` | Optional | Amount of data transferred, measured in Bytes. | getNumBytes(): ?int | setNumBytes(?int numBytes): void |

## Example (as JSON)

```json
{
  "startTime": "startTime0",
  "endTime": "endTime2",
  "numBytes": 200
}
```

