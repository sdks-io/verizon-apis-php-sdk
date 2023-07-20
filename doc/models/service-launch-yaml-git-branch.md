
# Service Launch Yaml Git Branch

## Structure

`ServiceLaunchYamlGitBranch`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `branchName` | `?string` | Optional | - | getBranchName(): ?string | setBranchName(?string branchName): void |
| `valuesYamlPaths` | `?(string[])` | Optional | **Constraints**: *Maximum Items*: `100` | getValuesYamlPaths(): ?array | setValuesYamlPaths(?array valuesYamlPaths): void |

## Example (as JSON)

```json
{
  "valuesYamlPaths": [
    "/home/helmchart"
  ],
  "branchName": "branchName2"
}
```

