
# Service Plan

Details of the service plan.

## Structure

`ServicePlan`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `carrierServicePlanCode` | `?string` | Optional | The code that is used by the carrier for the service plan. | getCarrierServicePlanCode(): ?string | setCarrierServicePlanCode(?string carrierServicePlanCode): void |
| `code` | `?string` | Optional | The code of the service plan, which may not be the same as the name. | getCode(): ?string | setCode(?string code): void |
| `extendedAttributes` | [`?(CustomFields[])`](../../doc/models/custom-fields.md) | Optional | Any extended attributes for the service plan, as Key and Value pairs. | getExtendedAttributes(): ?array | setExtendedAttributes(?array extendedAttributes): void |
| `name` | `?string` | Optional | The name of the service plan. | getName(): ?string | setName(?string name): void |
| `sizeKb` | `?int` | Optional | The size of the service plan in kilobytes. | getSizeKb(): ?int | setSizeKb(?int sizeKb): void |

## Example (as JSON)

```json
{
  "name": "2MSHR5GB",
  "code": "M2MSHR5GB",
  "sizeKb": 0,
  "carrierServicePlanCode": "84638",
  "extendedAttributes": [
    {
      "key": "key8",
      "value": "value0"
    }
  ]
}
```

