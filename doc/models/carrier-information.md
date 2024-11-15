
# Carrier Information

Information about the carrier.

## Structure

`CarrierInformation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `carrierName` | `?string` | Optional | The carrier that will perform the activation. This parameter is only required if you have more than one carrier. | getCarrierName(): ?string | setCarrierName(?string carrierName): void |
| `servicePlan` | `?string` | Optional | The service plan code that is assigned to the device. | getServicePlan(): ?string | setServicePlan(?string servicePlan): void |
| `state` | `?string` | Optional | The device state. Valid values include: Activate, Suspend, Deactive, Pre-active. | getState(): ?string | setState(?string state): void |

## Example (as JSON)

```json
{
  "carrierName": "Verizon Wireless",
  "servicePlan": "m2m4G",
  "state": "active"
}
```

