
# Device Labels

A label for a single device.

## Structure

`DeviceLabels`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | The label you want to associate with the device. | getName(): string | setName(string name): void |
| `value` | `string` | Required | The value of label | getValue(): string | setValue(string value): void |

## Example (as JSON)

```json
{
  "name": "VIN",
  "value": "XXUZL54B5YN105457"
}
```

