
# Move Device Request

Request to move active devices from one billing account to another within a customer profile.

## Structure

`MoveDeviceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | The name of the billing account that you want to move the devices to. | getAccountName(): string | setAccountName(string accountName): void |
| `filter` | [`?DeviceFilter`](../../doc/models/device-filter.md) | Optional | Specify the kind of the device identifier, the type of match, and the string that you want to match. | getFilter(): ?DeviceFilter | setFilter(?DeviceFilter filter): void |
| `customFields` | [`?(CustomFields[])`](../../doc/models/custom-fields.md) | Optional | Custom field names and values, if you want to only include devices that have matching values. | getCustomFields(): ?array | setCustomFields(?array customFields): void |
| `devices` | [`?(AccountDeviceList[])`](../../doc/models/account-device-list.md) | Optional | Up to 10,000 devices that you want to move to a different account, specified by device identifier. | getDevices(): ?array | setDevices(?array devices): void |
| `groupName` | `?string` | Optional | The name of a device group, to only include devices in that group. | getGroupName(): ?string | setGroupName(?string groupName): void |
| `carrierIpPoolName` | `?string` | Optional | The pool from which device IP addresses will be derived in the new account. If you do not include this element, the default pool will be used. | getCarrierIpPoolName(): ?string | setCarrierIpPoolName(?string carrierIpPoolName): void |
| `servicePlan` | `?string` | Optional | The service plan code that you want to assign to the devices in the new account. If you do not include this element, ThingSpace will attempt to use the current service plan, which will result in a error if the new account does not have that service plan. | getServicePlan(): ?string | setServicePlan(?string servicePlan): void |

## Example (as JSON)

```json
{
  "filter": {
    "groupName": "Short-Haul Trucks",
    "customFields": [
      {
        "key": "CustomField1",
        "value": "East Region Trucks"
      }
    ],
    "account": "account4",
    "servicePlan": "servicePlan6"
  },
  "accountName": "0212345678-00001",
  "servicePlan": "M2M5GB",
  "customFields": [
    {
      "key": "key0",
      "value": "value2"
    }
  ],
  "devices": [
    {
      "deviceIds": [
        {
          "id": "id0",
          "kind": "kind8"
        }
      ],
      "ipAddress": "ipAddress4"
    },
    {
      "deviceIds": [
        {
          "id": "id0",
          "kind": "kind8"
        }
      ],
      "ipAddress": "ipAddress4"
    },
    {
      "deviceIds": [
        {
          "id": "id0",
          "kind": "kind8"
        }
      ],
      "ipAddress": "ipAddress4"
    }
  ],
  "groupName": "groupName2",
  "carrierIpPoolName": "carrierIpPoolName0"
}
```

