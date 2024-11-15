
# Associate Label Request

## Structure

`AssociateLabelRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | The name of a billing account. An account name is usually numeric, and must include any leading zeros. | getAccountName(): string | setAccountName(string accountName): void |
| `labels` | [`AccountLabels`](../../doc/models/account-labels.md) | Required | Maximum of 2,000 objects are allowed in the array. | getLabels(): AccountLabels | setLabels(AccountLabels labels): void |

## Example (as JSON)

```json
{
  "accountName": "1223334444-00001",
  "labels": {
    "devices": [
      {
        "deviceIds": [
          {
            "id": "id0",
            "kind": "kind8"
          }
        ]
      }
    ],
    "label": [
      {
        "name": "name0",
        "value": "value2"
      },
      {
        "name": "name0",
        "value": "value2"
      },
      {
        "name": "name0",
        "value": "value2"
      }
    ]
  }
}
```

