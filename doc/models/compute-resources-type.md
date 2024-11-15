
# Compute Resources Type

Compute resources of a service profile.

## Structure

`ComputeResourcesType`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `gPU` | [`?GPU`](../../doc/models/gpu.md) | Optional | GPU resources of a service profile. | getGPU(): ?GPU | setGPU(?GPU gPU): void |
| `minRAMGB` | `?int` | Optional | Minimum RAM required in Gigabytes.<br>**Constraints**: `>= 1`, `<= 100` | getMinRAMGB(): ?int | setMinRAMGB(?int minRAMGB): void |
| `minStorageGB` | `?int` | Optional | Minimum storage requirement in Gigabytes.<br>**Constraints**: `>= 1`, `<= 100` | getMinStorageGB(): ?int | setMinStorageGB(?int minStorageGB): void |

## Example (as JSON)

```json
{
  "minRAMGB": 1,
  "minStorageGB": 1,
  "GPU": {
    "minCoreClockMHz": 76,
    "minMemoryClockMHz": 20,
    "minBandwidthGBs": 96,
    "minTFLOPS": 100
  }
}
```

