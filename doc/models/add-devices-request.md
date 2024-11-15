
# Add Devices Request

Request to add the devices.

## Structure

`AddDevicesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `state` | `string` | Required | The initial service state for the devices. The only valid state is “Preactive.” | getState(): string | setState(string state): void |
| `devicesToAdd` | [`AccountDeviceList[]`](../../doc/models/account-device-list.md) | Required | The devices that you want to add. | getDevicesToAdd(): array | setDevicesToAdd(array devicesToAdd): void |
| `accountName` | `?string` | Optional | The billing account to which the devices are added. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `customFields` | [`?(CustomFields[])`](../../doc/models/custom-fields.md) | Optional | The names and values for any custom fields that you want set for the devices as they are added to the account. | getCustomFields(): ?array | setCustomFields(?array customFields): void |
| `groupName` | `?string` | Optional | The name of a device group to add the devices to. They are added to the default device group if you don't include this parameter. | getGroupName(): ?string | setGroupName(?string groupName): void |
| `skuNumber` | `?string` | Optional | The Stock Keeping Unit (SKU) number of a 4G device type with an embedded SIM. | getSkuNumber(): ?string | setSkuNumber(?string skuNumber): void |
| `smsrOid` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getSmsrOid(): ?string | setSmsrOid(?string smsrOid): void |

## Example (as JSON)

```json
{
  "accountName": "0868924207-00001",
  "customFields": [
    {
      "key": "CustomField2",
      "value": "SuperVend"
    }
  ],
  "devicesToAdd": [
    {
      "deviceIds": [
        {
          "kind": "imei",
          "id": "990013907835573"
        },
        {
          "kind": "iccid",
          "id": "89141390780800784259"
        }
      ],
      "ipAddress": "ipAddress2"
    },
    {
      "deviceIds": [
        {
          "kind": "imei",
          "id": "990013907884259"
        },
        {
          "kind": "iccid",
          "id": "89141390780800735573"
        }
      ],
      "ipAddress": "ipAddress2"
    }
  ],
  "groupName": "West Region",
  "state": "preactive",
  "skuNumber": "skuNumber2",
  "smsrOid": "smsrOid6"
}
```

