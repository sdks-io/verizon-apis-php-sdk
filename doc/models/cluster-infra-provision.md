
# Cluster Infra Provision

## Structure

`ClusterInfraProvision`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `clusterId` | `?string` | Optional | - | getClusterId(): ?string | setClusterId(?string clusterId): void |
| `provisionId` | `?string` | Optional | - | getProvisionId(): ?string | setProvisionId(?string provisionId): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `modifiedAt` | `?string` | Optional | - | getModifiedAt(): ?string | setModifiedAt(?string modifiedAt): void |
| `organizationId` | `?string` | Optional | - | getOrganizationId(): ?string | setOrganizationId(?string organizationId): void |
| `partnerId` | `?string` | Optional | - | getPartnerId(): ?string | setPartnerId(?string partnerId): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `runningState` | `?string` | Optional | - | getRunningState(): ?string | setRunningState(?string runningState): void |
| `runningStatus` | `?string` | Optional | - | getRunningStatus(): ?string | setRunningStatus(?string runningStatus): void |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `totalSteps` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getTotalSteps(): ?int | setTotalSteps(?int totalSteps): void |

## Example (as JSON)

```json
{
  "cluster_id": "cluster_id4",
  "provision_id": "provision_id8",
  "created_at": "created_at2",
  "modified_at": "modified_at6",
  "organization_id": "organization_id0"
}
```

