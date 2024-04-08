
# ESIM Status Response

## Structure

`ESIMStatusResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | - | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `subrequests` | [`?(ESIMsubrequest[])`](../../doc/models/esi-msubrequest.md) | Optional | **Constraints**: *Maximum Items*: `100` | getSubrequests(): ?array | setSubrequests(?array subrequests): void |

## Example (as JSON)

```json
{
  "requestId": "d1f08526-5443-4054-9a29-4456490ea9f8",
  "status": "Success",
  "subrequests": [
    {
      "id": "id0",
      "kind": "kind8",
      "status": "success"
    },
    {
      "id": "id0",
      "kind": "kind8",
      "status": "success"
    }
  ]
}
```

