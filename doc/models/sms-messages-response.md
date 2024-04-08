
# Sms Messages Response

## Structure

`SmsMessagesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `messages` | [`?(GIOSmsMessage[])`](../../doc/models/gio-sms-message.md) | Optional | **Constraints**: *Maximum Items*: `5` | getMessages(): ?array | setMessages(?array messages): void |
| `hasMoreData` | `?bool` | Optional | - | getHasMoreData(): ?bool | setHasMoreData(?bool hasMoreData): void |

## Example (as JSON)

```json
{
  "hasMoreData": false,
  "messages": [
    {
      "deviceIds": [
        {
          "kind": "kind8",
          "id": "id0"
        },
        {
          "kind": "kind8",
          "id": "id0"
        }
      ],
      "message": "message8",
      "timestamp": "2016-03-13T12:52:32.123Z"
    },
    {
      "deviceIds": [
        {
          "kind": "kind8",
          "id": "id0"
        },
        {
          "kind": "kind8",
          "id": "id0"
        }
      ],
      "message": "message8",
      "timestamp": "2016-03-13T12:52:32.123Z"
    }
  ]
}
```

