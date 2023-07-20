
# Cloud

## Structure

`Cloud`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `provider` | [`?string(CloudProviderEnum)`](../../doc/models/cloud-provider-enum.md) | Optional | Cloud provider where you plan to provision and operate your Kubernetes cluster. | getProvider(): ?string | setProvider(?string provider): void |
| `distribution` | [`?string(CloudDestributionEnum)`](../../doc/models/cloud-destribution-enum.md) | Optional | Supported Kubernetes distribution for the selected cloud provider. | getDistribution(): ?string | setDistribution(?string distribution): void |
| `commonConfig` | [`?CommonConfiguration`](../../doc/models/common-configuration.md) | Optional | - | getCommonConfig(): ?CommonConfiguration | setCommonConfig(?CommonConfiguration commonConfig): void |
| `clusterConfig` | [`?ClusterConfiguration`](../../doc/models/cluster-configuration.md) | Optional | - | getClusterConfig(): ?ClusterConfiguration | setClusterConfig(?ClusterConfiguration clusterConfig): void |
| `nodeConfig` | [`?NodeConfiguration`](../../doc/models/node-configuration.md) | Optional | - | getNodeConfig(): ?NodeConfiguration | setNodeConfig(?NodeConfiguration nodeConfig): void |
| `nodeConfigs` | [`?(NodeConfiguration[])`](../../doc/models/node-configuration.md) | Optional | **Constraints**: *Maximum Items*: `100` | getNodeConfigs(): ?array | setNodeConfigs(?array nodeConfigs): void |
| `advanceConfig` | [`?AdvanceConfiguration`](../../doc/models/advance-configuration.md) | Optional | - | getAdvanceConfig(): ?AdvanceConfiguration | setAdvanceConfig(?AdvanceConfiguration advanceConfig): void |

## Example (as JSON)

```json
{
  "clusterConfig": {
    "autoCreateNetworkInfra": true,
    "networkNatMode": "single",
    "tags": {
      "key": "key6",
      "value": "value8"
    },
    "endPointAccessType": "publicAccess",
    "infraIPv4range": "infraIPv4range6"
  },
  "commonConfig": {
    "blueprint": {
      "name": "default",
      "version": "latest"
    },
    "cloudCredentials": {
      "clusterProvisioning": {
        "provider": "AWS",
        "accessKey": {
          "accessId": "accessId6",
          "secretKey": "secretKey6",
          "sessionToken": "sessionToken8"
        },
        "role": {
          "accountId": "accountId6",
          "externalId": "externalId8",
          "roleARN": "roleARN8"
        }
      },
      "name": "acme-aws-qa-mdp-5",
      "dataBackup": {
        "provider": "AWS",
        "accessKey": {
          "accessId": "accessId0",
          "secretKey": "secretKey0",
          "sessionToken": "sessionToken2"
        },
        "role": {
          "accountId": "accountId2",
          "externalId": "externalId2",
          "roleARN": "roleARN4"
        }
      }
    },
    "k8sVersion": "1.21"
  },
  "distribution": "AmazonEKS",
  "nodeConfigs": [
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
    },
    {
      "autoCreateServiceRoles": true,
      "enableAlbAccess": true,
      "enableAppMeshAccess": true,
      "enableAsgAccess": true,
      "enableDnsAccess": true,
      "enableEfsAccess": true,
      "enableFullAccessToEcr": true,
      "endPointAccessType": "private",
      "instanceType": "t3.xlarge",
      "isManagedNodeGroup": false,
      "isSpotInstanceNeeded": false,
      "isWavelengthZone": true,
      "labels": {},
      "name": "ng-wavelength-test22",
      "nodeAmiFamily": "AmazonLinux2",
      "nodePrivateNetworking": false,
      "nodeVolumeSize": 80,
      "nodeVolumeType": "gp2",
      "nodes": 2,
      "nodesMax": 2,
      "nodesMin": 2,
      "subnetCidrBlock": "192.168.192.0/19",
      "tags": {},
      "useVolumeEncryption": true
    }
  ],
  "provider": "AZURE",
  "nodeConfig": {
    "name": "name4",
    "isWavelengthZone": false,
    "isManagedNodeGroup": false,
    "isSpotInstanceNeeded": false,
    "endPointAccessType": "private_and_public"
  }
}
```

