
# Device Id Search

Search by device id.

## Structure

`DeviceIdSearch`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `contains` | `?string` | Optional | The string appears anywhere in the identifer. | getContains(): ?string | setContains(?string contains): void |
| `startswith` | `?string` | Optional | The identifer must start with the specified string. | getStartswith(): ?string | setStartswith(?string startswith): void |
| `endswith` | `?string` | Optional | The identifier must end with the specified string. | getEndswith(): ?string | setEndswith(?string endswith): void |
| `kind` | `string` | Required | The type of the device identifier to match. Valid types of identifiers are:EID,ESN,ICCID,IMEI,MDN,MEID,MSISDN. | getKind(): string | setKind(string kind): void |

## Example (as JSON)

```json
{
  "kind": "iccid",
  "contains": "4259",
  "startswith": "startswith0",
  "endswith": "endswith2"
}
```

