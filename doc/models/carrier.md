
# Carrier

## Structure

`Carrier`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `carriers` | `?string` | Optional | The list of carriers with active or available profiles<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[0-9]{3,32}$` | getCarriers(): ?string | setCarriers(?string carriers): void |

## Example (as JSON)

```json
{
  "carriers": "carriers0"
}
```

