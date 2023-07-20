
# Node Status Allocatable

## Structure

`NodeStatusAllocatable`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cpuCount` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getCpuCount(): ?int | setCpuCount(?int cpuCount): void |
| `ephemeralStorageKB` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getEphemeralStorageKB(): ?int | setEphemeralStorageKB(?int ephemeralStorageKB): void |
| `memoryKB` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getMemoryKB(): ?int | setMemoryKB(?int memoryKB): void |

## Example (as JSON)

```json
{
  "cpuCount": 140,
  "ephemeralStorageKB": 28,
  "memoryKB": 242
}
```

