
# Find Device by Property Response List

A success response includes an array of all matching devices. Each device includes the full device resource definition.

## Structure

`FindDeviceByPropertyResponseList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceProperty` | [`?(FindDeviceByPropertyResponse[])`](../../doc/models/find-device-by-property-response.md) | Optional | **Constraints**: *Maximum Items*: `100` | getDeviceProperty(): ?array | setDeviceProperty(?array deviceProperty): void |

## Example (as JSON)

```json
{
  "DeviceProperty": [
    {
      "billingaccountid": "billingaccountid0",
      "createdon": "createdon8",
      "eventretention": "eventretention2",
      "iccid": "iccid0",
      "id": "id4"
    }
  ]
}
```

