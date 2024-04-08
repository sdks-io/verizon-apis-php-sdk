
# SMS Options Send Request

## Structure

`SMSOptionsSendRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `servicePlan` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9 ]{3,32}$` | getServicePlan(): ?string | setServicePlan(?string servicePlan): void |
| `smsMessage` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `64`, *Pattern*: `^[A-Za-z0-9 ]{3,64}$` | getSmsMessage(): ?string | setSmsMessage(?string smsMessage): void |

## Example (as JSON)

```json
{
  "servicePlan": "the name of a service plan",
  "smsMessage": "A text message"
}
```

