
# Service Resource

Resource of the service.

## Structure

`ServiceResource`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `computeResources` | [`?ResourceBase`](../../doc/models/resource-base.md) | Optional | Resource Base of the service. | getComputeResources(): ?ResourceBase | setComputeResources(?ResourceBase computeResources): void |
| `gpuRequired` | `?bool` | Optional | GPU required or not for onboarding service.<br>**Default**: `false` | getGpuRequired(): ?bool | setGpuRequired(?bool gpuRequired): void |
| `gpu` | [`?ResourceBase`](../../doc/models/resource-base.md) | Optional | Resource Base of the service. | getGpu(): ?ResourceBase | setGpu(?ResourceBase gpu): void |
| `storage` | [`?ResourceBase`](../../doc/models/resource-base.md) | Optional | Resource Base of the service. | getStorage(): ?ResourceBase | setStorage(?ResourceBase storage): void |
| `memory` | [`?ResourceBase`](../../doc/models/resource-base.md) | Optional | Resource Base of the service. | getMemory(): ?ResourceBase | setMemory(?ResourceBase memory): void |
| `latency` | [`?ResourceBase`](../../doc/models/resource-base.md) | Optional | Resource Base of the service. | getLatency(): ?ResourceBase | setLatency(?ResourceBase latency): void |
| `requestRate` | [`?ResourceBase`](../../doc/models/resource-base.md) | Optional | Resource Base of the service. | getRequestRate(): ?ResourceBase | setRequestRate(?ResourceBase requestRate): void |
| `bandwidth` | [`?ResourceBase`](../../doc/models/resource-base.md) | Optional | Resource Base of the service. | getBandwidth(): ?ResourceBase | setBandwidth(?ResourceBase bandwidth): void |

## Example (as JSON)

```json
{
  "storage": {
    "unit": "MB",
    "value": 512,
    "max": 1024,
    "min": 256
  },
  "memory": {
    "unit": "MB",
    "value": 200,
    "max": 400,
    "min": 10
  },
  "computeResources": {
    "unit": "unit6",
    "value": 34,
    "max": 64,
    "min": 146
  },
  "gpuRequired": false,
  "gpu": {
    "unit": "unit0",
    "value": 44,
    "max": 74,
    "min": 156
  }
}
```

