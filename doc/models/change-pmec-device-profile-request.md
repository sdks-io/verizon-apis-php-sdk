
# Change Pmec Device Profile Request

## Structure

`ChangePmecDeviceProfileRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | - | getAccountName(): string | setAccountName(string accountName): void |
| `deviceList` | [`MECDeviceList[]`](../../doc/models/mec-device-list.md) | Required | - | getDeviceList(): array | setDeviceList(array deviceList): void |
| `newProfile` | `string` | Required | - | getNewProfile(): string | setNewProfile(string newProfile): void |

## Example (as JSON)

```json
{
  "accountName": "0342351414-00001",
  "deviceList": [
    {
      "deviceIds": [
        {
          "id": "99948099913024600000",
          "kind": "iccid"
        }
      ]
    }
  ],
  "newProfile": "HSS EsmProfile Enterprise 5G internet"
}
```

