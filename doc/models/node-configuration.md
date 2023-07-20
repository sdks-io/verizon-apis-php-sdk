
# Node Configuration

## Structure

`NodeConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | Name of the nodeGroup. | getName(): ?string | setName(?string name): void |
| `isWavelengthZone` | `?bool` | Optional | **Default**: `false` | getIsWavelengthZone(): ?bool | setIsWavelengthZone(?bool isWavelengthZone): void |
| `isManagedNodeGroup` | `?bool` | Optional | **Default**: `false` | getIsManagedNodeGroup(): ?bool | setIsManagedNodeGroup(?bool isManagedNodeGroup): void |
| `isSpotInstanceNeeded` | `?bool` | Optional | **Default**: `false` | getIsSpotInstanceNeeded(): ?bool | setIsSpotInstanceNeeded(?bool isSpotInstanceNeeded): void |
| `endPointAccessType` | [`?string(EndPointAccessTypeEnum)`](../../doc/models/end-point-access-type-enum.md) | Optional | **Default**: `EndPointAccessTypeEnum::PRIVATE_` | getEndPointAccessType(): ?string | setEndPointAccessType(?string endPointAccessType): void |
| `instanceType` | `?string` | Optional | **Default**: `'m5.xlarge'` | getInstanceType(): ?string | setInstanceType(?string instanceType): void |
| `nodes` | `?int` | Optional | **Default**: `2`<br>**Constraints**: `>= 0`, `<= 1024` | getNodes(): ?int | setNodes(?int nodes): void |
| `nodesMin` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getNodesMin(): ?int | setNodesMin(?int nodesMin): void |
| `nodesMax` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getNodesMax(): ?int | setNodesMax(?int nodesMax): void |
| `nodeVolumeType` | `?string` | Optional | - | getNodeVolumeType(): ?string | setNodeVolumeType(?string nodeVolumeType): void |
| `subnetCidrBlock` | `?string` | Optional | - | getSubnetCidrBlock(): ?string | setSubnetCidrBlock(?string subnetCidrBlock): void |
| `nodeAmiFamily` | `?string` | Optional | **Default**: `'AmazonLinux2'` | getNodeAmiFamily(): ?string | setNodeAmiFamily(?string nodeAmiFamily): void |
| `nodeVolumeSize` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getNodeVolumeSize(): ?int | setNodeVolumeSize(?int nodeVolumeSize): void |
| `keyName` | `?string` | Optional | - | getKeyName(): ?string | setKeyName(?string keyName): void |
| `maxPodPerNode` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getMaxPodPerNode(): ?int | setMaxPodPerNode(?int maxPodPerNode): void |
| `useVolumeEncryption` | `?bool` | Optional | **Default**: `true` | getUseVolumeEncryption(): ?bool | setUseVolumeEncryption(?bool useVolumeEncryption): void |
| `nodePrivateNetworking` | `?bool` | Optional | **Default**: `false` | getNodePrivateNetworking(): ?bool | setNodePrivateNetworking(?bool nodePrivateNetworking): void |
| `instanceProfileArn` | `?string` | Optional | - | getInstanceProfileArn(): ?string | setInstanceProfileArn(?string instanceProfileArn): void |
| `instanceRoleArn` | `?string` | Optional | - | getInstanceRoleArn(): ?string | setInstanceRoleArn(?string instanceRoleArn): void |
| `instanceRolePermissionBoundary` | `?string` | Optional | - | getInstanceRolePermissionBoundary(): ?string | setInstanceRolePermissionBoundary(?string instanceRolePermissionBoundary): void |
| `securityGroupIds` | [`?(IdList[])`](../../doc/models/id-list.md) | Optional | **Constraints**: *Maximum Items*: `100` | getSecurityGroupIds(): ?array | setSecurityGroupIds(?array securityGroupIds): void |
| `availabilityZoneIds` | [`?(IdList[])`](../../doc/models/id-list.md) | Optional | **Constraints**: *Maximum Items*: `100` | getAvailabilityZoneIds(): ?array | setAvailabilityZoneIds(?array availabilityZoneIds): void |
| `labels` | [`?NodeConfigurationLabel`](../../doc/models/node-configuration-label.md) | Optional | - | getLabels(): ?NodeConfigurationLabel | setLabels(?NodeConfigurationLabel labels): void |
| `tags` | [`?NodeConfigurationTag`](../../doc/models/node-configuration-tag.md) | Optional | - | getTags(): ?NodeConfigurationTag | setTags(?NodeConfigurationTag tags): void |
| `autoCreateServiceRoles` | `?bool` | Optional | **Default**: `true` | getAutoCreateServiceRoles(): ?bool | setAutoCreateServiceRoles(?bool autoCreateServiceRoles): void |
| `enableFullAccessToEcr` | `?bool` | Optional | - | getEnableFullAccessToEcr(): ?bool | setEnableFullAccessToEcr(?bool enableFullAccessToEcr): void |
| `enableAsgAccess` | `?bool` | Optional | - | getEnableAsgAccess(): ?bool | setEnableAsgAccess(?bool enableAsgAccess): void |
| `enableDnsAccess` | `?bool` | Optional | - | getEnableDnsAccess(): ?bool | setEnableDnsAccess(?bool enableDnsAccess): void |
| `enableAppMeshAccess` | `?bool` | Optional | - | getEnableAppMeshAccess(): ?bool | setEnableAppMeshAccess(?bool enableAppMeshAccess): void |
| `enableAlbAccess` | `?bool` | Optional | - | getEnableAlbAccess(): ?bool | setEnableAlbAccess(?bool enableAlbAccess): void |
| `enableEfsAccess` | `?bool` | Optional | - | getEnableEfsAccess(): ?bool | setEnableEfsAccess(?bool enableEfsAccess): void |

## Example (as JSON)

```json
{
  "autoCreateServiceRoles": true,
  "enableAlbAccess": true,
  "enableAppMeshAccess": true,
  "enableAsgAccess": true,
  "enableDnsAccess": true,
  "enableEfsAccess": true,
  "enableFullAccessToEcr": true,
  "endPointAccessType": "private",
  "instanceType": "m5.xlarge",
  "isManagedNodeGroup": false,
  "isSpotInstanceNeeded": false,
  "isWavelengthZone": false,
  "labels": {},
  "name": "ng-22",
  "nodeAmiFamily": "AmazonLinux2",
  "nodePrivateNetworking": false,
  "nodeVolumeSize": 80,
  "nodeVolumeType": "gp3",
  "nodes": 2,
  "nodesMax": 2,
  "nodesMin": 2,
  "tags": {},
  "useVolumeEncryption": true
}
```

