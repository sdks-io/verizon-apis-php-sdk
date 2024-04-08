
# Qos Device Info

## Structure

`QosDeviceInfo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | [`QosDeviceId`](../../doc/models/qos-device-id.md) | Required | - | getDeviceId(): QosDeviceId | setDeviceId(QosDeviceId deviceId): void |
| `deviceIPv6Addr` | `?string` | Optional | - | getDeviceIPv6Addr(): ?string | setDeviceIPv6Addr(?string deviceIPv6Addr): void |
| `flowInfo` | [`FlowInfo[]`](../../doc/models/flow-info.md) | Required | - | getFlowInfo(): array | setFlowInfo(array flowInfo): void |

## Example (as JSON)

```json
{
  "deviceId": {
    "id": "10-digit phone number",
    "kind": "mdn"
  },
  "deviceIPv6Addr": "IPv6 address",
  "flowInfo": [
    {
      "flowServer": "[IPv6 address]:port",
      "flowDevice": "[IPv6 address]:port",
      "flowDirection": "UPLINK",
      "flowProtocol": "UDP",
      "qciOption": "Premium"
    }
  ]
}
```

