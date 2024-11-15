
# Search Device Event History Response List

A success response includes an array of all matching events.

## Structure

`SearchDeviceEventHistoryResponseList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `searchDeviceEventHistory` | [`?(SearchDeviceResponse[])`](../../doc/models/search-device-response.md) | Optional | **Constraints**: *Maximum Items*: `100` | getSearchDeviceEventHistory(): ?array | setSearchDeviceEventHistory(?array searchDeviceEventHistory): void |

## Example (as JSON)

```json
{
  "SearchDeviceEventHistory": [
    {
      "action": "action4",
      "createdon": "createdon4",
      "deviceid": "deviceid8",
      "fields": {
        "temperature": "temperature0"
      },
      "id": "id8"
    }
  ]
}
```

