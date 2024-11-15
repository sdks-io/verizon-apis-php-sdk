
# Device Id

device identifiers consisting of an ID value and what that value represents (kind)

## Structure

`DeviceId`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The numeric or alphanumeric ID value | getId(): ?string | setId(?string id): void |
| `kind` | `?string` | Optional | What the ID value represents, which could be a Mobile Directory Number (MDN) or an International Mobile Equipment Identifier (IMEI) as an example | getKind(): ?string | setKind(?string kind): void |

## Example (as JSON)

```json
{
  "id": "10-digit phone number",
  "kind": "mdn"
}
```

