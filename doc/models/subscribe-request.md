
# Subscribe Request

## Structure

`SubscribeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | The numeric name of an account | getAccountName(): ?string | setAccountName(?string accountName): void |
| `deviceInfo` | [`?(DeviceInfo[])`](../../doc/models/device-info.md) | Optional | An array of device identifiers (deviceId values) | getDeviceInfo(): ?array | setDeviceInfo(?array deviceInfo): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "deviceInfo": [
    {
      "deviceId": {
        "id": "id0",
        "kind": "kind8"
      },
      "deviceIPv6Addr": "deviceIPv6Addr4",
      "flowInfo": [
        {
          "flowServer": "flowServer4",
          "flowDevice": "flowDevice2",
          "flowDirection": "flowDirection6",
          "flowProtocol": "flowProtocol4",
          "qciOption": "qciOption0"
        }
      ]
    },
    {
      "deviceId": {
        "id": "id0",
        "kind": "kind8"
      },
      "deviceIPv6Addr": "deviceIPv6Addr4",
      "flowInfo": [
        {
          "flowServer": "flowServer4",
          "flowDevice": "flowDevice2",
          "flowDirection": "flowDirection6",
          "flowProtocol": "flowProtocol4",
          "qciOption": "qciOption0"
        }
      ]
    }
  ]
}
```

