
# Triggervalues 2

## Structure

`Triggervalues2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `triggerId` | `?string` | Optional | - | getTriggerId(): ?string | setTriggerId(?string triggerId): void |
| `triggerName` | `?string` | Optional | - | getTriggerName(): ?string | setTriggerName(?string triggerName): void |
| `accountName` | `?string` | Optional | - | getAccountName(): ?string | setAccountName(?string accountName): void |
| `organizationName` | `?string` | Optional | - | getOrganizationName(): ?string | setOrganizationName(?string organizationName): void |
| `triggerCategory` | `?string` | Optional | - | getTriggerCategory(): ?string | setTriggerCategory(?string triggerCategory): void |
| `promoAlerts` | [`?(PromoAlert[])`](../../doc/models/promo-alert.md) | Optional | - | getPromoAlerts(): ?array | setPromoAlerts(?array promoAlerts): void |
| `active` | `?bool` | Optional | - | getActive(): ?bool | setActive(?bool active): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `modifiedAt` | `?DateTime` | Optional | - | getModifiedAt(): ?\DateTime | setModifiedAt(?\DateTime modifiedAt): void |

## Example (as JSON)

```json
{
  "triggerId": "2874DEC7-26CF-4797-9C6A-B5A2AC72D526",
  "triggerName": "PromoAlerts_0000000000-00001_23456789",
  "accountName": "0000123456-000001",
  "organizationName": "Optional group name",
  "triggerCategory": "PromoAlerts"
}
```

