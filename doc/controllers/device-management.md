# Device Management

```php
$deviceManagementController = $client->getDeviceManagementController();
```

## Class Name

`DeviceManagementController`

## Methods

* [Activate Service for Devices](../../doc/controllers/device-management.md#activate-service-for-devices)
* [Add Devices](../../doc/controllers/device-management.md#add-devices)
* [Update Devices Contact Information](../../doc/controllers/device-management.md#update-devices-contact-information)
* [Update Devices Custom Fields](../../doc/controllers/device-management.md#update-devices-custom-fields)
* [Deactivate Service for Devices](../../doc/controllers/device-management.md#deactivate-service-for-devices)
* [Delete Deactivated Devices](../../doc/controllers/device-management.md#delete-deactivated-devices)
* [List Devices Information](../../doc/controllers/device-management.md#list-devices-information)
* [List Devices With Imei Iccid Mismatch](../../doc/controllers/device-management.md#list-devices-with-imei-iccid-mismatch)
* [Move Devices Within Accounts of Profile](../../doc/controllers/device-management.md#move-devices-within-accounts-of-profile)
* [Update Devices State](../../doc/controllers/device-management.md#update-devices-state)
* [Change Devices Service Plan](../../doc/controllers/device-management.md#change-devices-service-plan)
* [Suspend Service for Devices](../../doc/controllers/device-management.md#suspend-service-for-devices)
* [Restore Service for Suspended Devices](../../doc/controllers/device-management.md#restore-service-for-suspended-devices)
* [Check Devices Availability for Activation](../../doc/controllers/device-management.md#check-devices-availability-for-activation)
* [Retrieve Device Connection History](../../doc/controllers/device-management.md#retrieve-device-connection-history)
* [Update Devices Cost Center Code](../../doc/controllers/device-management.md#update-devices-cost-center-code)
* [Get Device Extended Diagnostic Information](../../doc/controllers/device-management.md#get-device-extended-diagnostic-information)
* [List Devices Provisioning History](../../doc/controllers/device-management.md#list-devices-provisioning-history)
* [List Current Devices PRL Version](../../doc/controllers/device-management.md#list-current-devices-prl-version)
* [Get Device Service Suspension Status](../../doc/controllers/device-management.md#get-device-service-suspension-status)
* [List Devices Usage History](../../doc/controllers/device-management.md#list-devices-usage-history)
* [Retrieve Aggregate Device Usage History](../../doc/controllers/device-management.md#retrieve-aggregate-device-usage-history)
* [Update Device Id](../../doc/controllers/device-management.md#update-device-id)
* [Device Upload](../../doc/controllers/device-management.md#device-upload)
* [Billed Usage Info](../../doc/controllers/device-management.md#billed-usage-info)
* [Usage Segmentation Label Association](../../doc/controllers/device-management.md#usage-segmentation-label-association)
* [Usage Segmentation Label Deletion](../../doc/controllers/device-management.md#usage-segmentation-label-deletion)
* [Activation Order Status](../../doc/controllers/device-management.md#activation-order-status)
* [Upload Device Identifier](../../doc/controllers/device-management.md#upload-device-identifier)


# Activate Service for Devices

If the devices do not already exist in the account, this API resource adds them before activation.

```php
function activateServiceForDevices(CarrierActivateRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CarrierActivateRequest`](../../doc/models/carrier-activate-request.md) | Body, Required | Request for activating a service on devices. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = CarrierActivateRequestBuilder::init(
    [
        AccountDeviceListBuilder::init(
            [
                DeviceIdBuilder::init(
                    '990013907835573',
                    'imei'
                )->build(),
                DeviceIdBuilder::init(
                    '89141390780800784259',
                    'iccid'
                )->build()
            ]
        )->build(),
        AccountDeviceListBuilder::init(
            [
                DeviceIdBuilder::init(
                    '990013907884259',
                    'imei'
                )->build(),
                DeviceIdBuilder::init(
                    '89141390780800735573',
                    'iccid'
                )->build()
            ]
        )->build()
    ],
    'm2m_4G',
    '98801'
)
    ->accountName('0868924207-00001')
    ->customFields(
        [
            CustomFieldsBuilder::init(
                'CustomField2',
                'SuperVend'
            )->build()
        ]
    )
    ->groupName('4G West')
    ->primaryPlaceOfUse(
        PlaceOfUseBuilder::init(
            AddressBuilder::init(
                '1600 Pennsylvania Ave NW',
                'Washington',
                'DC',
                '20500',
                'USA'
            )->build(),
            CustomerNameBuilder::init(
                'Zaffod',
                'Beeblebrox'
            )
                ->title('President')
                ->build()
        )->build()
    )->build();

$apiResponse = $deviceManagementController->activateServiceForDevices($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "595f5c44-c31c-4552-8670-020a1545a84d"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Add Devices

Use this API if you want to manage some device settings before you are ready to activate service for the devices.

```php
function addDevices(AddDevicesRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AddDevicesRequest`](../../doc/models/add-devices-request.md) | Body, Required | Devices to add. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`AddDevicesResult[]`](../../doc/models/add-devices-result.md).

## Example Usage

```php
$body = AddDevicesRequestBuilder::init(
    'preactive',
    [
        AccountDeviceListBuilder::init(
            [
                DeviceIdBuilder::init(
                    '990013907835573',
                    'imei'
                )->build(),
                DeviceIdBuilder::init(
                    '89141390780800784259',
                    'iccid'
                )->build()
            ]
        )->build(),
        AccountDeviceListBuilder::init(
            [
                DeviceIdBuilder::init(
                    '990013907884259',
                    'imei'
                )->build(),
                DeviceIdBuilder::init(
                    '89141390780800735573',
                    'iccid'
                )->build()
            ]
        )->build()
    ]
)
    ->accountName('0868924207-00001')
    ->customFields(
        [
            CustomFieldsBuilder::init(
                'CustomField2',
                'SuperVend'
            )->build()
        ]
    )
    ->groupName('West Region')
    ->build();

$apiResponse = $deviceManagementController->addDevices($body);
```

## Example Response *(as JSON)*

```json
[
  {
    "deviceIds": [
      {
        "id": "89148000000800784259",
        "kind": "iccid"
      }
    ],
    "response": "Success"
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Update Devices Contact Information

Sends a CarrierService callback message for each device in the request when the contact information has been changed, or if there was a problem and the change could not be completed.

```php
function updateDevicesContactInformation(ContactInfoUpdateRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ContactInfoUpdateRequest`](../../doc/models/contact-info-update-request.md) | Body, Required | Request to update contact information for devices. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = ContactInfoUpdateRequestBuilder::init(
    PlaceOfUseBuilder::init(
        AddressBuilder::init(
            '9868 Scranton Rd',
            'San Diego',
            'CA',
            '92121',
            'USA'
        )
            ->addressLine2('Suite A')
            ->zip4('0001')
            ->phone('1234567890')
            ->phoneType('H')
            ->emailAddress('zaffod@theinternet.com')
            ->build(),
        CustomerNameBuilder::init(
            'Zaffod',
            'Beeblebrox'
        )
            ->title('President')
            ->middleName('P')
            ->suffix('I')
            ->build()
    )->build()
)
    ->accountName('0212345678-00001')
    ->devices(
        [
            AccountDeviceListBuilder::init(
                [
                    DeviceIdBuilder::init(
                        '19110173057',
                        'ESN'
                    )->build(),
                    DeviceIdBuilder::init(
                        '19110173057',
                        'ESN'
                    )->build()
                ]
            )->build()
        ]
    )->build();

$apiResponse = $deviceManagementController->updateDevicesContactInformation($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "24da9f9a-d110-4a54-86b4-93fb76aab83c"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Update Devices Custom Fields

Sends a CarrierService callback message for each device in the request when the custom fields have been changed, or if there was a problem and the change could not be completed.

```php
function updateDevicesCustomFields(CustomFieldsUpdateRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CustomFieldsUpdateRequest`](../../doc/models/custom-fields-update-request.md) | Body, Required | Request to update custom field of devices. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = CustomFieldsUpdateRequestBuilder::init()
    ->customFieldsToUpdate(
        [
            CustomFieldsBuilder::init(
                'CustomField1',
                'West Region'
            )->build(),
            CustomFieldsBuilder::init(
                'CustomField2',
                'Distribution'
            )->build()
        ]
    )
    ->devices(
        [
            AccountDeviceListBuilder::init(
                [
                    DeviceIdBuilder::init(
                        '89148000000800139708',
                        'iccid'
                    )->build()
                ]
            )->build()
        ]
    )->build();

$apiResponse = $deviceManagementController->updateDevicesCustomFields($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "595f5c44-c31c-4552-8670-020a1545a84d"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Deactivate Service for Devices

Deactivating service for a device may result in an early termination fee (ETF) being charged to the account, depending on the terms of the contract with Verizon. If your contract allows ETF waivers and if you want to use one for a particular deactivation, set the etfWaiver value to True.

```php
function deactivateServiceForDevices(CarrierDeactivateRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CarrierDeactivateRequest`](../../doc/models/carrier-deactivate-request.md) | Body, Required | Request to deactivate service for one or more devices. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = CarrierDeactivateRequestBuilder::init(
    '0000123456-00001',
    [
        AccountDeviceListBuilder::init(
            [
                DeviceIdBuilder::init(
                    '20-digit ICCID',
                    'iccid'
                )->build()
            ]
        )->build(),
        AccountDeviceListBuilder::init(
            [
                DeviceIdBuilder::init(
                    '20-digit ICCID',
                    'iccid'
                )->build()
            ]
        )->build()
    ],
    'FF'
)
    ->etfWaiver(true)
    ->build();

$apiResponse = $deviceManagementController->deactivateServiceForDevices($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "595f5c44-c31c-4552-8670-020a1545a84d"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Delete Deactivated Devices

Use this API to remove unneeded devices from an account.

```php
function deleteDeactivatedDevices(DeleteDevicesRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeleteDevicesRequest`](../../doc/models/delete-devices-request.md) | Body, Required | Devices to delete. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeleteDevicesResult[]`](../../doc/models/delete-devices-result.md).

## Example Usage

```php
$body = DeleteDevicesRequestBuilder::init(
    [
        AccountDeviceListBuilder::init(
            [
                DeviceIdBuilder::init(
                    '09005470263',
                    'esn'
                )->build()
            ]
        )->build(),
        AccountDeviceListBuilder::init(
            [
                DeviceIdBuilder::init(
                    '85000022411113460014',
                    'iccid'
                )->build()
            ]
        )->build(),
        AccountDeviceListBuilder::init(
            [
                DeviceIdBuilder::init(
                    '85000022412313460016',
                    'iccid'
                )->build()
            ]
        )->build()
    ]
)->build();

$apiResponse = $deviceManagementController->deleteDeactivatedDevices($body);
```

## Example Response *(as JSON)*

```json
[
  {
    "deviceIds": {
      "id": "09005470263",
      "kind": "esn"
    },
    "status": "Success"
  },
  {
    "deviceIds": {
      "id": "85000022411113460014",
      "kind": "iccid"
    },
    "status": "Success"
  },
  {
    "deviceIds": [
      {
        "id": "85000022412313460016",
        "kind": "iccid"
      },
      {
        "id": "09005470263",
        "kind": "esn"
      }
    ],
    "status": "Failed",
    "message": "The device is not in deactive state."
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# List Devices Information

Returns information about a single device or information about all devices that match the given parameters. Returned information includes device provisioning state, service plan, MDN, MIN, and IP address.

```php
function listDevicesInformation(AccountDeviceListRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AccountDeviceListRequest`](../../doc/models/account-device-list-request.md) | Body, Required | Device information query. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`AccountDeviceListResult`](../../doc/models/account-device-list-result.md).

## Example Usage

```php
$body = AccountDeviceListRequestBuilder::init()
    ->deviceId(
        DeviceIdBuilder::init(
            '20-digit ICCID',
            'iccid'
        )->build()
    )->build();

$apiResponse = $deviceManagementController->listDevicesInformation($body);
```

## Example Response *(as JSON)*

```json
{
  "hasMoreData": false,
  "devices": [
    {
      "accountName": "0000123456-00001",
      "billingCycleEndDate": "2020-05-09T20:00:00-04:00",
      "carrierInformations": [
        {
          "carrierName": "Verizon Wireless",
          "servicePlan": "m2m4G",
          "state": "active"
        }
      ],
      "connected": false,
      "createdAt": "2019-08-07T10:42:15-04:00",
      "deviceIds": [
        {
          "id": "10-digit MDN",
          "kind": "mdn"
        },
        {
          "id": "15-digit IMEI",
          "kind": "imei"
        }
      ],
      "groupNames": [
        "southwest"
      ],
      "ipAddress": "0.0.0.0",
      "lastActivationBy": "Joe Q Public",
      "lastActivationDate": "2019-08-07T10:42:34-04:00",
      "lastConnectionDate": "2020-03-12T04:23:37-04:00"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# List Devices With Imei Iccid Mismatch

Returns a list of all 4G devices with an ICCID (SIM) that was not activated with the expected IMEI (hardware) during a specified time frame.

```php
function listDevicesWithImeiIccidMismatch(DeviceMismatchListRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeviceMismatchListRequest`](../../doc/models/device-mismatch-list-request.md) | Body, Required | Request to list devices with mismatched IMEIs and ICCIDs. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceMismatchListResult`](../../doc/models/device-mismatch-list-result.md).

## Example Usage

```php
$body = DeviceMismatchListRequestBuilder::init(
    DateFilterBuilder::init(
        '2020-05-01T15:00:00-08:00Z',
        '2020-07-30T15:00:00-08:00Z'
    )->build()
)
    ->devices(
        [
            AccountDeviceListBuilder::init(
                [
                    DeviceIdBuilder::init(
                        '8914800000080078',
                        'ICCID'
                    )->build(),
                    DeviceIdBuilder::init(
                        '5096300587',
                        'MDN'
                    )->build()
                ]
            )->build()
        ]
    )
    ->accountName('0342077109-00001')
    ->build();

$apiResponse = $deviceManagementController->listDevicesWithImeiIccidMismatch($body);
```

## Example Response *(as JSON)*

```json
{
  "devices": [
    {
      "accountName": "0212398765-00001",
      "mdn": "5096300587",
      "activationDate": "2011-01-21T10:55:27-08:00",
      "iccid": "89148000000800784259",
      "preImei": "990003420535573",
      "postImei": "987603420573553",
      "simOtaDate": "2017-12-01T16:00:00-08:00"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Move Devices Within Accounts of Profile

Move active devices from one billing account to another within a customer profile.

```php
function moveDevicesWithinAccountsOfProfile(MoveDeviceRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`MoveDeviceRequest`](../../doc/models/move-device-request.md) | Body, Required | Request to move devices between accounts. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = MoveDeviceRequestBuilder::init(
    '0212345678-00001'
)
    ->devices(
        [
            AccountDeviceListBuilder::init(
                [
                    DeviceIdBuilder::init(
                        '19110173057',
                        'ESN'
                    )->build()
                ]
            )->build()
        ]
    )
    ->servicePlan('M2M5GB')
    ->build();

$apiResponse = $deviceManagementController->moveDevicesWithinAccountsOfProfile($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "ec682a8b-e288-4806-934d-24e7a59ed889"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Update Devices State

Changes the provisioning state of one or more devices to a specified customer-defined service and state.

```php
function updateDevicesState(GoToStateRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`GoToStateRequest`](../../doc/models/go-to-state-request.md) | Body, Required | Request to change device state to one defined by the user. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = GoToStateRequestBuilder::init(
    'My Service',
    'My State',
    '87641',
    '94203'
)
    ->devices(
        [
            AccountDeviceListBuilder::init(
                [
                    DeviceIdBuilder::init(
                        '990013907835573',
                        'imei'
                    )->build(),
                    DeviceIdBuilder::init(
                        '89141390780800784259',
                        'iccid'
                    )->build()
                ]
            )->build(),
            AccountDeviceListBuilder::init(
                [
                    DeviceIdBuilder::init(
                        '990013907884259',
                        'imei'
                    )->build(),
                    DeviceIdBuilder::init(
                        '89141390780800735573',
                        'iccid'
                    )->build()
                ]
            )->build()
        ]
    )
    ->publicIpRestriction('unrestricted')
    ->groupName('4G West')
    ->primaryPlaceOfUse(
        PlaceOfUseBuilder::init(
            AddressBuilder::init(
                '1600 Pennsylvania Ave NW',
                'Washington',
                'DC',
                '20500',
                'USA'
            )->build(),
            CustomerNameBuilder::init(
                'Zaffod',
                'Beeblebrox'
            )
                ->title('President')
                ->build()
        )->build()
    )->build();

$apiResponse = $deviceManagementController->updateDevicesState($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "595f5c44-c31c-4552-8670-020a1545a84d"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Change Devices Service Plan

Changes the service plan for one or more devices.

```php
function changeDevicesServicePlan(ServicePlanUpdateRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ServicePlanUpdateRequest`](../../doc/models/service-plan-update-request.md) | Body, Required | Request to change device service plan. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = ServicePlanUpdateRequestBuilder::init(
    'new_service_plan_code'
)
    ->devices(
        [
            AccountDeviceListBuilder::init(
                [
                    DeviceIdBuilder::init(
                        'A100003685E561',
                        'meid'
                    )->build()
                ]
            )->build()
        ]
    )->build();

$apiResponse = $deviceManagementController->changeDevicesServicePlan($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "c8de7c1d-59b9-4cf3-b969-db76cb2ce509"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Suspend Service for Devices

Suspends service for one or more devices.

```php
function suspendServiceForDevices(CarrierActionsRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CarrierActionsRequest`](../../doc/models/carrier-actions-request.md) | Body, Required | Request to suspend service for one or more devices. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = CarrierActionsRequestBuilder::init()
    ->accountName('0000123456-00001')
    ->customFields(
        [
            CustomFieldsBuilder::init(
                'customField1',
                'key value'
            )->build()
        ]
    )
    ->devices(
        [
            AccountDeviceListBuilder::init(
                [
                    DeviceIdBuilder::init(
                        '20-digit ICCID',
                        'iccid'
                    )->build()
                ]
            )->build()
        ]
    )
    ->withBilling(true)
    ->groupName('name of the group')
    ->servicePlan('service plan name')
    ->build();

$apiResponse = $deviceManagementController->suspendServiceForDevices($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "595f5c44-c31c-4552-8670-020a1545a84d"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Restore Service for Suspended Devices

Restores service to one or more suspended devices.

```php
function restoreServiceForSuspendedDevices(CarrierActionsRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CarrierActionsRequest`](../../doc/models/carrier-actions-request.md) | Body, Required | Request to restore services of one or more suspended devices. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = CarrierActionsRequestBuilder::init()
    ->accountName('0000123456-00001')
    ->customFields(
        [
            CustomFieldsBuilder::init(
                'customField1',
                'key value'
            )->build()
        ]
    )
    ->devices(
        [
            AccountDeviceListBuilder::init(
                [
                    DeviceIdBuilder::init(
                        '20-digit ICCID',
                        'iccid'
                    )->build()
                ]
            )->build()
        ]
    )
    ->groupName('name of the group')
    ->servicePlan('service plan name')
    ->build();

$apiResponse = $deviceManagementController->restoreServiceForSuspendedDevices($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "595f5c44-c31c-4552-8670-020a1545a84d"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Check Devices Availability for Activation

Checks whether specified devices are registered by the manufacturer with the Verizon network and are available to be activated.

```php
function checkDevicesAvailabilityForActivation(DeviceActivationRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeviceActivationRequest`](../../doc/models/device-activation-request.md) | Body, Required | Request to check if devices can be activated or not. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = DeviceActivationRequestBuilder::init(
    '0212345678-00001',
    [
        AccountDeviceListBuilder::init(
            [
                DeviceIdBuilder::init(
                    'A100008385E561',
                    'meid'
                )->build()
            ]
        )->build()
    ]
)->build();

$apiResponse = $deviceManagementController->checkDevicesAvailabilityForActivation($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "595f5c44-c31c-4552-8670-020a1545a84d"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Retrieve Device Connection History

Each response includes a maximum of 500 records. To obtain more records, you can call the API multiple times, adjusting the earliest value each time to start where the previous request finished.

```php
function retrieveDeviceConnectionHistory(DeviceConnectionListRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeviceConnectionListRequest`](../../doc/models/device-connection-list-request.md) | Body, Required | Query to retrieve device connection history. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ConnectionHistoryResult`](../../doc/models/connection-history-result.md).

## Example Usage

```php
$body = DeviceConnectionListRequestBuilder::init(
    DeviceIdBuilder::init(
        '89141390780800784259',
        'iccid'
    )->build(),
    '2015-09-16T00:00:01Z',
    '2010-09-18T00:00:01Z'
)->build();

$apiResponse = $deviceManagementController->retrieveDeviceConnectionHistory($body);
```

## Example Response *(as JSON)*

```json
{
  "connectionHistory": [
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
    },
    {
      "connectionEventAttributes": [
        {
          "key": "BytesUsed",
          "value": "419863234"
        },
        {
          "key": "Event",
          "value": "Stop"
        },
        {
          "key": "Msisdn",
          "value": "15086303371"
        }
      ],
      "extendedAttributes": [],
      "occurredAt": "2015-12-19T01:20:00-05:00"
    }
  ],
  "hasMoreData": false
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Update Devices Cost Center Code

Changes or removes the CostCenterCode value or customer name and address (Primary Place of Use) for one or more devices.

```php
function updateDevicesCostCenterCode(DeviceCostCenterRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeviceCostCenterRequest`](../../doc/models/device-cost-center-request.md) | Body, Required | Request to update cost center code value for one or more devices. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = DeviceCostCenterRequestBuilder::init()
    ->costCenter('cc12345')
    ->devices(
        [
            AccountDeviceListBuilder::init(
                [
                    DeviceIdBuilder::init(
                        '89148000000800139708',
                        'iccid'
                    )->build()
                ]
            )->build()
        ]
    )->build();

$apiResponse = $deviceManagementController->updateDevicesCostCenterCode($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "595f5c44-c31c-4552-8670-020a1545a84d"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Get Device Extended Diagnostic Information

Returns extended diagnostic information about a specified device, including connectivity, provisioning, billing and location status.

```php
function getDeviceExtendedDiagnosticInformation(DeviceExtendedDiagnosticsRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeviceExtendedDiagnosticsRequest`](../../doc/models/device-extended-diagnostics-request.md) | Body, Required | Request to query extended diagnostics information for a device. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceExtendedDiagnosticsResult`](../../doc/models/device-extended-diagnostics-result.md).

## Example Usage

```php
$body = DeviceExtendedDiagnosticsRequestBuilder::init(
    '1223334444-00001',
    [
        DeviceIdBuilder::init(
            '10-digit MDN',
            'mdn'
        )->build()
    ]
)->build();

$apiResponse = $deviceManagementController->getDeviceExtendedDiagnosticInformation($body);
```

## Example Response *(as JSON)*

```json
{
  "categories": [
    {
      "categoryName": "Connectivity",
      "extendedAttributes": [
        {
          "key": "Connected",
          "value": "false"
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


# List Devices Provisioning History

Returns the provisioning history of a specified device during a specified time period.

```php
function listDevicesProvisioningHistory(DeviceProvisioningHistoryListRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeviceProvisioningHistoryListRequest`](../../doc/models/device-provisioning-history-list-request.md) | Body, Required | Query to obtain device provisioning history. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceProvisioningHistoryListResult[]`](../../doc/models/device-provisioning-history-list-result.md).

## Example Usage

```php
$body = DeviceProvisioningHistoryListRequestBuilder::init(
    DeviceIdBuilder::init(
        '89141390780800784259',
        'iccid'
    )->build(),
    '2015-09-16T00:00:01Z',
    '2015-09-18T00:00:01Z'
)->build();

$apiResponse = $deviceManagementController->listDevicesProvisioningHistory($body);
```

## Example Response *(as JSON)*

```json
[
  {
    "provisioningHistory": [
      {
        "occurredAt": "2015-12-17T13:56:13-05:00",
        "status": "Success",
        "eventBy": "Harry Potter",
        "eventType": "Activation Confirmed",
        "servicePlan": "Tablet5GB",
        "mdn": "",
        "msisdn": "15086303371",
        "extendedAttributes": []
      }
    ],
    "hasMoreData": false
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# List Current Devices PRL Version

4G and GSM devices do not have a PRL.

```php
function listCurrentDevicesPRLVersion(DevicePrlListRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DevicePrlListRequest`](../../doc/models/device-prl-list-request.md) | Body, Required | Request to query device PRL. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = DevicePrlListRequestBuilder::init()
    ->accountName('101234-0001')
    ->groupName('West Region')
    ->servicePlan('3G 2MB')
    ->build();

$apiResponse = $deviceManagementController->listCurrentDevicesPRLVersion($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "595f5c44-c31c-4552-8670-020a1545a84d"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Get Device Service Suspension Status

Returns DeviceSuspensionStatus callback messages containing the current device state and information on how many days a device has been suspended and can continue to be suspended.

```php
function getDeviceServiceSuspensionStatus(DeviceSuspensionStatusRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeviceSuspensionStatusRequest`](../../doc/models/device-suspension-status-request.md) | Body, Required | Request to obtain service suspenstion status for a device. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = DeviceSuspensionStatusRequestBuilder::init()
    ->filter(
        DeviceFilterWithoutAccountBuilder::init()
            ->groupName('suspended devices')
            ->build()
    )
    ->accountName('1223334444-00001')
    ->build();

$apiResponse = $deviceManagementController->getDeviceServiceSuspensionStatus($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "904dcdc6-a590-45e4-ac76-403306f6d883"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# List Devices Usage History

Returns the network data usage history of a device during a specified time period.

```php
function listDevicesUsageHistory(DeviceUsageListRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeviceUsageListRequest`](../../doc/models/device-usage-list-request.md) | Body, Required | Request to obtain usage history for a specific device. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceUsageListResult`](../../doc/models/device-usage-list-result.md).

## Example Usage

```php
$body = DeviceUsageListRequestBuilder::init(
    '2018-03-20T00:00:01Z',
    '2020-12-31T00:00:01Z'
)->build();

$apiResponse = $deviceManagementController->listDevicesUsageHistory($body);
```

## Example Response *(as JSON)*

```json
{
  "hasMoreData": false,
  "usageHistory": [
    {
      "bytesUsed": 4096,
      "extendedAttributes": [
        {
          "key": "MoSms",
          "value": "0"
        }
      ],
      "smsUsed": 0,
      "source": "Raw Usage",
      "timestamp": "2020-12-01T00:00:00Z"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Retrieve Aggregate Device Usage History

The information is returned in a callback response, so you must register a URL for DeviceUsage callback messages using the POST /callbacks API.

```php
function retrieveAggregateDeviceUsageHistory(DeviceAggregateUsageListRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeviceAggregateUsageListRequest`](../../doc/models/device-aggregate-usage-list-request.md) | Body, Required | A request to retrieve aggregated device usage history information. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = DeviceAggregateUsageListRequestBuilder::init(
    '2021-08-01T00:00:00-06:00',
    '2021-08-30T00:00:00-06:00'
)
    ->deviceIds(
        [
            DeviceIdBuilder::init(
                '84258000000891490087',
                'ICCID'
            )->build()
        ]
    )
    ->accountName('9992330389-00001')
    ->build();

$apiResponse = $deviceManagementController->retrieveAggregateDeviceUsageHistory($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "1631e200-7398-4609-b1f8-398341229176"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Update Device Id

Changes the identifier of a 3G or 4G device to match hardware changes made for a line of service. Use this request to transfer the line of service and the MDN to new hardware, or to change the MDN.

```php
function updateDeviceId(string $serviceType, ChangeDeviceIdRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `serviceType` | `string` | Template, Required | Identifier type. |
| `body` | [`ChangeDeviceIdRequest`](../../doc/models/change-device-id-request.md) | Body, Required | Request to update device id. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$serviceType = 'serviceType6';

$body = ChangeDeviceIdRequestBuilder::init(
    [
        DeviceIdBuilder::init(
            '42590078891480000008',
            'iccid'
        )->build()
    ]
)
    ->change4gOption('ChangeICCID')
    ->deviceIdsTo(
        [
            DeviceIdBuilder::init(
                '89148000000842590078',
                'iccid'
            )->build()
        ]
    )
    ->servicePlan('4G 2GB')
    ->zipCode('98802')
    ->build();

$apiResponse = $deviceManagementController->updateDeviceId(
    $serviceType,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "a28892ea-6503-4aa7-bfa2-4cd45d42f61b"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Device Upload

This corresponds to the M2M-MC SOAP interface, `DeviceUploadService`.

```php
function deviceUpload(DeviceUploadRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`DeviceUploadRequest`](../../doc/models/device-upload-request.md) | Body, Required | Device Upload Query |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`RequestResponse`](../../doc/models/request-response.md).

## Example Usage

```php
$body = DeviceUploadRequestBuilder::init(
    '1223334444-00001',
    [
        DeviceListBuilder::init()
            ->deviceIds(
                [
                    DeviceIdBuilder::init(
                        '15-digit IMEI',
                        'imei'
                    )->build()
                ]
            )->build(),
        DeviceListBuilder::init()
            ->deviceIds(
                [
                    DeviceIdBuilder::init(
                        '15-digit IMEI',
                        'imei'
                    )->build()
                ]
            )->build()
    ],
    'bob@mycompany.com',
    'VZW123456',
    'IMEI'
)->build();

$apiResponse = $deviceManagementController->deviceUpload($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error Response | [`RestErrorResponseException`](../../doc/models/rest-error-response-exception.md) |


# Billed Usage Info

Gets billed usage for for either multiple devices or an entire billing account.

```php
function billedUsageInfo(BilledusageListRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`BilledusageListRequest`](../../doc/models/billedusage-list-request.md) | Body, Required | Request to list devices with mismatched IMEIs and ICCIDs. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = BilledusageListRequestBuilder::init(
    '0342077109-00001'
)->build();

$apiResponse = $deviceManagementController->billedUsageInfo($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "595f5c44-c31c-4552-8670-020a1545a84d"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Usage Segmentation Label Association

Allows you to associate your own usage segmentation label with a device.

```php
function usageSegmentationLabelAssociation(AssociateLabelRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AssociateLabelRequest`](../../doc/models/associate-label-request.md) | Body, Required | Request to associate a label to a device. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = AssociateLabelRequestBuilder::init(
    '1223334444-00001',
    AccountLabelsBuilder::init(
        [
            DeviceListBuilder::init()->build()
        ]
    )->build()
)->build();

$apiResponse = $deviceManagementController->usageSegmentationLabelAssociation($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "ec682a8b-e288-4806-934d-24e7a59ed889"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Usage Segmentation Label Deletion

Allow customers to remove the associated label from a device.

```php
function usageSegmentationLabelDeletion(string $accountName, LabelsList $labelList): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Query, Required | The numeric name of the account. |
| `labelList` | [`LabelsList`](../../doc/models/labels-list.md) | Query, Required | A list of the Label IDs to remove from the exclusion list. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$accountName = '0000123456-00001';

$labelList = LabelsListBuilder::init()->build();

$apiResponse = $deviceManagementController->usageSegmentationLabelDeletion(
    $accountName,
    $labelList
);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "ec682a8b-e288-4806-934d-24e7a59ed889"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Activation Order Status

Uploads and activates device identifiers and SKUs for new devices from OEMs to Verizon.

```php
function activationOrderStatus(UploadsActivatesDeviceRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`UploadsActivatesDeviceRequest`](../../doc/models/uploads-activates-device-request.md) | Body, Required | Request to Uploads and activates device. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = UploadsActivatesDeviceRequestBuilder::init(
    '1223334444-00001',
    'bob@mycompany.com',
    'VZW123456',
    'IMEI ICCID Pair',
    '15MBShr',
    '92222',
    [
        DeviceListBuilder::init()
            ->deviceIds(
                [
                    DeviceIdBuilder::init(
                        '990013907835573',
                        'imei'
                    )->build(),
                    DeviceIdBuilder::init(
                        '89141390780800784259',
                        'iccid'
                    )->build()
                ]
            )->build()
    ]
)
    ->carrierIpPoolName('')
    ->build();

$apiResponse = $deviceManagementController->activationOrderStatus($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "ec682a8b-e288-4806-934d-24e7a59ed889"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Upload Device Identifier

Checks the status of an activation order and lists where the order is in the provisioning process.

```php
function uploadDeviceIdentifier(CheckOrderStatusRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CheckOrderStatusRequest`](../../doc/models/check-order-status-request.md) | Body, Required | The request body identifies the device and reporting period that you want included in the report. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceManagementResult`](../../doc/models/device-management-result.md).

## Example Usage

```php
$body = CheckOrderStatusRequestBuilder::init(
    '4Gpublicaccount ',
    [
        DeviceListBuilder::init()
            ->deviceIds(
                [
                    DeviceIdBuilder::init(
                        '20112019672551234613',
                        'iccid'
                    )->build()
                ]
            )->build()
    ]
)
    ->orderRequestId(' f55fea16-3664-4a32-ae9d-c0cbe3eedf1d ')
    ->build();

$apiResponse = $deviceManagementController->uploadDeviceIdentifier($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "c7b45cf2-cab1-4e42-82f8-20350f4c4ea3"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |

