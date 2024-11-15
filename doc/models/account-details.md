
# Account Details

## Structure

`AccountDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | The numeric name of the account, in the format "0000123456-00001". Leading zeros must be included.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[0-9-]{3,32}$` | getAccountName(): ?string | setAccountName(?string accountName): void |
| `accountNumber` | `?string` | Optional | The numeric name of the account, in the format "0000123456-00001". Leading zeros must be included.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[0-9-]{3,32}$` | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `organizationName` | `?string` | Optional | user defined name of organization<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[0-9]{3,32}$` | getOrganizationName(): ?string | setOrganizationName(?string organizationName): void |
| `isProvisioningAllowed` | `?bool` | Optional | Flag set to indicate if account details can be edited or not. Default is "true". | getIsProvisioningAllowed(): ?bool | setIsProvisioningAllowed(?bool isProvisioningAllowed): void |
| `carriers` | [`?(Carrier[])`](../../doc/models/carrier.md) | Optional | - | getCarriers(): ?array | setCarriers(?array carriers): void |
| `features` | [`?(Feature[])`](../../doc/models/feature.md) | Optional | - | getFeatures(): ?array | setFeatures(?array features): void |
| `servicePlans` | [`?(CarrierServicePlan[])`](../../doc/models/carrier-service-plan.md) | Optional | - | getServicePlans(): ?array | setServicePlans(?array servicePlans): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "accountNumber": "0000123456-00001",
  "organizationName": "organizationName2",
  "isProvisioningAllowed": false,
  "carriers": [
    {
      "carriers": "carriers0"
    },
    {
      "carriers": "carriers0"
    },
    {
      "carriers": "carriers0"
    }
  ]
}
```

