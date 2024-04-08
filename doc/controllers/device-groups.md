# Device Groups

```php
$deviceGroupsController = $client->getDeviceGroupsController();
```

## Class Name

`DeviceGroupsController`

## Methods

* [Create Device Group](../../doc/controllers/device-groups.md#create-device-group)
* [List Device Groups](../../doc/controllers/device-groups.md#list-device-groups)
* [Get Device Group Information](../../doc/controllers/device-groups.md#get-device-group-information)
* [Update Device Group](../../doc/controllers/device-groups.md#update-device-group)
* [Delete Device Group](../../doc/controllers/device-groups.md#delete-device-group)


# Create Device Group

Create a new device group and optionally add devices to the group. Device groups can make it easier to manage similar devices and to get reports on their usage.

```php
function createDeviceGroup(CreateDeviceGroupRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateDeviceGroupRequest`](../../doc/models/create-device-group-request.md) | Body, Required | A request to create a new device group. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ConnectivityManagementSuccessResult`](../../doc/models/connectivity-management-success-result.md).

## Example Usage

```php
$body = CreateDeviceGroupRequestBuilder::init(
    '0000123456-00001',
    'descriptive string',
    'group name'
)
    ->devicesToAdd(
        [
            DeviceIdBuilder::init(
                '15-digit IMEI',
                'imei'
            )->build()
        ]
    )->build();

$apiResponse = $deviceGroupsController->createDeviceGroup($body);
```

## Example Response *(as JSON)*

```json
{
  "success": true
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# List Device Groups

Returns a list of all device groups in a specified account.

```php
function listDeviceGroups(string $aname): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `aname` | `string` | Template, Required | Account name. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceGroup[]`](../../doc/models/device-group.md).

## Example Usage

```php
$aname = '0252012345-00001';

$apiResponse = $deviceGroupsController->listDeviceGroups($aname);
```

## Example Response *(as JSON)*

```json
[
  {
    "name": "Unassigned Devices",
    "description": "All devices that are not in another device group.",
    "isDefaultGroup": true,
    "extendedAttributes": []
  },
  {
    "name": "West Coast Devices",
    "description": "",
    "isDefaultGroup": false,
    "extendedAttributes": []
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Get Device Group Information

When HTTP status is 202, a URL will be returned in the Location header of the form /groups/{aname}/name/{gname}/?next={token}. This URL can be used to request the next set of groups.

```php
function getDeviceGroupInformation(string $aname, string $gname, ?int $next = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `aname` | `string` | Template, Required | Account name. |
| `gname` | `string` | Template, Required | Group name. |
| `next` | `?int` | Query, Optional | Continue the previous query from the pageUrl pagetoken. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceGroupDevicesData`](../../doc/models/device-group-devices-data.md).

## Example Usage

```php
$aname = '0252012345-00001';

$gname = 'gname2';

$apiResponse = $deviceGroupsController->getDeviceGroupInformation(
    $aname,
    $gname
);
```

## Example Response *(as JSON)*

```json
{
  "name": "Nebraska Trucks",
  "description": "All service trucks in Nebraska.",
  "hasMoreData": false,
  "devices": [
    {
      "deviceIds": [
        {
          "id": "12345",
          "kind": "meid"
        },
        {
          "id": "54321",
          "kind": "mdn"
        }
      ]
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Update Device Group

Make changes to a device group, including changing the name and description, and adding or removing devices.

```php
function updateDeviceGroup(string $aname, string $gname, DeviceGroupUpdateRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `aname` | `string` | Template, Required | Account name. |
| `gname` | `string` | Template, Required | Group name. |
| `body` | [`DeviceGroupUpdateRequest`](../../doc/models/device-group-update-request.md) | Body, Required | Request to update device group. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ConnectivityManagementSuccessResult`](../../doc/models/connectivity-management-success-result.md).

## Example Usage

```php
$aname = '0252012345-00001';

$gname = 'gname2';

$body = DeviceGroupUpdateRequestBuilder::init()
    ->devicesToAdd(
        [
            DeviceIdBuilder::init(
                '990003420535537',
                'imei'
            )->build()
        ]
    )
    ->newGroupDescription('All western region tank level monitors.')
    ->newGroupName('Western region tanks')
    ->build();

$apiResponse = $deviceGroupsController->updateDeviceGroup(
    $aname,
    $gname,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "success": true
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Delete Device Group

Deletes a device group from the account. Devices in the group are moved to the default device group and are not deleted from the account.

```php
function deleteDeviceGroup(string $aname, string $gname): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `aname` | `string` | Template, Required | Account name. |
| `gname` | `string` | Template, Required | Group name. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ConnectivityManagementSuccessResult`](../../doc/models/connectivity-management-success-result.md).

## Example Usage

```php
$aname = '0252012345-00001';

$gname = 'gname2';

$apiResponse = $deviceGroupsController->deleteDeviceGroup(
    $aname,
    $gname
);
```

## Example Response *(as JSON)*

```json
{
  "success": true
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |

