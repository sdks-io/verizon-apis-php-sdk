
# SMS Trigger Request

## Structure

`SMSTriggerRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `comparator` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getComparator(): ?string | setComparator(?string comparator): void |
| `smsType` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getSmsType(): ?string | setSmsType(?string smsType): void |
| `threshold` | `?int` | Optional | **Constraints**: `>= 0`, `<= 100` | getThreshold(): ?int | setThreshold(?int threshold): void |

## Example (as JSON)

```json
{
  "comparator": "comparator0",
  "smsType": "smsType6",
  "threshold": 222
}
```

