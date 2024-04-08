
# Response to Usage Query

## Structure

`ResponseToUsageQuery`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `hasmoredata` | `?bool` | Optional | - | getHasmoredata(): ?bool | setHasmoredata(?bool hasmoredata): void |
| `deviceId` | [`?ReadySimDeviceId`](../../doc/models/ready-sim-device-id.md) | Optional | - | getDeviceId(): ?ReadySimDeviceId | setDeviceId(?ReadySimDeviceId deviceId): void |
| `usageHistory` | [`?(UsageHistory[])`](../../doc/models/usage-history.md) | Optional | - | getUsageHistory(): ?array | setUsageHistory(?array usageHistory): void |

## Example (as JSON)

```json
{
  "hasmoredata": false,
  "deviceId": {
    "kind": "kind8",
    "id": "id0"
  },
  "usageHistory": [
    {
      "bytesUsed": 76,
      "serviceplan": "serviceplan2",
      "smsUsed": 176,
      "moSMS": 230,
      "mtSMS": 18
    },
    {
      "bytesUsed": 76,
      "serviceplan": "serviceplan2",
      "smsUsed": 176,
      "moSMS": 230,
      "mtSMS": 18
    }
  ]
}
```

