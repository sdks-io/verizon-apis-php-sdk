# Anomaly Triggers V2

```php
$anomalyTriggersV2Controller = $client->getAnomalyTriggersV2Controller();
```

## Class Name

`AnomalyTriggersV2Controller`

## Methods

* [Create Anomaly Detection Trigger V2](../../doc/controllers/anomaly-triggers-v2.md#create-anomaly-detection-trigger-v2)
* [Update Anomaly Detection Trigger V2](../../doc/controllers/anomaly-triggers-v2.md#update-anomaly-detection-trigger-v2)
* [List Anomaly Detection Trigger Settings V2](../../doc/controllers/anomaly-triggers-v2.md#list-anomaly-detection-trigger-settings-v2)


# Create Anomaly Detection Trigger V2

Creates the trigger to identify an anomaly.

```php
function createAnomalyDetectionTriggerV2(array $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`CreateTriggerRequestOptions[]`](../../doc/models/create-trigger-request-options.md) | Body, Required | Request to create an anomaly trigger. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`AnomalyDetectionTrigger`](../../doc/models/anomaly-detection-trigger.md).

## Example Usage

```php
$body = [
    CreateTriggerRequestOptionsBuilder::init()
        ->name('Anomaly Daily Usage REST Test-Patch 1')
        ->triggerCategory('UsageAnomaly')
        ->accountName('0000123456-00001')
        ->anomalyTriggerRequest(
            AnomalyTriggerRequestBuilder::init()
                ->accountNames('0000123456-00001')
                ->includeAbnormal(true)
                ->includeVeryAbnormal(true)
                ->includeUnderExpectedUsage(true)
                ->includeOverExpectedUsage(true)
                ->build()
        )
        ->notification(
            NotificationBuilder::init()
                ->notificationType('DailySummary')
                ->callback(true)
                ->emailNotification(false)
                ->notificationGroupName('Anomaly Test API')
                ->notificationFrequencyFactor(3)
                ->notificationFrequencyInterval('Hourly')
                ->externalEmailRecipients('placeholder@verizon.com')
                ->smsNotification(true)
                ->smsNumbers(
                    [
                        SMSNumberBuilder::init()
                            ->carrier('US Cellular')
                            ->number('9299280711')
                            ->build()
                    ]
                )
                ->reminder(true)
                ->severity('Critical')
                ->build()
        )
        ->build()
];

$apiResponse = $anomalyTriggersV2Controller->createAnomalyDetectionTriggerV2($body);
```

## Example Response *(as JSON)*

```json
{
  "triggerId": "595f5c44-c31c-4552-8670-020a1545a84d"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | An error occurred. | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |


# Update Anomaly Detection Trigger V2

Updates an existing trigger using the account name.

```php
function updateAnomalyDetectionTriggerV2(array $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`UpdateTriggerRequestOptions[]`](../../doc/models/update-trigger-request-options.md) | Body, Required | Request to update existing trigger. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`IntelligenceSuccessResult`](../../doc/models/intelligence-success-result.md).

## Example Usage

```php
$body = [
    UpdateTriggerRequestOptionsBuilder::init()
        ->triggerId('595f5c44-c31c-4552-8670-020a1545a84d')
        ->triggerName('Anomaly Daily Usage REST Test-Patch Update 4')
        ->triggerCategory('UsageAnomaly')
        ->accountName('0000123456-00001')
        ->anomalyTriggerRequest(
            AnomalyTriggerRequestBuilder::init()
                ->accountNames('0000123456-00001')
                ->includeAbnormal(true)
                ->includeVeryAbnormal(true)
                ->includeUnderExpectedUsage(false)
                ->includeOverExpectedUsage(true)
                ->build()
        )
        ->notification(
            NotificationBuilder::init()
                ->notificationType('DailySummary')
                ->callback(true)
                ->emailNotification(false)
                ->notificationGroupName('Anomaly Test API')
                ->notificationFrequencyFactor(3)
                ->notificationFrequencyInterval('Hourly')
                ->externalEmailRecipients('placeholder@verizon.com')
                ->smsNotification(true)
                ->smsNumbers(
                    [
                        SMSNumberBuilder::init()
                            ->carrier('US Cellular')
                            ->number('9299280711')
                            ->build()
                    ]
                )
                ->reminder(true)
                ->severity('Critical')
                ->build()
        )
        ->build()
];

$apiResponse = $anomalyTriggersV2Controller->updateAnomalyDetectionTriggerV2($body);
```

## Example Response *(as JSON)*

```json
{
  "status": "Success"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | An error occurred. | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |


# List Anomaly Detection Trigger Settings V2

Retrieves the values for a specific trigger ID.

```php
function listAnomalyDetectionTriggerSettingsV2(string $triggerId): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `triggerId` | `string` | Template, Required | The trigger ID of a specific trigger. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`AnomalyTriggerResult`](../../doc/models/anomaly-trigger-result.md).

## Example Usage

```php
$triggerId = 'be1b5958-3e11-41db-9abd-b1b7618c0035';

$apiResponse = $anomalyTriggersV2Controller->listAnomalyDetectionTriggerSettingsV2($triggerId);
```

## Example Response *(as JSON)*

```json
{
  "triggers": [
    {
      "triggerId": "BE1B5958-3E11-41DB-9ABD-B1B7618C0035",
      "triggerName": "Anomaly Daily Usage REST Test-1",
      "organizationName": "AnamolyDetectionRTRTest",
      "triggerCategory": "UsageAnomaly",
      "triggerAttributes": [
        {
          "key": "DataPercentage50",
          "value": false
        }
      ],
      "createdAt": "2021-10-21T23:57:03.397.0000Z",
      "modifiedAt": "2021-10-21T23:57:03.397.0000Z",
      "notification": {
        "notificationType": "DailySummary",
        "callback": true,
        "emailNotification": true,
        "notificationGroupName": "Anomaly Test API",
        "notificationFrequencyFactor": -2147483648,
        "externalEmailRecipients": "placeholder@verizon.com",
        "smsNotification": true,
        "smsNumbers": [
          {
            "carrier": "US Cellular",
            "number": "9299280711"
          }
        ],
        "reminder": false,
        "severity": "Critical"
      }
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| Default | An error occurred. | [`IntelligenceResultException`](../../doc/models/intelligence-result-exception.md) |

