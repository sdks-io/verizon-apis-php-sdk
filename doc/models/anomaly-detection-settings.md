
# Anomaly Detection Settings

Settings for anomaly detection.

## Structure

`AnomalyDetectionSettings`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | Indicates if the account name used has anomaly detection.<br />Success - The account has anomaly detection.<br />Failure - The account does not have anomaly detection. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `sensitivityParameter` | [`?SensitivityParameters`](../../doc/models/sensitivity-parameters.md) | Optional | Details for sensitivity parameters. | getSensitivityParameter(): ?SensitivityParameters | setSensitivityParameter(?SensitivityParameters sensitivityParameter): void |
| `status` | `?string` | Optional | Indicates if anomaly detection is active on the account<br />Active - Anomaly detection is active<br />Disabled- Anomaly detection is not active. | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "accountName": "Success",
  "sensitivityParameter": {
    "abnormalMaxValue": 1.1,
    "enableAbnormal": true,
    "enableVeryAbnormal": true,
    "veryAbnormalMaxValue": 0.55
  },
  "status": "Active"
}
```

