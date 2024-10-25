
# 5g Biaccount Nameobject

## Structure

`M5gBiaccountNameobject`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | - | getAccountName(): ?string | setAccountName(?string accountName): void |
| `billingCycleEndDate` | `?string` | Optional | - | getBillingCycleEndDate(): ?string | setBillingCycleEndDate(?string billingCycleEndDate): void |
| `carrierInformation` | [`?(M5gBiCarrierInformation[])`](../../doc/models/5g-bi-carrier-information.md) | Optional | - | getCarrierInformation(): ?array | setCarrierInformation(?array carrierInformation): void |
| `connected` | `?bool` | Optional | - | getConnected(): ?bool | setConnected(?bool connected): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `customFields` | [`?(M5gBikeyValue1[])`](../../doc/models/5g-bikey-value-1.md) | Optional | - | getCustomFields(): ?array | setCustomFields(?array customFields): void |
| `deviceIds` | [`?(M5gBideviceId1[])`](../../doc/models/5g-bidevice-id-1.md) | Optional | - | getDeviceIds(): ?array | setDeviceIds(?array deviceIds): void |
| `extendedAttributes` | [`?(M5gBikeyValue1[])`](../../doc/models/5g-bikey-value-1.md) | Optional | - | getExtendedAttributes(): ?array | setExtendedAttributes(?array extendedAttributes): void |
| `groupNames` | [`?(GroupName[])`](../../doc/models/group-name.md) | Optional | - | getGroupNames(): ?array | setGroupNames(?array groupNames): void |
| `ipaddress` | `?string` | Optional | - | getIpaddress(): ?string | setIpaddress(?string ipaddress): void |
| `lastActivationBy` | `?string` | Optional | - | getLastActivationBy(): ?string | setLastActivationBy(?string lastActivationBy): void |
| `lastActivationDate` | `?string` | Optional | - | getLastActivationDate(): ?string | setLastActivationDate(?string lastActivationDate): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "billingCycleEndDate": "11/10/2022 00:00:00",
  "connected": false,
  "createdAt": "10/20/2022 18:23:41",
  "ipAddress": "0.0.0.0",
  "lastActivationBy": "User Name",
  "lastActivationDate": "2022-11-02 T21:36:18Z",
  "carrierInformation": [
    {
      "carrierName": "carrierName4"
    },
    {
      "carrierName": "carrierName4"
    },
    {
      "carrierName": "carrierName4"
    }
  ]
}
```

