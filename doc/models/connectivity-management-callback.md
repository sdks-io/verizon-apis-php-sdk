
# Connectivity Management Callback

Includes callback listeners that were registered through the Connectivity Management API.

## Structure

`ConnectivityManagementCallback`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | The name of the billing account for which callback messages will be sent. | getAccountName(): ?string | setAccountName(?string accountName): void |
| `password` | `?string` | Optional | The password defined when a URL was registered for the callback service, or an empty string if no password was defined. | getPassword(): ?string | setPassword(?string password): void |
| `serviceName` | `?string` | Optional | The name of the callback service, which identifies the type and format of messages that will be sent to the registered URL. | getServiceName(): ?string | setServiceName(?string serviceName): void |
| `url` | `?string` | Optional | The address of the callback listening service where the ThingSpace Platform will send callback messages for the service type. | getUrl(): ?string | setUrl(?string url): void |
| `username` | `?string` | Optional | The username defined when a URL was registered for the callback service, or an empty string if no username was defined. | getUsername(): ?string | setUsername(?string username): void |

## Example (as JSON)

```json
{
  "accountName": "0252012345-00001",
  "password": "drowssap",
  "serviceName": "DeviceUsage",
  "url": "http://10.120.102.147:50569/CallbackListener/Usage.asmx",
  "username": "zaffod"
}
```

