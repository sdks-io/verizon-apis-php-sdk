
# CSP Profile

The user can create cloud credentials used for deploying workloads to the CSP environment.

## Structure

`CSPProfile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | System generated unique identifier to identify the CSP Profile uniquely.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getId(): ?string | setId(?string id): void |
| `usage` | `?int` | Optional | Usage tells how many services are using the CSP Profile. Only CSP Profile with 0 usage count be allowed to delete.<br>**Constraints**: `>= 0`, `<= 1024` | getUsage(): ?int | setUsage(?int usage): void |
| `cspProfileName` | `string` | Required | Name of the cloud credential to uniquely identify the CSP.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getCspProfileName(): string | setCspProfileName(string cspProfileName): void |
| `customerID` | `?string` | Optional | Unique identification of the organization creating the CSP Profile.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getCustomerID(): ?string | setCustomerID(?string customerID): void |
| `projectName` | `?string` | Optional | Project name where service artifacts needs to be stored.<br>**Constraints**: *Maximum Length*: `63`, *Pattern*: `^[a-z0-9-.]+$` | getProjectName(): ?string | setProjectName(?string projectName): void |
| `type` | [`?string(CSPProfileTypeEnum)`](../../doc/models/csp-profile-type-enum.md) | Optional | Type of CSP profile.<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getType(): ?string | setType(?string type): void |
| `awsCspProfile` | [`?AwsCspProfile`](../../doc/models/aws-csp-profile.md) | Optional | Information related to manage resources in AWS infrastructure. | getAwsCspProfile(): ?AwsCspProfile | setAwsCspProfile(?AwsCspProfile awsCspProfile): void |
| `azureCspProfile` | [`?AzureCspProfile`](../../doc/models/azure-csp-profile.md) | Optional | Information related to manage resources in Azure infrastructure. | getAzureCspProfile(): ?AzureCspProfile | setAzureCspProfile(?AzureCspProfile azureCspProfile): void |
| `defaultLocation` | [`?DefaultLocation`](../../doc/models/default-location.md) | Optional | Default location where service needs to be deployed. | getDefaultLocation(): ?DefaultLocation | setDefaultLocation(?DefaultLocation defaultLocation): void |
| `verificationTimeStamp` | `?DateTime` | Optional | Auto-derived Time of creation. Part of response only. | getVerificationTimeStamp(): ?\DateTime | setVerificationTimeStamp(?\DateTime verificationTimeStamp): void |
| `state` | `?string` | Optional | State of the CSP profile.<br>**Constraints**: *Maximum Length*: `20`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getState(): ?string | setState(?string state): void |
| `isValidated` | `?bool` | Optional | True if CSP is validated using provided credential, false otherwise.<br>**Default**: `false` | getIsValidated(): ?bool | setIsValidated(?bool isValidated): void |
| `createdDate` | `?DateTime` | Optional | Auto-derived Time of creation. Part of response only. | getCreatedDate(): ?\DateTime | setCreatedDate(?\DateTime createdDate): void |
| `lastModifiedDate` | `?DateTime` | Optional | Last modified time. Part of response only. | getLastModifiedDate(): ?\DateTime | setLastModifiedDate(?\DateTime lastModifiedDate): void |
| `createdBy` | `?string` | Optional | User who created the dropDown. Part of response only.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getCreatedBy(): ?string | setCreatedBy(?string createdBy): void |
| `lastModifiedBy` | `?string` | Optional | User who last modified the dropDown. Part of response only.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getLastModifiedBy(): ?string | setLastModifiedBy(?string lastModifiedBy): void |

## Example (as JSON)

```json
{
  "awsCspProfile": {
    "accessKey": "XXXXX",
    "credType": "ACCESS_KEY",
    "secretKey": "XXXXX"
  },
  "cspProfileName": "dev-api-csp-profile-mdp",
  "projectName": "vz-cve",
  "type": "AWS",
  "id": "id0",
  "usage": 38,
  "customerID": "customerID8"
}
```

