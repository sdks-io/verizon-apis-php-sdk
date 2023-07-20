
# Associate Label Request

## Structure

`AssociateLabelRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | The name of a billing account. An account name is usually numeric, and must include any leading zeros. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `labels` | [`?AccountLabels`](../../doc/models/account-labels.md) | Optional | Maximum of 2,000 objects are allowed in the array. | getLabels(): ?AccountLabels | setLabels(?AccountLabels labels): void |

## Example (as JSON)

```json
{
  "accountName": "1223334444-00001",
  "labels": {
    "devices": [
      {
        "deviceIds": [
          {
            "id": "id4",
            "kind": "imei"
          }
        ]
      },
      {
        "deviceIds": [
          {
            "id": "id5",
            "kind": "eid"
          },
          {
            "id": "id6",
            "kind": "esn"
          }
        ]
      },
      {
        "deviceIds": [
          {
            "id": "id6",
            "kind": "esn"
          },
          {
            "id": "id7",
            "kind": "iccid"
          },
          {
            "id": "id8",
            "kind": "imei"
          }
        ]
      }
    ],
    "label": [
      {
        "name": "name3",
        "value": "value5"
      },
      {
        "name": "name4",
        "value": "value6"
      },
      {
        "name": "name5",
        "value": "value7"
      }
    ]
  }
}
```

