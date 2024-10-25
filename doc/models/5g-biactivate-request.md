
# 5g Biactivate Request

## Structure

`M5gBiactivateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | - | getAccountName(): ?string | setAccountName(?string accountName): void |
| `servicePlan` | `?string` | Optional | - | getServicePlan(): ?string | setServicePlan(?string servicePlan): void |
| `deviceListWithServiceAddress` | [`?(DeviceListWithServiceAddress1[])`](../../doc/models/device-list-with-service-address-1.md) | Optional | - | getDeviceListWithServiceAddress(): ?array | setDeviceListWithServiceAddress(?array deviceListWithServiceAddress): void |
| `publicIpRestriction` | `?string` | Optional | - | getPublicIpRestriction(): ?string | setPublicIpRestriction(?string publicIpRestriction): void |
| `carrierName` | `?string` | Optional | - | getCarrierName(): ?string | setCarrierName(?string carrierName): void |
| `mdnZipCode` | `?string` | Optional | - | getMdnZipCode(): ?string | setMdnZipCode(?string mdnZipCode): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "servicePlan": "service plan name",
  "publicIpRestriction": "Unrestricted",
  "carrierName": "Verizon Wireless",
  "mdnZipCode": "5-digit zip code",
  "deviceListWithServiceAddress": [
    {
      "deviceId": [
        {
          "id": "id0",
          "kind": "kind8"
        }
      ],
      "primaryPlaceofuse": {
        "address": {
          "addressLine1": "addressLine18",
          "city": "city6",
          "state": "state2",
          "zip": "zip0",
          "zip+4": "zip+48"
        },
        "customerName": {
          "firstName": "firstName4",
          "lastName": "lastName4",
          "middleName": "middleName8",
          "title": "title4",
          "suffex": "suffex4"
        }
      }
    },
    {
      "deviceId": [
        {
          "id": "id0",
          "kind": "kind8"
        }
      ],
      "primaryPlaceofuse": {
        "address": {
          "addressLine1": "addressLine18",
          "city": "city6",
          "state": "state2",
          "zip": "zip0",
          "zip+4": "zip+48"
        },
        "customerName": {
          "firstName": "firstName4",
          "lastName": "lastName4",
          "middleName": "middleName8",
          "title": "title4",
          "suffex": "suffex4"
        }
      }
    }
  ]
}
```

