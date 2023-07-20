
# Edge Service Workload

## Structure

`EdgeServiceWorkload`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getId(): ?string | setId(?string id): void |
| `name` | `string` | Required | Name of the workload needs to be deployed.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getName(): string | setName(string name): void |
| `description` | `?string` | Optional | **Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s]+$` | getDescription(): ?string | setDescription(?string description): void |
| `packageType` | [`?string(PackageTypeEnum)`](../../doc/models/package-type-enum.md) | Optional | Deployment package type.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getPackageType(): ?string | setPackageType(?string packageType): void |
| `uploadType` | [`?string(WorkloadUploadTypeEnum)`](../../doc/models/workload-upload-type-enum.md) | Optional | **Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getUploadType(): ?string | setUploadType(?string uploadType): void |
| `repositoryType` | [`?string(RepositoryTypeEnum)`](../../doc/models/repository-type-enum.md) | Optional | **Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getRepositoryType(): ?string | setRepositoryType(?string repositoryType): void |
| `repositoryId` | `?string` | Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getRepositoryId(): ?string | setRepositoryId(?string repositoryId): void |
| `repository` | [`?EdgeServiceRepository`](../../doc/models/edge-service-repository.md) | Optional | - | getRepository(): ?EdgeServiceRepository | setRepository(?EdgeServiceRepository repository): void |
| `files` | `?(string[])` | Optional | **Constraints**: *Maximum Items*: `10000` | getFiles(): ?array | setFiles(?array files): void |
| `revisionType` | [`?string(RevisionTypeEnum)`](../../doc/models/revision-type-enum.md) | Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getRevisionType(): ?string | setRevisionType(?string revisionType): void |
| `helmGitBranch` | [`?ServiceLaunchHelmGitBranch`](../../doc/models/service-launch-helm-git-branch.md) | Optional | - | getHelmGitBranch(): ?ServiceLaunchHelmGitBranch | setHelmGitBranch(?ServiceLaunchHelmGitBranch helmGitBranch): void |
| `helmGitTag` | [`?ServiceLaunchHelmGitTag`](../../doc/models/service-launch-helm-git-tag.md) | Optional | - | getHelmGitTag(): ?ServiceLaunchHelmGitTag | setHelmGitTag(?ServiceLaunchHelmGitTag helmGitTag): void |
| `helmYamlGitTag` | [`?ServiceLaunchHelmYamlGitTag`](../../doc/models/service-launch-helm-yaml-git-tag.md) | Optional | - | getHelmYamlGitTag(): ?ServiceLaunchHelmYamlGitTag | setHelmYamlGitTag(?ServiceLaunchHelmYamlGitTag helmYamlGitTag): void |
| `helmRepo` | [`?ServiceLaunchHelmRepo`](../../doc/models/service-launch-helm-repo.md) | Optional | - | getHelmRepo(): ?ServiceLaunchHelmRepo | setHelmRepo(?ServiceLaunchHelmRepo helmRepo): void |
| `yamlGitBranch` | [`?ServiceLaunchYamlGitBranch`](../../doc/models/service-launch-yaml-git-branch.md) | Optional | - | getYamlGitBranch(): ?ServiceLaunchYamlGitBranch | setYamlGitBranch(?ServiceLaunchYamlGitBranch yamlGitBranch): void |
| `terraformGitBranch` | [`?ServiceLaunchTerraformGitBranch`](../../doc/models/service-launch-terraform-git-branch.md) | Optional | - | getTerraformGitBranch(): ?ServiceLaunchTerraformGitBranch | setTerraformGitBranch(?ServiceLaunchTerraformGitBranch terraformGitBranch): void |
| `terraformGitTag` | [`?ServiceLaunchTerraformGitTag`](../../doc/models/service-launch-terraform-git-tag.md) | Optional | - | getTerraformGitTag(): ?ServiceLaunchTerraformGitTag | setTerraformGitTag(?ServiceLaunchTerraformGitTag terraformGitTag): void |
| `createdDate` | `?DateTime` | Optional | - | getCreatedDate(): ?\DateTime | setCreatedDate(?\DateTime createdDate): void |
| `lastModifiedDte` | `?DateTime` | Optional | - | getLastModifiedDte(): ?\DateTime | setLastModifiedDte(?\DateTime lastModifiedDte): void |
| `createdBy` | `?string` | Optional | **Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s]+$` | getCreatedBy(): ?string | setCreatedBy(?string createdBy): void |
| `updatedBy` | `?string` | Optional | **Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s]+$` | getUpdatedBy(): ?string | setUpdatedBy(?string updatedBy): void |

## Example (as JSON)

```json
{
  "name": "MECSDWorkload",
  "id": "id0",
  "description": "description0",
  "packageType": "YAML",
  "uploadType": "PULL_FROM_REPO",
  "repositoryType": "GIT"
}
```

