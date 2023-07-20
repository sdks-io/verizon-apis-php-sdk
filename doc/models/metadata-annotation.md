
# Metadata Annotation

## Structure

`MetadataAnnotation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `nodeAlphaKubernetesIoTtl` | `?string` | Optional | - | getNodeAlphaKubernetesIoTtl(): ?string | setNodeAlphaKubernetesIoTtl(?string nodeAlphaKubernetesIoTtl): void |
| `rafayDevObjectHash` | `?string` | Optional | - | getRafayDevObjectHash(): ?string | setRafayDevObjectHash(?string rafayDevObjectHash): void |
| `volumesKubernetesIoControllerManagedAttachDetach` | `?string` | Optional | - | getVolumesKubernetesIoControllerManagedAttachDetach(): ?string | setVolumesKubernetesIoControllerManagedAttachDetach(?string volumesKubernetesIoControllerManagedAttachDetach): void |

## Example (as JSON)

```json
{
  "node.alpha.kubernetes.io/ttl": "node.alpha.kubernetes.io/ttl8",
  "rafay.dev/object-hash": "rafay.dev/object-hash2",
  "volumes.kubernetes.io/controller-managed-attach-detach": "volumes.kubernetes.io/controller-managed-attach-detach0"
}
```

