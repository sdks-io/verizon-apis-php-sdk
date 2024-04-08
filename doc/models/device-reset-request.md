
# Device Reset Request

Request body to Performs a device reboot.

## Structure

`DeviceResetRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | The name of the account. An account name is usually numeric, and must include any leading zeros. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `action` | `?string` | Optional | The action you want to take on the device. | getAction(): ?string | setAction(?string action): void |
| `devices` | [`?(Device[])`](../../doc/models/device.md) | Optional | The devices for which you want to perform a factory reset or reboot. | getDevices(): ?array | setDevices(?array devices): void |

## Example (as JSON)

```json
{
  "accountName": "0642233522-00003",
  "action": "reboot",
  "devices": [
    {
      "id": "id4",
      "kind": "kind2"
    },
    {
      "id": "id4",
      "kind": "kind2"
    }
  ]
}
```

