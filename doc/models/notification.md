
# Notification

The notification details of the trigger.

## Structure

`Notification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `notificationType` | `?string` | Optional | The type of notification, i.e. 'DailySummary'. | getNotificationType(): ?string | setNotificationType(?string notificationType): void |
| `callback` | `?bool` | Optional | Whether or not the notification should be sent via callback.<br />true<br />false. | getCallback(): ?bool | setCallback(?bool callback): void |
| `emailNotification` | `?bool` | Optional | Whether or not the notification should be sent via e-mail.<br />true<br />false. | getEmailNotification(): ?bool | setEmailNotification(?bool emailNotification): void |
| `notificationGroupName` | `?string` | Optional | Name for the notification group. | getNotificationGroupName(): ?string | setNotificationGroupName(?string notificationGroupName): void |
| `notificationFrequencyFactor` | `?int` | Optional | Frequency factor for notification. | getNotificationFrequencyFactor(): ?int | setNotificationFrequencyFactor(?int notificationFrequencyFactor): void |
| `notificationFrequencyInterval` | `?string` | Optional | Frequency interval for notification. | getNotificationFrequencyInterval(): ?string | setNotificationFrequencyInterval(?string notificationFrequencyInterval): void |
| `externalEmailRecipients` | `?string` | Optional | E-mail address(es) where the notification should be delivered. | getExternalEmailRecipients(): ?string | setExternalEmailRecipients(?string externalEmailRecipients): void |
| `smsNotification` | `?bool` | Optional | SMS notification. | getSmsNotification(): ?bool | setSmsNotification(?bool smsNotification): void |
| `smsNumbers` | [`?(SMSNumber[])`](../../doc/models/sms-number.md) | Optional | List of SMS numbers.<br>**Constraints**: *Maximum Items*: `10` | getSmsNumbers(): ?array | setSmsNumbers(?array smsNumbers): void |
| `reminder` | `?bool` | Optional | - | getReminder(): ?bool | setReminder(?bool reminder): void |
| `severity` | `?string` | Optional | Severity level associated with the notification. Examples would be:<br />Major<br />Minor<br />Critical<br />NotApplicable. | getSeverity(): ?string | setSeverity(?string severity): void |

## Example (as JSON)

```json
{
  "notificationType": "DailySummary",
  "callback": true,
  "emailNotification": false,
  "notificationGroupName": "Anomaly Test API",
  "notificationFrequencyFactor": 3,
  "notificationFrequencyInterval": "Hourly",
  "externalEmailRecipients": "placeholder@verizon.com",
  "smsNotification": true,
  "smsNumbers": [
    {
      "carrier": "US Cellular",
      "number": "9299280711"
    }
  ],
  "reminder": true,
  "severity": "Critical"
}
```

