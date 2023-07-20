
# Aws Csp Profile

Information related to manage resources in AWS infrastructure.

## Structure

`AwsCspProfile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `credType` | [`?string(AwsCspProfileCredTypeEnum)`](../../doc/models/aws-csp-profile-cred-type-enum.md) | Optional | Credential type of AWS CSP profile.<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getCredType(): ?string | setCredType(?string credType): void |
| `accessKey` | `?string` | Optional | AWS Access Key.<br>**Constraints**: *Maximum Length*: `128`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!\/,+\-=_:.&*%\s]+$` | getAccessKey(): ?string | setAccessKey(?string accessKey): void |
| `secretKey` | `?string` | Optional | AWS Secret Key.<br>**Constraints**: *Maximum Length*: `128`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!\/,+\-=_:.&*%\s]+$` | getSecretKey(): ?string | setSecretKey(?string secretKey): void |
| `roleARN` | `?string` | Optional | CSP AWS Role ARN.<br>**Constraints**: *Maximum Length*: `256`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!\/,+\-=_:.&*%\s]+$` | getRoleARN(): ?string | setRoleARN(?string roleARN): void |
| `accountId` | `?string` | Optional | AWS account ID.<br>**Constraints**: *Maximum Length*: `12`, *Pattern*: `^[0-9]+$` | getAccountId(): ?string | setAccountId(?string accountId): void |
| `externalId` | `?string` | Optional | AWS external ID.<br>**Constraints**: *Maximum Length*: `128`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!\/,+\-=_:.&*%\s]+$` | getExternalId(): ?string | setExternalId(?string externalId): void |

## Example (as JSON)

```json
{
  "accessKey": "XXXXX",
  "credType": "ACCESS_KEY",
  "secretKey": "XXXXX",
  "roleARN": "roleARN8",
  "accountId": "accountId0"
}
```

