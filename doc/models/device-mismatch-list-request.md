
# Device Mismatch List Request

Request to list of all 4G devices with an ICCID (SIM) that was not activated with the expected IMEI (hardware) during a specified time frame.

## Structure

`DeviceMismatchListRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filter` | [`DateFilter`](../../doc/models/date-filter.md) | Required | Filter out the dates. | getFilter(): DateFilter | setFilter(DateFilter filter): void |
| `devices` | [`?(AccountDeviceList[])`](../../doc/models/account-device-list.md) | Optional | A list of specific devices that you want to check, specified by ICCID or MDN. | getDevices(): ?array | setDevices(?array devices): void |
| `accountName` | `?string` | Optional | The account that you want to search for mismatched devices. If you don't specify an accountName, the search includes all devices to which you have access. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `groupName` | `?string` | Optional | The name of a device group, to only include devices in that group. | getGroupName(): ?string | setGroupName(?string groupName): void |

## Example (as JSON)

```json
{
  "accountName": "0342077109-00001",
  "devices": [
    {
      "deviceIds": [
        {
          "kind": "ICCID",
          "id": "8914800000080078"
        },
        {
          "kind": "MDN",
          "id": "5096300587"
        }
      ],
      "ipAddress": "ipAddress4"
    }
  ],
  "filter": {
    "earliest": "2020-05-01T15:00:00-08:00Z",
    "latest": "2020-07-30T15:00:00-08:00Z"
  },
  "groupName": "groupName8"
}
```

