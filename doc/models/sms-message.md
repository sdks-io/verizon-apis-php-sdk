
# SMS Message

SMS messages sent by all M2M devices associated with a billing account.

## Structure

`SMSMessage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceIds` | [`?(DeviceId[])`](../../doc/models/device-id.md) | Optional | One or more IDs of the device that sent the message. | getDeviceIds(): ?array | setDeviceIds(?array deviceIds): void |
| `message` | `?string` | Optional | The contents of the SMS message. | getMessage(): ?string | setMessage(?string message): void |
| `timestamp` | `?string` | Optional | The date and time that the message was received by the Verizon ThingSpace Platform. | getTimestamp(): ?string | setTimestamp(?string timestamp): void |

## Example (as JSON)

```json
{
  "deviceIds": [
    {
      "id": "09623489171",
      "kind": "esn"
    }
  ],
  "message": "testmessage1",
  "timestamp": "2016-01-01T12:29:49-08:00"
}
```

