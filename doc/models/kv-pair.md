
# Kv Pair

## Structure

`KvPair`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `key` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getKey(): ?string | setKey(?string key): void |
| `value` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getValue(): ?string | setValue(?string value): void |

## Example (as JSON)

```json
{
  "key": "key6",
  "value": "value8"
}
```

