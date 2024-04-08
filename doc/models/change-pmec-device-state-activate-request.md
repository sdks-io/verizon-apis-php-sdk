
# Change Pmec Device State Activate Request

## Structure

`ChangePmecDeviceStateActivateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | - | getAccountName(): string | setAccountName(string accountName): void |
| `deviceList` | [`MECDeviceList[]`](../../doc/models/mec-device-list.md) | Required | - | getDeviceList(): array | setDeviceList(array deviceList): void |
| `activate` | [`Activate`](../../doc/models/activate.md) | Required | - | getActivate(): Activate | setActivate(Activate activate): void |

## Example (as JSON)

```json
{
  "accountName": "0342351414-00001",
  "deviceList": [
    {
      "deviceIds": [
        {
          "id": "99948099913024600001",
          "kind": "iccid"
        }
      ]
    }
  ],
  "activate": {
    "profile": "HSS EsmProfile Enterprise 5G"
  }
}
```

