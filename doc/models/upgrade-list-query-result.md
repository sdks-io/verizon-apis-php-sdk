
# Upgrade List Query Result

Upgrade information.

## Structure

`UpgradeListQueryResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `hasMoreFlag` | `?bool` | Optional | True if there are more devices to retrieve. | getHasMoreFlag(): ?bool | setHasMoreFlag(?bool hasMoreFlag): void |
| `lastSeenUpgradeId` | `?int` | Optional | If hasMoreData=true, the startIndex to use for the next request. 0 if hasMoreData=false. | getLastSeenUpgradeId(): ?int | setLastSeenUpgradeId(?int lastSeenUpgradeId): void |
| `reportList` | [`?(FirmwareUpgrade[])`](../../doc/models/firmware-upgrade.md) | Optional | Array of upgrade objects with the specified status. | getReportList(): ?array | setReportList(?array reportList): void |

## Example (as JSON)

```json
{
  "hasMoreFlag": false,
  "reportList": [
    {
      "id": "3ac8c863-bde7-4f41-878e-dd5473e973bb",
      "accountName": "0242078689-00001",
      "firmwareName": "FOTA_Verizon_Model-A_01To02_HF",
      "firmwareTo": "VerizonFirmwareVersion-02",
      "startDate": "2018-04-01",
      "status": "Queued",
      "deviceList": [
        {
          "deviceId": "900000000000002",
          "status": "Device Accepted",
          "resultReason": "success"
        },
        {
          "deviceId": "900000000000003",
          "status": "Device Accepted",
          "resultReason": "success"
        }
      ]
    },
    {
      "id": "efb8206b-2e88-4fdb-886d-31d8e87cd95f",
      "accountName": "0242078689-00001",
      "firmwareName": "FOTA_Verizon_Model-A_01To02_HF",
      "firmwareTo": "VerizonFirmwareVersion-02",
      "startDate": "2018-04-01T16:03:00.000Z",
      "status": "Queued",
      "deviceList": [
        {
          "deviceId": "900000000000008",
          "status": "Device Accepted",
          "resultReason": "success"
        }
      ]
    }
  ],
  "lastSeenUpgradeId": 120
}
```

