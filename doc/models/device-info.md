
# Device Info

## Structure

`DeviceInfo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | [`?DeviceId`](../../doc/models/device-id.md) | Optional | device identifiers consisting of an ID value and what that value represents (kind) | getDeviceId(): ?DeviceId | setDeviceId(?DeviceId deviceId): void |
| `deviceIPv6Addr` | `?string` | Optional | the IPv6 IP address of the device | getDeviceIPv6Addr(): ?string | setDeviceIPv6Addr(?string deviceIPv6Addr): void |
| `flowInfo` | [`?(FlowInfo[])`](../../doc/models/flow-info.md) | Optional | The details of the data connection | getFlowInfo(): ?array | setFlowInfo(?array flowInfo): void |

## Example (as JSON)

```json
{
  "deviceIPv6Addr": "IPv6 address",
  "deviceId": {
    "id": "id0",
    "kind": "kind8"
  },
  "flowInfo": [
    {
      "flowServer": "flowServer4",
      "flowDevice": "flowDevice2",
      "flowDirection": "flowDirection6",
      "flowProtocol": "flowProtocol4",
      "qciOption": "qciOption0"
    },
    {
      "flowServer": "flowServer4",
      "flowDevice": "flowDevice2",
      "flowDirection": "flowDirection6",
      "flowProtocol": "flowProtocol4",
      "qciOption": "qciOption0"
    }
  ]
}
```

