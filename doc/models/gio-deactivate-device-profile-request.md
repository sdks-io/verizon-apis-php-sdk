
# GIO Deactivate Device Profile Request

## Structure

`GIODeactivateDeviceProfileRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `devices` | [`?(GIODeviceList[])`](../../doc/models/gio-device-list.md) | Optional | **Constraints**: *Maximum Items*: `100` | getDevices(): ?array | setDevices(?array devices): void |
| `accountName` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[0-9\-]{3,32}$` | getAccountName(): ?string | setAccountName(?string accountName): void |
| `servicePlan` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9 ]{3,32}$` | getServicePlan(): ?string | setServicePlan(?string servicePlan): void |
| `etfWaiver` | `?bool` | Optional | **Default**: `false` | getEtfWaiver(): ?bool | setEtfWaiver(?bool etfWaiver): void |
| `reasonCode` | `?string` | Optional | **Constraints**: *Minimum Length*: `2`, *Maximum Length*: `32`, *Pattern*: `^[0-9A-Z]{2,32}$` | getReasonCode(): ?string | setReasonCode(?string reasonCode): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "servicePlan": "service plan name",
  "etfWaiver": false,
  "reasonCode": "FF",
  "devices": [
    {
      "deviceIds": [
        {
          "kind": "kind8",
          "id": "id0"
        }
      ]
    }
  ]
}
```

