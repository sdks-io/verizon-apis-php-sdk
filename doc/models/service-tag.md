
# Service Tag

Service tag has key and value attribute.

## Structure

`ServiceTag`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `key` | `?string` | Optional | Service tag key attribute.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!\/,+\-=_:.&*%\s]+$` | getKey(): ?string | setKey(?string key): void |
| `value` | `?string` | Optional | Service tag value attribute.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!\/,+\-=_:.&*%\s]+$` | getValue(): ?string | setValue(?string value): void |

## Example (as JSON)

```json
{
  "key": "vnsp.mec.verizon.com/serviceType",
  "value": "My service"
}
```

