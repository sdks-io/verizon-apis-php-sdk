# Repositories

```php
$repositoriesController = $client->getRepositoriesController();
```

## Class Name

`RepositoriesController`

## Methods

* [Delete Repository](../../doc/controllers/repositories.md#delete-repository)
* [List Repositories](../../doc/controllers/repositories.md#list-repositories)
* [Create Repository](../../doc/controllers/repositories.md#create-repository)


# Delete Repository

Delete the repository.

```php
function deleteRepository(
    string $accountName,
    string $repositoryName,
    ?string $correlationId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `repositoryName` | `string` | Template, Required | Name of the repository which is about to be deleted.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9-]+$` |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`EdgeServiceOnboardingDeleteResult`](../../doc/models/edge-service-onboarding-delete-result.md).

## Example Usage

```php
$accountName = 'test_account1';

$repositoryName = 'dev-api-demo-repo-mdp';

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$apiResponse = $repositoriesController->deleteRepository(
    $accountName,
    $repositoryName,
    $correlationId
);
```

## Example Response *(as JSON)*

```json
{
  "message": "service deleted succesfully",
  "status": "success",
  "subStatus": "service delete - success"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 404 | Not found. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |


# List Repositories

Get all repositories in the platform.

```php
function listRepositories(string $accountName, ?string $correlationId = null, ?string $type = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |
| `type` | `?string` | Query, Optional | Repository type.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9-]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`Repository[]`](../../doc/models/repository.md).

## Example Usage

```php
$accountName = 'test_account1';

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$type = 'GIT';

$apiResponse = $repositoriesController->listRepositories(
    $accountName,
    $correlationId,
    $type
);
```

## Example Response *(as JSON)*

```json
[
  {
    "name": "myRepo"
  },
  {
    "name": "anotherRepo"
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 404 | Not found. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |


# Create Repository

Create a repository within user's organziation.

```php
function createRepository(string $accountName, Repository $body, ?string $correlationId = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `body` | [`Repository`](../../doc/models/repository.md) | Body, Required | - |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`Repository`](../../doc/models/repository.md).

## Example Usage

```php
$accountName = 'test_account1';

$body = RepositoryBuilder::init(
    'myRepo'
)
    ->description('My organization repository.')
    ->type(EdgeServiceRepositoryTypeEnum::GIT)
    ->tag('myTag')
    ->endpoint('https://charts.bitnami.com/bitnami')
    ->build();

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$apiResponse = $repositoriesController->createRepository(
    $accountName,
    $body,
    $correlationId
);
```

## Example Response *(as JSON)*

```json
{
  "createdBy": "dev-api-user",
  "createdDate": "2022-08-25T11:38:06.000Z",
  "endpoint": "https://charts.bitnami.com/bitnami",
  "id": "60d0a7f0-1811-43fd-be4a-b47e5fe2c755",
  "lastModifiedDate": "2022-08-25T11:38:06.000Z",
  "name": "dev-api-demo-repo-1",
  "type": "Helm",
  "updatedBy": "dev-api-user"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |

