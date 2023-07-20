
# IP Pool

IP pool that is available to the account.

## Structure

`IPPool`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `poolName` | `?string` | Optional | The name of the IP pool. | getPoolName(): ?string | setPoolName(?string poolName): void |
| `poolType` | `?string` | Optional | The type of IP pool, such as “Static IP” or “Dynamic IP.” | getPoolType(): ?string | setPoolType(?string poolType): void |
| `isDefaultPool` | `?bool` | Optional | True if this is the default IP pool for the account. | getIsDefaultPool(): ?bool | setIsDefaultPool(?bool isDefaultPool): void |

## Example (as JSON)

```json
{
  "poolName": "ACMESTATIC001",
  "poolType": "Static IP",
  "isDefaultPool": true
}
```

