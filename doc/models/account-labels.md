
# Account Labels

Maximum of 2,000 objects are allowed in the array.

## Structure

`AccountLabels`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `devices` | [`DeviceList[]`](../../doc/models/device-list.md) | Required | - | getDevices(): array | setDevices(array devices): void |
| `label` | [`?(DeviceLabels[])`](../../doc/models/device-labels.md) | Optional | - | getLabel(): ?array | setLabel(?array label): void |

## Example (as JSON)

```json
{
  "devices": [
    {
      "deviceIds": [
        {
          "id": "id0",
          "kind": "kind8"
        }
      ]
    }
  ],
  "label": [
    {
      "name": "name0",
      "value": "value2"
    },
    {
      "name": "name0",
      "value": "value2"
    },
    {
      "name": "name0",
      "value": "value2"
    }
  ]
}
```

