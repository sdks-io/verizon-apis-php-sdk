# Service Launch Profiles

```php
$serviceLaunchProfilesController = $client->getServiceLaunchProfilesController();
```

## Class Name

`ServiceLaunchProfilesController`

## Methods

* [Create Service Profile](../../doc/controllers/service-launch-profiles.md#create-service-profile)
* [Update Service Profile](../../doc/controllers/service-launch-profiles.md#update-service-profile)
* [Submit Service Profile](../../doc/controllers/service-launch-profiles.md#submit-service-profile)


# Create Service Profile

Creates a service profile that describes the resource requirements of a service.

```php
function createServiceProfile(string $accountName, CreateServiceProfileRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[A-Za-z0-9]` |
| `body` | [`CreateServiceProfileRequest`](../../doc/models/create-service-profile-request.md) | Body, Required | Request for creation of a service profile. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ServicesProfileRegistration`](../../doc/models/services-profile-registration.md).

## Example Usage

```php
$accountName = 'test_account1';

$body = CreateServiceProfileRequestBuilder::init()
    ->name('mongo-pmec-profile-mdp7')
    ->serviceName('mongodb-customer-prerun')
    ->serviceVersion('1.0.0')
    ->build();

$apiResponse = $serviceLaunchProfilesController->createServiceProfile(
    $accountName,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | HTTP 400 Bad Request. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 401 | HTTP 401 Unauthorized. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| Default | HTTP 500 Internal Server Error. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |


# Update Service Profile

Update the definition of a service profile.

```php
function updateServiceProfile(
    string $id,
    CreateServiceProfileRequest $body,
    ?string $accountName = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Unique ID of the service profile.<br>**Constraints**: *Maximum Length*: `36`, *Pattern*: `^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$` |
| `body` | [`CreateServiceProfileRequest`](../../doc/models/create-service-profile-request.md) | Body, Required | Request with new information for updating the service profile. |
| `accountName` | `?string` | Header, Optional | User account name.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[A-Za-z0-9]` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type `string`.

## Example Usage

```php
$id = 'eda2cb4e-50ef-4ae8-b304-7d2f0f7a21c1';

$body = CreateServiceProfileRequestBuilder::init()
    ->name('mongo-pmec-profile-mdp7')
    ->serviceName('mongodb-customer-prerun')
    ->serviceVersion('1.0.0')
    ->build();

$accountName = 'test_account1';

$apiResponse = $serviceLaunchProfilesController->updateServiceProfile(
    $id,
    $body,
    $accountName
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | HTTP 400 Bad Request. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 401 | HTTP 401 Unauthorized. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| Default | HTTP 500 Internal Server Error. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |


# Submit Service Profile

Helps register a service profile.

```php
function submitServiceProfile(
    string $id,
    ServicesProfileRegistration $body,
    ?string $accountName = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | Unique service profile ID.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[A-Za-z0-9]` |
| `body` | [`ServicesProfileRegistration`](../../doc/models/services-profile-registration.md) | Body, Required | Request for registration of a service profile. |
| `accountName` | `?string` | Header, Optional | User account name.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[A-Za-z0-9]` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ServicesProfileRegistrationResult`](../../doc/models/services-profile-registration-result.md).

## Example Usage

```php
$id = 'eda2cb4e-50ef-4ae8-b304-7d2f0f7a21c1';

$body = ServicesProfileRegistrationBuilder::init()
    ->id('6789409c-12c3-4fc9-b64f-71d1611c4f09')
    ->name('mongo-pmec-profile-mdp7')
    ->serviceName('mongodb-customer-prerun')
    ->serviceVersion('1.0.0')
    ->version('1.0.0')
    ->state(ServicesProfileRegistrationStateEnum::DRAFT)
    ->customerID('acme')
    ->createdBy('acme-user')
    ->createdAt('2022-08-03T03:43:17.504Z')
    ->lastUpdatedAt('2022-08-03T03:43:17.504Z')
    ->linkedServiceInstances(
        []
    )
    ->accessIntents(
        AccessIntentsBuilder::init()->build()
    )
    ->placementIntents(
        PlacementIntentsBuilder::init()
            ->intentChain(
                [
                    IntentChainItemBuilder::init()
                        ->name('Compliance')
                        ->input(ApiHelper::deserialize('{"deploymentLocations":[{"csp":"AWS_WL","region":"US_WEST_2","zoneId":["us-west-2-wl1-den-wlz-1"]}]}'))
                        ->build()
                ]
            )
            ->build()
    )
    ->deploymentLocations(
        []
    )
    ->build();

$accountName = 'test_account1';

$apiResponse = $serviceLaunchProfilesController->submitServiceProfile(
    $id,
    $body,
    $accountName
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | HTTP 400 Bad Request. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 401 | HTTP 401 Unauthorized. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 412 | Precondition Failed. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |
| Default | HTTP 500 Internal Server Error. | [`EdgeServiceLaunchResultException`](../../doc/models/edge-service-launch-result-exception.md) |

