
# Change Pmec Device State Bulk Deactivate Request

## Structure

`ChangePmecDeviceStateBulkDeactivateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | - | getAccountName(): string | setAccountName(string accountName): void |
| `deviceList` | [`MECDeviceList[]`](../../doc/models/mec-device-list.md) | Required | - | getDeviceList(): array | setDeviceList(array deviceList): void |

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
      ]
    },
    {
      "deviceIds": [
        {
          "id": "99948099913031700000",
          "kind": "iccid"
        }
      ]
    }
  ]
}
```

