
# Data Percentage 100 Trigger Attribute

Trigger attribute for when data percentage is over 100% used.

## Structure

`DataPercentage100TriggerAttribute`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `key` | `?string` | Optional | Key data percentage 100. | getKey(): ?string | setKey(?string key): void |
| `value` | `?bool` | Optional | DataPercentage100<br />True - Trigger on Data percentage is over 100% used<br />False - Do not trigger when over 100% used. | getValue(): ?bool | setValue(?bool value): void |

## Example (as JSON)

```json
{
  "key": "DataPercentage100",
  "value": false
}
```

