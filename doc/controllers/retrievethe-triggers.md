# Retrievethe Triggers

```php
$retrievetheTriggersController = $client->getRetrievetheTriggersController();
```

## Class Name

`RetrievetheTriggersController`

## Methods

* [Get All Available Triggers](../../doc/controllers/retrievethe-triggers.md#get-all-available-triggers)
* [Get All Triggers by Account Name](../../doc/controllers/retrievethe-triggers.md#get-all-triggers-by-account-name)
* [Get All Triggers by Trigger Category](../../doc/controllers/retrievethe-triggers.md#get-all-triggers-by-trigger-category)
* [Get Triggers by Id](../../doc/controllers/retrievethe-triggers.md#get-triggers-by-id)


# Get All Available Triggers

Retrieves all of the available triggers for pseudo-MDN.

```php
function getAllAvailableTriggers(): ApiResponse
```

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`TriggerValueResponse`](../../doc/models/trigger-value-response.md).

## Example Usage

```php
$apiResponse = $retrieveTheTriggersController->getAllAvailableTriggers();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`ReadySimRestErrorResponseException`](../../doc/models/ready-sim-rest-error-response-exception.md) |


# Get All Triggers by Account Name

Retrieve the triggers associated with an account name.

```php
function getAllTriggersByAccountName(string $accountName): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Template, Required | The account name |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`TriggerValueResponse`](../../doc/models/trigger-value-response.md).

## Example Usage

```php
$accountName = '0000123456-000001';

$apiResponse = $retrieveTheTriggersController->getAllTriggersByAccountName($accountName);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`ReadySimRestErrorResponseException`](../../doc/models/ready-sim-rest-error-response-exception.md) |


# Get All Triggers by Trigger Category

Retrieves all of the triggers for the specified account associated with the PromoAlert category

```php
function getAllTriggersByTriggerCategory(): ApiResponse
```

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`TriggerValueResponse2`](../../doc/models/trigger-value-response-2.md).

## Example Usage

```php
$apiResponse = $retrieveTheTriggersController->getAllTriggersByTriggerCategory();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`ReadySimRestErrorResponseException`](../../doc/models/ready-sim-rest-error-response-exception.md) |


# Get Triggers by Id

Retrives a specific trigger by its ID.

```php
function getTriggersById(string $triggerId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `triggerId` | `string` | Template, Required | The ID of a specific trigger |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`TriggerValueResponse2`](../../doc/models/trigger-value-response-2.md).

## Example Usage

```php
$triggerId = '2874DEC7-26CF-4797-9C6A-B5A2AC72D526';

$apiResponse = $retrieveTheTriggersController->getTriggersById($triggerId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`ReadySimRestErrorResponseException`](../../doc/models/ready-sim-rest-error-response-exception.md) |

