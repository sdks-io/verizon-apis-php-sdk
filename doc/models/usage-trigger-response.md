
# Usage Trigger Response

## Structure

`UsageTriggerResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `triggerId` | `string` | Required | Unique usage triggerId | getTriggerId(): string | setTriggerId(string triggerId): void |
| `triggerName` | `string` | Required | Usage trigger name | getTriggerName(): string | setTriggerName(string triggerName): void |
| `accountName` | `string` | Required | Account name | getAccountName(): string | setAccountName(string accountName): void |
| `serviceName` | [`string(ServiceNameEnum)`](../../doc/models/service-name-enum.md) | Required | Service name<br>**Default**: `ServiceNameEnum::LOCATION` | getServiceName(): string | setServiceName(string serviceName): void |
| `thresholdValue` | `string` | Required | Percent of subscription at which trigger will send an alert | getThresholdValue(): string | setThresholdValue(string thresholdValue): void |
| `allowExcess` | `bool` | Required | allowExcess determines whether to restrict usage after exceeds limits | getAllowExcess(): bool | setAllowExcess(bool allowExcess): void |
| `sendSmsNotification` | `bool` | Required | Send SMS (text) alerts when the thresholdValue is reached. | getSendSmsNotification(): bool | setSendSmsNotification(bool sendSmsNotification): void |
| `smsPhoneNumbers` | `string` | Required | comma seperated value of list of Phone numbers for SMS notifications | getSmsPhoneNumbers(): string | setSmsPhoneNumbers(string smsPhoneNumbers): void |
| `sendEmailNotification` | `bool` | Required | Send email alerts when the thresholdValue is reached. | getSendEmailNotification(): bool | setSendEmailNotification(bool sendEmailNotification): void |
| `emailAddresses` | `string` | Required | comma seperated value of list of Email addresses for Email notifications | getEmailAddresses(): string | setEmailAddresses(string emailAddresses): void |
| `createDate` | `string` | Required | UTC Date when the usage trigger was created | getCreateDate(): string | setCreateDate(string createDate): void |
| `updateDate` | `string` | Required | UTC Date when the usage trigger was last updated | getUpdateDate(): string | setUpdateDate(string updateDate): void |

## Example (as JSON)

```json
{
  "triggerId": "3bb4777e-5292-4de7-97df-f578df4a2dbe",
  "triggerName": "95% usage alert",
  "accountName": "0212312345-00001",
  "serviceName": "Location",
  "thresholdValue": "95",
  "allowExcess": false,
  "sendSmsNotification": false,
  "smsPhoneNumbers": "5551231234",
  "sendEmailNotification": false,
  "emailAddresses": "me@theinternet.com, you@theinternet.com",
  "createDate": "2018-08-31",
  "updateDate": "2018-09-03"
}
```

