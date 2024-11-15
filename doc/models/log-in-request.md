
# Log in Request

Request to initiate a Connectivity Management session and returns a VZ-M2M session token that is required in subsequent API requests.

## Structure

`LogInRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `username` | `string` | Required | The username for authentication. | getUsername(): string | setUsername(string username): void |
| `password` | `string` | Required | The password for authentication. | getPassword(): string | setPassword(string password): void |

## Example (as JSON)

```json
{
  "username": "zbeeblebrox",
  "password": "IMgr8"
}
```

