
# Contact Info Update Request

Request to update contact information.

## Structure

`ContactInfoUpdateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `primaryPlaceOfUse` | [`PlaceOfUse`](../../doc/models/place-of-use.md) | Required | The customer name and the address of the device's primary place of use. Leave these fields empty to use the account profile address as the primary place of use. These values will be applied to all devices in the request.If the account is enabled for non-geographic MDNs and the device supports it, the primaryPlaceOfUse address will also be used to derive the MDN for the device. | getPrimaryPlaceOfUse(): PlaceOfUse | setPrimaryPlaceOfUse(PlaceOfUse primaryPlaceOfUse): void |
| `accountName` | `?string` | Optional | The name of the billing account that the devices belong to. An account name is usually numeric, and must include any leading zeros. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `devices` | [`?(AccountDeviceList[])`](../../doc/models/account-device-list.md) | Optional | A list of the devices that you want to change, specified by device identifier. You only need to provide one identifier per device. Do not include accountName, groupName, customFields, or servicePlan if you use this parameter. | getDevices(): ?array | setDevices(?array devices): void |

## Example (as JSON)

```json
{
  "devices": [
    {
      "deviceIds": [
        {
          "kind": "ESN",
          "id": "19110173057"
        },
        {
          "kind": "ESN",
          "id": "19110173057"
        }
      ],
      "ipAddress": "ipAddress4"
    }
  ],
  "accountName": "0212345678-00001",
  "primaryPlaceOfUse": {
    "address": {
      "addressLine1": "9868 Scranton Rd",
      "addressLine2": "Suite A",
      "city": "San Diego",
      "state": "CA",
      "country": "USA",
      "zip": "92121",
      "zip4": "0001",
      "phone": "1234567890",
      "phoneType": "H",
      "emailAddress": "zaffod@theinternet.com"
    },
    "customerName": {
      "firstName": "Zaffod",
      "lastName": "Beeblebrox",
      "middleName": "P",
      "title": "President",
      "suffix": "I"
    }
  }
}
```

