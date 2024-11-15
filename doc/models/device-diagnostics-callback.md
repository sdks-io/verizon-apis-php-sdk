
# Device Diagnostics Callback

Callback information of an existing diagnostics subscription.

## Structure

`DeviceDiagnosticsCallback`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `string` | Required | The name of the billing account for which callback messages will be sent. Format: "##########-#####". | getAccountName(): string | setAccountName(string accountName): void |
| `serviceName` | `string` | Required | The name of the callback service, which identifies the type and format of messages that will be sent to the registered URL. | getServiceName(): string | setServiceName(string serviceName): void |
| `endpoint` | `string` | Required | The URL for your web server. | getEndpoint(): string | setEndpoint(string endpoint): void |
| `createdOn` | `DateTime` | Required | The date and time of when this request was created. | getCreatedOn(): \DateTime | setCreatedOn(\DateTime createdOn): void |
| `httpHeaders` | `?array` | Optional | Your HTTP headers. | getHttpHeaders(): ?array | setHttpHeaders(?array httpHeaders): void |

## Example (as JSON)

```json
{
  "accountName": "TestQAAccount",
  "serviceName": "Diagnostics",
  "endpoint": "https://yourwebsite.com",
  "createdOn": "2019-09-07T23:57:53.292Z",
  "httpHeaders": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

