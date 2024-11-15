
# Notification Report Status Request

## Structure

`NotificationReportStatusRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | The name of a billing account. | getAccountName(): string | setAccountName(string accountName): void |
| `device` | [`DeviceId`](../../doc/models/device-id.md) | Required | An identifier for a single device. | getDevice(): DeviceId | setDevice(DeviceId device): void |
| `requestType` | `string` | Required | The type of request. | getRequestType(): string | setRequestType(string requestType): void |
| `requestExpirationTime` | `?string` | Optional | The time at which the request expires. | getRequestExpirationTime(): ?string | setRequestExpirationTime(?string requestExpirationTime): void |

## Example (as JSON)

```json
{
  "accountName": "0868924207-00001",
  "device": {
    "kind": "imei",
    "id": "990013907835573"
  },
  "requestType": "requestType8",
  "requestExpirationTime": "requestExpirationTime6"
}
```

