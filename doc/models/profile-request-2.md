
# Profile Request 2

## Structure

`ProfileRequest2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `devices` | [`?(DeviceList2[])`](../../doc/models/device-list-2.md) | Optional | **Constraints**: *Maximum Items*: `100` | getDevices(): ?array | setDevices(?array devices): void |
| `accountName` | `?string` | Optional | - | getAccountName(): ?string | setAccountName(?string accountName): void |
| `carrierName` | `?string` | Optional | - | getCarrierName(): ?string | setCarrierName(?string carrierName): void |
| `reasonCode` | `?string` | Optional | - | getReasonCode(): ?string | setReasonCode(?string reasonCode): void |
| `etfWaiver` | `?bool` | Optional | **Default**: `true` | getEtfWaiver(): ?bool | setEtfWaiver(?bool etfWaiver): void |
| `checkFallbackProfile` | `?bool` | Optional | **Default**: `false` | getCheckFallbackProfile(): ?bool | setCheckFallbackProfile(?bool checkFallbackProfile): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "carrierName": "the name of the mobile service provider",
  "reasonCode": "a short code for the reason action was taken",
  "etfWaiver": true,
  "checkFallbackProfile": false,
  "devices": [
    {
      "ids": [
        {
          "id": "id7",
          "kind": "iccid"
        },
        {
          "id": "id8",
          "kind": "imei"
        }
      ]
    },
    {
      "ids": [
        {
          "id": "id8",
          "kind": "imei"
        },
        {
          "id": "id9",
          "kind": "eid"
        },
        {
          "id": "id0",
          "kind": "esn"
        }
      ]
    }
  ]
}
```

