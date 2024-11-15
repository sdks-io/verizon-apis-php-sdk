
# Usage Trigger Add Request

## Structure

`UsageTriggerAddRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `triggerName` | `?string` | Optional | Usage trigger name | getTriggerName(): ?string | setTriggerName(?string triggerName): void |
| `accountName` | `string` | Required | Account name | getAccountName(): string | setAccountName(string accountName): void |
| `serviceName` | [`string(ServiceNameEnum)`](../../doc/models/service-name-enum.md) | Required | Service name<br>**Default**: `ServiceNameEnum::LOCATION` | getServiceName(): string | setServiceName(string serviceName): void |
| `thresholdValue` | `string` | Required | The percent of subscribed usage required to activate the trigger, such as 90 or 100. | getThresholdValue(): string | setThresholdValue(string thresholdValue): void |
| `allowExcess` | `?bool` | Optional | Allow additional requests after thresholdValue is reached. (currently not functional) | getAllowExcess(): ?bool | setAllowExcess(?bool allowExcess): void |
| `sendSmsNotification` | `?bool` | Optional | Send SMS (text) alerts when the thresholdValue is reached. | getSendSmsNotification(): ?bool | setSendSmsNotification(?bool sendSmsNotification): void |
| `smsPhoneNumbers` | `?string` | Optional | Comma-separated list of phone numbers to send SMS alerts to. Digits only; no dashes or parentheses, etc. | getSmsPhoneNumbers(): ?string | setSmsPhoneNumbers(?string smsPhoneNumbers): void |
| `sendEmailNotification` | `?bool` | Optional | Send email alerts when the thresholdValue is reached. | getSendEmailNotification(): ?bool | setSendEmailNotification(?bool sendEmailNotification): void |
| `emailAddresses` | `?string` | Optional | Comma-separated list of email addresses to send alerts to. | getEmailAddresses(): ?string | setEmailAddresses(?string emailAddresses): void |

## Example (as JSON)

```json
{
  "triggerName": "95% usage alert",
  "accountName": "0212312345-00001",
  "serviceName": "Location",
  "thresholdValue": "95",
  "smsPhoneNumbers": "5551231234",
  "emailAddresses": "you@theinternet.com",
  "allowExcess": false,
  "sendSmsNotification": false,
  "sendEmailNotification": false
}
```

