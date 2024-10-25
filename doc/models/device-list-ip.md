
# Device List IP

## Structure

`DeviceListIP`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceIds` | [`PWNDeviceId[]`](../../doc/models/pwn-device-id.md) | Required | - | getDeviceIds(): array | setDeviceIds(array deviceIds): void |
| `ipaddress` | `string` | Required | - | getIpaddress(): string | setIpaddress(string ipaddress): void |

## Example (as JSON)

```json
{
  "deviceIds": [
    {
      "id": "99948099913024600000",
      "kind": "iccid"
    }
  ],
  "ipAddress": "10.3.4.5"
}
```

