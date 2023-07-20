
# Service Onboarding Helm Git Branch

## Structure

`ServiceOnboardingHelmGitBranch`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `branchName` | `string` | Required | The user can provide branchName for the Helm chart.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s\/]+$` | getBranchName(): string | setBranchName(string branchName): void |
| `helmChartPath` | `string` | Required | The user can provide the path to the Helm chart.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s\/]+$` | getHelmChartPath(): string | setHelmChartPath(string helmChartPath): void |
| `valuesYamlPaths` | `?(string[])` | Optional | The user can provide an array of values.YAML files paths.<br>**Constraints**: *Maximum Items*: `10000`, *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s\/]+$` | getValuesYamlPaths(): ?array | setValuesYamlPaths(?array valuesYamlPaths): void |

## Example (as JSON)

```json
{
  "branchName": "mec_vz_helm_git",
  "helmChartPath": "/home/helmchart",
  "valuesYamlPaths": [
    "valuesYamlPaths2"
  ]
}
```

