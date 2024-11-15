
# Position Error

Position error.

## Structure

`PositionError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `time` | `?string` | Optional | Time location obtained. | getTime(): ?string | setTime(?string time): void |
| `utcoffset` | `?string` | Optional | UTC offset of time. | getUtcoffset(): ?string | setUtcoffset(?string utcoffset): void |
| `type` | `?string` | Optional | Error type returned from location server. | getType(): ?string | setType(?string type): void |
| `info` | `?string` | Optional | Additional information about the error. | getInfo(): ?string | setInfo(?string info): void |

## Example (as JSON)

```json
{
  "time": "20170525214342",
  "type": "POSITION METHOD FAILURE",
  "info": "Exception code=ABSENT SUBSCRIBER",
  "utcoffset": "utcoffset0"
}
```

