
# Session Report

Session report for a device.

## Structure

`SessionReport`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `sessions` | [`?(DailyUsageItem[])`](../../doc/models/daily-usage-item.md) | Optional | An object containing the start and end time of the session with the amount of data transferred. | getSessions(): ?array | setSessions(?array sessions): void |
| `id` | `string` | Required | The 10-digit ID of the device. | getId(): string | setId(string id): void |
| `txid` | `?string` | Required | A unique string that associates the request with the location report information that is sent in asynchronous callback message.ThingSpace will send a separate callback message for each device that was in the request. All of the callback messages will have the same txid. | getTxid(): ?string | setTxid(?string txid): void |
| `example` | `?array` | Optional | - | getExample(): ?array | setExample(?array example): void |

## Example (as JSON)

```json
{
  "id": "709312034493372",
  "txid": "60c07fff-470b-4d6d-afcc-75e6a7c238f6",
  "sessions": [
    {
      "startTime": "startTime4",
      "endTime": "endTime8",
      "numBytes": 106
    },
    {
      "startTime": "startTime4",
      "endTime": "endTime8",
      "numBytes": 106
    }
  ],
  "example": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

