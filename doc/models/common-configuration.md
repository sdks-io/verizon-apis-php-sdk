
# Common Configuration

## Structure

`CommonConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cloudCredentials` | [`?CloudCredential`](../../doc/models/cloud-credential.md) | Optional | - | getCloudCredentials(): ?CloudCredential | setCloudCredentials(?CloudCredential cloudCredentials): void |
| `k8sVersion` | [`?string(K8sVersionEnum)`](../../doc/models/k8-s-version-enum.md) | Optional | Version of K8s platform.<br>**Default**: `K8sVersionEnum::ENUM_118` | getK8sVersion(): ?string | setK8sVersion(?string k8sVersion): void |
| `blueprint` | [`?Blueprint`](../../doc/models/blueprint.md) | Optional | - | getBlueprint(): ?Blueprint | setBlueprint(?Blueprint blueprint): void |

## Example (as JSON)

```json
{
  "blueprint": {
    "name": "default",
    "version": "latest"
  },
  "cloudCredentials": {
    "clusterProvisioning": {
      "provider": "AWS",
      "accessKey": {
        "accessId": "accessId4",
        "secretKey": "secretKey4",
        "sessionToken": "sessionToken6"
      },
      "role": {
        "accountId": "accountId2",
        "externalId": "externalId6",
        "roleARN": "roleARN0"
      }
    },
    "name": "acme-aws-qa-mdp-5",
    "dataBackup": {
      "provider": "AWS",
      "accessKey": {
        "accessId": "accessId8",
        "secretKey": "secretKey8",
        "sessionToken": "sessionToken0"
      },
      "role": {
        "accountId": "accountId4",
        "externalId": "externalId0",
        "roleARN": "roleARN6"
      }
    }
  },
  "k8sVersion": "1.21"
}
```

