
# Consent Transaction ID

The transaction ID of the request, from the POST /devicelocations synchronous response.

## Structure

`ConsentTransactionID`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionId` | `?string` | Optional | - | getTransactionId(): ?string | setTransactionId(?string transactionId): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "transactionId": "2c90bd28-eeee-ffff-gggg-7e3bd4fbff33",
  "status": "QUEUED"
}
```

