
# Service Onboarding Terraform Git Branch

## Structure

`ServiceOnboardingTerraformGitBranch`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `branchName` | `string` | Required | **Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s\/]+$` | getBranchName(): string | setBranchName(string branchName): void |
| `terraformPath` | `string` | Required | **Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s\/]+$` | getTerraformPath(): string | setTerraformPath(string terraformPath): void |

## Example (as JSON)

```json
{
  "branchName": "mec_terraform_git",
  "terraformPath": "/home/helmchart"
}
```

