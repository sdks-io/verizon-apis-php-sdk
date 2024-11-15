
# Numerical Data

Describes value and unit of time.

## Structure

`NumericalData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `value` | `?int` | Optional | Numerical value. | getValue(): ?int | setValue(?int value): void |
| `unit` | [`?string(NumericalDataUnitEnum)`](../../doc/models/numerical-data-unit-enum.md) | Optional | Unit of time. | getUnit(): ?string | setUnit(?string unit): void |

## Example (as JSON)

```json
{
  "value": 5,
  "unit": "SECOND"
}
```

