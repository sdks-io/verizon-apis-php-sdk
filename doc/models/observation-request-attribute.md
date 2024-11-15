
# Observation Request Attribute

Streaming RF parameter that you want to observe.

## Structure

`ObservationRequestAttribute`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | [`?string(AttributeIdentifierEnum)`](../../doc/models/attribute-identifier-enum.md) | Optional | Attribute identifier. | getName(): ?string | setName(?string name): void |

## Example (as JSON)

```json
{
  "name": "RADIO_SIGNAL_STRENGTH"
}
```

