# Session Management

```php
$sessionManagementController = $client->getSessionManagementController();
```

## Class Name

`SessionManagementController`

## Methods

* [Start Connectivity Management Session](../../doc/controllers/session-management.md#start-connectivity-management-session)
* [End Connectivity Management Session](../../doc/controllers/session-management.md#end-connectivity-management-session)
* [Reset Connectivity Management Password](../../doc/controllers/session-management.md#reset-connectivity-management-password)


# Start Connectivity Management Session

Initiates a Connectivity Management session and returns a VZ-M2M session token that is required in subsequent API requests.

```php
function startConnectivityManagementSession(?LogInRequest $body = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?LogInRequest`](../../doc/models/log-in-request.md) | Body, Optional | Request to initiate a session. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`LogInResult`](../../doc/models/log-in-result.md).

## Example Usage

```php
$body = LogInRequestBuilder::init(
    'zbeeblebrox',
    'IMgr8'
)->build();

$apiResponse = $sessionManagementController->startConnectivityManagementSession($body);
```

## Example Response *(as JSON)*

```json
{
  "sessionToken": "bcce3ea6-fe4f-4952-bacf-eadd80718e83"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# End Connectivity Management Session

Ends a Connectivity Management session.

```php
function endConnectivityManagementSession(): ApiResponse
```

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`LogOutRequest`](../../doc/models/log-out-request.md).

## Example Usage

```php
$apiResponse = $sessionManagementController->endConnectivityManagementSession();
```

## Example Response *(as JSON)*

```json
{
  "sessionToken": "bcce3ea6-fe4f-4952-bacf-eadd80718e83"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |


# Reset Connectivity Management Password

The new password is effective immediately. Passwords do not expire, but Verizon recommends changing your password every 90 days.

```php
function resetConnectivityManagementPassword(SessionResetPasswordRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`SessionResetPasswordRequest`](../../doc/models/session-reset-password-request.md) | Body, Required | Request with current password that needs to be reset. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`SessionResetPasswordResult`](../../doc/models/session-reset-password-result.md).

## Example Usage

```php
$body = SessionResetPasswordRequestBuilder::init(
    'grflbk'
)->build();

$apiResponse = $sessionManagementController->resetConnectivityManagementPassword($body);
```

## Example Response *(as JSON)*

```json
{
  "newPassword": "Wh0a1545a84d"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error response. | [`ConnectivityManagementResultException`](../../doc/models/connectivity-management-result-exception.md) |

