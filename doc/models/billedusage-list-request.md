
# Billedusage List Request

Information required to associate a usage segmentation label with a device to retrieve billing.

## Structure

`BilledusageListRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | - | getAccountName(): string | setAccountName(string accountName): void |
| `labels` | [`?LabelsList`](../../doc/models/labels-list.md) | Optional | - | getLabels(): ?LabelsList | setLabels(?LabelsList labels): void |
| `deviceIds` | [`?(DeviceList[])`](../../doc/models/device-list.md) | Optional | - | getDeviceIds(): ?array | setDeviceIds(?array deviceIds): void |
| `billingCycle` | [`?BillingCycle`](../../doc/models/billing-cycle.md) | Optional | - | getBillingCycle(): ?BillingCycle | setBillingCycle(?BillingCycle billingCycle): void |

## Example (as JSON)

```json
{
  "accountName": "9231221278-99990",
  "labels": {
    "deviceIds": [
      {
        "name": "name0",
        "value": "value2"
      }
    ]
  },
  "deviceIds": [
    {
      "deviceIds": [
        {
          "id": "id0",
          "kind": "kind8"
        },
        {
          "id": "id0",
          "kind": "kind8"
        }
      ]
    },
    {
      "deviceIds": [
        {
          "id": "id0",
          "kind": "kind8"
        },
        {
          "id": "id0",
          "kind": "kind8"
        }
      ]
    }
  ],
  "billingCycle": {
    "year": "year6",
    "month": "month4"
  }
}
```

