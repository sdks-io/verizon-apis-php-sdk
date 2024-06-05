
# Notification

## Structure

`Notification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `notificationType` | `?string` | Optional | - | getNotificationType(): ?string | setNotificationType(?string notificationType): void |
| `callback` | `?bool` | Optional | - | getCallback(): ?bool | setCallback(?bool callback): void |
| `emailNotification` | `?bool` | Optional | - | getEmailNotification(): ?bool | setEmailNotification(?bool emailNotification): void |
| `notificationGroupName` | `?string` | Optional | - | getNotificationGroupName(): ?string | setNotificationGroupName(?string notificationGroupName): void |
| `notificationFrequencyFactor` | `?int` | Optional | - | getNotificationFrequencyFactor(): ?int | setNotificationFrequencyFactor(?int notificationFrequencyFactor): void |
| `notificationFrequencyInterval` | `?string` | Optional | - | getNotificationFrequencyInterval(): ?string | setNotificationFrequencyInterval(?string notificationFrequencyInterval): void |
| `externalEmailRecipients` | `?string` | Optional | - | getExternalEmailRecipients(): ?string | setExternalEmailRecipients(?string externalEmailRecipients): void |
| `smsNotification` | `?bool` | Optional | - | getSmsNotification(): ?bool | setSmsNotification(?bool smsNotification): void |
| `smsNumbers` | [`?(SmsNumbers[])`](../../doc/models/sms-numbers.md) | Optional | - | getSmsNumbers(): ?array | setSmsNumbers(?array smsNumbers): void |
| `reminder` | `?bool` | Optional | - | getReminder(): ?bool | setReminder(?bool reminder): void |
| `severity` | `?string` | Optional | - | getSeverity(): ?string | setSeverity(?string severity): void |

## Example (as JSON)

```json
{
  "notificationType": "notificationType2",
  "callback": false,
  "emailNotification": false,
  "notificationGroupName": "notificationGroupName2",
  "notificationFrequencyFactor": 214
}
```

