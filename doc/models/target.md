
# Target

Target resource definition.

## Structure

`Target`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `address` | `?string` | Optional | The endpoint for data streams. | getAddress(): ?string | setAddress(?string address): void |
| `addressscheme` | `?string` | Optional | The transport format. | getAddressscheme(): ?string | setAddressscheme(?string addressscheme): void |
| `billingaccountid` | `?string` | Optional | The billing account ID. | getBillingaccountid(): ?string | setBillingaccountid(?string billingaccountid): void |
| `createdon` | `?string` | Optional | The date the resource was created. | getCreatedon(): ?string | setCreatedon(?string createdon): void |
| `externalid` | `?string` | Optional | Security identification string. | getExternalid(): ?string | setExternalid(?string externalid): void |
| `id` | `?string` | Optional | ThingSpace unique ID for the target that was created. | getId(): ?string | setId(?string id): void |
| `kind` | `?string` | Optional | Identifies the resource kind. Targets are ts.target. | getKind(): ?string | setKind(?string kind): void |
| `lastupdated` | `?string` | Optional | The date the resource was last updated. | getLastupdated(): ?string | setLastupdated(?string lastupdated): void |
| `name` | `?string` | Optional | Name of the target. | getName(): ?string | setName(?string name): void |
| `region` | `?string` | Optional | AWS region value. | getRegion(): ?string | setRegion(?string region): void |
| `version` | `?string` | Optional | Version of the underlying schema resource. | getVersion(): ?string | setVersion(?string version): void |
| `versionid` | `?string` | Optional | The version of the resource. | getVersionid(): ?string | setVersionid(?string versionid): void |
| `description` | `?string` | Optional | Description of the target. | getDescription(): ?string | setDescription(?string description): void |

## Example (as JSON)

```json
{
  "address": "arn:aws:iam::252156542789:role/ThingSpace",
  "addressscheme": "streamawsiot",
  "createdon": "2019-01-24T19:06:43.577Z",
  "externalid": "lJZnih8BfqsosZrEEkfPuR3aGOk2i-HIr6tXN275ioJF6bezIrQB9EbzpTRep8J7RmV7QH==",
  "id": "cea170cc-a58f-6531-fc4b-fae1ceb1a6c8",
  "kind": "ts.target",
  "lastupdated": "2019-01-24T19:32:31.841Z",
  "name": "AWS Target",
  "region": "us-east-1",
  "version": "1.0",
  "versionid": "caf85ff7-200e-11e9-a85b-02420a621e0a",
  "billingaccountid": "billingaccountid0"
}
```

