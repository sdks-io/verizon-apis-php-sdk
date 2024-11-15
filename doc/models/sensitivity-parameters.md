
# Sensitivity Parameters

Details for sensitivity parameters.

## Structure

`SensitivityParameters`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `abnormalMaxValue` | `?float` | Optional | The maximum value of the threshold in the units being measured. | getAbnormalMaxValue(): ?float | setAbnormalMaxValue(?float abnormalMaxValue): void |
| `enableAbnormal` | `?bool` | Optional | If abnormal values are being monitored.<br />true - Monitor for abnormal values<br />false - Do not monitor for abnormal values. | getEnableAbnormal(): ?bool | setEnableAbnormal(?bool enableAbnormal): void |
| `enableVeryAbnormal` | `?bool` | Optional | If very abnormal values are being monitored.<br />true - Monitor for very abnormal values<br />false - Do not monitor for very abnormal values. | getEnableVeryAbnormal(): ?bool | setEnableVeryAbnormal(?bool enableVeryAbnormal): void |
| `veryAbnormalMaxValue` | `?float` | Optional | The maximum value of the threshold in the units being measured. | getVeryAbnormalMaxValue(): ?float | setVeryAbnormalMaxValue(?float veryAbnormalMaxValue): void |

## Example (as JSON)

```json
{
  "abnormalMaxValue": 1.1,
  "enableAbnormal": true,
  "enableVeryAbnormal": true,
  "veryAbnormalMaxValue": 0.55
}
```

