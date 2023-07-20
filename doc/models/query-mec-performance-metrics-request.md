
# Query MEC Performance Metrics Request

MEC performance metrics request.

## Structure

`QueryMECPerformanceMetricsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `iMEI` | `string` | Required | The 15-digit International Mobile Equipment Identifier. | getIMEI(): string | setIMEI(string iMEI): void |
| `mSISDN` | `string` | Required | The 12-digit Mobile Station International Subscriber Directory Number. | getMSISDN(): string | setMSISDN(string mSISDN): void |

## Example (as JSON)

```json
{
  "IMEI": "440246108109673",
  "MSISDN": "10691876598"
}
```

