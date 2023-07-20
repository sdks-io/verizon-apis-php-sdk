
# Metadata

## Structure

`Metadata`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `displayName` | `?string` | Optional | - | getDisplayName(): ?string | setDisplayName(?string displayName): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `modifiedAt` | `?string` | Optional | - | getModifiedAt(): ?string | setModifiedAt(?string modifiedAt): void |
| `labels` | [`?MetadataLabel`](../../doc/models/metadata-label.md) | Optional | - | getLabels(): ?MetadataLabel | setLabels(?MetadataLabel labels): void |
| `annotations` | [`?MetadataAnnotation`](../../doc/models/metadata-annotation.md) | Optional | - | getAnnotations(): ?MetadataAnnotation | setAnnotations(?MetadataAnnotation annotations): void |
| `organizationID` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getOrganizationID(): ?int | setOrganizationID(?int organizationID): void |
| `partnerID` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getPartnerID(): ?int | setPartnerID(?int partnerID): void |
| `projectID` | `?int` | Optional | **Constraints**: `>= 0`, `<= 1024` | getProjectID(): ?int | setProjectID(?int projectID): void |
| `id` | `?string` | Optional | - | getId(): ?string | setId(?string id): void |

## Example (as JSON)

```json
{
  "name": "name0",
  "displayName": "displayName2",
  "createdAt": "createdAt6",
  "modifiedAt": "modifiedAt6",
  "labels": {
    "alpha.rafay.io/cluster-name": "alpha.rafay.io/cluster-name4",
    "alpha.rafay.io/instance-id": "alpha.rafay.io/instance-id6",
    "alpha.rafay.io/nodegroup-name": "alpha.rafay.io/nodegroup-name2",
    "beta.kubernetes.io/arch": "beta.kubernetes.io/arch6",
    "beta.kubernetes.io/instance-type": "beta.kubernetes.io/instance-type6"
  }
}
```

