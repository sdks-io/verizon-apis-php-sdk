# Service Plans

```php
$servicePlansController = $client->getServicePlansController();
```

## Class Name

`ServicePlansController`


# List Account Service Plans

Returns a list of all data service plans that are associated with a specified billing account. When you send a request to /devices/actions/activate to activate a line of service you must specify the code for one of the service plans associated with your account.

```php
function listAccountServicePlans(string $aname): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `aname` | `string` | Template, Required | Account name. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ServicePlan[]`](../../doc/models/service-plan.md).

## Example Usage

```php
$aname = '0252012345-00001';

$apiResponse = $servicePlansController->listAccountServicePlans($aname);
```

## Example Response *(as JSON)*

```json
[
  {
    "name": "2MSHR5GB",
    "code": "M2MSHR5GB",
    "sizeKb": 0,
    "carrierServicePlanCode": "84638"
  },
  {
    "name": "TNTL200TALK",
    "code": "NTL200TALK",
    "sizeKb": 0,
    "carrierServicePlanCode": "74644"
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |

