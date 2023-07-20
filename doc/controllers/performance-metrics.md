# Performance Metrics

```php
$performanceMetricsController = $client->getPerformanceMetricsController();
```

## Class Name

`PerformanceMetricsController`


# Query MEC Performance Metrics

Query the most recent data for Key Performance Indicators (KPIs) like network availability, MEC hostnames and more.

```php
function queryMECPerformanceMetrics(?QueryMECPerformanceMetricsRequest $body = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?QueryMECPerformanceMetricsRequest`](../../doc/models/query-mec-performance-metrics-request.md) | Body, Optional | - |

## Requires scope

`EDGEDISCOVERYREAD`, `EDGESERVICEPROFILEREAD`, `EDGESERVICEPROFILEWRITE`, `EDGESERVICEREGISTRYREAD`, `EDGESERVICEREGISTRYWRITE`, `TS_APPLICATION_RO`, `TS_MEC_FULLACCESS`, `TS_MEC_LIMITACCESS`

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`MECPerformanceMetrics`](../../doc/models/mec-performance-metrics.md).

## Example Usage

```php
$body = QueryMECPerformanceMetricsRequestBuilder::init(
    '440246108109673',
    '10691876598'
)->build();

$apiResponse = $performanceMetricsController->queryMECPerformanceMetrics($body);
```

## Example Response *(as JSON)*

```json
{
  "QueryStatus": "Success",
  "Start": "1/28/2021 12:00:00",
  "End": "1/28/2021 12:15:00",
  "QueryResult": [
    {
      "name": "NetworkAvailability",
      "data": [
        "100",
        "percent",
        "high"
      ]
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request. | [`EdgePerformanceResultException`](../../doc/models/edge-performance-result-exception.md) |
| 401 | Unauthorized request. | [`EdgePerformanceResultException`](../../doc/models/edge-performance-result-exception.md) |
| 403 | Request forbidden. | [`EdgePerformanceResultException`](../../doc/models/edge-performance-result-exception.md) |
| 404 | Resource Not Found. | [`EdgePerformanceResultException`](../../doc/models/edge-performance-result-exception.md) |
| 405 | Method Not Allowed. | [`EdgePerformanceResultException`](../../doc/models/edge-performance-result-exception.md) |
| 503 | Service Unavailable. | [`EdgePerformanceResultException`](../../doc/models/edge-performance-result-exception.md) |

