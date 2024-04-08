
# Aggregate Usage Item

Contains usage information per device.

## Structure

`AggregateUsageItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `imei` | `?string` | Optional | International Mobile Equipment Identifier. This is the ID of the device reporting usage. | getImei(): ?string | setImei(?string imei): void |
| `numberOfSessions` | `?int` | Optional | Number of sessions established by the device reporting usage. | getNumberOfSessions(): ?int | setNumberOfSessions(?int numberOfSessions): void |
| `bytesTransferred` | `?int` | Optional | The amount of data transferred by the device reporting usage, measured in Bytes. | getBytesTransferred(): ?int | setBytesTransferred(?int bytesTransferred): void |

## Example (as JSON)

```json
{
  "imei": "709312034493372",
  "numberOfSessions": 1,
  "bytesTransferred": 2057
}
```

