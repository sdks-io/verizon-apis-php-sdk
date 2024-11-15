# Usage Trigger Management

```php
$usageTriggerManagementController = $client->getUsageTriggerManagementController();
```

## Class Name

`UsageTriggerManagementController`

## Methods

* [Create New Trigger](../../doc/controllers/usage-trigger-management.md#create-new-trigger)
* [Update Trigger](../../doc/controllers/usage-trigger-management.md#update-trigger)
* [Delete Trigger](../../doc/controllers/usage-trigger-management.md#delete-trigger)


# Create New Trigger

Create a new usage trigger, which will send an alert when the number of device location service transactions reaches a specified percentage of the monthly subscription amount.

```php
function createNewTrigger(?UsageTriggerAddRequest $body = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?UsageTriggerAddRequest`](../../doc/models/usage-trigger-add-request.md) | Body, Optional | License assignment. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`UsageTriggerResponse`](../../doc/models/usage-trigger-response.md).

## Example Usage

```php
$body = UsageTriggerAddRequestBuilder::init(
    '0212312345-00001',
    ServiceNameEnum::LOCATION,
    '95'
)
    ->triggerName('95% usage alert')
    ->allowExcess(true)
    ->sendSmsNotification(true)
    ->smsPhoneNumbers('5551231234')
    ->sendEmailNotification(true)
    ->emailAddresses('you@theinternet.com')
    ->build();

$apiResponse = $usageTriggerManagementController->createNewTrigger($body);
```

## Example Response *(as JSON)*

```json
{
  "triggerId": "595f5c44-c31c-4552-8670-020a1545a84d",
  "triggerName": "90 percent",
  "accountName": "1000012345-00001",
  "serviceName": "Location",
  "thresholdValue": "90",
  "allowExcess": true,
  "sendSmsNotification": true,
  "smsPhoneNumbers": "5558794321",
  "sendEmailNotification": false,
  "emailAddresses": "",
  "createDate": "2018-08-11",
  "updateDate": "2018-08-12"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error | [`DeviceLocationResultException`](../../doc/models/device-location-result-exception.md) |


# Update Trigger

Update an existing usage trigger

```php
function updateTrigger(string $triggerId, ?UsageTriggerUpdateRequest $body = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `triggerId` | `string` | Template, Required | Usage trigger ID |
| `body` | [`?UsageTriggerUpdateRequest`](../../doc/models/usage-trigger-update-request.md) | Body, Optional | New trigger values |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`UsageTriggerResponse`](../../doc/models/usage-trigger-response.md).

## Example Usage

```php
$triggerId = '595f5c44-c31c-4552-8670-020a1545a84d';

$body = UsageTriggerUpdateRequestBuilder::init(
    '1000012345-00001'
)
    ->thresholdValue('95')
    ->build();

$apiResponse = $usageTriggerManagementController->updateTrigger(
    $triggerId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "triggerId": "595f5c44-c31c-4552-8670-020a1545a84d",
  "triggerName": "90 percent",
  "accountName": "1000012345-00001",
  "serviceName": "Location",
  "thresholdValue": "90",
  "allowExcess": true,
  "sendSmsNotification": true,
  "smsPhoneNumbers": "5558794321",
  "sendEmailNotification": false,
  "emailAddresses": "",
  "createDate": "2018-08-11",
  "updateDate": "2018-08-12"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error | [`DeviceLocationResultException`](../../doc/models/device-location-result-exception.md) |


# Delete Trigger

eletes the specified usage trigger from the given account

```php
function deleteTrigger(string $accountName, string $triggerId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Template, Required | Account name |
| `triggerId` | `string` | Template, Required | Usage trigger ID |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`DeviceLocationSuccessResult`](../../doc/models/device-location-success-result.md).

## Example Usage

```php
$accountName = '0212312345-00001';

$triggerId = '595f5c44-c31c-4552-8670-020a1545a84d';

$apiResponse = $usageTriggerManagementController->deleteTrigger(
    $accountName,
    $triggerId
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
| 400 | Unexpected error | [`DeviceLocationResultException`](../../doc/models/device-location-result-exception.md) |

