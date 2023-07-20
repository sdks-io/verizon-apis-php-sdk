
# Repository Credential

Credentials of a repository.

## Structure

`RepositoryCredential`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | User name to connect to the repository.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `40`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s]+$` | getName(): ?string | setName(?string name): void |
| `password` | `?string` | Optional | Account password to connect to user provided repository.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,^+\-=_:.&*%\s]+$` | getPassword(): ?string | setPassword(?string password): void |

## Example (as JSON)

```json
{
  "name": "Adam123",
  "password": "password"
}
```

