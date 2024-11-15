
# Flow Info

## Structure

`FlowInfo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `flowServer` | `?string` | Optional | The IPv6 IP address and port used to connect to the server | getFlowServer(): ?string | setFlowServer(?string flowServer): void |
| `flowDevice` | `?string` | Optional | The IPv6 IP address and port used by the device | getFlowDevice(): ?string | setFlowDevice(?string flowDevice): void |
| `flowDirection` | `?string` | Optional | The direction the data is flowing. UPLINK if from the device, DOWNLINK is to the device | getFlowDirection(): ?string | setFlowDirection(?string flowDirection): void |
| `flowProtocol` | `?string` | Optional | The data protocol used for the connection | getFlowProtocol(): ?string | setFlowProtocol(?string flowProtocol): void |
| `qciOption` | `?string` | Optional | The QoS level of the connection. This will be Standard or Premium | getQciOption(): ?string | setQciOption(?string qciOption): void |

## Example (as JSON)

```json
{
  "flowServer": "[IPv6 address]:port",
  "flowDevice": "[IPv6 address]:port",
  "flowDirection": "UPLINK",
  "flowProtocol": "UDP",
  "qciOption": "Premium"
}
```

