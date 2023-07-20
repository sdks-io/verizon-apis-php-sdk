
# Node Status

## Structure

`NodeStatus`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `state` | `?string` | Optional | - | getState(): ?string | setState(?string state): void |
| `conditions` | [`?(StatusConditionItem[])`](../../doc/models/status-condition-item.md) | Optional | **Constraints**: *Maximum Items*: `100` | getConditions(): ?array | setConditions(?array conditions): void |
| `nodeInfo` | [`?NodeStatusInfo`](../../doc/models/node-status-info.md) | Optional | - | getNodeInfo(): ?NodeStatusInfo | setNodeInfo(?NodeStatusInfo nodeInfo): void |
| `capacity` | [`?NodeStatusCapacity`](../../doc/models/node-status-capacity.md) | Optional | - | getCapacity(): ?NodeStatusCapacity | setCapacity(?NodeStatusCapacity capacity): void |
| `allocatable` | [`?NodeStatusAllocatable`](../../doc/models/node-status-allocatable.md) | Optional | - | getAllocatable(): ?NodeStatusAllocatable | setAllocatable(?NodeStatusAllocatable allocatable): void |
| `allocated` | [`?NodeStatusAllocated`](../../doc/models/node-status-allocated.md) | Optional | - | getAllocated(): ?NodeStatusAllocated | setAllocated(?NodeStatusAllocated allocated): void |
| `ips` | [`?(IP[])`](../../doc/models/ip.md) | Optional | **Constraints**: *Maximum Items*: `100` | getIps(): ?array | setIps(?array ips): void |

## Example (as JSON)

```json
{
  "state": "state4",
  "conditions": [
    {
      "type": "type9",
      "status": "status7",
      "lastHeartbeatTime": "2016-03-13T12:52:32.123Z",
      "lastTransitionTime": "2016-03-13T12:52:32.123Z",
      "reason": "reason3"
    },
    {
      "type": "type8",
      "status": "status6",
      "lastHeartbeatTime": "2016-03-13T12:52:32.123Z",
      "lastTransitionTime": "2016-03-13T12:52:32.123Z",
      "reason": "reason2"
    },
    {
      "type": "type7",
      "status": "status5",
      "lastHeartbeatTime": "2016-03-13T12:52:32.123Z",
      "lastTransitionTime": "2016-03-13T12:52:32.123Z",
      "reason": "reason1"
    }
  ],
  "nodeInfo": {
    "machineID": "machineID0",
    "systemUUID": "systemUUID0",
    "bootID": "bootID8",
    "kernelVersion": "kernelVersion2",
    "osImage": "osImage0"
  },
  "capacity": {
    "cpuCount": 150,
    "ephemeralStorageKB": 18,
    "memoryKB": 252
  },
  "allocatable": {
    "cpuCount": 126,
    "ephemeralStorageKB": 42,
    "memoryKB": 228
  }
}
```

