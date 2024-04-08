
# KPI Info

KPI Info Object

## Structure

`KPIInfo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `value` | `?string` | Optional | - | getValue(): ?string | setValue(?string value): void |
| `nodeName` | `?string` | Optional | - | getNodeName(): ?string | setNodeName(?string nodeName): void |
| `nodeType` | `?string` | Optional | - | getNodeType(): ?string | setNodeType(?string nodeType): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `unit` | `?string` | Optional | - | getUnit(): ?string | setUnit(?string unit): void |
| `category` | `?string` | Optional | - | getCategory(): ?string | setCategory(?string category): void |
| `timeOfLastUpdate` | `?string` | Optional | - | getTimeOfLastUpdate(): ?string | setTimeOfLastUpdate(?string timeOfLastUpdate): void |

## Example (as JSON)

```json
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
```

