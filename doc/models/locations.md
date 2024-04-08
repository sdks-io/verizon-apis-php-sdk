
# Locations

Location details.

## Structure

`Locations`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressList` | [`?(AddressItem[])`](../../doc/models/address-item.md) | Optional | **Constraints**: *Maximum Items*: `100` | getAddressList(): ?array | setAddressList(?array addressList): void |

## Example (as JSON)

```json
{
  "addressList": [
    {
      "addressLine1": "addressLine10",
      "addressLine2": "addressLine28",
      "city": "city8",
      "state": "state4",
      "country": "country2"
    },
    {
      "addressLine1": "addressLine10",
      "addressLine2": "addressLine28",
      "city": "city8",
      "state": "state4",
      "country": "country2"
    }
  ]
}
```

