
# ESIM Global Device List

## Structure

`ESIMGlobalDeviceList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | The numeric name of the account. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `provisioningStatusFilter` | [`?string(ProvisioningStatusFilterEnum)`](../../doc/models/provisioning-status-filter-enum.md) | Optional | The last status of the device as a list filter. | getProvisioningStatusFilter(): ?string | setProvisioningStatusFilter(?string provisioningStatusFilter): void |
| `profileStatusFilter` | [`?string(ProfileStatusFilterEnum)`](../../doc/models/profile-status-filter-enum.md) | Optional | The last status of the device's profile as a filter. | getProfileStatusFilter(): ?string | setProfileStatusFilter(?string profileStatusFilter): void |
| `carrierNameFilter` | `?string` | Optional | The cellular service provider. | getCarrierNameFilter(): ?string | setCarrierNameFilter(?string carrierNameFilter): void |
| `deviceFilter` | [`?(DeviceId2[])`](../../doc/models/device-id-2.md) | Optional | An array of device identifiers to filter the list. | getDeviceFilter(): ?array | setDeviceFilter(?array deviceFilter): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "carrierNameFilter": "VerizonWireless",
  "provisioningStatusFilter": "SUSPEND",
  "profileStatusFilter": "DELETE",
  "deviceFilter": [
    {
      "id": "id4",
      "kind": "kind2"
    }
  ]
}
```

