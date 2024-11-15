
# Extended Attribute

## Structure

`ExtendedAttribute`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `key` | `?string` | Optional | The key indicates if the SMS message was to the device (MtSms) or from the device (MoSms)<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getKey(): ?string | setKey(?string key): void |
| `value` | `?string` | Optional | The number of SMS messages found<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getValue(): ?string | setValue(?string value): void |

## Example (as JSON)

```json
{
  "key": "MoSms",
  "value": "value4"
}
```

