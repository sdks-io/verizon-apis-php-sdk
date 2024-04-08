
# Profile Change State Request

## Structure

`ProfileChangeStateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `devices` | [`DeviceList[]`](../../doc/models/device-list.md) | Required | - | getDevices(): array | setDevices(array devices): void |
| `accountName` | `string` | Required | - | getAccountName(): string | setAccountName(string accountName): void |
| `smsrOid` | `string` | Required | - | getSmsrOid(): string | setSmsrOid(string smsrOid): void |

## Example (as JSON)

```json
{
  "devices": [
    {
      "deviceIds": [
        {
          "id": "id0",
          "kind": "kind8"
        }
      ]
    }
  ],
  "accountName": "1223334444-00001",
  "smsrOid": "1.3.6.1.4.1.31746.1.500.200.101.5"
}
```

