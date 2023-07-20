
# Service Launch Helm Git Tag

## Structure

`ServiceLaunchHelmGitTag`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `tagName` | `string` | Required | **Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s\/]+$` | getTagName(): string | setTagName(string tagName): void |
| `helmChartPath` | `string` | Required | **Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s\/]+$` | getHelmChartPath(): string | setHelmChartPath(string helmChartPath): void |
| `valuesYamlPaths` | `string[]` | Required | **Constraints**: *Maximum Items*: `10000`, *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s\/]+$` | getValuesYamlPaths(): array | setValuesYamlPaths(array valuesYamlPaths): void |

## Example (as JSON)

```json
{
  "helmChartPath": "/home/helmchart",
  "tagName": "mec_vz_helm_git",
  "valuesYamlPaths": [
    "/home/helmchart"
  ]
}
```

