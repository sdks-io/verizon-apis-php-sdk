
# Device List Query Result

List of devices.

## Structure

`DeviceListQueryResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | Account identifier in "##########-#####". | getAccountName(): ?string | setAccountName(?string accountName): void |
| `hasMoreData` | `?bool` | Optional | True if there are more devices to retrieve. | getHasMoreData(): ?bool | setHasMoreData(?bool hasMoreData): void |
| `lastSeenDeviceId` | `?int` | Optional | If hasMoreData=true, the startIndex to use for the next request. 0 if hasMoreData=false. | getLastSeenDeviceId(): ?int | setLastSeenDeviceId(?int lastSeenDeviceId): void |
| `deviceList` | [`?(DeviceListQueryItem[])`](../../doc/models/device-list-query-item.md) | Optional | The list of devices in the account. | getDeviceList(): ?array | setDeviceList(?array deviceList): void |

## Example (as JSON)

```json
{
  "accountName": "0242078698-00001",
  "hasMoreData": true,
  "lastSeenDeviceId": 900000000001000,
  "deviceList": [
    {
      "deviceId": "900000000000001",
      "mdn": "0000040881",
      "model": "Model-A",
      "make": "Verizon",
      "firmware": "VerizonFirmwareVersion-01",
      "fotaEligible": true,
      "licenseAssigned": true,
      "upgradeTime": "2018-03-03T16:03:33.000Z"
    },
    {
      "deviceId": "900000000000999",
      "mdn": "0000041879",
      "model": "Model-A",
      "make": "Verizon",
      "firmware": "VerizonFirmwareVersion-01",
      "fotaEligible": true,
      "licenseAssigned": true,
      "upgradeTime": "2018-03-03T16:03:33.000Z"
    },
    {
      "deviceId": "900000000001000",
      "mdn": "0000041880",
      "model": "Model-A",
      "make": "Verizon",
      "firmware": "VerizonFirmwareVersion-01",
      "fotaEligible": true,
      "licenseAssigned": true,
      "upgradeTime": "2018-03-03T16:03:33.000Z"
    }
  ]
}
```

