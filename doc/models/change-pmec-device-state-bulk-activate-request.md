
# Change Pmec Device State Bulk Activate Request

## Structure

`ChangePmecDeviceStateBulkActivateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | - | getAccountName(): string | setAccountName(string accountName): void |
| `deviceList` | [`DeviceList1[]`](../../doc/models/device-list-1.md) | Required | - | getDeviceList(): array | setDeviceList(array deviceList): void |
| `activate` | [`Activate`](../../doc/models/activate.md) | Required | - | getActivate(): Activate | setActivate(Activate activate): void |

## Example (as JSON)

```json
{
  "accountName": "0342351414-00001",
  "deviceList": [
    {
      "deviceIds": [
        {
          "id": "99948099913031600000",
          "kind": "iccid"
        }
      ],
      "ipAddress": "10.3.4.9",
      "apn": "1"
    },
    {
      "deviceIds": [
        {
          "id": "99948099913031700000",
          "kind": "iccid"
        }
      ],
      "ipAddress": "10.4.5.2",
      "apn": "2"
    }
  ],
  "activate": {
    "profile": "HSS EsmProfile Enterprise 5G internet"
  }
}
```

