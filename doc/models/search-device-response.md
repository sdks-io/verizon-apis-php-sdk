
# Search Device Response

A success response includes an array of all matching events. Each event includes the full event resource definition.

## Structure

`SearchDeviceResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `action` | `?string` | Optional | The action requested in this event; “change” for device configuration changes. | getAction(): ?string | setAction(?string action): void |
| `createdon` | `?string` | Optional | The date and time of the change request. | getCreatedon(): ?string | setCreatedon(?string createdon): void |
| `deviceid` | `?string` | Optional | The device’s ThingSpace UUID. | getDeviceid(): ?string | setDeviceid(?string deviceid): void |
| `fields` | [`?Fields2`](../../doc/models/fields-2.md) | Optional | List of fields affected by the event. | getFields(): ?Fields2 | setFields(?Fields2 fields): void |
| `id` | `?string` | Optional | The unique ID of this ts.event.configuration event. | getId(): ?string | setId(?string id): void |
| `kind` | `?string` | Optional | The kind of the ThingSpace resource that is being reported; “ts.event.configuration” for device configuration changes. | getKind(): ?string | setKind(?string kind): void |
| `lastupdated` | `?string` | Optional | The date and time that the event was last updated. | getLastupdated(): ?string | setLastupdated(?string lastupdated): void |
| `name` | `?string` | Optional | The name of the event | getName(): ?string | setName(?string name): void |
| `state` | `?string` | Optional | The current status of the request. | getState(): ?string | setState(?string state): void |
| `tagids` | `?(string[])` | Optional | UUIDs of tag resources that are applied to this device. | getTagids(): ?array | setTagids(?array tagids): void |
| `transactionid` | `?string` | Optional | transaction id | getTransactionid(): ?string | setTransactionid(?string transactionid): void |
| `version` | `?string` | Optional | The version of the resource. | getVersion(): ?string | setVersion(?string version): void |
| `versionid` | `?string` | Optional | The version of the resource. | getVersionid(): ?string | setVersionid(?string versionid): void |

## Example (as JSON)

```json
{
  "action": "set",
  "createdon": "2019-02-21T02:05:25.270417481Z",
  "deviceid": "8461f530-2e31-6e87-e357-6c38251d4d01",
  "id": "e521b8ae-440d-6cc1-f687-7c80e085ff29",
  "kind": "ts.event.configuration",
  "lastupdated": "2019-02-21T02:05:25.394230017Z",
  "name": "SetConfigurationReq",
  "state": "update",
  "tagids": [
    "4d110e4f-7a7c-6b26-eaac-31cc34c6e1d4",
    "cd81ed16-18ae-6c7d-eaba-2883b0395387"
  ],
  "transactionid": "c7a0a8cf-6856-4733-93ea-69913650e4ca",
  "version": "1.0",
  "versionid": "270e4820-357d-11e9-9d6c-02420a470c06",
  "fields": {
    "temperature": "temperature0"
  }
}
```

