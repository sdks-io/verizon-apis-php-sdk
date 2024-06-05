
# Request Body for Usage 1

## Structure

`RequestBodyForUsage1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | [`?(ReadySimDeviceId[])`](../../doc/models/ready-sim-device-id.md) | Optional | - | getDeviceId(): ?array | setDeviceId(?array deviceId): void |
| `startTime` | `?DateTime` | Optional | - | getStartTime(): ?\DateTime | setStartTime(?\DateTime startTime): void |
| `endTime` | `?DateTime` | Optional | - | getEndTime(): ?\DateTime | setEndTime(?\DateTime endTime): void |

## Example (as JSON)

```json
{
  "startTime": "08/15/2021 00:00:00",
  "endTime": "08/16/2021 00:00:00",
  "deviceId": [
    {
      "kind": "kind8",
      "id": "id0"
    },
    {
      "kind": "kind8",
      "id": "id0"
    }
  ]
}
```

