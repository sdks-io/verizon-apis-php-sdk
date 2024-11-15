
# Custom Header Signature



Documentation for accessing and setting credentials for vz-m2m-session_token.

## Auth Credentials

| Name | Type | Description | Setter | Getter |
|  --- | --- | --- | --- | --- |
| VZ-M2M-Token | `string` | The VZ-M2M session token from [Getting Started](/content/thingspace-portal/documentation/apis/connectivity-management/get-started.html) | `vZM2MToken` | `getVZM2MToken()` |



**Note:** Auth credentials can be set using `VzM2mSessionTokenCredentialsBuilder::init()` in `vzM2mSessionTokenCredentials` method in the client builder and accessed through `getVzM2mSessionTokenCredentials` method in the client instance.

## Usage Example

### Client Initialization

You must provide credentials in the client as shown in the following code snippet.

```php
$client = VerizonThingSpaceQualityOfServiceAPIEndpointsClientBuilder::init()
    ->vzM2mSessionTokenCredentials(
        VzM2mSessionTokenCredentialsBuilder::init(
            'VZ-M2M-Token'
        )
    )
    ->build();
```


