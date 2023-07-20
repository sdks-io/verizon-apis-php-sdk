# Service Claims

```php
$serviceClaimsController = $client->getServiceClaimsController();
```

## Class Name

`ServiceClaimsController`

## Methods

* [Associate Cloud Credential With Service Claim](../../doc/controllers/service-claims.md#associate-cloud-credential-with-service-claim)
* [List Service Claims](../../doc/controllers/service-claims.md#list-service-claims)
* [Update Service Claim Status](../../doc/controllers/service-claims.md#update-service-claim-status)
* [Mark Service Claim Status as Completed](../../doc/controllers/service-claims.md#mark-service-claim-status-as-completed)


# Associate Cloud Credential With Service Claim

Associate an existing cloud credential with a service's claim which will be used to connect to user's cloud provider.

```php
function associateCloudCredentialWithServiceClaim(
    string $accountName,
    string $serviceId,
    string $claimId,
    CSPProfileIdRequest $body,
    ?string $correlationId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `serviceId` | `string` | Template, Required | System generated unique identifier of the service which user is using.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[A-Za-z0-9_-]+$` |
| `claimId` | `string` | Template, Required | System generated unique identifier for the claim which user is using.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[A-Za-z0-9_-]+$` |
| `body` | [`CSPProfileIdRequest`](../../doc/models/csp-profile-id-request.md) | Body, Required | - |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`AssociateCloudCredentialResult`](../../doc/models/associate-cloud-credential-result.md).

## Example Usage

```php
$accountName = 'test_account1';

$serviceId = 'b32321d2-4ee3-458b-a70b-e956525d46c9';

$claimId = '58296746-57ee-44f8-8107-399b61d58356';

$body = CSPProfileIdRequestBuilder::init()
    ->cspProfileId('2e13f3a1-287f-4c63-9218-d026bf1bda32')
    ->build();

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$apiResponse = $serviceClaimsController->associateCloudCredentialWithServiceClaim(
    $accountName,
    $serviceId,
    $claimId,
    $body,
    $correlationId
);
```

## Example Response *(as JSON)*

```json
{
  "message": "CSP Profile got associated with current claim successfully"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 404 | Not Found. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |


# List Service Claims

Fetch all service's claim(s) associated with a service. Service claims are generated based on service's compatibility with different cloud service provider.

```php
function listServiceClaims(
    string $accountName,
    string $serviceId,
    ?string $correlationId = null,
    ?string $claimStatus = null,
    ?string $q = null,
    ?int $limit = null,
    ?int $offSet = null,
    ?string $sortKey = 'createdDate',
    ?string $sortDir = null,
    ?bool $detailsFlag = true
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `serviceId` | `string` | Template, Required | Auto-generated Id of the claim whose information needs to be fetched.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[A-Za-z0-9_-]+$` |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |
| `claimStatus` | `?string` | Query, Optional | Queries with claim status on the claims.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `q` | `?string` | Query, Optional | Use the comma (,) character to separate multiple values,eg claimType=Public MEC:claims.sandBoxState=NOT_STARTED,STARTED.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!\/,+\-=_:.&*%\s]+$` |
| `limit` | `?int` | Query, Optional | Number of items to return.<br>**Constraints**: `>= 0`, `<= 1024` |
| `offSet` | `?int` | Query, Optional | Id of the last respose value in the previous list.<br>**Constraints**: `>= 0`, `<= 1024` |
| `sortKey` | `?string` | Query, Optional | Sorts the response by an attribute. Default is createdDate.<br>**Default**: `'createdDate'`<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `sortDir` | [`?string(SortDirectionEnum)`](../../doc/models/sort-direction-enum.md) | Query, Optional | Sorts the response. Use asc for ascending or desc for descending order. The default is desc.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `detailsFlag` | `?bool` | Query, Optional | Default as true. If it is true then it will return all details.<br>**Default**: `true` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ServiceClaims`](../../doc/models/service-claims.md).

## Example Usage

```php
$accountName = 'test_account1';

$serviceId = 'b32321d2-4ee3-458b-a70b-e956525d46c9';

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$claimStatus = 'UNVERIFIED';

$q = 'claimType=Public MEC:claims.sandBoxState=NOT_STARTED,STARTED';

$limit = 256;

$offSet = 255;

$sortKey = 'createdDate';

$sortDir = SortDirectionEnum::DESC;

$detailsFlag = true;

$apiResponse = $serviceClaimsController->listServiceClaims(
    $accountName,
    $serviceId,
    $correlationId,
    $claimStatus,
    $q,
    $limit,
    $offSet,
    $sortKey,
    $sortDir,
    $detailsFlag
);
```

## Example Response *(as JSON)*

```json
{
  "claimsResList": [
    {
      "claimStatus": "UNVERIFIED",
      "claimType": "PUBLIC_MEC",
      "createdBy": "acme-dev-api-user1",
      "createdDate": "2022-08-03T15:21:30.000Z",
      "endTimeStamp": "0001-01-01T00:00:00.000Z",
      "environment": "AWS_WL",
      "id": "09368e8f-97b6-462f-b309-57d23fd25073",
      "lastModifiedDate": "0001-01-01T00:00:00.000Z",
      "sandBoxState": "NOT_STARTED",
      "sandBoxStatus": "NA",
      "serviceId": "b32321d2-4ee3-458b-a70b-e956525d46c9",
      "startTimeStamp": "0001-01-01T00:00:00.000Z"
    }
  ],
  "count": 1
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 404 | Not found. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |


# Update Service Claim Status

Using this API user can update service's claim status as complete/verified etc.

```php
function updateServiceClaimStatus(
    string $accountName,
    string $serviceId,
    string $claimId,
    ClaimStatusRequest $body,
    ?string $correlationId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `serviceId` | `string` | Template, Required | System generated unique identifier of the service which user is using.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[A-Za-z0-9_-]+$` |
| `claimId` | `string` | Template, Required | System generated unique identifier of the claim which user is using.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[A-Za-z0-9_-]+$` |
| `body` | [`ClaimStatusRequest`](../../doc/models/claim-status-request.md) | Body, Required | - |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance.

## Example Usage

```php
$accountName = 'test_account1';

$serviceId = 'b32321d2-4ee3-458b-a70b-e956525d46c9';

$claimId = '58296746-57ee-44f8-8107-399b61d58356';

$body = ClaimStatusRequestBuilder::init()
    ->claimStatus(ClaimStatusEnum::VERIFIED)
    ->build();

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$apiResponse = $serviceClaimsController->updateServiceClaimStatus(
    $accountName,
    $serviceId,
    $claimId,
    $body,
    $correlationId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 404 | Not Found. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |


# Mark Service Claim Status as Completed

Mark a service's claim status as complete post successful verification of sandbox testing in the respective sandbox environment.

```php
function markServiceClaimStatusAsCompleted(
    string $accountName,
    string $serviceId,
    string $claimId,
    ?string $correlationId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `serviceId` | `string` | Template, Required | System generated unique identifier of the service which user is using.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[A-Za-z0-9_-]+$` |
| `claimId` | `string` | Template, Required | System generated unique identifier of the claim which user is using.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[A-Za-z0-9_-]+$` |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance.

## Example Usage

```php
$accountName = 'test_account1';

$serviceId = 'b32321d2-4ee3-458b-a70b-e956525d46c9';

$claimId = '58296746-57ee-44f8-8107-399b61d58356';

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$apiResponse = $serviceClaimsController->markServiceClaimStatusAsCompleted(
    $accountName,
    $serviceId,
    $claimId,
    $correlationId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 404 | Not Found. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |

