
# Fields 1

## Structure

`Fields1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `item` | [`?SearchDeviceByPropertyFields`](../../doc/models/search-device-by-property-fields.md) | Optional | List of device sensors and their most recently reported values. | getItem(): ?SearchDeviceByPropertyFields | setItem(?SearchDeviceByPropertyFields item): void |

## Example (as JSON)

```json
{
  "item": {
    "acceleration": {
      "x": "x6",
      "y": "y4",
      "z": "z6"
    },
    "battery": "battery0",
    "humidity": "humidity4",
    "light": "light6",
    "pressure": "pressure2"
  }
}
```

