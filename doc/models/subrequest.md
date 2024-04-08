
# Subrequest

## Structure

`Subrequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ids` | [`?GIODeviceId`](../../doc/models/gio-device-id.md) | Optional | - | getIds(): ?GIODeviceId | setIds(?GIODeviceId ids): void |
| `status` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `8`, *Pattern*: `^[A-Za-z]{3,8}$` | getStatus(): ?string | setStatus(?string status): void |

## Example (as JSON)

```json
{
  "status": "Success",
  "ids": {
    "kind": "kind2",
    "id": "id4"
  }
}
```

