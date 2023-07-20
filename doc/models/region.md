
# Region

Information representing a certain geographical or logical area where MEC resources and services are provided.

## Structure

`Region`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `regionId` | `?string` | Optional | The unique identifier of the region. | getRegionId(): ?string | setRegionId(?string regionId): void |
| `name` | `?string` | Optional | A relevant and identifiable region name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9_]{3,32}$` | getName(): ?string | setName(?string name): void |
| `countryCode` | `?string` | Optional | A two-character alpha code for a country, based on ISO 3166-1 alpha-2. This is future functionality, so the value returned is 'null'.<br>**Constraints**: *Maximum Length*: `3`, *Pattern*: `^[A-Za-z0-9]{2,3}$` | getCountryCode(): ?string | setCountryCode(?string countryCode): void |
| `metro` | `?string` | Optional | The metropolitan area or 'City' value.  This is future functionality, so the value returned is 'null'.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getMetro(): ?string | setMetro(?string metro): void |
| `area` | `?string` | Optional | This is a sub-set of 'City' and is similar to 'Zone'. This is future functionality, so the value returned is 'null'.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getArea(): ?string | setArea(?string area): void |

## Example (as JSON)

```json
{
  "regionId": "consectetur",
  "name": "US_EAST_1",
  "countryCode": "nr",
  "metro": "e1D",
  "area": "IdUESF"
}
```

