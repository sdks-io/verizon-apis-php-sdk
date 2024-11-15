
# Status Response

## Structure

`StatusResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestId` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `64`, *Pattern*: `^[a-z-0-9]{3,64}$` | getRequestId(): ?string | setRequestId(?string requestId): void |
| `status` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getStatus(): ?string | setStatus(?string status): void |
| `subrequests` | [`?(Subrequest[])`](../../doc/models/subrequest.md) | Optional | **Constraints**: *Maximum Items*: `100` | getSubrequests(): ?array | setSubrequests(?array subrequests): void |

## Example (as JSON)

```json
{
  "requestId": "d1f08526-5443-4054-9a29-4456490ea9f8",
  "status": "Success",
  "subrequests": [
    {
      "ids": {
        "kind": "kind2",
        "id": "id4"
      },
      "status": "status2"
    }
  ]
}
```

