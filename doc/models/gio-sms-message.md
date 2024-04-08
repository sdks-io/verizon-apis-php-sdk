
# GIO Sms Message

## Structure

`GIOSmsMessage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceIds` | [`?(GIODeviceId[])`](../../doc/models/gio-device-id.md) | Optional | **Constraints**: *Maximum Items*: `100` | getDeviceIds(): ?array | setDeviceIds(?array deviceIds): void |
| `message` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `120`, *Pattern*: `^[A-Za-z0-9 ]{3,120}$` | getMessage(): ?string | setMessage(?string message): void |
| `timestamp` | `?DateTime` | Optional | - | getTimestamp(): ?\DateTime | setTimestamp(?\DateTime timestamp): void |

## Example (as JSON)

```json
{
  "message": "a text message",
  "deviceIds": [
    {
      "kind": "kind8",
      "id": "id0"
    }
  ],
  "timestamp": "2016-03-13T12:52:32.123Z"
}
```

