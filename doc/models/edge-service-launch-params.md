
# Edge Service Launch Params

## Structure

`EdgeServiceLaunchParams`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `key` | `?string` | Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getKey(): ?string | setKey(?string key): void |
| `value` | `?string` | Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getValue(): ?string | setValue(?string value): void |

## Example (as JSON)

```json
{
  "key": "key",
  "value": "value"
}
```

