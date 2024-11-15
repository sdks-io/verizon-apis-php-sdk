
# Create Subscription Request

The details of the subscription that you want to create.

## Structure

`CreateSubscriptionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountidentifier` | [`?AccountIdentifier`](../../doc/models/account-identifier.md) | Optional | The ID of the authenticating billing account, in the format `{"billingaccountid":"1234567890-12345"}`. | getAccountidentifier(): ?AccountIdentifier | setAccountidentifier(?AccountIdentifier accountidentifier): void |
| `description` | `?string` | Optional | Descriptive information about the subscription. | getDescription(): ?string | setDescription(?string description): void |
| `disabled` | `?bool` | Optional | Enable or disable the subscription. A disabled subscription will not send any data. | getDisabled(): ?bool | setDisabled(?bool disabled): void |
| `email` | `?string` | Optional | The address to which any error reports should be delivered. | getEmail(): ?string | setEmail(?string email): void |
| `filter` | `?string` | Optional | String containing a $filter object with a property and value to filter out non-matching events. | getFilter(): ?string | setFilter(?string filter): void |
| `billingaccountid` | `?string` | Optional | - | getBillingaccountid(): ?string | setBillingaccountid(?string billingaccountid): void |
| `streamkind` | `?string` | Optional | The type of event data to send via this subscription. This will be `ts.event` in most cases. Other event types are `ts.event.diagnostics` for device diagnostic data, `ts.event.configuration` for device configuration events, or `ts.event.security`. Note that the device ThingSpace client must support sending specific event types for anything other than `ts.event`. | getStreamkind(): ?string | setStreamkind(?string streamkind): void |
| `targetid` | `?string` | Optional | The ID of the target resource to be used when dispatching events. The corresponding target should have a “stream” addressscheme. | getTargetid(): ?string | setTargetid(?string targetid): void |
| `name` | `?string` | Optional | Name of the subscription. | getName(): ?string | setName(?string name): void |
| `allowaggregation` | `?bool` | Optional | Setting this value to `false` prevents the data returned from being aggregated and makes the data easier to parse. | getAllowaggregation(): ?bool | setAllowaggregation(?bool allowaggregation): void |

## Example (as JSON)

```json
{
  "accountidentifier": {
    "billingaccountid": "0000000000-00001"
  },
  "billingaccountid": "0000000000-00001",
  "streamkind": "ts.event",
  "targetid": "your target ID UUID such as ae110c40-2685-6c70-f46e-286f7370b8a9",
  "name": "name your subscription",
  "description": "description8",
  "disabled": false,
  "email": "email4",
  "filter": "filter2"
}
```

