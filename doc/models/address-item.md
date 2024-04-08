
# Address Item

Address details.

## Structure

`AddressItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressLine1` | `?string` | Optional | Street Address.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9 ,]{3,32}$` | getAddressLine1(): ?string | setAddressLine1(?string addressLine1): void |
| `addressLine2` | `?string` | Optional | Optional address information.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9 ,]{3,32}$` | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `city` | `?string` | Optional | Name of the city.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9 ]{3,32}$` | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | State code.<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `3`, *Pattern*: `^[A-Za-z]{2,3}$` | getState(): ?string | setState(?string state): void |
| `country` | `?string` | Optional | Country.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3`, *Pattern*: `^[A-Za-z]{3,3}$` | getCountry(): ?string | setCountry(?string country): void |
| `zip` | `?string` | Optional | Five digit zipcode.<br>**Constraints**: *Minimum Length*: `5`, *Maximum Length*: `5`, *Pattern*: `^[0-9]{5,5}$` | getZip(): ?string | setZip(?string zip): void |
| `zip4` | `?string` | Optional | Four digit zip code.<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `4`, *Pattern*: `^[0-9]{4,4}$` | getZip4(): ?string | setZip4(?string zip4): void |

## Example (as JSON)

```json
{
  "addressLine1": "street number and name",
  "addressLine2": "optional address information",
  "city": "name of the city",
  "state": "NY",
  "country": "USA",
  "zip": "10001",
  "zip4": "0727"
}
```

