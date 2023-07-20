
# Node Group Item

## Structure

`NodeGroupItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `modifiedAt` | `?string` | Optional | - | getModifiedAt(): ?string | setModifiedAt(?string modifiedAt): void |
| `organizationId` | `?string` | Optional | - | getOrganizationId(): ?string | setOrganizationId(?string organizationId): void |
| `partnerId` | `?string` | Optional | - | getPartnerId(): ?string | setPartnerId(?string partnerId): void |
| `instanceType` | `?string` | Optional | - | getInstanceType(): ?string | setInstanceType(?string instanceType): void |
| `edgeId` | `?string` | Optional | - | getEdgeId(): ?string | setEdgeId(?string edgeId): void |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `provisionId` | `?string` | Optional | - | getProvisionId(): ?string | setProvisionId(?string provisionId): void |
| `nodeType` | `?string` | Optional | - | getNodeType(): ?string | setNodeType(?string nodeType): void |
| `nodes` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getNodes(): ?int | setNodes(?int nodes): void |
| `nodesMin` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getNodesMin(): ?int | setNodesMin(?int nodesMin): void |
| `nodesMax` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getNodesMax(): ?int | setNodesMax(?int nodesMax): void |
| `nodeVolumeSize` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getNodeVolumeSize(): ?int | setNodeVolumeSize(?int nodeVolumeSize): void |
| `nodeVolumeType` | `?string` | Optional | - | getNodeVolumeType(): ?string | setNodeVolumeType(?string nodeVolumeType): void |
| `nodePrivateNetworking` | `?bool` | Optional | - | getNodePrivateNetworking(): ?bool | setNodePrivateNetworking(?bool nodePrivateNetworking): void |
| `nodeZones` | `?(string[])` | Optional | **Constraints**: *Maximum Items*: `100` | getNodeZones(): ?array | setNodeZones(?array nodeZones): void |
| `nodeAmiFamily` | `?string` | Optional | - | getNodeAmiFamily(): ?string | setNodeAmiFamily(?string nodeAmiFamily): void |
| `nodeLabels` | [`?NodeLabel`](../../doc/models/node-label.md) | Optional | - | getNodeLabels(): ?NodeLabel | setNodeLabels(?NodeLabel nodeLabels): void |
| `nodegroupType` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getNodegroupType(): ?int | setNodegroupType(?int nodegroupType): void |
| `enableAsgAccess` | `?bool` | Optional | - | getEnableAsgAccess(): ?bool | setEnableAsgAccess(?bool enableAsgAccess): void |
| `enableFullAccessToEcr` | `?bool` | Optional | - | getEnableFullAccessToEcr(): ?bool | setEnableFullAccessToEcr(?bool enableFullAccessToEcr): void |
| `versionInfoId` | `?string` | Optional | - | getVersionInfoId(): ?string | setVersionInfoId(?string versionInfoId): void |
| `upgradeInfoId` | `?string` | Optional | - | getUpgradeInfoId(): ?string | setUpgradeInfoId(?string upgradeInfoId): void |
| `tags` | [`?NodeGroupItemTag`](../../doc/models/node-group-item-tag.md) | Optional | - | getTags(): ?NodeGroupItemTag | setTags(?NodeGroupItemTag tags): void |
| `configFileContent` | `?string` | Optional | - | getConfigFileContent(): ?string | setConfigFileContent(?string configFileContent): void |
| `provision` | [`?Provision`](../../doc/models/provision.md) | Optional | - | getProvision(): ?Provision | setProvision(?Provision provision): void |
| `versionInfo` | [`?VersionInfo`](../../doc/models/version-info.md) | Optional | - | getVersionInfo(): ?VersionInfo | setVersionInfo(?VersionInfo versionInfo): void |
| `upgradeInfo` | [`?UpgradeInfo`](../../doc/models/upgrade-info.md) | Optional | - | getUpgradeInfo(): ?UpgradeInfo | setUpgradeInfo(?UpgradeInfo upgradeInfo): void |

## Example (as JSON)

```json
{
  "node_private_networking": true,
  "enable_asg_access": true,
  "enable_full_access_to_ecr": false,
  "name": "name0",
  "created_at": "created_at2",
  "modified_at": "modified_at6",
  "organization_id": "organization_id0",
  "partner_id": "partner_id2"
}
```

