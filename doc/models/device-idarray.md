
# Device Idarray

## Structure

`DeviceIdarray`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `kind` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getKind(): ?string | setKind(?string kind): void |
| `id` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getId(): ?string | setId(?string id): void |

## Example (as JSON)

```json
{
  "kind": "imei",
  "id": "id8"
}
```

