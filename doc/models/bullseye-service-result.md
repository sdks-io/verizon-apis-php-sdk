
# Bullseye Service Result

Status of Hyper Precise Location on the device.

## Structure

`BullseyeServiceResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountNumber` | `?string` | Optional | The account the device belongs to. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `deviceList` | [`?(DeviceServiceInformation[])`](../../doc/models/device-service-information.md) | Optional | List of devices. | getDeviceList(): ?array | setDeviceList(?array deviceList): void |
| `responseType` | [`?ApiResponseCode`](../../doc/models/api-response-code.md) | Optional | ResponseCode and/or a message indicating success or failure of the request. | getResponseType(): ?ApiResponseCode | setResponseType(?ApiResponseCode responseType): void |

## Example (as JSON)

```json
{
  "accountNumber": "0844021539-00001",
  "deviceList": [
    {
      "imei": "709312034493372",
      "BullseyeEnable": true,
      "responseType": {
        "responseCode": "INTERNAL_ERROR",
        "message": "message8"
      }
    }
  ],
  "responseType": {
    "responseCode": "INTERNAL_ERROR",
    "message": "message8"
  }
}
```

