
# Observation Request

Used to define callbacks including the device identity, the attribute names, corresponding attribute values and the date/timestamp of when the observation was made.

## Structure

`ObservationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | Account identifier in "##########-#####". | getAccountName(): string | setAccountName(string accountName): void |
| `devices` | [`Device[]`](../../doc/models/device.md) | Required | List of devices. | getDevices(): array | setDevices(array devices): void |
| `attributes` | [`ObservationRequestAttribute[]`](../../doc/models/observation-request-attribute.md) | Required | Attributes are streaming RF parameters that you want to observe. | getAttributes(): array | setAttributes(array attributes): void |
| `frequency` | [`?NumericalData`](../../doc/models/numerical-data.md) | Optional | Describes value and unit of time. | getFrequency(): ?NumericalData | setFrequency(?NumericalData frequency): void |
| `duration` | [`?NumericalData`](../../doc/models/numerical-data.md) | Optional | Describes value and unit of time. | getDuration(): ?NumericalData | setDuration(?NumericalData duration): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "attributes": [
    {
      "name": "RADIO_SIGNAL_STRENGTH"
    },
    {
      "name": "LINK_QUALITY"
    },
    {
      "name": "NETWORK_BEARER"
    },
    {
      "name": "CELL_ID"
    }
  ],
  "devices": [
    {
      "id": "864508030026238",
      "kind": "IMEI"
    }
  ],
  "frequency": {
    "value": 76,
    "unit": "SECOND"
  },
  "duration": {
    "value": 176,
    "unit": "SECOND"
  }
}
```

