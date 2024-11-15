
# V1 Account Subscription

Account subscription information.

## Structure

`V1AccountSubscription`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | Account identifier in "##########-#####". | getAccountName(): ?string | setAccountName(?string accountName): void |
| `purchaseType` | `?string` | Optional | Subscription models used by the account. | getPurchaseType(): ?string | setPurchaseType(?string purchaseType): void |
| `licenseCount` | `?int` | Optional | Number of monthly licenses in an MRC subscription. | getLicenseCount(): ?int | setLicenseCount(?int licenseCount): void |
| `licenseUsedCount` | `?int` | Optional | Number of licenses currently assigned to devices. | getLicenseUsedCount(): ?int | setLicenseUsedCount(?int licenseUsedCount): void |
| `updateTime` | `?string` | Optional | The date and time of when the subscription was last updated. | getUpdateTime(): ?string | setUpdateTime(?string updateTime): void |

## Example (as JSON)

```json
{
  "accountName": "0402196254-00001",
  "purchaseType": "TS-HFOTA-EVNT,TS-HFOTA-MRC",
  "licenseCount": 9000,
  "licenseUsedCount": 1000,
  "updateTime": "2018-03-02T16:03:06.000Z"
}
```

