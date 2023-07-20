
# Account Device List

A list of deviceId objects to use when requesting information from multiple devices.

## Structure

`AccountDeviceList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceIds` | [`?(DeviceId[])`](../../doc/models/device-id.md) | Optional | All identifiers for the device. | getDeviceIds(): ?array | setDeviceIds(?array deviceIds): void |

## Example (as JSON)

```json
{
  "deviceIds": [
    {
      "kind": "imei",
      "id": "990013907835573"
    },
    {
      "kind": "iccid",
      "id": "89141390780800784259"
    }
  ]
}
```

