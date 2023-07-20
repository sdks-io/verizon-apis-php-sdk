
# Add Devices Result

Contains the device identifiers and a success or failure response for each device in the request.

## Structure

`AddDevicesResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceIds` | [`?(DeviceId[])`](../../doc/models/device-id.md) | Optional | Identifiers for the device. | getDeviceIds(): ?array | setDeviceIds(?array deviceIds): void |
| `response` | `?string` | Optional | The success message or error message for the current device. | getResponse(): ?string | setResponse(?string response): void |

## Example (as JSON)

```json
{
  "deviceIds": [
    {
      "id": "89148000000800784259",
      "kind": "iccid"
    }
  ],
  "response": "Success"
}
```

