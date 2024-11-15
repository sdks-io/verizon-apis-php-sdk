
# Primary Place of Use

## Structure

`PrimaryPlaceOfUse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customerName` | [`?(CustomerName[])`](../../doc/models/customer-name.md) | Optional | **Constraints**: *Maximum Items*: `5` | getCustomerName(): ?array | setCustomerName(?array customerName): void |
| `address` | [`?(Address[])`](../../doc/models/address.md) | Optional | **Constraints**: *Maximum Items*: `5` | getAddress(): ?array | setAddress(?array address): void |

## Example (as JSON)

```json
{
  "customerName": [
    {
      "title": "title4",
      "firstName": "firstName4",
      "middleName": "middleName8",
      "lastName": "lastName4",
      "suffix": "suffix0"
    },
    {
      "title": "title4",
      "firstName": "firstName4",
      "middleName": "middleName8",
      "lastName": "lastName4",
      "suffix": "suffix0"
    }
  ],
  "address": [
    {
      "addressLine1": "addressLine18",
      "addressLine2": "addressLine26",
      "city": "city6",
      "state": "state2",
      "zip": "zip0",
      "zip4": "zip40",
      "country": "country0",
      "phone": "phone4",
      "phoneType": "phoneType0",
      "emailAddress": "emailAddress6"
    },
    {
      "addressLine1": "addressLine18",
      "addressLine2": "addressLine26",
      "city": "city6",
      "state": "state2",
      "zip": "zip0",
      "zip4": "zip40",
      "country": "country0",
      "phone": "phone4",
      "phoneType": "phoneType0",
      "emailAddress": "emailAddress6"
    },
    {
      "addressLine1": "addressLine18",
      "addressLine2": "addressLine26",
      "city": "city6",
      "state": "state2",
      "zip": "zip0",
      "zip4": "zip40",
      "country": "country0",
      "phone": "phone4",
      "phoneType": "phoneType0",
      "emailAddress": "emailAddress6"
    }
  ]
}
```

