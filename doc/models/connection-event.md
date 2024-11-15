
# Connection Event

Network connection events for a device during a specified time period.

## Structure

`ConnectionEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `connectionEventAttributes` | [`?(CustomFields[])`](../../doc/models/custom-fields.md) | Optional | The attributes that describe the connection event. | getConnectionEventAttributes(): ?array | setConnectionEventAttributes(?array connectionEventAttributes): void |
| `extendedAttributes` | [`?(CustomFields[])`](../../doc/models/custom-fields.md) | Optional | Currently not used. | getExtendedAttributes(): ?array | setExtendedAttributes(?array extendedAttributes): void |
| `occurredAt` | `?string` | Optional | The date and time when the connection event occured. | getOccurredAt(): ?string | setOccurredAt(?string occurredAt): void |

## Example (as JSON)

```json
{
  "connectionEventAttributes": [
    {
      "key": "BytesUsed",
      "value": "0"
    },
    {
      "key": "Event",
      "value": "Start"
    }
  ],
  "extendedAttributes": [],
  "occurredAt": "2015-12-17T14:12:36-05:00"
}
```

