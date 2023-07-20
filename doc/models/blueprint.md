
# Blueprint

## Structure

`Blueprint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | Name of the nodeGroup. | getName(): ?string | setName(?string name): void |
| `version` | `?string` | Optional | **Default**: `'latest'` | getVersion(): ?string | setVersion(?string version): void |

## Example (as JSON)

```json
{
  "name": "default",
  "version": "latest"
}
```

