
# Fota V3 Subscription

Information for licenses applied to devices.

## Structure

`FotaV3Subscription`

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
  "accountName": "0000123456-000001",
  "purchaseType": "TS-HFOTA-EVNT,TS-HFOTA-MRC",
  "licenseCount": 500,
  "licenseUsedCount": 400,
  "updateTime": "2020-09-17T21:11:32.170Z"
}
```

