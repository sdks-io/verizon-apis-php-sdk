
# Custom Fields

Custom data that can be included using key-value pairs.

## Structure

`CustomFields`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `key` | `string` | Required | The key for an extended attribute. | getKey(): string | setKey(string key): void |
| `value` | `string` | Required | The value of an extended attribute. | getValue(): string | setValue(string value): void |

## Example (as JSON)

```json
{
  "key": "CustomField2",
  "value": "SuperVend"
}
```

