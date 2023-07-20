
# V2 Change Campaign Dates Request

New dates and time windows.

## Structure

`V2ChangeCampaignDatesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startDate` | `DateTime` | Required | Campaign start date. | getStartDate(): \DateTime | setStartDate(\DateTime startDate): void |
| `endDate` | `DateTime` | Required | Campaign end date. | getEndDate(): \DateTime | setEndDate(\DateTime endDate): void |
| `downloadAfterDate` | `?DateTime` | Optional | Specifies starting date client should download package. If null, client will download as soon as possible. | getDownloadAfterDate(): ?\DateTime | setDownloadAfterDate(?\DateTime downloadAfterDate): void |
| `downloadTimeWindowList` | [`?(V2TimeWindow[])`](../../doc/models/v2-time-window.md) | Optional | List of allowed download time windows. Removing of existing windows is not allowed. | getDownloadTimeWindowList(): ?array | setDownloadTimeWindowList(?array downloadTimeWindowList): void |
| `installAfterDate` | `?DateTime` | Optional | Client will install package after date. If null, client will install as soon as possible. | getInstallAfterDate(): ?\DateTime | setInstallAfterDate(?\DateTime installAfterDate): void |
| `installTimeWindowList` | [`?(V2TimeWindow[])`](../../doc/models/v2-time-window.md) | Optional | List of allowed install time windows. Removing of existing windows is not allowed. | getInstallTimeWindowList(): ?array | setInstallTimeWindowList(?array installTimeWindowList): void |

## Example (as JSON)

```json
{
  "startDate": "2020-08-21",
  "endDate": "2020-08-22",
  "downloadAfterDate": "2020-08-21",
  "downloadTimeWindowList": [
    {
      "startTime": 3,
      "endTime": 4
    }
  ],
  "installAfterDate": "2020-08-21",
  "installTimeWindowList": [
    {
      "startTime": 5,
      "endTime": 6
    }
  ]
}
```

