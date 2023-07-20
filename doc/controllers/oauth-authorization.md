# OAuth Authorization

```php
$oauthAuthorizationController = $client->getOauthAuthorizationController();
```

## Class Name

`OauthAuthorizationController`


# Request Token

Create a new OAuth 2 token.

:information_source: **Note** This endpoint does not require authentication.

```php
function requestToken(string $authorization, ?string $scope = null, array $fieldParameters = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `authorization` | `string` | Header, Required | Authorization header in Basic auth format |
| `scope` | `?string` | Form, Optional | Requested scopes as a space-delimited list. |
| `fieldParameters` | `?array` | Optional | Pass additional field parameters. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`OauthToken`](../../doc/models/oauth-token.md).

## Example Usage

```php
$authorization = 'Authorization8';

$additionalFieldParams = [
    'key0' => ApiHelper::deserialize('"additionalFieldParams9"')
];

$apiResponse = $oauthAuthorizationController->requestToken(
    $authorization,
    $additionalFieldParams
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | OAuth 2 provider returned an error. | [`OauthProviderException`](../../doc/models/oauth-provider-exception.md) |
| 401 | OAuth 2 provider says client authentication failed. | [`OauthProviderException`](../../doc/models/oauth-provider-exception.md) |

