
# Cluster Infra

## Structure

`ClusterInfra`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `modifiedAt` | `?string` | Optional | - | getModifiedAt(): ?string | setModifiedAt(?string modifiedAt): void |
| `organizationId` | `?string` | Optional | - | getOrganizationId(): ?string | setOrganizationId(?string organizationId): void |
| `partnerId` | `?string` | Optional | - | getPartnerId(): ?string | setPartnerId(?string partnerId): void |
| `country` | `?string` | Optional | - | getCountry(): ?string | setCountry(?string country): void |
| `city` | `?string` | Optional | - | getCity(): ?string | setCity(?string city): void |
| `latitude` | `?string` | Optional | - | getLatitude(): ?string | setLatitude(?string latitude): void |
| `longitude` | `?string` | Optional | - | getLongitude(): ?string | setLongitude(?string longitude): void |
| `clusterId` | `?string` | Optional | - | getClusterId(): ?string | setClusterId(?string clusterId): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `cert` | `?string` | Optional | - | getCert(): ?string | setCert(?string cert): void |
| `passphrase` | `?string` | Optional | - | getPassphrase(): ?string | setPassphrase(?string passphrase): void |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |
| `cname` | `?string` | Optional | - | getCname(): ?string | setCname(?string cname): void |
| `arecord` | `?string` | Optional | - | getArecord(): ?string | setArecord(?string arecord): void |
| `baseRatio` | `?float` | Optional | - | getBaseRatio(): ?float | setBaseRatio(?float baseRatio): void |
| `haEnabled` | `?bool` | Optional | - | getHaEnabled(): ?bool | setHaEnabled(?bool haEnabled): void |
| `displayName` | `?string` | Optional | - | getDisplayName(): ?string | setDisplayName(?string displayName): void |
| `upgradeStatus` | `?string` | Optional | - | getUpgradeStatus(): ?string | setUpgradeStatus(?string upgradeStatus): void |
| `providerId` | `?string` | Optional | - | getProviderId(): ?string | setProviderId(?string providerId): void |
| `autoCreate` | `?bool` | Optional | - | getAutoCreate(): ?bool | setAutoCreate(?bool autoCreate): void |
| `autoApproveNodes` | `?bool` | Optional | - | getAutoApproveNodes(): ?bool | setAutoApproveNodes(?bool autoApproveNodes): void |
| `provisionId` | `?string` | Optional | - | getProvisionId(): ?string | setProvisionId(?string provisionId): void |
| `isMonitorEnabled` | `?bool` | Optional | - | getIsMonitorEnabled(): ?bool | setIsMonitorEnabled(?bool isMonitorEnabled): void |
| `health` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getHealth(): ?int | setHealth(?int health): void |
| `healthStatusModifiedAt` | `?string` | Optional | - | getHealthStatusModifiedAt(): ?string | setHealthStatusModifiedAt(?string healthStatusModifiedAt): void |
| `manufacturer` | `?string` | Optional | - | getManufacturer(): ?string | setManufacturer(?string manufacturer): void |
| `clusterType` | `?string` | Optional | - | getClusterType(): ?string | setClusterType(?string clusterType): void |
| `clusterBlueprint` | `?string` | Optional | - | getClusterBlueprint(): ?string | setClusterBlueprint(?string clusterBlueprint): void |
| `gimageUsed` | `?string` | Optional | - | getGimageUsed(): ?string | setGimageUsed(?string gimageUsed): void |
| `reason` | `?string` | Optional | - | getReason(): ?string | setReason(?string reason): void |
| `isMasterDedicated` | `?bool` | Optional | - | getIsMasterDedicated(): ?bool | setIsMasterDedicated(?bool isMasterDedicated): void |
| `projectId` | `?string` | Optional | - | getProjectId(): ?string | setProjectId(?string projectId): void |
| `provisionOs` | `?string` | Optional | - | getProvisionOs(): ?string | setProvisionOs(?string provisionOs): void |
| `defaultStorageClass` | `?string` | Optional | - | getDefaultStorageClass(): ?string | setDefaultStorageClass(?string defaultStorageClass): void |
| `storageClassMap` | [`?StorageClassMap`](../../doc/models/storage-class-map.md) | Optional | - | getStorageClassMap(): ?StorageClassMap | setStorageClassMap(?StorageClassMap storageClassMap): void |
| `cniProvider` | `?string` | Optional | - | getCniProvider(): ?string | setCniProvider(?string cniProvider): void |
| `provisionK8s` | `?string` | Optional | - | getProvisionK8s(): ?string | setProvisionK8s(?string provisionK8s): void |
| `etcdVersion` | `?string` | Optional | - | getEtcdVersion(): ?string | setEtcdVersion(?string etcdVersion): void |
| `consulVersion` | `?string` | Optional | - | getConsulVersion(): ?string | setConsulVersion(?string consulVersion): void |
| `clusterBlueprintVersion` | `?string` | Optional | - | getClusterBlueprintVersion(): ?string | setClusterBlueprintVersion(?string clusterBlueprintVersion): void |
| `upgradeProtection` | `?bool` | Optional | - | getUpgradeProtection(): ?bool | setUpgradeProtection(?bool upgradeProtection): void |
| `provision` | [`?ClusterInfraProvision`](../../doc/models/cluster-infra-provision.md) | Optional | - | getProvision(): ?ClusterInfraProvision | setProvision(?ClusterInfraProvision provision): void |
| `metro` | [`?Metro`](../../doc/models/metro.md) | Optional | - | getMetro(): ?Metro | setMetro(?Metro metro): void |
| `nodes` | [`?(Node[])`](../../doc/models/node.md) | Optional | **Constraints**: *Maximum Items*: `100` | getNodes(): ?array | setNodes(?array nodes): void |
| `clusterProviderParams` | [`?ClusterProviderParams`](../../doc/models/cluster-provider-params.md) | Optional | - | getClusterProviderParams(): ?ClusterProviderParams | setClusterProviderParams(?ClusterProviderParams clusterProviderParams): void |
| `nodegroups` | [`?(NodeGroupItem[])`](../../doc/models/node-group-item.md) | Optional | **Constraints**: *Maximum Items*: `100` | getNodegroups(): ?array | setNodegroups(?array nodegroups): void |
| `clusterVersionInfo` | [`?ClusterVersionInfo`](../../doc/models/cluster-version-info.md) | Optional | - | getClusterVersionInfo(): ?ClusterVersionInfo | setClusterVersionInfo(?ClusterVersionInfo clusterVersionInfo): void |
| `projects` | [`?(ProjectItem[])`](../../doc/models/project-item.md) | Optional | **Constraints**: *Maximum Items*: `100` | getProjects(): ?array | setProjects(?array projects): void |
| `cluster` | [`?Cluster`](../../doc/models/cluster.md) | Optional | - | getCluster(): ?Cluster | setCluster(?Cluster cluster): void |

## Example (as JSON)

```json
{
  "ha_enabled": true,
  "auto_create": true,
  "auto_approve_nodes": true,
  "is_monitor_enabled": true,
  "is_master_dedicated": false,
  "upgrade_protection": true,
  "name": "name0",
  "created_at": "created_at2",
  "modified_at": "modified_at6",
  "organization_id": "organization_id0",
  "partner_id": "partner_id2"
}
```

