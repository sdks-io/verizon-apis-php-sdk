
# Firmware Upgrade Request

Details of the firmware upgrade request.

## Structure

`FirmwareUpgradeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | Account identifier in "##########-#####". | getAccountName(): string | setAccountName(string accountName): void |
| `firmwareName` | `string` | Required | The name of the firmware image that will be used for the upgrade, from a GET /firmware response. | getFirmwareName(): string | setFirmwareName(string firmwareName): void |
| `firmwareTo` | `string` | Required | The name of the firmware version that will be on the devices after a successful upgrade. | getFirmwareTo(): string | setFirmwareTo(string firmwareTo): void |
| `startDate` | `DateTime` | Required | The date that the upgrade should begin. | getStartDate(): \DateTime | setStartDate(\DateTime startDate): void |
| `deviceList` | `string[]` | Required | The IMEIs of the devices. | getDeviceList(): array | setDeviceList(array deviceList): void |

## Example (as JSON)

```json
{
  "accountName": "0402196254-00001",
  "firmwareName": "FOTA_Verizon_Model-A_01To02_HF",
  "firmwareTo": "VerizonFirmwareVersion-02",
  "startDate": "2018-04-01T16:03:00.000Z",
  "deviceList": [
    "990003425730535",
    "990000473475989"
  ]
}
```

