
# Data Backup

## Structure

`DataBackup`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `provider` | [`?string(DataBackupProviderEnum)`](../../doc/models/data-backup-provider-enum.md) | Optional | Types of data backup provider. | getProvider(): ?string | setProvider(?string provider): void |
| `accessKey` | [`?AccessKey`](../../doc/models/access-key.md) | Optional | - | getAccessKey(): ?AccessKey | setAccessKey(?AccessKey accessKey): void |
| `role` | [`?Role`](../../doc/models/role.md) | Optional | Role of the user calling API. | getRole(): ?Role | setRole(?Role role): void |

## Example (as JSON)

```json
{
  "provider": "AWS",
  "accessKey": {
    "accessId": "accessId6",
    "secretKey": "secretKey6",
    "sessionToken": "sessionToken8"
  },
  "role": {
    "accountId": "accountId6",
    "externalId": "externalId2",
    "roleARN": "roleARN8"
  }
}
```

