
# Deregister Service Endpoint Result

Response to deregister an application's Service Endpoint from one or more Multi-access Edge Compute (MEC) Platforms.

## Structure

`DeregisterServiceEndpointResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `?string` | Optional | HTTP status code.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getStatus(): ?string | setStatus(?string status): void |
| `message` | `?string` | Optional | EdgeAppServicesID that are deleted or error details in case of an error.<br>**Constraints**: *Maximum Length*: `32` | getMessage(): ?string | setMessage(?string message): void |

## Example (as JSON)

```json
{
  "status": "Success",
  "message": "EdgeAppServicesID Deleted"
}
```

