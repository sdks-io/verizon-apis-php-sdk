
# Device Usage List Request

Request to return the daily network data usage of a single device during a specified time period.

## Structure

`DeviceUsageListRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | [`?DeviceId`](../../doc/models/device-id.md) | Optional | An identifier for a single device. | getDeviceId(): ?DeviceId | setDeviceId(?DeviceId deviceId): void |
| `earliest` | `?string` | Optional | The earliest date for which you want usage data. | getEarliest(): ?string | setEarliest(?string earliest): void |
| `latest` | `?string` | Optional | The last date for which you want usage data. | getLatest(): ?string | setLatest(?string latest): void |

## Example (as JSON)

```json
{
  "earliest": "2018-03-20T00:00:01Z",
  "latest": "2020-12-31T00:00:01Z",
  "deviceId": {
    "id": "id0",
    "kind": "kind8"
  }
}
```

