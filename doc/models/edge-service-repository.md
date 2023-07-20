
# Edge Service Repository

## Structure

`EdgeServiceRepository`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getName(): string | setName(string name): void |
| `description` | `?string` | Optional | **Constraints**: *Maximum Length*: `250`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-\s]{1,250}$` | getDescription(): ?string | setDescription(?string description): void |
| `revision` | [`?Revision`](../../doc/models/revision.md) | Optional | - | getRevision(): ?Revision | setRevision(?Revision revision): void |
| `vendorInformation` | [`?VendorInformation`](../../doc/models/vendor-information.md) | Optional | - | getVendorInformation(): ?VendorInformation | setVendorInformation(?VendorInformation vendorInformation): void |
| `type` | [`string(RepositoryResTypeEnum)`](../../doc/models/repository-res-type-enum.md) | Required | **Constraints**: *Maximum Length*: `20` | getType(): string | setType(string type): void |
| `tag` | `?string` | Optional | **Constraints**: *Maximum Length*: `50` | getTag(): ?string | setTag(?string tag): void |
| `endpoint` | `string` | Required | **Constraints**: *Maximum Length*: `50`, *Pattern*: `([a-z0-9-]+\:\/+)([^\/\s]+)([a-z0-9\-@\^=%&;\/~\+]*)[\?]?([^ \#\r\n]*)#?([^ \#\r\n]*)` | getEndpoint(): string | setEndpoint(string endpoint): void |
| `reacheability` | [`string(ReacheabilityEnum)`](../../doc/models/reacheability-enum.md) | Required | - | getReacheability(): string | setReacheability(string reacheability): void |
| `cACertificate` | `?string` | Optional | Required if your repository uses a private certificate authencation.Please provide ur CA certificat in PEM format. | getCACertificate(): ?string | setCACertificate(?string cACertificate): void |
| `agents` | `?(string[])` | Optional | **Constraints**: *Maximum Items*: `100` | getAgents(): ?array | setAgents(?array agents): void |
| `sslDisabled` | `?bool` | Optional | - | getSslDisabled(): ?bool | setSslDisabled(?bool sslDisabled): void |
| `credentialsType` | [`?string(CredentialsTypeEnum)`](../../doc/models/credentials-type-enum.md) | Optional | - | getCredentialsType(): ?string | setCredentialsType(?string credentialsType): void |
| `credentials` | [`?Credential`](../../doc/models/credential.md) | Optional | - | getCredentials(): ?Credential | setCredentials(?Credential credentials): void |
| `sshKey` | `?string` | Optional | SSH Private Key in PEM format. | getSshKey(): ?string | setSshKey(?string sshKey): void |

## Example (as JSON)

```json
{
  "endpoint": "https://charts.bitnami.com/bitnami",
  "name": "example-repo",
  "reacheability": "Internet",
  "type": "Git",
  "description": "description0",
  "revision": {
    "version": "version2",
    "additionalParams": [
      {
        "key": "key3",
        "value": "value5"
      },
      {
        "key": "key4",
        "value": "value6"
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
}
```

