
# V2 List of Licenses to Remove Result

List of created license cancellation devices.

## Structure

`V2ListOfLicensesToRemoveResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `count` | `int` | Required | The number of devices. | getCount(): int | setCount(int count): void |
| `deviceList` | `string[]` | Required | Device IMEI list. | getDeviceList(): array | setDeviceList(array deviceList): void |

## Example (as JSON)

```json
{
  "count": 2,
  "deviceList": [
    "990003425730535",
    "990000473475989"
  ]
}
```

