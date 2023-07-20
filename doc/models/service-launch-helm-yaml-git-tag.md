
# Service Launch Helm Yaml Git Tag

## Structure

`ServiceLaunchHelmYamlGitTag`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `tagName` | `?string` | Optional | - | getTagName(): ?string | setTagName(?string tagName): void |
| `valuesYamlPaths` | `?(string[])` | Optional | **Constraints**: *Maximum Items*: `100` | getValuesYamlPaths(): ?array | setValuesYamlPaths(?array valuesYamlPaths): void |

## Example (as JSON)

```json
{
  "tagName": "mec_vz_helm_git",
  "valuesYamlPaths": [
    "/home/helmchart"
  ]
}
```

