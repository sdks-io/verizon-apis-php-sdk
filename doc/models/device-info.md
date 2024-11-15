
# Device Info

The devices that you want to locate. The array cannot contain more than 20 devices.

## Structure

`DeviceInfo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Device identifier. | getId(): string | setId(string id): void |
| `kind` | `string` | Required | Device identifier kind. | getKind(): string | setKind(string kind): void |
| `mdn` | `string` | Required | Device MDN. | getMdn(): string | setMdn(string mdn): void |

## Example (as JSON)

```json
{
  "id": "980003420535573",
  "kind": "imei",
  "mdn": "7892345678"
}
```

