
# Device Identifier

Device Id details.

## Structure

`DeviceIdentifier`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `kind` | `string` | Required | Kind of device.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `6`, *Pattern*: `^[A-Za-z]{3,6}$` | getKind(): string | setKind(string kind): void |
| `id` | `string` | Required | Device Identity number.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[0-9]{3,32}$` | getId(): string | setId(string id): void |
| `mdn` | `?string` | Optional | Device MDN number.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `10`, *Pattern*: `^[A-Za-z0-9]{3,10}$` | getMdn(): ?string | setMdn(?string mdn): void |

## Example (as JSON)

```json
{
  "kind": "iccid",
  "id": "01234567899876543210",
  "mdn": "0123456789"
}
```

