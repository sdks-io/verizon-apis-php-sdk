
# Id

## Structure

`Id`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The value of the device identifier. | getId(): ?string | setId(?string id): void |
| `kind` | `?string` | Optional | The type of the device identifier. Valid types of identifiers are:ESN (decimal),EID,ICCID (up to 20 digits),IMEI (up to 16 digits),MDN,MEID (hexadecimal),MSISDN. | getKind(): ?string | setKind(?string kind): void |

## Example (as JSON)

```json
{
  "id": "990013907835573",
  "kind": "imei"
}
```

