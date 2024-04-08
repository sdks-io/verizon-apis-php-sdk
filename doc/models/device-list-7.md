
# Device List 7

## Structure

`DeviceList7`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceIds` | [`MECDeviceId[]`](../../doc/models/mec-device-id.md) | Required | - | getDeviceIds(): array | setDeviceIds(array deviceIds): void |
| `ipAddress` | `string` | Required | - | getIpAddress(): string | setIpAddress(string ipAddress): void |

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

