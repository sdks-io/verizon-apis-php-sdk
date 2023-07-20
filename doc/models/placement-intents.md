
# Placement Intents

## Structure

`PlacementIntents`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `isPlacementAtLaunchEnabled` | `?bool` | Optional | **Default**: `false` | getIsPlacementAtLaunchEnabled(): ?bool | setIsPlacementAtLaunchEnabled(?bool isPlacementAtLaunchEnabled): void |
| `groupId` | `?string` | Optional | **Constraints**: *Maximum Length*: `500`, *Pattern*: `^(.*)$` | getGroupId(): ?string | setGroupId(?string groupId): void |
| `intentChain` | [`?(IntentChainItem[])`](../../doc/models/intent-chain-item.md) | Optional | - | getIntentChain(): ?array | setIntentChain(?array intentChain): void |

## Example (as JSON)

```json
{
  "intentChain": [
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
  ],
  "isPlacementAtLaunchEnabled": false,
  "groupId": "groupId2"
}
```

