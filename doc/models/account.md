
# Account

Returns information about a specified account.

## Structure

`Account`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | The name of the account. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `accountNumber` | `?string` | Optional | The billing number of the account. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `organizationName` | `?string` | Optional | The name of the organization that the account is part of. | getOrganizationName(): ?string | setOrganizationName(?string organizationName): void |
| `isProvisioningAllowed` | `?bool` | Optional | True if devices can be added to the account and activated with a single request. False if devices must be added to the account before they can be activated. | getIsProvisioningAllowed(): ?bool | setIsProvisioningAllowed(?bool isProvisioningAllowed): void |
| `carriers` | `?(string[])` | Optional | The names of all carriers for the account. | getCarriers(): ?array | setCarriers(?array carriers): void |
| `features` | `?(string[])` | Optional | The names of features that are enabled for the account. | getFeatures(): ?array | setFeatures(?array features): void |
| `iPPools` | [`?(IPPool[])`](../../doc/models/ip-pool.md) | Optional | Array of IP pools that are available to the account. | getIPPools(): ?array | setIPPools(?array iPPools): void |
| `servicePlans` | [`?(ServicePlan[])`](../../doc/models/service-plan.md) | Optional | Array of service plans that are available to the account. | getServicePlans(): ?array | setServicePlans(?array servicePlans): void |

## Example (as JSON)

```json
{
  "accountName": "Chintan_CPNStaticBulk",
  "accountNumber": "1234567890-77777",
  "organizationName": "ChintanCPNBulk",
  "isProvisioningAllowed": true,
  "carriers": [
    "Verizon Wireless"
  ],
  "features": [
    "Static IP",
    "Dynamic IP",
    "Customer PN"
  ],
  "iPPools": [
    {
      "poolName": "ACMESTATIC001",
      "poolType": "Static IP",
      "isDefaultPool": true
    },
    {
      "poolName": "ACMEDYNAMIC001",
      "poolType": "Dynamic IP",
      "isDefaultPool": false
    }
  ],
  "servicePlans": [
    {
      "name": "",
      "code": "92876",
      "sizeKb": 1,
      "carrierServicePlanCode": "",
      "extendedAttributes": []
    },
    {
      "name": "",
      "code": "92876",
      "sizeKb": 1,
      "carrierServicePlanCode": "",
      "extendedAttributes": []
    }
  ]
}
```

