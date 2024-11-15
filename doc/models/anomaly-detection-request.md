
# Anomaly Detection Request

Anomaly detection request.

## Structure

`AnomalyDetectionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | The name of a billing account. An account name is usually numeric, and must include any leading zeros.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32` | getAccountName(): ?string | setAccountName(?string accountName): void |
| `requestType` | `?string` | Optional | The type of request being made. anomaly is the request to activate anomaly detection. | getRequestType(): ?string | setRequestType(?string requestType): void |
| `sensitivityParameter` | [`?SensitivityParameters`](../../doc/models/sensitivity-parameters.md) | Optional | Details for sensitivity parameters. | getSensitivityParameter(): ?SensitivityParameters | setSensitivityParameter(?SensitivityParameters sensitivityParameter): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "requestType": "anomaly",
  "sensitivityParameter": {
    "abnormalMaxValue": 1.1,
    "enableAbnormal": true,
    "enableVeryAbnormal": true,
    "veryAbnormalMaxValue": 0.55
  }
}
```

