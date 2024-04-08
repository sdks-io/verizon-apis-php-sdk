
# Device Upload Request

## Structure

`DeviceUploadRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | - | getAccountName(): string | setAccountName(string accountName): void |
| `devices` | [`DeviceList[]`](../../doc/models/device-list.md) | Required | - | getDevices(): array | setDevices(array devices): void |
| `emailAddress` | `string` | Required | - | getEmailAddress(): string | setEmailAddress(string emailAddress): void |
| `deviceSku` | `string` | Required | - | getDeviceSku(): string | setDeviceSku(string deviceSku): void |
| `uploadType` | `string` | Required | - | getUploadType(): string | setUploadType(string uploadType): void |

## Example (as JSON)

```json
{
  "accountName": "1223334444-00001",
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
  "emailAddress": "bob@mycompany.com",
  "deviceSku": "VZW123456",
  "uploadType": "IMEI"
}
```

