
# Get Device List With Profiles Request

## Structure

`GetDeviceListWithProfilesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9\-]{3,32}$` | getAccountName(): string | setAccountName(string accountName): void |
| `provisioningStatusFilter` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getProvisioningStatusFilter(): ?string | setProvisioningStatusFilter(?string provisioningStatusFilter): void |
| `profileStatusFilter` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getProfileStatusFilter(): ?string | setProfileStatusFilter(?string profileStatusFilter): void |
| `carrierNameFilter` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getCarrierNameFilter(): ?string | setCarrierNameFilter(?string carrierNameFilter): void |
| `deviceFilter` | [`?(GIODeviceId[])`](../../doc/models/gio-device-id.md) | Optional | **Constraints**: *Maximum Items*: `50` | getDeviceFilter(): ?array | setDeviceFilter(?array deviceFilter): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "provisioningStatusFilter": "ACTIVE",
  "profileStatusFilter": "UNKNOWN",
  "carrierNameFilter": "carrierNameFilter2",
  "deviceFilter": [
    {
      "kind": "kind2",
      "id": "id4"
    }
  ]
}
```

