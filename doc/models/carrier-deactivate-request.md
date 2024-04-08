
# Carrier Deactivate Request

Request to deactivate a carrier.

## Structure

`CarrierDeactivateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | The name of a billing account. | getAccountName(): string | setAccountName(string accountName): void |
| `devices` | [`AccountDeviceList[]`](../../doc/models/account-device-list.md) | Required | The devices for which you want to deactivate service, specified by device identifier. | getDevices(): array | setDevices(array devices): void |
| `reasonCode` | `string` | Required | Code identifying the reason for the deactivation. Currently the only valid reason code is “FF”, which corresponds to General Admin/Maintenance. | getReasonCode(): string | setReasonCode(string reasonCode): void |
| `customFields` | [`?(CustomFields[])`](../../doc/models/custom-fields.md) | Optional | Custom field names and values, if you want to only include devices that have matching values. | getCustomFields(): ?array | setCustomFields(?array customFields): void |
| `etfWaiver` | `?bool` | Optional | Fees may be assessed for deactivating Verizon Wireless devices, depending on the account contract. The etfWaiver parameter waives the Early Termination Fee (ETF), if applicable. | getEtfWaiver(): ?bool | setEtfWaiver(?bool etfWaiver): void |
| `groupName` | `?string` | Optional | The name of a device group, if you want to deactivate all devices in that group. | getGroupName(): ?string | setGroupName(?string groupName): void |
| `servicePlan` | `?string` | Optional | The name of a service plan, if you want to only include devices that have that service plan. | getServicePlan(): ?string | setServicePlan(?string servicePlan): void |
| `deleteAfterDeactivation` | `?bool` | Optional | - | getDeleteAfterDeactivation(): ?bool | setDeleteAfterDeactivation(?bool deleteAfterDeactivation): void |

## Example (as JSON)

```json
{
  "accountName": "0000123456-00001",
  "devices": [
    {
      "deviceIds": [
        {
          "id": "20-digit ICCID",
          "kind": "iccid"
        }
      ],
      "ipAddress": "ipAddress4"
    },
    {
      "deviceIds": [
        {
          "id": "20-digit ICCID",
          "kind": "iccid"
        }
      ],
      "ipAddress": "ipAddress4"
    }
  ],
  "reasonCode": "FF",
  "etfWaiver": true,
  "customFields": [
    {
      "key": "key0",
      "value": "value2"
    },
    {
      "key": "key0",
      "value": "value2"
    },
    {
      "key": "key0",
      "value": "value2"
    }
  ],
  "groupName": "groupName8",
  "servicePlan": "servicePlan2",
  "deleteAfterDeactivation": false
}
```

