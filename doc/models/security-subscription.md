
# Security Subscription

Subscription of the device.

## Structure

`SecuritySubscription`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `extendedAttributes` | [`?(ExtendedAttributes[])`](../../doc/models/extended-attributes.md) | Optional | Attributes of the subscription.<br>**Constraints**: *Maximum Items*: `5` | getExtendedAttributes(): ?array | setExtendedAttributes(?array extendedAttributes): void |
| `licenseAssigned` | `?int` | Optional | The total number of licenses for this license type that are assigned to device SIMs.<br>**Constraints**: `>= 0`, `<= 10` | getLicenseAssigned(): ?int | setLicenseAssigned(?int licenseAssigned): void |
| `licenseAvailable` | `?int` | Optional | The total number of licenses for this license type that are available to assign to device SIMs.<br>**Constraints**: `>= 0`, `<= 10` | getLicenseAvailable(): ?int | setLicenseAvailable(?int licenseAvailable): void |
| `licensePurchased` | `?int` | Optional | The total number of licenses purchased for the license type.<br>**Constraints**: `>= 0`, `<= 10` | getLicensePurchased(): ?int | setLicensePurchased(?int licensePurchased): void |
| `licenseType` | `?string` | Optional | The license type associated with the skuNumber. | getLicenseType(): ?string | setLicenseType(?string licenseType): void |
| `skuNumber` | `?string` | Optional | The skuNumber that identifies the license type. | getSkuNumber(): ?string | setSkuNumber(?string skuNumber): void |

## Example (as JSON)

```json
{
  "skuNumber": "TS-BUNDLE-KTO-SIMSEC-MRC",
  "licenseType": "Flexible Bundle",
  "licensePurchased": 9,
  "licenseAssigned": 7,
  "licenseAvailable": 1,
  "extendedAttributes": [
    {
      "key": "key8",
      "value": "value0"
    },
    {
      "key": "key8",
      "value": "value0"
    }
  ]
}
```

