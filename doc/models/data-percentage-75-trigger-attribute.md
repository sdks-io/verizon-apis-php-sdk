
# Data Percentage 75 Trigger Attribute

Trigger attribute for when data percentage is over 75% used.

## Structure

`DataPercentage75TriggerAttribute`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `key` | `?string` | Optional | Key data percentage 75. | getKey(): ?string | setKey(?string key): void |
| `value` | `?bool` | Optional | DataPercentage75<br />True - Trigger on Data percentage is over 75% used<br />False - Do not trigger when over 75% used. | getValue(): ?bool | setValue(?bool value): void |

## Example (as JSON)

```json
{
  "key": "DataPercentage75",
  "value": false
}
```

