
# Device Location Callback

## Structure

`DeviceLocationCallback`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | [`string(CallbackServiceNameEnum)`](../../doc/models/callback-service-name-enum.md) | Required | The name of the callback service. | getName(): string | setName(string name): void |
| `url` | `string` | Required | The location of your callback listener. | getUrl(): string | setUrl(string url): void |

## Example (as JSON)

```json
{
  "name": "Location",
  "url": "http://10.120.102.183:50559/CallbackListener/LocationServiceMessages.asmx"
}
```

