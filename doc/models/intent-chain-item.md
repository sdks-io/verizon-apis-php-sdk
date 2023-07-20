
# Intent Chain Item

## Structure

`IntentChainItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `input` | `?array` | Optional | - | getInput(): ?array | setInput(?array input): void |

## Example (as JSON)

```json
{
  "input": {
    "deploymentLocations": [
      {
        "csp": "AWS_WL",
        "region": "US_WEST_2",
        "zoneId": [
          "us-west-2-wl1-den-wlz-1"
        ]
      }
    ]
  },
  "name": "Compliance"
}
```

