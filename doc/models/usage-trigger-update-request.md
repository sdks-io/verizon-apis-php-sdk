
# Usage Trigger Update Request

## Structure

`UsageTriggerUpdateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `triggerName` | `?string` | Optional | Usage trigger name | getTriggerName(): ?string | setTriggerName(?string triggerName): void |
| `accountName` | `string` | Required | Account name | getAccountName(): string | setAccountName(string accountName): void |
| `thresholdValue` | `?string` | Optional | The percent of subscribed usage required to activate the trigger, such as 90 or 100. | getThresholdValue(): ?string | setThresholdValue(?string thresholdValue): void |
| `smsPhoneNumbers` | `?string` | Optional | Comma-separated list of phone numbers to send SMS alerts to. Digits only; no dashes or parentheses, etc. | getSmsPhoneNumbers(): ?string | setSmsPhoneNumbers(?string smsPhoneNumbers): void |
| `emailAddresses` | `?string` | Optional | Comma-separated list of email addresses to send alerts to. | getEmailAddresses(): ?string | setEmailAddresses(?string emailAddresses): void |

## Example (as JSON)

```json
{
  "triggerName": "95% usage alert",
  "accountName": "0212312345-00001",
  "thresholdValue": "95",
  "smsPhoneNumbers": "5551231234",
  "emailAddresses": "me@theinternet.com, you@theinternet.com"
}
```

