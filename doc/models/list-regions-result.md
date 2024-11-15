
# List Regions Result

Response to return an array of all regions in the Verizon 5G Edge service. You can use the region IDs from the response to find optimal Edge platforms or service endpoints.

## Structure

`ListRegionsResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `regions` | [`?(Region[])`](../../doc/models/region.md) | Optional | An array of all regions in the Verizon 5G Edge service.<br>**Constraints**: *Maximum Items*: `100` | getRegions(): ?array | setRegions(?array regions): void |

## Example (as JSON)

```json
{
  "regions": [
    {
      "regionId": "regionId8",
      "name": "name0",
      "countryCode": "countryCode4",
      "metro": "metro2",
      "area": "area2"
    }
  ]
}
```

