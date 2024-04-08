
# Retrieve Monitors Request

## Structure

`RetrieveMonitorsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | The name of a billing account. | getAccountName(): string | setAccountName(string accountName): void |
| `devices` | [`AccountDeviceList[]`](../../doc/models/account-device-list.md) | Required | The devices for which you want to restore service, specified by device identifier. | getDevices(): array | setDevices(array devices): void |
| `monitorType` | `?string` | Optional | The name of a billing account. | getMonitorType(): ?string | setMonitorType(?string monitorType): void |

## Example (as JSON)

```json
{
  "accountName": "0868924207-00001",
  "devices": [
    {
      "deviceIds": [
        {
          "id": "89148000000800139708",
          "kind": "iccid"
        }
      ],
      "ipAddress": "ipAddress4"
    }
  ],
  "monitorType": "monitorType"
}
```

