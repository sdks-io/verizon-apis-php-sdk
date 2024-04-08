
# Custom Fields Update Request

Request to assign or change custom field values for one or more devices.

## Structure

`CustomFieldsUpdateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | The name of a billing account.This parameter is only required if the UWS account used for the current API session has access to multiple billing accounts.An account name is usually numeric, and must include any leading zeros. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `customFields` | [`?(CustomFields[])`](../../doc/models/custom-fields.md) | Optional | Custom field names and values, if you want to only include devices that have matching values. | getCustomFields(): ?array | setCustomFields(?array customFields): void |
| `customFieldsToUpdate` | [`?(CustomFields[])`](../../doc/models/custom-fields.md) | Optional | The names and new values of any custom fields that you want to change. | getCustomFieldsToUpdate(): ?array | setCustomFieldsToUpdate(?array customFieldsToUpdate): void |
| `devices` | [`?(AccountDeviceList[])`](../../doc/models/account-device-list.md) | Optional | The devices that you want to change. | getDevices(): ?array | setDevices(?array devices): void |
| `groupName` | `?string` | Optional | The name of a device group, if you want to only include devices in that group. | getGroupName(): ?string | setGroupName(?string groupName): void |
| `servicePlan` | `?string` | Optional | The name of a service plan, if you want to only include devices that have that service plan. | getServicePlan(): ?string | setServicePlan(?string servicePlan): void |

## Example (as JSON)

```json
{
  "devices": [
    {
      "deviceIds": [
        {
          "id": "89148000000800139708",
          "kind": "iccid"
        }
      ],
      "ipAddress": "ipAddress4"
    }
  ],
  "customFieldsToUpdate": [
    {
      "key": "CustomField1",
      "value": "West Region"
    },
    {
      "key": "CustomField2",
      "value": "Distribution"
    }
  ],
  "accountName": "accountName4",
  "customFields": [
    {
      "key": "key0",
      "value": "value2"
    },
    {
      "key": "key0",
      "value": "value2"
    }
  ],
  "groupName": "groupName0"
}
```

