
# ESI Msubrequest

## Structure

`ESIMsubrequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `kind` | `?string` | Optional | - | getKind(): ?string | setKind(?string kind): void |
| `status` | [`?string(Status1Enum)`](../../doc/models/status-1-enum.md) | Optional | - | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "id": "32-digit EID",
  "kind": "eid",
  "status": "success"
}
```

