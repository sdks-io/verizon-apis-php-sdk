
# Workload

Workload attribute of a service.

## Structure

`Workload`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The auto-generated Id of the workload.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getId(): ?string | setId(?string id): void |
| `name` | `string` | Required | Name of the workload needs to be deployed.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getName(): string | setName(string name): void |
| `description` | `?string` | Optional | A brief workload description.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s]+$` | getDescription(): ?string | setDescription(?string description): void |
| `packageType` | [`?string(ServiceDependencyPackageTypeEnum)`](../../doc/models/service-dependency-package-type-enum.md) | Optional | Deployment package type.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getPackageType(): ?string | setPackageType(?string packageType): void |
| `uploadType` | [`?string(UploadTypeEnum)`](../../doc/models/upload-type-enum.md) | Optional | Allowed values are: GIT files (PULL_FROM_REPO), MANUAL_UPLOAD.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getUploadType(): ?string | setUploadType(?string uploadType): void |
| `repositoryType` | [`?string(WorkloadRepositoryTypeEnum)`](../../doc/models/workload-repository-type-enum.md) | Optional | Repository types allowed: GIT/HELM.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getRepositoryType(): ?string | setRepositoryType(?string repositoryType): void |
| `repositoryId` | `?string` | Optional | In case of 'Pull files from my repository', The user can provide the existing repositoryID.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getRepositoryId(): ?string | setRepositoryId(?string repositoryId): void |
| `repository` | [`?Repository`](../../doc/models/repository.md) | Optional | Users can create a repository to maintain service artifacts. Repository would be either a Git or HELM repository. | getRepository(): ?Repository | setRepository(?Repository repository): void |
| `files` | `?(string[])` | Optional | Files which are being generated.<br>**Constraints**: *Maximum Items*: `10000`, *Maximum Length*: `10000`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]!,+\-=_:.&*%\s]+$` | getFiles(): ?array | setFiles(?array files): void |
| `revisionType` | [`?string(WorkloadRevisionTypeEnum)`](../../doc/models/workload-revision-type-enum.md) | Optional | Revision type can be a BRANCH or TAG.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getRevisionType(): ?string | setRevisionType(?string revisionType): void |
| `helmGitBranch` | [`?ServiceOnboardingHelmGitBranch`](../../doc/models/service-onboarding-helm-git-branch.md) | Optional | - | getHelmGitBranch(): ?ServiceOnboardingHelmGitBranch | setHelmGitBranch(?ServiceOnboardingHelmGitBranch helmGitBranch): void |
| `helmGitTag` | [`?ServiceOnboardingHelmGitTag`](../../doc/models/service-onboarding-helm-git-tag.md) | Optional | - | getHelmGitTag(): ?ServiceOnboardingHelmGitTag | setHelmGitTag(?ServiceOnboardingHelmGitTag helmGitTag): void |
| `helmYamlGitTag` | [`?ServiceOnboardingHelmYamlGitTag`](../../doc/models/service-onboarding-helm-yaml-git-tag.md) | Optional | - | getHelmYamlGitTag(): ?ServiceOnboardingHelmYamlGitTag | setHelmYamlGitTag(?ServiceOnboardingHelmYamlGitTag helmYamlGitTag): void |
| `helmHelmrepo` | [`?ServiceOnboardingHelmHelmrepo`](../../doc/models/service-onboarding-helm-helmrepo.md) | Optional | - | getHelmHelmrepo(): ?ServiceOnboardingHelmHelmrepo | setHelmHelmrepo(?ServiceOnboardingHelmHelmrepo helmHelmrepo): void |
| `yamlGitBranch` | [`?ServiceOnboardingYamlGitBranch`](../../doc/models/service-onboarding-yaml-git-branch.md) | Optional | - | getYamlGitBranch(): ?ServiceOnboardingYamlGitBranch | setYamlGitBranch(?ServiceOnboardingYamlGitBranch yamlGitBranch): void |
| `terraformGitBranch` | [`?ServiceOnboardingTerraformGitBranch`](../../doc/models/service-onboarding-terraform-git-branch.md) | Optional | - | getTerraformGitBranch(): ?ServiceOnboardingTerraformGitBranch | setTerraformGitBranch(?ServiceOnboardingTerraformGitBranch terraformGitBranch): void |
| `terraformGitTag` | [`?ServiceOnboardingTerraformGitTag`](../../doc/models/service-onboarding-terraform-git-tag.md) | Optional | - | getTerraformGitTag(): ?ServiceOnboardingTerraformGitTag | setTerraformGitTag(?ServiceOnboardingTerraformGitTag terraformGitTag): void |
| `createdDate` | `?DateTime` | Optional | The date on which the workload is created. | getCreatedDate(): ?\DateTime | setCreatedDate(?\DateTime createdDate): void |
| `lastModifiedDte` | `?DateTime` | Optional | The date when the created workload was last modified. | getLastModifiedDte(): ?\DateTime | setLastModifiedDte(?\DateTime lastModifiedDte): void |
| `createdBy` | `?string` | Optional | Identity of the user who created the workload.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s]+$` | getCreatedBy(): ?string | setCreatedBy(?string createdBy): void |
| `updatedBy` | `?string` | Optional | Identity of the user who updated the workload.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s]+$` | getUpdatedBy(): ?string | setUpdatedBy(?string updatedBy): void |

## Example (as JSON)

```json
{
  "description": "MEC SD Workload.",
  "packageType": "HELM",
  "helmHelmrepo": {
    "helmChartName": "mongodb",
    "helmChartVersion": "12.1.10"
  },
  "name": "dev-api-demo-repo",
  "repositoryType": "HELM",
  "uploadType": "PULL_FROM_REPO",
  "id": "id0"
}
```

