
# Data Center

## Structure

`DataCenter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `packageType` | [`?string(DataCenterPackageTypeEnum)`](../../doc/models/data-center-package-type-enum.md) | Optional | Packages are optimized for various operating environments. Prepackaged images are available in OVA and QCOW formats. | getPackageType(): ?string | setPackageType(?string packageType): void |
| `distribution` | [`?string(DataCenterDistributionEnum)`](../../doc/models/data-center-distribution-enum.md) | Optional | Supported Kubernetes distribution for the selected cloud provider. | getDistribution(): ?string | setDistribution(?string distribution): void |
| `location` | `?string` | Optional | Indicate geo-location of cluster if you wish to use location based policies. | getLocation(): ?string | setLocation(?string location): void |
| `k8sVersion` | [`?string(K8sVersionEnum)`](../../doc/models/k8-s-version-enum.md) | Optional | Version of K8s platform.<br>**Default**: `K8sVersionEnum::ENUM_118` | getK8sVersion(): ?string | setK8sVersion(?string k8sVersion): void |
| `operatingSystem` | `?string` | Optional | Operating System for the master and worker nodes. | getOperatingSystem(): ?string | setOperatingSystem(?string operatingSystem): void |
| `tags` | [`?(EdgeServiceLaunchParams[])`](../../doc/models/edge-service-launch-params.md) | Optional | **Constraints**: *Maximum Items*: `100` | getTags(): ?array | setTags(?array tags): void |

## Example (as JSON)

```json
{
  "packageType": "Linux",
  "distribution": "Upstream Kubernetes",
  "k8sVersion": "1.18",
  "tags": [
    {
      "key": "key",
      "value": "value"
    }
  ],
  "location": "location4",
  "operatingSystem": "operatingSystem4"
}
```

