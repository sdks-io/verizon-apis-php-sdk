
# GIO Device Id

## Structure

`GIODeviceId`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `kind` | `string` | Required | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `6`, *Pattern*: `^[A-Za-z]{3,6}$` | getKind(): string | setKind(string kind): void |
| `id` | `string` | Required | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[0-9]{3,32}$` | getId(): string | setId(string id): void |

## Example (as JSON)

```json
{
  "kind": "eid",
  "id": "12345678901234567890123456789012"
}
```

