
# Daily Usage Response

## Structure

`DailyUsageResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `hasMoreData` | `?bool` | Optional | A flag set to indicate if there is more than one page of data returned by the query (true) or if only one page of data returned (false) | getHasMoreData(): ?bool | setHasMoreData(?bool hasMoreData): void |
| `deviceId` | [`?GIODeviceId`](../../doc/models/gio-device-id.md) | Optional | - | getDeviceId(): ?GIODeviceId | setDeviceId(?GIODeviceId deviceId): void |
| `usageHistory` | [`?(DailyUsageHistory[])`](../../doc/models/daily-usage-history.md) | Optional | - | getUsageHistory(): ?array | setUsageHistory(?array usageHistory): void |

## Example (as JSON)

```json
{
  "hasMoreData": false,
  "deviceId": {
    "kind": "kind8",
    "id": "id0"
  },
  "usageHistory": [
    {
      "bytesUsed": "bytesUsed2",
      "extendedAttributes": [
        {
          "key": "key8",
          "value": "value0"
        },
        {
          "key": "key8",
          "value": "value0"
        },
        {
          "key": "key8",
          "value": "value0"
        }
      ],
      "servicePlan": "servicePlan0",
      "smsUsed": "smsUsed6",
      "source": "source4"
    },
    {
      "bytesUsed": "bytesUsed2",
      "extendedAttributes": [
        {
          "key": "key8",
          "value": "value0"
        },
        {
          "key": "key8",
          "value": "value0"
        },
        {
          "key": "key8",
          "value": "value0"
        }
      ],
      "servicePlan": "servicePlan0",
      "smsUsed": "smsUsed6",
      "source": "source4"
    }
  ]
}
```

