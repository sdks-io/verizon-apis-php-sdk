
# SMS Send Request

Request to send SMS.

## Structure

`SMSSendRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | The name of a billing account. | getAccountName(): string | setAccountName(string accountName): void |
| `smsMessage` | `string` | Required | The contents of the SMS message. The SMS message is limited to 160 characters in 7-bit format, or 140 characters in 8-bit format. | getSmsMessage(): string | setSmsMessage(string smsMessage): void |
| `customFields` | [`?(CustomFields[])`](../../doc/models/custom-fields.md) | Optional | The names and values of custom fields, if you want to only include devices that have matching custom fields. | getCustomFields(): ?array | setCustomFields(?array customFields): void |
| `dataEncoding` | `?string` | Optional | The SMS message encoding, which can be 7-bit (default), 8-bit-ASCII, 8-bit-UTF-8, 8-bit-DATA. | getDataEncoding(): ?string | setDataEncoding(?string dataEncoding): void |
| `deviceIds` | [`?(DeviceId[])`](../../doc/models/device-id.md) | Optional | The devices that you want to send the message to, specified by device identifier. | getDeviceIds(): ?array | setDeviceIds(?array deviceIds): void |
| `groupName` | `?string` | Optional | The name of a device group, if you want to send the SMS message to all devices in the device group. | getGroupName(): ?string | setGroupName(?string groupName): void |
| `servicePlan` | `?string` | Optional | The name of a service plan, if you want to only include devices that have that service plan. | getServicePlan(): ?string | setServicePlan(?string servicePlan): void |

## Example (as JSON)

```json
{
  "accountName": "accountName2",
  "smsMessage": "The rain in Spain stays mainly in the plain.",
  "servicePlan": "T Plan 2",
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
  "dataEncoding": "dataEncoding0",
  "deviceIds": [
    {
      "id": "id0",
      "kind": "kind8"
    },
    {
      "id": "id0",
      "kind": "kind8"
    },
    {
      "id": "id0",
      "kind": "kind8"
    }
  ],
  "groupName": "groupName8"
}
```

