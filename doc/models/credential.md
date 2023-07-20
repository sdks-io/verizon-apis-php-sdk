
# Credential

## Structure

`Credential`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | **Constraints**: *Maximum Length*: `40` | getName(): ?string | setName(?string name): void |
| `password` | `?string` | Optional | **Constraints**: *Maximum Length*: `15` | getPassword(): ?string | setPassword(?string password): void |

## Example (as JSON)

```json
{
  "name": "user",
  "password": "password"
}
```

