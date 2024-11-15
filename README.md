
# Getting Started with Verizon ThingSpace Quality of Service API endpoints

## Introduction

These are the endpoints to subscribe to and end the subscription for Verizon's ThingSpace Quality of Service API. These endpoints use Service Capability Exposure Function or SCEF, and rely on callbacks for asynchronous requests. **Note:** This example is in YAML and will need to be converted to JSON to use as a spec file.

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```php
composer require "sdksio/verizon-apis-sdk:1.6.0"
```

Or add it to the composer.json file manually as given below:

```php
"require": {
    "sdksio/verizon-apis-sdk": "1.6.0"
}
```

You can also view the package at:
https://packagist.org/packages/sdksio/verizon-apis-sdk#1.6.0

## Test the SDK

Unit tests in this SDK can be run using PHPUnit.

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/sdks-io/verizon-apis-php-sdk/tree/1.6.0/doc/client.md)

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
| `thingspaceOauthCredentials` | [`ThingspaceOauthCredentials`](https://www.github.com/sdks-io/verizon-apis-php-sdk/tree/1.6.0/doc/auth/oauth-2-client-credentials-grant.md) | The Credentials Setter for OAuth 2 Client Credentials Grant |
| `vzM2mSessionTokenCredentials` | [`VzM2mSessionTokenCredentials`](https://www.github.com/sdks-io/verizon-apis-php-sdk/tree/1.6.0/doc/auth/custom-header-signature.md) | The Credentials Setter for Custom Header Signature |

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

## Environments

The SDK can be configured to use a different environment for making API calls. Available environments are:

### Fields

| Name | Description |
|  --- | --- |
| Production | **Default** |
| Staging | - |

## Authorization

This API uses the following authentication schemes.

* [`thingspace_oauth (OAuth 2 Client Credentials Grant)`](https://www.github.com/sdks-io/verizon-apis-php-sdk/tree/1.6.0/doc/auth/oauth-2-client-credentials-grant.md)
* [`vz-m2m-session_token (Custom Header Signature)`](https://www.github.com/sdks-io/verizon-apis-php-sdk/tree/1.6.0/doc/auth/custom-header-signature.md)

## List of APIs

* [Thing Space Qualityof Service API Actions](https://www.github.com/sdks-io/verizon-apis-php-sdk/tree/1.6.0/doc/controllers/thing-space-qualityof-service-api-actions.md)
* [Exclusions](https://www.github.com/sdks-io/verizon-apis-php-sdk/tree/1.6.0/doc/controllers/exclusions.md)

## Classes Documentation

* [ApiException](https://www.github.com/sdks-io/verizon-apis-php-sdk/tree/1.6.0/doc/api-exception.md)
* [HttpRequest](https://www.github.com/sdks-io/verizon-apis-php-sdk/tree/1.6.0/doc/http-request.md)
* [HttpResponse](https://www.github.com/sdks-io/verizon-apis-php-sdk/tree/1.6.0/doc/http-response.md)

