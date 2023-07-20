
# Claim Status Request

Current status of the claim can have only two values eg: VERIFIED/UNVERIFIED.

## Structure

`ClaimStatusRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `claimStatus` | [`?string(ClaimStatusEnum)`](../../doc/models/claim-status-enum.md) | Optional | Current status of the claim can have only two values eg: VERIFIED/UNVERIFIED. | getClaimStatus(): ?string | setClaimStatus(?string claimStatus): void |

## Example (as JSON)

```json
{
  "claimStatus": "VERIFIED"
}
```

