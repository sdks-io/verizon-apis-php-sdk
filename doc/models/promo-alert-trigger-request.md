
# Promo Alert Trigger Request

## Structure

`PromoAlertTriggerRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dataPercentage50` | `?bool` | Optional | - | getDataPercentage50(): ?bool | setDataPercentage50(?bool dataPercentage50): void |
| `dataPercentage75` | `?bool` | Optional | - | getDataPercentage75(): ?bool | setDataPercentage75(?bool dataPercentage75): void |
| `dataPercentage90` | `?bool` | Optional | - | getDataPercentage90(): ?bool | setDataPercentage90(?bool dataPercentage90): void |
| `noOfDaysB4PromoExp` | `?int` | Optional | **Constraints**: `>= 0`, `<= 180` | getNoOfDaysB4PromoExp(): ?int | setNoOfDaysB4PromoExp(?int noOfDaysB4PromoExp): void |
| `smsPercentage50` | `?bool` | Optional | - | getSmsPercentage50(): ?bool | setSmsPercentage50(?bool smsPercentage50): void |
| `smsPercentage75` | `?bool` | Optional | - | getSmsPercentage75(): ?bool | setSmsPercentage75(?bool smsPercentage75): void |
| `smsPercentage90` | `?bool` | Optional | - | getSmsPercentage90(): ?bool | setSmsPercentage90(?bool smsPercentage90): void |

## Example (as JSON)

```json
{
  "dataPercentage50": false,
  "dataPercentage75": false,
  "dataPercentage90": false,
  "noOfDaysB4PromoExp": 166,
  "smsPercentage50": false
}
```

