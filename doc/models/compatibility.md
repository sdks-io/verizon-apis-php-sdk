
# Compatibility

Compatibility would have the attribute CSP which is Cloud service provider e.g. AWS_PUBLIC_CLOUD, AWS_WL, AWS_OUTPOST, AZURE_EDGE, AZURE_PUBLIC_CLOUD.

## Structure

`Compatibility`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `csp` | [`?string(CSPCompatibilityEnum)`](../../doc/models/csp-compatibility-enum.md) | Optional | Cloud service provider e.g. AWS_PUBLIC_CLOUD, AWS_WL, AWS_OUTPOST, AZURE_EDGE, AZURE_PUBLIC_CLOUD.<br>**Default**: `CSPCompatibilityEnum::AWS_WL` | getCsp(): ?string | setCsp(?string csp): void |

## Example (as JSON)

```json
{
  "csp": "AWS_WL"
}
```

