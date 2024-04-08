
# Security Subscription Result

Response for a subscription request.

## Structure

`SecuritySubscriptionResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | The name of a billing account. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `subscriptionList` | [`?(SecuritySubscription[])`](../../doc/models/security-subscription.md) | Optional | The list of SKU numbers and counts for each license type specified in the request.<br>**Constraints**: *Maximum Items*: `5` | getSubscriptionList(): ?array | setSubscriptionList(?array subscriptionList): void |

## Example (as JSON)

```json
{
  "accountName": "000012345600001",
  "subscriptionList": [
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
  ]
}
```

