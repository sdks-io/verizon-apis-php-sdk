
# Service Error

Errors related to service.

## Structure

`ServiceError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errorCategory` | `?string` | Optional | Category defined under which the error falls.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9\- _]+$` | getErrorCategory(): ?string | setErrorCategory(?string errorCategory): void |
| `errorCode` | `?string` | Optional | Error Code is required.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getErrorCode(): ?string | setErrorCode(?string errorCode): void |
| `errorDesc` | `?string` | Optional | Error description is required.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9\- _]+$` | getErrorDesc(): ?string | setErrorDesc(?string errorDesc): void |
| `errorSubcategory` | `?string` | Optional | Sub-category of the error defined.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9\- _]+$` | getErrorSubcategory(): ?string | setErrorSubcategory(?string errorSubcategory): void |

## Example (as JSON)

```json
{
  "errorCategory": "Resource Not Found",
  "errorCode": "404",
  "errorDesc": "Requested resource not found in database",
  "errorSubcategory": "Record not Found in Database"
}
```

