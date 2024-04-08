
# Address

The customer address for the line's primary place of use, for line usage taxation.

## Structure

`Address`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressLine1` | `string` | Required | The street address for the line's primary place of use. This must be a physical address for taxation; it cannot be a P.O. box. | getAddressLine1(): string | setAddressLine1(string addressLine1): void |
| `addressLine2` | `?string` | Optional | Optional additional street address information. | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `city` | `string` | Required | The city for the line's primary place of use. | getCity(): string | setCity(string city): void |
| `state` | `string` | Required | The state for the line's primary place of use. | getState(): string | setState(string state): void |
| `zip` | `string` | Required | The ZIP code for the line's primary place of use. | getZip(): string | setZip(string zip): void |
| `zip4` | `?string` | Optional | The ZIP+4 for the line's primary place of use. | getZip4(): ?string | setZip4(?string zip4): void |
| `country` | `string` | Required | Either “US” or “USA” for the country of the line's primary place of use. | getCountry(): string | setCountry(string country): void |
| `phone` | `?string` | Optional | A phone number where the customer can be reached. | getPhone(): ?string | setPhone(?string phone): void |
| `phoneType` | `?string` | Optional | A single letter to indicate the customer phone type. | getPhoneType(): ?string | setPhoneType(?string phoneType): void |
| `emailAddress` | `?string` | Optional | An email address for the customer. | getEmailAddress(): ?string | setEmailAddress(?string emailAddress): void |

## Example (as JSON)

```json
{
  "addressLine1": "1600 Pennsylvania Ave NW",
  "city": "Washington",
  "state": "DC",
  "zip": "20500",
  "country": "USA",
  "addressLine2": "addressLine28",
  "zip4": "zip42",
  "phone": "phone8",
  "phoneType": "phoneType2",
  "emailAddress": "emailAddress8"
}
```

