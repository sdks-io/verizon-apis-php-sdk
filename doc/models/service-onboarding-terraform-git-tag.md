
# Service Onboarding Terraform Git Tag

## Structure

`ServiceOnboardingTerraformGitTag`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `tagName` | `string` | Required | **Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s\/]+$` | getTagName(): string | setTagName(string tagName): void |
| `terraformPath` | `string` | Required | **Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s\/]+$` | getTerraformPath(): string | setTerraformPath(string terraformPath): void |

## Example (as JSON)

```json
{
  "tagName": "mec_terraform_git",
  "terraformPath": "/home/helmchart"
}
```

