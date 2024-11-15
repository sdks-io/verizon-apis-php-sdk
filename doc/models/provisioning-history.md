
# Provisioning History

The provisioning history of a specified device during a specified time period.

## Structure

`ProvisioningHistory`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `occurredAt` | `?string` | Optional | The date and time when the provisioning event occured. | getOccurredAt(): ?string | setOccurredAt(?string occurredAt): void |
| `status` | `?string` | Optional | The success or failure of the provisioning event. | getStatus(): ?string | setStatus(?string status): void |
| `eventBy` | `?string` | Optional | The user who performed the provisioning event. | getEventBy(): ?string | setEventBy(?string eventBy): void |
| `eventType` | `?string` | Optional | The provisioning action:Activate,Suspend,Restore,Deactivate,Device Move. | getEventType(): ?string | setEventType(?string eventType): void |
| `mdn` | `?string` | Optional | The MDN assigned to the device after the provisioning event. | getMdn(): ?string | setMdn(?string mdn): void |
| `msisdn` | `?string` | Optional | The MSISDN assigned to the device after the provisioning event. | getMsisdn(): ?string | setMsisdn(?string msisdn): void |
| `servicePlan` | `?string` | Optional | The service plan of the device after the provisioning event occurred. | getServicePlan(): ?string | setServicePlan(?string servicePlan): void |
| `extendedAttributes` | [`?(CustomFields[])`](../../doc/models/custom-fields.md) | Optional | Any extended attributes for the event, as Key and Value pairs. | getExtendedAttributes(): ?array | setExtendedAttributes(?array extendedAttributes): void |

## Example (as JSON)

```json
{
  "occurredAt": "2015-12-17T13:56:13-05:00",
  "status": "Success",
  "eventBy": "Harry Potter",
  "eventType": "Activation Confirmed",
  "servicePlan": "Tablet5GB",
  "mdn": "",
  "msisdn": "15086303371",
  "extendedAttributes": []
}
```

