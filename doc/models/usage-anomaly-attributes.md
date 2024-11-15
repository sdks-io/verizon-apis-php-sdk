
# Usage Anomaly Attributes

The details of the UsageAnomaly trigger.

## Structure

`UsageAnomalyAttributes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountNames` | `?string` | Optional | The Verizon billing account associated with the anomaly triggers for this trigger to be active for devices in those accounts. An account name is usually numeric, and must include any leading zeros.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32` | getAccountNames(): ?string | setAccountNames(?string accountNames): void |
| `deviceGroup` | `?string` | Optional | The names of device groups associated with the anomaly triggers for this trigger to be active for devices in those groups. | getDeviceGroup(): ?string | setDeviceGroup(?string deviceGroup): void |
| `includeAbnormal` | `?bool` | Optional | Whether or not to include anomalies classified as 'abnormal'.<br />true<br />false<br />Classification is set as part of ThingSpace Intelligence anomaly detection settings. | getIncludeAbnormal(): ?bool | setIncludeAbnormal(?bool includeAbnormal): void |
| `includeVeryAbnormal` | `?bool` | Optional | Whether or not to include anomalies classified as 'very abnormal'.<br />true<br />false<br />Classification is set as part of ThingSpace Intelligence anomaly detection settings. | getIncludeVeryAbnormal(): ?bool | setIncludeVeryAbnormal(?bool includeVeryAbnormal): void |
| `includeUnderExpectedUsage` | `?bool` | Optional | Whether or not to include anomalies that are directionally under the expected usage.<br />true<br />false. | getIncludeUnderExpectedUsage(): ?bool | setIncludeUnderExpectedUsage(?bool includeUnderExpectedUsage): void |
| `includeOverExpectedUsage` | `?bool` | Optional | Whether or not to include anomalies that are directionally over the expected usage. <br />true<br />false. | getIncludeOverExpectedUsage(): ?bool | setIncludeOverExpectedUsage(?bool includeOverExpectedUsage): void |

## Example (as JSON)

```json
{
  "accountNames": "0000123456-00001",
  "deviceGroup": "User Group 1",
  "includeAbnormal": true,
  "includeVeryAbnormal": true,
  "includeUnderExpectedUsage": true,
  "includeOverExpectedUsage": true
}
```

