
# Eds Discovery Intent

## Structure

`EdsDiscoveryIntent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ueIdentity` | `?string` | Optional | UEIdentity to discover EDS location service.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-]{1,64}$` | getUeIdentity(): ?string | setUeIdentity(?string ueIdentity): void |
| `ueIdentityType` | [`?string(UEIdentityTypeEnum)`](../../doc/models/ue-identity-type-enum.md) | Optional | Default type for ueIdentityType.<br>**Default**: `UEIdentityTypeEnum::IPADDRESS` | getUeIdentityType(): ?string | setUeIdentityType(?string ueIdentityType): void |

## Example (as JSON)

```json
{
  "ueIdentityType": "IPAddress",
  "ueIdentity": "ueIdentity0"
}
```

