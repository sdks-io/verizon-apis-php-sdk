
# MEC Platform Resource

5G Edge platform used for deployment of a service. The ern of each platform contains the name of the matching AWS Wavelength zone that can be used when deploying.

## Structure

`MECPlatformResource`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ern` | `?string` | Optional | Edge Resource Name. A string identifier for a set of edge resources.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9-]{3,32}$` | getErn(): ?string | setErn(?string ern): void |
| `zone` | `?string` | Optional | Unique identifier representing a zone. *Note:* This will have a null value as a placeholder.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getZone(): ?string | setZone(?string zone): void |
| `region` | `?string` | Optional | MEC region name. Current valid values are US_WEST_2 and US_EAST_1. | getRegion(): ?string | setRegion(?string region): void |
| `status` | [`?string(MECPlatformStatusEnum)`](../../doc/models/mec-platform-status-enum.md) | Optional | Status of the MEC Platform (default is 'unknown')<br>**Default**: `MECPlatformStatusEnum::UNKNOWN` | getStatus(): ?string | setStatus(?string status): void |
| `properties` | `?array` | Optional | - | getProperties(): ?array | setProperties(?array properties): void |

## Example (as JSON)

```json
{
  "ern": "5x4VBwmfZbzSL3",
  "zone": "e5oV52kMGjDLhnJSsLJZL",
  "region": "US_WEST_2",
  "status": "unknown",
  "properties": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

