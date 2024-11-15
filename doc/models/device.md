
# Device

Identifies a particular IoT device.

## Structure

`Device`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Device identifier. | getId(): string | setId(string id): void |
| `kind` | `string` | Required | Device kind identifier. | getKind(): string | setKind(string kind): void |

## Example (as JSON)

```json
{
  "id": "864508030026238",
  "kind": "IMEI"
}
```

