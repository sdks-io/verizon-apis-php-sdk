
# Revision

## Structure

`Revision`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `version` | `string` | Required | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getVersion(): string | setVersion(string version): void |
| `additionalParams` | [`?(EdgeServiceLaunchParams[])`](../../doc/models/edge-service-launch-params.md) | Optional | **Constraints**: *Maximum Items*: `100` | getAdditionalParams(): ?array | setAdditionalParams(?array additionalParams): void |

## Example (as JSON)

```json
{
  "additionalParams": [],
  "version": "2.3.4"
}
```

