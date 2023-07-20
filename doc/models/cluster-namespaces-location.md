
# Cluster Namespaces Location

## Structure

`ClusterNamespacesLocation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ern` | `?string` | Optional | Edge Resource Number.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getErn(): ?string | setErn(?string ern): void |
| `city` | `?string` | Optional | **Constraints**: *Maximum Length*: `15`, *Pattern*: `^[A-Za-z]{1,15}$` | getCity(): ?string | setCity(?string city): void |
| `latitude` | `?string` | Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getLatitude(): ?string | setLatitude(?string latitude): void |
| `longitude` | `?string` | Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getLongitude(): ?string | setLongitude(?string longitude): void |
| `csp` | `?string` | Optional | Cloud Service Provider.<br>**Constraints**: *Maximum Length*: `64` | getCsp(): ?string | setCsp(?string csp): void |

## Example (as JSON)

```json
{
  "ern": "us-east-1-wl1-atl-wlz-1",
  "city": "Atlanta",
  "latitude": "33.7505671006769",
  "longitude": "-84.38593033921234",
  "csp": "AWS_WL"
}
```

