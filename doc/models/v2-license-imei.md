
# V2 License IMEI

IMEIs of the devices to assign or remove licenses.

## Structure

`V2LicenseIMEI`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | Account name. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `deviceList` | `string[]` | Required | Device IMEI list. | getDeviceList(): array | setDeviceList(array deviceList): void |

## Example (as JSON)

```json
{
  "deviceList": [
    "990003425730524",
    "990000473475967"
  ],
  "accountName": "accountName8"
}
```

