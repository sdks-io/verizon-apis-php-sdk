
# KPI Info List

## Structure

`KPIInfoList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `kpiInfoList` | [`?(KPIInfo[])`](../../doc/models/kpi-info.md) | Optional | - | getKpiInfoList(): ?array | setKpiInfoList(?array kpiInfoList): void |

## Example (as JSON)

```json
{
  "KpiInfoList": [
    {
      "name": "DOWNLINK_THROUGHPUT",
      "value": "23.2",
      "nodeName": "132924_ENB_VZ_EULESS_OLTE_RD-01",
      "nodeType": "BASEBAND",
      "description": "Downlink throughput (4G)",
      "unit": "Mbps",
      "category": "Network Performance Radio",
      "timeOfLastUpdate": "2022-12-07T08:39:59.228Z"
    }
  ]
}
```

