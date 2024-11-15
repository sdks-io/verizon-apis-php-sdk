
# Create Io T Application Request

The request body must include the UUID of the subscription that you want to update plus any properties that you want to change.

## Structure

`CreateIoTApplicationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `appName` | `?string` | Optional | A user defined name for the application being deployed in Azure IoT Central. | getAppName(): ?string | setAppName(?string appName): void |
| `billingAccountID` | `?string` | Optional | The ThingSpace ID of the authenticating billing account | getBillingAccountID(): ?string | setBillingAccountID(?string billingAccountID): void |
| `clientID` | `?string` | Optional | The Azure ClientID of the associated Azure target account | getClientID(): ?string | setClientID(?string clientID): void |
| `clientSecret` | `?string` | Optional | The Azure Client Secret of the associated Azure target account | getClientSecret(): ?string | setClientSecret(?string clientSecret): void |
| `emailIDs` | `?string` | Optional | The “email IDs” to be added to/sent to with this API. | getEmailIDs(): ?string | setEmailIDs(?string emailIDs): void |
| `resourcegroup` | `?string` | Optional | The Azure Resource group of the associated Azure target account | getResourcegroup(): ?string | setResourcegroup(?string resourcegroup): void |
| `sampleIOTcApp` | `?string` | Optional | This is the reference Azure IoT Central application developed by Verizon. | getSampleIOTcApp(): ?string | setSampleIOTcApp(?string sampleIOTcApp): void |
| `subscriptionID` | `?string` | Optional | The Azure Subscription ID of the associated Azure target account | getSubscriptionID(): ?string | setSubscriptionID(?string subscriptionID): void |
| `tenantID` | `?string` | Optional | The Azure Tenant ID of the associated Azure target account | getTenantID(): ?string | setTenantID(?string tenantID): void |

## Example (as JSON)

```json
{
  "appName": "newarmapp1",
  "billingAccountID": "0000123456-00001",
  "clientID": "UUID",
  "clientSecret": "client secret",
  "emailIDs": "email@domain.com",
  "resourcegroup": "Myresourcegroup",
  "sampleIOTcApp": "app ID",
  "subscriptionID": "subscription ID",
  "tenantID": "tenant ID"
}
```

