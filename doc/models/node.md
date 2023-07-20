
# Node

## Structure

`Node`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `modifiedAt` | `?string` | Optional | - | getModifiedAt(): ?string | setModifiedAt(?string modifiedAt): void |
| `nodeId` | `?string` | Optional | - | getNodeId(): ?string | setNodeId(?string nodeId): void |
| `privateIp` | `?string` | Optional | - | getPrivateIp(): ?string | setPrivateIp(?string privateIp): void |
| `numCores` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getNumCores(): ?int | setNumCores(?int numCores): void |
| `totalMemory` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getTotalMemory(): ?int | setTotalMemory(?int totalMemory): void |
| `clusterId` | `?string` | Optional | - | getClusterId(): ?string | setClusterId(?string clusterId): void |
| `roles` | `?(string[])` | Optional | **Constraints**: *Maximum Items*: `100` | getRoles(): ?array | setRoles(?array roles): void |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `approved` | `?bool` | Optional | - | getApproved(): ?bool | setApproved(?bool approved): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "num_cores": 8,
  "total_memory": 512,
  "approved": true,
  "name": "name0",
  "created_at": "created_at2",
  "modified_at": "modified_at6",
  "node_id": "node_id2",
  "private_ip": "private_ip0"
}
```

