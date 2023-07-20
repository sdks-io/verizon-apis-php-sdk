
# Search Device by Property Fields

List of device sensors and their most recently reported values.

## Structure

`SearchDeviceByPropertyFields`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `acceleration` | [`?Acceleration`](../../doc/models/acceleration.md) | Optional | - | getAcceleration(): ?Acceleration | setAcceleration(?Acceleration acceleration): void |
| `battery` | `?string` | Optional | - | getBattery(): ?string | setBattery(?string battery): void |
| `humidity` | `?string` | Optional | - | getHumidity(): ?string | setHumidity(?string humidity): void |
| `light` | `?string` | Optional | - | getLight(): ?string | setLight(?string light): void |
| `pressure` | `?string` | Optional | - | getPressure(): ?string | setPressure(?string pressure): void |
| `signalStrength` | `?string` | Optional | - | getSignalStrength(): ?string | setSignalStrength(?string signalStrength): void |
| `temperature` | `?string` | Optional | - | getTemperature(): ?string | setTemperature(?string temperature): void |
| `devicePropertylocation` | [`?DevicePropertylocation`](../../doc/models/device-propertylocation.md) | Optional | - | getDevicePropertylocation(): ?DevicePropertylocation | setDevicePropertylocation(?DevicePropertylocation devicePropertylocation): void |

## Example (as JSON)

```json
{
  "battery": "95",
  "humidity": "29",
  "light": "150",
  "pressure": "888",
  "signalStrength": "-58",
  "temperature": "19.2",
  "acceleration": {
    "x": "x6",
    "y": "y4",
    "z": "z6"
  }
}
```

