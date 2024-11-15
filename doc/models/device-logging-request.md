
# Device Logging Request

Device logging information.

## Structure

`DeviceLoggingRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceIds` | `string[]` | Required | List of device IMEI identifiers. | getDeviceIds(): array | setDeviceIds(array deviceIds): void |

## Example (as JSON)

```json
{
  "deviceIds": [
    "990013907835573",
    "991124018926684",
    "992234129057795",
    "998891785613351",
    "990013907835573"
  ]
}
```

