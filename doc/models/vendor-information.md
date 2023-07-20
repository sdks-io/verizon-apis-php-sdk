
# Vendor Information

## Structure

`VendorInformation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | ID of the vendor.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getId(): string | setId(string id): void |
| `name` | `string` | Required | Name of the vendor.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getName(): string | setName(string name): void |
| `primaryEmail` | `?string` | Optional | Primary email of the vendor.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getPrimaryEmail(): ?string | setPrimaryEmail(?string primaryEmail): void |
| `secondaryEmail` | `?string` | Optional | Secondary email of the vendor.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getSecondaryEmail(): ?string | setSecondaryEmail(?string secondaryEmail): void |
| `contactNumber` | `?string` | Optional | Contact number of the vendor.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getContactNumber(): ?string | setContactNumber(?string contactNumber): void |

## Example (as JSON)

```json
{
  "id": "acme",
  "name": "acme",
  "primaryEmail": "primaryEmail2",
  "secondaryEmail": "secondaryEmail6",
  "contactNumber": "contactNumber4"
}
```

