
# Resources Service Endpoint

Service Endpoint path, address, and port.

## Structure

`ResourcesServiceEndpoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uRI` | `?string` | Optional | URI of Service Endpoint if available.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `\w+:(/?/?)[^\s]+` | getURI(): ?string | setURI(?string uRI): void |
| `fQDN` | `?string` | Optional | FQDN of Service Endpoint if available.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9.]{3,32}$` | getFQDN(): ?string | setFQDN(?string fQDN): void |
| `iPv4Address` | `?string` | Optional | IPv4 Address of Service Endpoint if available.<br>**Constraints**: *Maximum Length*: `32` | getIPv4Address(): ?string | setIPv4Address(?string iPv4Address): void |
| `iPv6Address` | `?string` | Optional | IPv6 Address of Service Endpoint if available.<br>**Constraints**: *Maximum Length*: `64` | getIPv6Address(): ?string | setIPv6Address(?string iPv6Address): void |
| `port` | `?int` | Optional | Port information of Service Endpoint if IPv4 or IPv6 is mentioned.<br>**Constraints**: `>= 1`, `<= 10000` | getPort(): ?int | setPort(?int port): void |

## Example (as JSON)

```json
{
  "URI": "http://base_path/some_segment/id",
  "FQDN": "thingtest.verizon.com",
  "IPv4Address": "192.168.11.10",
  "IPv6Address": "2001:0db8:85a3:0000:0000:8a2e:0370:1234",
  "port": 1234
}
```

