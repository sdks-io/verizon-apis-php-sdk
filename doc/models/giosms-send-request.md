
# GIOSMS Send Request

## Structure

`GIOSMSSendRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getAccountName(): ?string | setAccountName(?string accountName): void |
| `customFields` | [`?(KvPair[])`](../../doc/models/kv-pair.md) | Optional | **Constraints**: *Maximum Items*: `5` | getCustomFields(): ?array | setCustomFields(?array customFields): void |
| `dataEncoding` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getDataEncoding(): ?string | setDataEncoding(?string dataEncoding): void |
| `groupName` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getGroupName(): ?string | setGroupName(?string groupName): void |
| `servicePlan` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getServicePlan(): ?string | setServicePlan(?string servicePlan): void |
| `timeToLive` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getTimeToLive(): ?string | setTimeToLive(?string timeToLive): void |
| `deviceIds` | [`GIODeviceId[]`](../../doc/models/gio-device-id.md) | Required | **Constraints**: *Maximum Items*: `100` | getDeviceIds(): array | setDeviceIds(array deviceIds): void |
| `smsMessage` | `string` | Required | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `64`, *Pattern*: `^[A-Za-z0-9 ]{3,64}$` | getSmsMessage(): string | setSmsMessage(string smsMessage): void |

## Example (as JSON)

```json
{
  "deviceIds": [
    {
      "kind": "eid",
      "id": "12345678901234567890123456789012"
    }
  ],
  "smsMessage": "A text message",
  "accountName": "accountName2",
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
  "groupName": "groupName2",
  "servicePlan": "servicePlan2"
}
```

