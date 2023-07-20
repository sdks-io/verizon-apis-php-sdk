
# Account Leads Result

Returns information for all leads associated with an account.

## Structure

`AccountLeadsResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `hasMoreData` | `?bool` | Optional | False if no more leads.True if there is more data to be retrieved. | getHasMoreData(): ?bool | setHasMoreData(?bool hasMoreData): void |
| `leads` | [`?(AccountLead[])`](../../doc/models/account-lead.md) | Optional | The leads associated with an account. | getLeads(): ?array | setLeads(?array leads): void |

## Example (as JSON)

```json
{
  "leads": [
    {
      "leadId": "L-10001",
      "leadState": "Qualified",
      "address": {
        "addressLine1": "1600 Pennsylvania Avenue",
        "addressLine2": "",
        "city": "Washington",
        "state": "DC",
        "zip": "20500",
        "country": "USA",
        "zip4": "zip47",
        "phone": "phone3",
        "phoneType": "phoneType7",
        "emailAddress": "emailAddress3"
      }
    }
  ],
  "hasMoreData": false
}
```

