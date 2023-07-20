# CSP Profiles

```php
$cSPProfilesController = $client->getCSPProfilesController();
```

## Class Name

`CSPProfilesController`

## Methods

* [Create Cloud Credential](../../doc/controllers/csp-profiles.md#create-cloud-credential)
* [Remove Cloud Credential](../../doc/controllers/csp-profiles.md#remove-cloud-credential)
* [Fetch Cloud Credential Details](../../doc/controllers/csp-profiles.md#fetch-cloud-credential-details)


# Create Cloud Credential

Create a new cloud credential within user's organization.

```php
function createCloudCredential(
    string $accountName,
    CSPProfile $body,
    ?string $correlationId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `body` | [`CSPProfile`](../../doc/models/csp-profile.md) | Body, Required | - |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`CSPProfile`](../../doc/models/csp-profile.md).

## Example Usage

```php
$accountName = 'test_account1';

$body = CSPProfileBuilder::init(
    'dev-api-csp-profile-mdp'
)
    ->projectName('vz-cve')
    ->type(CSPProfileTypeEnum::AWS)
    ->awsCspProfile(
        AwsCspProfileBuilder::init()
            ->credType(AwsCspProfileCredTypeEnum::ACCESS_KEY)
            ->accessKey('XXXXX')
            ->secretKey('XXXXX')
            ->build()
    )
    ->build();

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$apiResponse = $cSPProfilesController->createCloudCredential(
    $accountName,
    $body,
    $correlationId
);
```

## Example Response *(as JSON)*

```json
{
  "awsCspProfile": {
    "accessKey": "XXXXX",
    "credType": "ACCESS_KEY",
    "secretKey": "XXXXX"
  },
  "createdBy": "acme-user",
  "createdDate": "2022-08-03T13:59:51.000Z",
  "cspProfileName": "dev-api-csp-profile-mdp",
  "customerID": "acme",
  "id": "72e35c51-098e-4388-9055-2967bbd9be48",
  "lastModifiedBy": "acme-user",
  "lastModifiedDate": "2022-08-03T13:59:51.000Z",
  "projectName": "vz-cve",
  "type": "AWS"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 403 | Forbidden. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 429 | Too many requests. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| Default | Forbidden. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |


# Remove Cloud Credential

Remove a cloud credential from user's organization.

```php
function removeCloudCredential(string $accountName, string $id, ?string $correlationId = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `id` | `string` | Template, Required | CSP Profile Id. |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`EdgeServiceOnboardingDeleteResult`](../../doc/models/edge-service-onboarding-delete-result.md).

## Example Usage

```php
$accountName = 'test_account1';

$id = '72e35c51-098e-4388-9055-2967bbd9be48';

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$apiResponse = $cSPProfilesController->removeCloudCredential(
    $accountName,
    $id,
    $correlationId
);
```

## Example Response *(as JSON)*

```json
{
  "message": "Csp Profile deleted Successfully",
  "subStatus": "Csp Profile Delete - success"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 404 | Not Found. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |


# Fetch Cloud Credential Details

Fetch available cloud credentials within user's organization.

```php
function fetchCloudCredentialDetails(
    string $accountName,
    ?string $correlationId = null,
    ?string $q = null,
    ?int $limit = null,
    ?int $offSet = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |
| `q` | `?string` | Query, Optional | Use the coloumn (:) character to separate multiple query params eg type=AWS:awsCspProfile.credType=ACCESS_KEY,ROLE_ARN:state=UNVERIFIED,VERIFIED.<br>**Constraints**: *Maximum Length*: `2048`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!\/,+\-=_:.&*%\s]+$` |
| `limit` | `?int` | Query, Optional | Number of items to return.<br>**Constraints**: `>= 0`, `<= 1024` |
| `offSet` | `?int` | Query, Optional | Id of the last respose value in the previous list.<br>**Constraints**: `>= 0`, `<= 1024` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`CSPProfileData`](../../doc/models/csp-profile-data.md).

## Example Usage

```php
$accountName = 'test_account1';

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$q = 'cspProfileName=dev-api-csp-profile-mdp';

$limit = 256;

$offSet = 255;

$apiResponse = $cSPProfilesController->fetchCloudCredentialDetails(
    $accountName,
    $correlationId,
    $q,
    $limit,
    $offSet
);
```

## Example Response *(as JSON)*

```json
{
  "count": 1,
  "cspProfileList": [
    {
      "awsCspProfile": {
        "accessKey": "XXXXX",
        "credType": "ACCESS_KEY",
        "secretKey": "XXXXX"
      },
      "createdBy": "acme-user",
      "createdDate": "2022-08-03T13:59:51.000Z",
      "cspProfileName": "dev-api-csp-profile-mdp",
      "customerID": "acme",
      "id": "72e35c51-098e-4388-9055-2967bbd9be48",
      "lastModifiedBy": "acme-user",
      "lastModifiedDate": "2022-08-03T13:59:51.000Z",
      "projectName": "vz-cve",
      "type": "AWS"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 403 | Forbidden. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 404 | Not found. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 429 | Too many requests. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| Default | Forbidden. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |

