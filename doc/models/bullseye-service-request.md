
# Bullseye Service Request

Account number and list of devices.

## Structure

`BullseyeServiceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceList` | [`DeviceServiceRequest[]`](../../doc/models/device-service-request.md) | Required | A list of devices. | getDeviceList(): array | setDeviceList(array deviceList): void |
| `accountNumber` | `string` | Required | A unique identifier for an account. | getAccountNumber(): string | setAccountNumber(string accountNumber): void |

## Example (as JSON)

```json
{
  "deviceList": [
    {
      "imei": "354658090356210",
      "BullseyeEnable": true
    }
  ],
  "accountNumber": "0242080353-00001"
}
```

