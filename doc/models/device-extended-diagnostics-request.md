
# Device Extended Diagnostics Request

Request for obtaining device extended diagnostics.

## Structure

`DeviceExtendedDiagnosticsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | The Verizon billing account that the device belongs to. An account name is usually numeric, and must include any leading zeros. | getAccountName(): string | setAccountName(string accountName): void |
| `deviceList` | [`DeviceId[]`](../../doc/models/device-id.md) | Required | The device for which you want diagnostic information, specified by the device's MDN. | getDeviceList(): array | setDeviceList(array deviceList): void |

## Example (as JSON)

```json
{
  "accountName": "1223334444-00001",
  "deviceList": [
    {
      "id": "10-digit MDN",
      "kind": "mdn"
    }
  ]
}
```

