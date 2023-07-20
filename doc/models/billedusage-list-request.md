
# Billedusage List Request

Information required to associate a usage segmentation label with a device to retrieve billing.

## Structure

`BilledusageListRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | - | getAccountName(): ?string | setAccountName(?string accountName): void |
| `labels` | [`?LabelsList`](../../doc/models/labels-list.md) | Optional | - | getLabels(): ?LabelsList | setLabels(?LabelsList labels): void |
| `devices` | [`?(DeviceList[])`](../../doc/models/device-list.md) | Optional | - | getDevices(): ?array | setDevices(?array devices): void |
| `billingCycle` | [`?BillingCycle`](../../doc/models/billing-cycle.md) | Optional | - | getBillingCycle(): ?BillingCycle | setBillingCycle(?BillingCycle billingCycle): void |

## Example (as JSON)

```json
{
  "accountName": "9231221278-99990",
  "labels": {
    "deviceIds": [
      {
        "name": "name8",
        "value": "value0"
      }
    ]
  },
  "devices": [
    {
      "deviceIds": [
        {
          "id": "id6",
          "kind": "imei"
        },
        {
          "id": "id7",
          "kind": "eid"
        },
        {
          "id": "id8",
          "kind": "esn"
        }
      ]
    },
    {
      "deviceIds": [
        {
          "id": "id7",
          "kind": "eid"
        }
      ]
    }
  ],
  "BillingCycle": {
    "year": "year0",
    "month": "month8"
  }
}
```

