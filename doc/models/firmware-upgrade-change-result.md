
# Firmware Upgrade Change Result

Upgrade information.

## Structure

`FirmwareUpgradeChangeResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | Account identifier in "##########-#####". | getAccountName(): ?string | setAccountName(?string accountName): void |
| `id` | `?string` | Optional | The unique identifier for this upgrade. | getId(): ?string | setId(?string id): void |
| `deviceList` | [`?(V1DeviceListItem[])`](../../doc/models/v1-device-list-item.md) | Optional | A JSON object for each device that was included in the request, showing the device IMEI, the status of the addition or removal, and additional information about the status. | getDeviceList(): ?array | setDeviceList(?array deviceList): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "id": "60b5d639-ccdc-4db8-8824-069bd94c95bf",
  "deviceList": [
    {
      "deviceId": "15-digit IMEI",
      "status": "AddDeviceSucceed",
      "Reason": "Device added Successfully"
    },
    {
      "deviceId": "15-digit IMEI",
      "status": "AddDeviceSucceed",
      "Reason": "Device added Successfully"
    }
  ]
}
```

