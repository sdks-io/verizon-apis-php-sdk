
# Location Request

The body contains the the account name and list of devices that you want to locate, plus other options.

## Structure

`LocationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | Account identifier in "##########-#####". | getAccountName(): string | setAccountName(string accountName): void |
| `deviceList` | [`DeviceInfo[]`](../../doc/models/device-info.md) | Required | Device list. | getDeviceList(): array | setDeviceList(array deviceList): void |
| `accuracyMode` | [`?string(AccuracyModeEnum)`](../../doc/models/accuracy-mode-enum.md) | Optional | Accurary, currently only 0-coarse supported. | getAccuracyMode(): ?string | setAccuracyMode(?string accuracyMode): void |
| `cacheMode` | [`?string(CacheModeEnum)`](../../doc/models/cache-mode-enum.md) | Optional | Location cache mode. | getCacheMode(): ?string | setCacheMode(?string cacheMode): void |

## Example (as JSON)

```json
{
  "accountName": "1234567890-00001",
  "accuracyMode": "0",
  "cacheMode": "1",
  "deviceList": [
    {
      "id": "980003420535573",
      "kind": "imei",
      "mdn": "7892345678"
    },
    {
      "id": "375535024300089",
      "kind": "imei",
      "mdn": "7897654321"
    },
    {
      "id": "A100003861E585",
      "kind": "meid",
      "mdn": "7897650914"
    }
  ]
}
```

