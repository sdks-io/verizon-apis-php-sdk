
# Edge Discovery Result Data

For cases where user input exceeds the boundary values an additional 'data' key will be returned with a relevant description.

## Structure

`EdgeDiscoveryResultData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `additionalMessage` | `?string` | Optional | **Constraints**: *Maximum Length*: `32` | getAdditionalMessage(): ?string | setAdditionalMessage(?string additionalMessage): void |

## Example (as JSON)

```json
{
  "additionalMessage": "additionalMessage2"
}
```

