
# Daily Usage History

## Structure

`DailyUsageHistory`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bytesUsed` | `?string` | Optional | the total data usage recorded in Bytes<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `32`, *Pattern*: `^[0-9]{1,32}$` | getBytesUsed(): ?string | setBytesUsed(?string bytesUsed): void |
| `extendedAttributes` | [`?(ExtendedAttribute[])`](../../doc/models/extended-attribute.md) | Optional | - | getExtendedAttributes(): ?array | setExtendedAttributes(?array extendedAttributes): void |
| `servicePlan` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getServicePlan(): ?string | setServicePlan(?string servicePlan): void |
| `smsUsed` | `?string` | Optional | The total number of SMS messages from and to the device<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `32`, *Pattern*: `^[0-9]{1,32}$` | getSmsUsed(): ?string | setSmsUsed(?string smsUsed): void |
| `source` | `?string` | Optional | Where the collected data is being gathered from<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getSource(): ?string | setSource(?string source): void |
| `timestamp` | `?string` | Optional | Timestamp of when the retrieved record was completed ($datetime)<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getTimestamp(): ?string | setTimestamp(?string timestamp): void |

## Example (as JSON)

```json
{
  "bytesUsed": "123456",
  "smsUsed": "5",
  "extendedAttributes": [
    {
      "key": "key8",
      "value": "value0"
    },
    {
      "key": "key8",
      "value": "value0"
    },
    {
      "key": "key8",
      "value": "value0"
    }
  ],
  "servicePlan": "servicePlan6",
  "source": "source2"
}
```

