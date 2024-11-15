
# Registered Callbacks

List of registered callback endpoints.

## Structure

`RegisteredCallbacks`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `aname` | `?string` | Optional | The name of the billing account for which callback messages will be sent. | getAname(): ?string | setAname(?string aname): void |
| `name` | `?string` | Optional | The name of the callback service, which identifies the type and format of messages that will be sent to the registered URL. This will be 'Fota' for the Software Management Services callback. | getName(): ?string | setName(?string name): void |
| `url` | `?string` | Optional | The address to which callback messages will be sent. | getUrl(): ?string | setUrl(?string url): void |
| `username` | `?string` | Optional | The user name that ThingSpace will return in the callback messages. | getUsername(): ?string | setUsername(?string username): void |
| `password` | `?string` | Optional | The password that ThingSpace will return in the callback messages. | getPassword(): ?string | setPassword(?string password): void |

## Example (as JSON)

```json
{
  "aname": "0252012345-00001",
  "name": "Fota",
  "url": "http://10.120.102.183:50559/CallbackListener/FirmwareServiceMessages.asmx",
  "username": "username0",
  "password": "password4"
}
```

