
# V1 List of Licenses to Remove

List of cancellation candidate devices.

## Structure

`V1ListOfLicensesToRemove`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `count` | `?int` | Optional | The total number of devices on the list. | getCount(): ?int | setCount(?int count): void |
| `hasMoreData` | `?bool` | Optional | True if there are more devices to retrieve. | getHasMoreData(): ?bool | setHasMoreData(?bool hasMoreData): void |
| `updateTime` | `?DateTime` | Optional | The date and time that the list was last updated. | getUpdateTime(): ?\DateTime | setUpdateTime(?\DateTime updateTime): void |
| `deviceList` | `?(string[])` | Optional | The IMEIs of the devices. | getDeviceList(): ?array | setDeviceList(?array deviceList): void |

## Example (as JSON)

```json
{
  "count": 6,
  "hasMoreData": false,
  "updateTime": "2018-03-22T12:06:06.000Z",
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

