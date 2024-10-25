# Anomaly Triggers

```php
$anomalyTriggersController = $client->getAnomalyTriggersController();
```

## Class Name

`AnomalyTriggersController`

## Methods

* [List Anomaly Detection Triggers](../../doc/controllers/anomaly-triggers.md#list-anomaly-detection-triggers)
* [Update Anomaly Detection Trigger](../../doc/controllers/anomaly-triggers.md#update-anomaly-detection-trigger)
* [Create Anomaly Detection Trigger](../../doc/controllers/anomaly-triggers.md#create-anomaly-detection-trigger)
* [List Anomaly Detection Trigger Settings](../../doc/controllers/anomaly-triggers.md#list-anomaly-detection-trigger-settings)
* [Delete Anomaly Detection Trigger](../../doc/controllers/anomaly-triggers.md#delete-anomaly-detection-trigger)


# List Anomaly Detection Triggers

This corresponds to the M2M-MC SOAP interface, `GetTriggers`.

```php
function listAnomalyDetectionTriggers(): ApiResponse
```

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`GetTriggerResponseList[]`](../../doc/models/get-trigger-response-list.md).

## Example Usage

```php
$apiResponse = $anomalyTriggersController->listAnomalyDetectionTriggers();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 401 | Unauthorized | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 403 | Forbidden | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 404 | Not Found / Does not exist | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 406 | Format / Request Unacceptable | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 429 | Too many requests | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| Default | Error response | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |


# Update Anomaly Detection Trigger

This corresponds to the M2M-MC SOAP interface, `UpdateTriggerRequest`.

```php
function updateAnomalyDetectionTrigger(UpdateTriggerRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`UpdateTriggerRequest`](../../doc/models/update-trigger-request.md) | Body, Required | Update Trigger Request |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`AnomalyDetectionTrigger`](../../doc/models/anomaly-detection-trigger.md).

## Example Usage

```php
$body = UpdateTriggerRequestBuilder::init()
    ->anomalyTriggerRequest(
        AnomalyTriggerRequestBuilder::init()
            ->accountNames('0000123456-00001')
            ->includeAbnormal(true)
            ->includeVeryAbnormal(true)
            ->includeUnderExpectedUsage(true)
            ->includeOverExpectedUsage(true)
            ->build()
    )
    ->build();

$apiResponse = $anomalyTriggersController->updateAnomalyDetectionTrigger($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 401 | Unauthorized | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 403 | Forbidden | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 404 | Not Found / Does not exist | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 406 | Format / Request Unacceptable | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 429 | Too many requests | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| Default | Error response | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |


# Create Anomaly Detection Trigger

This corresponds to the M2M-MC SOAP interface, `CreateTrigger`.

```php
function createAnomalyDetectionTrigger(CreateTriggerRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateTriggerRequest`](../../doc/models/create-trigger-request.md) | Body, Required | Create Trigger Request |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`AnomalyDetectionTrigger`](../../doc/models/anomaly-detection-trigger.md).

## Example Usage

```php
$body = CreateTriggerRequestBuilder::init()
    ->anomalyTriggerRequest(
        AnomalyTriggerRequestBuilder::init()
            ->accountNames('0000123456-00001')
            ->includeAbnormal(true)
            ->includeVeryAbnormal(true)
            ->includeUnderExpectedUsage(true)
            ->includeOverExpectedUsage(true)
            ->build()
    )
    ->build();

$apiResponse = $anomalyTriggersController->createAnomalyDetectionTrigger($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 401 | Unauthorized | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 403 | Forbidden | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 404 | Not Found / Does not exist | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 406 | Format / Request Unacceptable | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 429 | Too many requests | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| Default | Error response | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |


# List Anomaly Detection Trigger Settings

This corresponds to the M2M-MC SOAP interface, `GetTriggers`.

```php
function listAnomalyDetectionTriggerSettings(string $triggerId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `triggerId` | `string` | Template, Required | trigger ID |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`GetTriggerResponseList[]`](../../doc/models/get-trigger-response-list.md).

## Example Usage

```php
$triggerId = 'be1b5958-3e11-41db-9abd-b1b7618c0035';

$apiResponse = $anomalyTriggersController->listAnomalyDetectionTriggerSettings($triggerId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 401 | Unauthorized | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 403 | Forbidden | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 404 | Not Found / Does not exist | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 406 | Format / Request Unacceptable | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| 429 | Too many requests | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |
| Default | Error response | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |


# Delete Anomaly Detection Trigger

Deletes a specific trigger ID

```php
function deleteAnomalyDetectionTrigger(string $triggerId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `triggerId` | `string` | Template, Required | The trigger ID to be deleted |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`AnomalyDetectionTrigger`](../../doc/models/anomaly-detection-trigger.md).

## Example Usage

```php
$triggerId = 'be1b5958-3e11-41db-9abd-b1b7618c0035';

$apiResponse = $anomalyTriggersController->deleteAnomalyDetectionTrigger($triggerId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | Error response | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |

