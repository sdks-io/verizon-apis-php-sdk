
# Register Callback Request

Request to register a callback.

## Structure

`RegisterCallbackRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | The name of the callback service that you want to subscribe to. | getName(): ?string | setName(?string name): void |
| `url` | `?string` | Optional | The address on your server where you have enabled a listening service for callback messages. | getUrl(): ?string | setUrl(?string url): void |
| `username` | `?string` | Optional | The user name that the M2M Platform should return in the callback messages. | getUsername(): ?string | setUsername(?string username): void |
| `password` | `?string` | Optional | The password that the M2M Platform should return in the callback messages. | getPassword(): ?string | setPassword(?string password): void |

## Example (as JSON)

```json
{
  "name": "CarrierService",
  "url": "http://10.120.102.183:50559/CallbackListener/CarrierServiceMessages.asmx",
  "username": "username0",
  "password": "password4"
}
```

