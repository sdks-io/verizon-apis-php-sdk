
# Client Class Documentation

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `vZM2MToken2` | `string` | The VZ-M2M session token from [Getting Started](/content/thingspace-portal/documentation/apis/connectivity-management/get-started.html) |
| `environment` | `Environment` | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `thingspaceOauthCredentials` | [`ThingspaceOauthCredentials`](auth/oauth-2-client-credentials-grant.md) | The Credentials Setter for OAuth 2 Client Credentials Grant |
| `vzM2mSessionTokenCredentials` | [`VzM2mSessionTokenCredentials`](auth/custom-header-signature.md) | The Credentials Setter for Custom Header Signature |

The API client can be initialized as follows:

```php
$client = VerizonThingSpaceQualityOfServiceAPIEndpointsClientBuilder::init()
    ->thingspaceOauthCredentials(
        ThingspaceOauthCredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret'
        )
    )
    ->vzM2mSessionTokenCredentials(
        VzM2mSessionTokenCredentialsBuilder::init(
            'VZ-M2M-Token'
        )
    )
    ->vZM2MToken2('VZ-M2M-Token')
    ->environment(Environment::PRODUCTION)
    ->build();
```

## Verizon ThingSpace Quality of Service API endpoints Client

The gateway for the SDK. This class acts as a factory for the Controllers and also holds the configuration of the SDK.

## Controllers

| Name | Description |
|  --- | --- |
| getThingSpaceQualityOfServiceAPIActionsController() | Gets ThingSpaceQualityOfServiceAPIActionsController |
| getExclusionsController() | Gets ExclusionsController |
| getOAuthAuthorizationController() | Gets OAuthAuthorizationController |

