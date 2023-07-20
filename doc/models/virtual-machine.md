
# Virtual Machine

## Structure

`VirtualMachine`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `repository` | [`EdgeServiceRepository`](../../doc/models/edge-service-repository.md) | Required | - | getRepository(): EdgeServiceRepository | setRepository(EdgeServiceRepository repository): void |
| `revision` | [`?Revision`](../../doc/models/revision.md) | Optional | - | getRevision(): ?Revision | setRevision(?Revision revision): void |
| `templateType` | [`string(TemplateTypeEnum)`](../../doc/models/template-type-enum.md) | Required | Type of the template to be used for deployment.<br>**Default**: `TemplateTypeEnum::TERRAFORM` | getTemplateType(): string | setTemplateType(string templateType): void |
| `values` | [`?EdgeServiceRepository`](../../doc/models/edge-service-repository.md) | Optional | - | getValues(): ?EdgeServiceRepository | setValues(?EdgeServiceRepository values): void |
| `provider` | [`?string(CloudProviderEnum)`](../../doc/models/cloud-provider-enum.md) | Optional | Cloud provider where you plan to provision and operate your Kubernetes cluster. | getProvider(): ?string | setProvider(?string provider): void |

## Example (as JSON)

```json
{
  "repository": {
    "endpoint": "https://charts.bitnami.com/bitnami",
    "name": "example-repo",
    "reacheability": "Internet",
    "type": "Git",
    "description": "description0",
    "revision": {
      "version": "version6",
      "additionalParams": [
        {
          "key": "key7",
          "value": "value9"
        },
        {
          "key": "key8",
          "value": "value0"
        }
      ]
    },
    "vendorInformation": {
      "id": "id0",
      "name": "name0",
      "primaryEmail": "primaryEmail8",
      "secondaryEmail": "secondaryEmail6",
      "contactNumber": "contactNumber4"
    },
    "tag": "tag6",
    "CACertificate": "CACertificate8"
  },
  "revision": {
    "additionalParams": [],
    "version": "2.3.4"
  },
  "templateType": "Terraform",
  "values": {
    "endpoint": "https://charts.bitnami.com/bitnami",
    "name": "example-repo",
    "reacheability": "Internet",
    "type": "Git",
    "description": "description0",
    "revision": {
      "version": "version4",
      "additionalParams": [
        {
          "key": "key3",
          "value": "value5"
        },
        {
          "key": "key2",
          "value": "value4"
        },
        {
          "key": "key1",
          "value": "value3"
        }
      ]
    },
    "vendorInformation": {
      "id": "id0",
      "name": "name0",
      "primaryEmail": "primaryEmail8",
      "secondaryEmail": "secondaryEmail4",
      "contactNumber": "contactNumber4"
    },
    "tag": "tag4",
    "CACertificate": "CACertificate8"
  },
  "provider": "AWS"
}
```

