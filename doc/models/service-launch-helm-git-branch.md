
# Service Launch Helm Git Branch

## Structure

`ServiceLaunchHelmGitBranch`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `branchName` | `?string` | Optional | - | getBranchName(): ?string | setBranchName(?string branchName): void |
| `helmChartPath` | `?string` | Optional | - | getHelmChartPath(): ?string | setHelmChartPath(?string helmChartPath): void |
| `valuesYamlPaths` | `?(string[])` | Optional | - | getValuesYamlPaths(): ?array | setValuesYamlPaths(?array valuesYamlPaths): void |

## Example (as JSON)

```json
{
  "branchName": "mec_vz_helm_git",
  "helmChartPath": "/home/helmchart",
  "valuesYamlPaths": [
    "/home/helmchart"
  ]
}
```

