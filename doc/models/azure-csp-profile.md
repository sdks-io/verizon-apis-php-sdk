
# Azure Csp Profile

Information related to manage resources in Azure infrastructure.

## Structure

`AzureCspProfile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `tenantID` | `?string` | Optional | Azure tenant ID.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getTenantID(): ?string | setTenantID(?string tenantID): void |
| `subscriptionID` | `?string` | Optional | Azure subscription ID.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getSubscriptionID(): ?string | setSubscriptionID(?string subscriptionID): void |
| `clientId` | `?string` | Optional | Azure client ID.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getClientId(): ?string | setClientId(?string clientId): void |
| `clientSecret` | `?string` | Optional | Azure client secret.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_ ]+$` | getClientSecret(): ?string | setClientSecret(?string clientSecret): void |

## Example (as JSON)

```json
{
  "tenantID": "uuid",
  "subscriptionID": "uuid",
  "clientId": "uuid",
  "clientSecret": "Client Secret Example"
}
```

