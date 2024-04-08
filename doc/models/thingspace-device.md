
# Thingspace Device

Device that exist in Verizon Mobile Device Management (MDM).

## Structure

`ThingspaceDevice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | The billing account that the device is associated with. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `billingCycleEndDate` | `?string` | Optional | The date that the device's current billing cycle ends. | getBillingCycleEndDate(): ?string | setBillingCycleEndDate(?string billingCycleEndDate): void |
| `carrierInformations` | [`?(CarrierInformation[])`](../../doc/models/carrier-information.md) | Optional | The carrier information associated with the device. | getCarrierInformations(): ?array | setCarrierInformations(?array carrierInformations): void |
| `connected` | `?bool` | Optional | True if the device is connected; false if it is not. | getConnected(): ?bool | setConnected(?bool connected): void |
| `createdAt` | `?string` | Optional | The date and time that the device was added to the system. | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `customFields` | [`?(CustomFields[])`](../../doc/models/custom-fields.md) | Optional | The custom fields and values that have been set for the device. | getCustomFields(): ?array | setCustomFields(?array customFields): void |
| `deviceIds` | [`?(DeviceId[])`](../../doc/models/device-id.md) | Optional | All identifiers for the device. | getDeviceIds(): ?array | setDeviceIds(?array deviceIds): void |
| `extendedAttributes` | [`?(CustomFields[])`](../../doc/models/custom-fields.md) | Optional | Any extended attributes for the device, as Key and Value pairs. The pairs listed below are returned as part of the response for a single device, but are not included if the request was for information about multiple devices. | getExtendedAttributes(): ?array | setExtendedAttributes(?array extendedAttributes): void |
| `groupNames` | `?(array<?string>)` | Optional | The device groups that the device belongs to. | getGroupNames(): ?array | setGroupNames(?array groupNames): void |
| `ipAddress` | `?string` | Optional | The IP address of the device. | getIpAddress(): ?string | setIpAddress(?string ipAddress): void |
| `lastActivationBy` | `?string` | Optional | The user who last activated the device. | getLastActivationBy(): ?string | setLastActivationBy(?string lastActivationBy): void |
| `lastActivationDate` | `?string` | Optional | The date and time that the device was last activated. | getLastActivationDate(): ?string | setLastActivationDate(?string lastActivationDate): void |
| `lastConnectionDate` | `?string` | Optional | The most recent connection date and time. | getLastConnectionDate(): ?string | setLastConnectionDate(?string lastConnectionDate): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "billingCycleEndDate": "2020-05-09T20:00:00-04:00",
  "carrierInformations": [
    {
      "carrierName": "Verizon Wireless",
      "servicePlan": "m2m4G",
      "state": "active"
    }
  ],
  "connected": false,
  "createdAt": "2019-08-07T10:42:15-04:00",
  "deviceIds": [
    {
      "id": "10-digit MDN",
      "kind": "mdn"
    },
    {
      "id": "15-digit IMEI",
      "kind": "imei"
    }
  ],
  "groupNames": [
    "southwest"
  ],
  "ipAddress": "0.0.0.0",
  "lastActivationBy": "Joe Q Public",
  "lastActivationDate": "2019-08-07T10:42:34-04:00",
  "lastConnectionDate": "2020-03-12T04:23:37-04:00"
}
```

