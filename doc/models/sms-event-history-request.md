
# SMS Event History Request

## Structure

`SMSEventHistoryRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | [`GIODeviceId`](../../doc/models/gio-device-id.md) | Required | - | getDeviceId(): GIODeviceId | setDeviceId(GIODeviceId deviceId): void |
| `earliest` | `?DateTime` | Optional | - | getEarliest(): ?\DateTime | setEarliest(?\DateTime earliest): void |
| `latest` | `?DateTime` | Optional | - | getLatest(): ?\DateTime | setLatest(?\DateTime latest): void |

## Example (as JSON)

```json
{
  "deviceId": {
    "kind": "eid",
    "id": "12345678901234567890123456789012"
  },
  "earliest": "2016-03-13T12:52:32.123Z",
  "latest": "2016-03-13T12:52:32.123Z"
}
```

