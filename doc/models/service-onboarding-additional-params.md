
# Service Onboarding Additional Params

## Structure

`ServiceOnboardingAdditionalParams`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `key` | `?string` | Optional | Key properties/metadata attribute.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!\/,+\-=_:.&*%\s]+$` | getKey(): ?string | setKey(?string key): void |
| `value` | `?string` | Optional | Properties/metadata value attribute.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!\/,+\-=_:.&*%\s]+$` | getValue(): ?string | setValue(?string value): void |

## Example (as JSON)

```json
{
  "key": "vnsp.mec.domain",
  "value": "IOT"
}
```

