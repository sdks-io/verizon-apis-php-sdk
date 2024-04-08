
# Consent Delete Request

## Structure

`ConsentDeleteRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | Account identifier. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `deviceList` | `?(string[])` | Optional | Device ID list. | getDeviceList(): ?array | setDeviceList(?array deviceList): void |

## Example (as JSON)

```json
{
  "accountName": "MyAccount-1",
  "deviceList": [
    "deviceList2",
    "deviceList3"
  ]
}
```

