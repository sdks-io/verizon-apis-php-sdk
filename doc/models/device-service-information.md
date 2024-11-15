
# Device Service Information

Device service information.

## Structure

`DeviceServiceInformation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `responseType` | [`?ApiResponseCode`](../../doc/models/api-response-code.md) | Optional | ResponseCode and/or a message indicating success or failure of the request. | getResponseType(): ?ApiResponseCode | setResponseType(?ApiResponseCode responseType): void |
| `imei` | `string` | Required | The International Mobile Equipment Identifier of the device. | getImei(): string | setImei(string imei): void |
| `bullseyeEnable` | `bool` | Required | Shows if Hyper Precise is enabled (true) or disabled (false). | getBullseyeEnable(): bool | setBullseyeEnable(bool bullseyeEnable): void |

## Example (as JSON)

```json
{
  "imei": "709312034493372",
  "BullseyeEnable": true,
  "responseType": {
    "responseCode": "INTERNAL_ERROR",
    "message": "message8"
  }
}
```

