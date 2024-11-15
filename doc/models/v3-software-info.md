
# V3 Software Info

Software information.

## Structure

`V3SoftwareInfo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Software name. | getName(): string | setName(string name): void |
| `version` | `string` | Required | Software version. | getVersion(): string | setVersion(string version): void |
| `upgradeTime` | `string` | Required | Upgrade time. | getUpgradeTime(): string | setUpgradeTime(string upgradeTime): void |

## Example (as JSON)

```json
{
  "name": "VZ_MDM_IOT",
  "version": "0.14",
  "upgradeTime": "2012-04-23T18:25:43.511Z"
}
```

