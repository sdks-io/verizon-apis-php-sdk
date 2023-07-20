
# Cluster Version Info

## Structure

`ClusterVersionInfo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `clusterId` | `?string` | Optional | - | getClusterId(): ?string | setClusterId(?string clusterId): void |
| `kubeVersion` | `?string` | Optional | - | getKubeVersion(): ?string | setKubeVersion(?string kubeVersion): void |
| `organizationId` | `?string` | Optional | - | getOrganizationId(): ?string | setOrganizationId(?string organizationId): void |
| `partnerId` | `?string` | Optional | - | getPartnerId(): ?string | setPartnerId(?string partnerId): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `modifiedAt` | `?string` | Optional | - | getModifiedAt(): ?string | setModifiedAt(?string modifiedAt): void |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `behindLatestBy` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getBehindLatestBy(): ?int | setBehindLatestBy(?int behindLatestBy): void |

## Example (as JSON)

```json
{
  "cluster_id": "cluster_id4",
  "kube_version": "kube_version4",
  "organization_id": "organization_id0",
  "partner_id": "partner_id2",
  "created_at": "created_at2"
}
```

