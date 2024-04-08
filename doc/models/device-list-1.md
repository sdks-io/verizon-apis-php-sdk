
# Device List 1

## Structure

`DeviceList1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceIds` | [`MECDeviceId[]`](../../doc/models/mec-device-id.md) | Required | - | getDeviceIds(): array | setDeviceIds(array deviceIds): void |
| `ipAddress` | `string` | Required | - | getIpAddress(): string | setIpAddress(string ipAddress): void |
| `apn` | `string` | Required | - | getApn(): string | setApn(string apn): void |

## Example (as JSON)

```json
{
  "deviceIds": [
    {
      "id": "99948099913031600000",
      "kind": "iccid"
    }
  ],
  "ipAddress": "10.3.4.9",
  "apn": "1"
}
```

