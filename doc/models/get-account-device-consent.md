
# Get Account Device Consent

## Structure

`GetAccountDeviceConsent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceList` | `?(array[])` | Optional | An array of device identifiers | getDeviceList(): ?array | setDeviceList(?array deviceList): void |
| `accountName` | `?string` | Optional | The numeric name of the account, including leading zeros. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `allDeviceConsent` | `?int` | Optional | If consent is set at the account level, this value will show the consent level. | getAllDeviceConsent(): ?int | setAllDeviceConsent(?int allDeviceConsent): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "allDeviceConsent": 1,
  "deviceList": [
    {
      "key1": "val1",
      "key2": "val2"
    }
  ]
}
```

