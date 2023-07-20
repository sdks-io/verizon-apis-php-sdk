
# Target Authentication Body Headers

Authentication headers.

## Structure

`TargetAuthenticationBodyHeaders`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `authorization` | `?string` | Optional | Authorization header. | getAuthorization(): ?string | setAuthorization(?string authorization): void |
| `contentType` | `?string` | Optional | Content-Type header. | getContentType(): ?string | setContentType(?string contentType): void |

## Example (as JSON)

```json
{
  "Authorization": "Basic RGFrqewfq2xpZW50QXBwVjI6YzM5YjqfqmI2LWI2MWQtNDRlZTQ5MmM1YTRk",
  "Content-Type": "application/x-www-form-urlencoded"
}
```

