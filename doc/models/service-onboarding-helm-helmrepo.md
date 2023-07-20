
# Service Onboarding Helm Helmrepo

## Structure

`ServiceOnboardingHelmHelmrepo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `helmChartName` | `string` | Required | The user can provide the Helm chart name.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s\/]+$` | getHelmChartName(): string | setHelmChartName(string helmChartName): void |
| `helmChartVersion` | `string` | Required | The user can provide the Helm chart version.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s\/]+$` | getHelmChartVersion(): string | setHelmChartVersion(string helmChartVersion): void |

## Example (as JSON)

```json
{
  "helmChartName": "mec_helm_chart",
  "helmChartVersion": "1.0.0"
}
```

