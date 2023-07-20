
# Advance Configuration

## Structure

`AdvanceConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `serviceRoleArn` | `?string` | Optional | - | getServiceRoleArn(): ?string | setServiceRoleArn(?string serviceRoleArn): void |
| `serviceRolePermissionBoundary` | `?string` | Optional | - | getServiceRolePermissionBoundary(): ?string | setServiceRolePermissionBoundary(?string serviceRolePermissionBoundary): void |
| `enableProxy` | `?bool` | Optional | **Default**: `false` | getEnableProxy(): ?bool | setEnableProxy(?bool enableProxy): void |
| `httpProxy` | `?string` | Optional | - | getHttpProxy(): ?string | setHttpProxy(?string httpProxy): void |
| `httpsProxy` | `?string` | Optional | - | getHttpsProxy(): ?string | setHttpsProxy(?string httpsProxy): void |
| `noProxy` | `?string` | Optional | - | getNoProxy(): ?string | setNoProxy(?string noProxy): void |
| `proxyRootCA` | `?string` | Optional | - | getProxyRootCA(): ?string | setProxyRootCA(?string proxyRootCA): void |
| `enableTlsTraffic` | `?bool` | Optional | **Default**: `false` | getEnableTlsTraffic(): ?bool | setEnableTlsTraffic(?bool enableTlsTraffic): void |
| `enableAutoApprove` | `?bool` | Optional | **Default**: `false` | getEnableAutoApprove(): ?bool | setEnableAutoApprove(?bool enableAutoApprove): void |
| `enableMultiMaster` | `?bool` | Optional | **Default**: `false` | getEnableMultiMaster(): ?bool | setEnableMultiMaster(?bool enableMultiMaster): void |
| `enableDedicatedMaster` | `?bool` | Optional | **Default**: `false` | getEnableDedicatedMaster(): ?bool | setEnableDedicatedMaster(?bool enableDedicatedMaster): void |

## Example (as JSON)

```json
{
  "enableProxy": false,
  "enableTlsTraffic": false,
  "enableAutoApprove": false,
  "enableMultiMaster": false,
  "enableDedicatedMaster": false,
  "serviceRoleArn": "serviceRoleArn4",
  "serviceRolePermissionBoundary": "serviceRolePermissionBoundary2",
  "httpProxy": "httpProxy8",
  "httpsProxy": "httpsProxy8"
}
```

