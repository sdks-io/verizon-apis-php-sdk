
# Network Resources Type

Network resources of a service profile.

## Structure

`NetworkResourcesType`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `minBandwidthKbits` | `?int` | Optional | Minimum required connection bandwidth in Kbit/s for the application.<br>**Constraints**: `>= 1`, `<= 10000` | getMinBandwidthKbits(): ?int | setMinBandwidthKbits(?int minBandwidthKbits): void |
| `serviceContinuitySupport` | `?bool` | Optional | Indicates if service continuity support is required or not for the application. | getServiceContinuitySupport(): ?bool | setServiceContinuitySupport(?bool serviceContinuitySupport): void |
| `maxRequestRate` | `?int` | Optional | Maximum request rate that the application can handle.<br>**Constraints**: `>= 1`, `<= 100` | getMaxRequestRate(): ?int | setMaxRequestRate(?int maxRequestRate): void |
| `maxLatencyMs` | `int` | Required | Maximum response time or latency that the application can handle, in milliseconds. Note: this value must be in multiples of 5.<br>**Constraints**: `>= 5`, `<= 1000` | getMaxLatencyMs(): int | setMaxLatencyMs(int maxLatencyMs): void |
| `minAvailability` | `?int` | Optional | Minimum availability required for the server.<br>**Constraints**: `>= 1`, `<= 100` | getMinAvailability(): ?int | setMinAvailability(?int minAvailability): void |

## Example (as JSON)

```json
{
  "minBandwidthKbits": 1,
  "serviceContinuitySupport": true,
  "maxRequestRate": 15,
  "maxLatencyMs": 20,
  "minAvailability": 1
}
```

