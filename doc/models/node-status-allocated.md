
# Node Status Allocated

## Structure

`NodeStatusAllocated`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cpuCount` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getCpuCount(): ?int | setCpuCount(?int cpuCount): void |
| `memoryKB` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getMemoryKB(): ?int | setMemoryKB(?int memoryKB): void |

## Example (as JSON)

```json
{
  "cpuCount": 140,
  "memoryKB": 242
}
```

