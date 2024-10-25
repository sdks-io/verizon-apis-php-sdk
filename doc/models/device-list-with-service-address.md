
# Device List With Service Address

## Structure

`DeviceListWithServiceAddress`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceId` | [`?(M5gBideviceId1[])`](../../doc/models/5g-bidevice-id-1.md) | Optional | - | getDeviceId(): ?array | setDeviceId(?array deviceId): void |
| `primaryPlaceofuse` | [`?M5gBiaddressAndcustomerinfo`](../../doc/models/5g-biaddress-andcustomerinfo.md) | Optional | - | getPrimaryPlaceofuse(): ?M5gBiaddressAndcustomerinfo | setPrimaryPlaceofuse(?M5gBiaddressAndcustomerinfo primaryPlaceofuse): void |

## Example (as JSON)

```json
{
  "deviceId": [
    {
      "id": "id0",
      "kind": "kind8"
    }
  ],
  "primaryPlaceofuse": {
    "primaryPlaceofuse": {
      "address": {
        "addressLine1": "addressLine18",
        "city": "city6",
        "state": "state2",
        "zip": "zip0",
        "zip+4": "zip+48"
      },
      "customerName": {
        "firstName": "firstName4",
        "lastName": "lastName4",
        "middleName": "middleName8",
        "title": "title4",
        "suffex": "suffex4"
      }
    }
  }
}
```

