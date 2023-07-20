
# Fota V2 Callback Registration Request

Callback URL registration.

## Structure

`FotaV2CallbackRegistrationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `?string` | Optional | Callback URL for an subscribed service. | getUrl(): ?string | setUrl(?string url): void |

## Example (as JSON)

```json
{
  "url": "https://255.255.11.135:50559/CallbackListener/FirmwareServiceMessages.asmx"
}
```

