
# Repository

Users can create a repository to maintain service artifacts. Repository would be either a Git or HELM repository.

## Structure

`Repository`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | System generated unique identifier to identify repository uniquely.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getId(): ?string | setId(?string id): void |
| `name` | `string` | Required | Name of the repository to be created.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getName(): string | setName(string name): void |
| `description` | `?string` | Optional | Description of the repository being created.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s\/]+$` | getDescription(): ?string | setDescription(?string description): void |
| `type` | [`?string(EdgeServiceRepositoryTypeEnum)`](../../doc/models/edge-service-repository-type-enum.md) | Optional | Type for the repository which can be Git or Helm.<br>**Constraints**: *Maximum Length*: `20` | getType(): ?string | setType(?string type): void |
| `tag` | `?string` | Optional | Attribute which can be used to tag a repository.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s\/]+$` | getTag(): ?string | setTag(?string tag): void |
| `endpoint` | `?string` | Optional | Endpoint URL for the repository from where resources needs to be fetched.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]!,+\-=_:.&*%\s\/]+$` | getEndpoint(): ?string | setEndpoint(?string endpoint): void |
| `reacheability` | [`?string(RepositoryReacheabilityEnum)`](../../doc/models/repository-reacheability-enum.md) | Optional | Reachability can be of two types, Internet and Private Network. | getReacheability(): ?string | setReacheability(?string reacheability): void |
| `cACertificate` | `?string` | Optional | Required if your repository uses a private certificate authencation.Please provide ur CA certificat in PEM format.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getCACertificate(): ?string | setCACertificate(?string cACertificate): void |
| `agents` | `?(string[])` | Optional | This attribute can be used to specify GITOps Agent to fetch details from private repository.<br>**Constraints**: *Maximum Items*: `10000`, *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getAgents(): ?array | setAgents(?array agents): void |
| `sslDisabled` | `?bool` | Optional | Boolean value to check the SSL certification. | getSslDisabled(): ?bool | setSslDisabled(?bool sslDisabled): void |
| `isValidated` | `?bool` | Optional | True if CSP is validated using provided credential, false otherwise. | getIsValidated(): ?bool | setIsValidated(?bool isValidated): void |
| `validationStatus` | `?string` | Optional | Status when the repository is validated eg: CREDENTIAL_VALIDATION_SUCCESS.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getValidationStatus(): ?string | setValidationStatus(?string validationStatus): void |
| `credentialsType` | [`?string(RepositoryCredentialTypeEnum)`](../../doc/models/repository-credential-type-enum.md) | Optional | Credentials can be of two types, UserPassCredentials and SSHCredentials. | getCredentialsType(): ?string | setCredentialsType(?string credentialsType): void |
| `credentials` | [`?RepositoryCredential`](../../doc/models/repository-credential.md) | Optional | Credentials of a repository. | getCredentials(): ?RepositoryCredential | setCredentials(?RepositoryCredential credentials): void |
| `sshKey` | `?string` | Optional | SSH Private Key in PEM format.<br>**Constraints**: *Maximum Length*: `10000`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]!,+\-=_:.&*%\s]+$` | getSshKey(): ?string | setSshKey(?string sshKey): void |
| `lastValidatedDate` | `?DateTime` | Optional | Time when the repository was validated. | getLastValidatedDate(): ?\DateTime | setLastValidatedDate(?\DateTime lastValidatedDate): void |
| `createdDate` | `?DateTime` | Optional | Date when the repository was created. | getCreatedDate(): ?\DateTime | setCreatedDate(?\DateTime createdDate): void |
| `lastModifiedDate` | `?DateTime` | Optional | Date when the repository was updated. | getLastModifiedDate(): ?\DateTime | setLastModifiedDate(?\DateTime lastModifiedDate): void |
| `createdBy` | `?string` | Optional | User information by whom the repository was created.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getCreatedBy(): ?string | setCreatedBy(?string createdBy): void |
| `updatedBy` | `?string` | Optional | User information by whom the repository was updated.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getUpdatedBy(): ?string | setUpdatedBy(?string updatedBy): void |
| `isDeleted` | `?bool` | Optional | When it will be soft deleted, status will be changed. | getIsDeleted(): ?bool | setIsDeleted(?bool isDeleted): void |

## Example (as JSON)

```json
{
  "id": "2e13f3a1-287f-4c63-9218-d026bf1bda32",
  "name": "myRepo",
  "description": "My organization repository.",
  "type": "Git",
  "tag": "myTag",
  "endpoint": "https://charts.bitnami.com/bitnami",
  "reacheability": "Internet",
  "CACertificate": "G2",
  "Agents": [
    "Verizon"
  ],
  "sslDisabled": false,
  "isValidated": true,
  "validationStatus": "CREDENTIAL_VALIDATION_SUCCESS",
  "credentialsType": "UserPassCredentials",
  "credentials": {
    "name": "Adam123",
    "password": "password"
  },
  "sshKey": "MIIBpjBABgkqhkiG9",
  "lastValidatedDate": "2006-01-02T15:04:05Z",
  "createdDate": "2006-01-02T15:04:05Z",
  "lastModifiedDate": "2006-01-02T15:04:05Z",
  "createdBy": "User",
  "updatedBy": "User",
  "isDeleted": false
}
```

