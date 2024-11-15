
# Custom Header Signature



Documentation for accessing and setting credentials for VZ-M2M-Token.

## Auth Credentials

| Name | Type | Description | Setter | Getter |
|  --- | --- | --- | --- | --- |
| VZ-M2M-Token | `string` | M2M Session Token ([How to generate an M2M session token?]($e/Session%20Management/StartConnectivityManagementSession)) | `vZM2mToken` | `getVZM2mToken()` |



**Note:** Auth credentials can be set using `VZM2mTokenCredentialsBuilder::init()` in `vZM2mTokenCredentials` method in the client builder and accessed through `getVZM2mTokenCredentials` method in the client instance.

## Usage Example

### Client Initialization

You must provide credentials in the client as shown in the following code snippet.

```php
$client = VerizonClientBuilder::init()
    ->vZM2mTokenCredentials(
        VZM2MTokenCredentialsBuilder::init(
            'VZ-M2M-Token'
        )
    )
    ->build();
```


