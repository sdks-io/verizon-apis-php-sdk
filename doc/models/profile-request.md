
# Profile Request

## Structure

`ProfileRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | - | getAccountName(): string | setAccountName(string accountName): void |
| `devices` | [`DeviceList[]`](../../doc/models/device-list.md) | Required | **Constraints**: *Maximum Items*: `100` | getDevices(): array | setDevices(array devices): void |
| `carrierName` | `?string` | Optional | - | getCarrierName(): ?string | setCarrierName(?string carrierName): void |
| `servicePlan` | `?string` | Optional | - | getServicePlan(): ?string | setServicePlan(?string servicePlan): void |
| `mdnZipCode` | `?string` | Optional | - | getMdnZipCode(): ?string | setMdnZipCode(?string mdnZipCode): void |
| `primaryPlaceOfUse` | [`?(PrimaryPlaceOfUse[])`](../../doc/models/primary-place-of-use.md) | Optional | **Constraints**: *Maximum Items*: `25` | getPrimaryPlaceOfUse(): ?array | setPrimaryPlaceOfUse(?array primaryPlaceOfUse): void |
| `smsrOid` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `46`, *Pattern*: `^[0-9.]{3,46}$` | getSmsrOid(): ?string | setSmsrOid(?string smsrOid): void |
| `carrierIpPoolName` | `?string` | Optional | The name of the pool of IP addresses assigned to the profile. | getCarrierIpPoolName(): ?string | setCarrierIpPoolName(?string carrierIpPoolName): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "devices": [
    {
      "deviceIds": [
        {
          "id": "id0",
          "kind": "kind8"
        }
      ]
    }
  ],
  "carrierName": "the name of the mobile service provider",
  "servicePlan": "The service plan name",
  "mdnZipCode": "five digit zip code",
  "primaryPlaceOfUse": [
    {
      "customerName": [
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
        }
      ]
    },
    {
      "customerName": [
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
        }
      ]
    }
  ],
  "smsrOid": "smsrOid6"
}
```

