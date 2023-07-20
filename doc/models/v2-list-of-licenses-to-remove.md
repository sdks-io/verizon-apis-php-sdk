
# V2 List of Licenses to Remove

A list of license cancellation candidate devices.

## Structure

`V2ListOfLicensesToRemove`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `count` | `int` | Required | Cancellation candidate devices count. | getCount(): int | setCount(int count): void |
| `hasMoreData` | `bool` | Required | Flag to indicat more devices. | getHasMoreData(): bool | setHasMoreData(bool hasMoreData): void |
| `updateTime` | `string` | Required | Last update time. | getUpdateTime(): string | setUpdateTime(string updateTime): void |
| `deviceList` | `string[]` | Required | Device IMEI list. | getDeviceList(): array | setDeviceList(array deviceList): void |

## Example (as JSON)

```json
{
  "count": 6,
  "hasMoreData": false,
  "updateTime": "2018-03-22 00:06:00.069 +0000 UTC",
  "deviceList": [
    "990003425730535",
    "990000473475989",
    "990005733420535",
    "990000347475989",
    "990007303425535",
    "990007590473489"
  ]
}
```

