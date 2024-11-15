
# Coordinates

Coordinates information.

## Structure

`Coordinates`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `latitude` | `?string` | Optional | Latitude value of location.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `12`, *Pattern*: `^[-+]?([0-9.]{3,12})$` | getLatitude(): ?string | setLatitude(?string latitude): void |
| `longitude` | `?string` | Optional | Longitude value of location.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `12`, *Pattern*: `^[-+]?([0-9.]{3,12})$` | getLongitude(): ?string | setLongitude(?string longitude): void |

## Example (as JSON)

```json
{
  "latitude": "-33.84819",
  "longitude": "151.22049"
}
```

