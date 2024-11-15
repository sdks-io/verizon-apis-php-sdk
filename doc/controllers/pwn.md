# PWN

```php
$pWNController = $client->getPWNController();
```

## Class Name

`PWNController`

## Methods

* [KPI List](../../doc/controllers/pwn.md#kpi-list)
* [Get Profile List](../../doc/controllers/pwn.md#get-profile-list)
* [Change PWN Device State-Activate](../../doc/controllers/pwn.md#change-pwn-device-state-activate)
* [Change PWN Device State-Deactivate](../../doc/controllers/pwn.md#change-pwn-device-state-deactivate)
* [Change PWN Device Profile](../../doc/controllers/pwn.md#change-pwn-device-profile)
* [Change PWN Device IPaddress](../../doc/controllers/pwn.md#change-pwn-device-ipaddress)
* [Get PWN Performance Consent](../../doc/controllers/pwn.md#get-pwn-performance-consent)


# KPI List

```php
function kPIList(string $aname): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `aname` | `string` | Template, Required | Account name. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`KPIInfoList`](../../doc/models/kpi-info-list.md).

## Example Usage

```php
$aname = '0342351414-00001';

$apiResponse = $pWNController->kPIList($aname);
```

## Example Response *(as JSON)*

```json
{
  "KpiInfoList": [
    {
      "name": "DOWNLINK_THROUGHPUT",
      "value": "23.2",
      "nodeName": "132924_ENB_VZ_EULESS_OLTE_RD-01",
      "nodeType": "BASEBAND",
      "description": "Downlink throughput (4G)",
      "unit": "Mbps",
      "category": "Network Performance Radio",
      "timeOfLastUpdate": "2022-12-07T08:39:59.228Z"
    }
  ]
}
```


# Get Profile List

```php
function getProfileList(string $aname): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `aname` | `string` | Template, Required | Account name. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`PWNProfileList`](../../doc/models/pwn-profile-list.md).

## Example Usage

```php
$aname = '0342351414-00001';

$apiResponse = $pWNController->getProfileList($aname);
```

## Example Response *(as JSON)*

```json
{
  "profiles": [
    {
      "profileId": "HSS-EsmProfile_Enterprise",
      "profileName": "HSS EsmProfile Enterprise"
    }
  ]
}
```


# Change PWN Device State-Activate

```php
function changePWNDeviceStateActivate(ChangePWNDeviceStateActivateRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ChangePWNDeviceStateActivateRequest`](../../doc/models/change-pwn-device-state-activate-request.md) | Body, Required | - |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ChangePWNDeviceStateResponse`](../../doc/models/change-pwn-device-state-response.md).

## Example Usage

```php
$body = ChangePWNDeviceStateActivateRequestBuilder::init(
    '0342351414-00001',
    [
        PWNDeviceListBuilder::init(
            [
                PWNDeviceIdBuilder::init(
                    '99948099913024600001',
                    'iccid'
                )->build()
            ]
        )->build()
    ],
    ActivateBuilder::init(
        'HSS EsmProfile Enterprise 5G'
    )->build()
)->build();

$apiResponse = $pWNController->changePWNDeviceStateActivate($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "c7b45cf2-cab1-4e42-82f8-20350f4c4ea3"
}
```


# Change PWN Device State-Deactivate

```php
function changePWNDeviceStateDeactivate(ChangePWNDeviceStateDeactivateRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ChangePWNDeviceStateDeactivateRequest`](../../doc/models/change-pwn-device-state-deactivate-request.md) | Body, Required | - |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ChangePWNDeviceStateResponse`](../../doc/models/change-pwn-device-state-response.md).

## Example Usage

```php
$body = ChangePWNDeviceStateDeactivateRequestBuilder::init(
    '0342351414-00001',
    [
        PWNDeviceListBuilder::init(
            [
                PWNDeviceIdBuilder::init(
                    '99948099913031600000',
                    'iccid'
                )->build()
            ]
        )->build(),
        PWNDeviceListBuilder::init(
            [
                PWNDeviceIdBuilder::init(
                    '99948099913031700000',
                    'iccid'
                )->build()
            ]
        )->build()
    ]
)->build();

$apiResponse = $pWNController->changePWNDeviceStateDeactivate($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "c7b45cf2-cab1-4e42-82f8-20350f4c4ea3"
}
```


# Change PWN Device Profile

```php
function changePWNDeviceProfile(ChangePWNDeviceProfileRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ChangePWNDeviceProfileRequest`](../../doc/models/change-pwn-device-profile-request.md) | Body, Required | - |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ChangePWNDeviceProfileResponse`](../../doc/models/change-pwn-device-profile-response.md).

## Example Usage

```php
$body = ChangePWNDeviceProfileRequestBuilder::init(
    '0342351414-00001',
    [
        PWNDeviceListBuilder::init(
            [
                PWNDeviceIdBuilder::init(
                    '99948099913024600000',
                    'iccid'
                )->build()
            ]
        )->build()
    ],
    'HSS EsmProfile Enterprise 5G internet'
)->build();

$apiResponse = $pWNController->changePWNDeviceProfile($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "c7b45cf2-cab1-4e42-82f8-20350f4c4ea3"
}
```


# Change PWN Device IPaddress

```php
function changePWNDeviceIpaddress(ChangePWNDeviceIpaddressRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ChangePWNDeviceIpaddressRequest`](../../doc/models/change-pwn-device-ipaddress-request.md) | Body, Required | - |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ChangePWNDeviceIpaddressResponse`](../../doc/models/change-pwn-device-ipaddress-response.md).

## Example Usage

```php
$body = ChangePWNDeviceIpaddressRequestBuilder::init(
    '0342351414-00001',
    [
        DeviceListIPBuilder::init(
            [
                PWNDeviceIdBuilder::init(
                    '99948099913024600000',
                    'iccid'
                )->build()
            ],
            '10.3.4.5'
        )->build(),
        DeviceListIPBuilder::init(
            [
                PWNDeviceIdBuilder::init(
                    '999480500019111000001',
                    'iccid'
                )->build()
            ],
            '10.4.5.7'
        )->build()
    ]
)->build();

$apiResponse = $pWNController->changePWNDeviceIpaddress($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "c7b45cf2-cab1-4e42-82f8-20350f4c4ea3"
}
```


# Get PWN Performance Consent

```php
function getPWNPerformanceConsent(string $aname): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `aname` | `string` | Template, Required | Account name. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`GetPWNPerformanceConsentResponse`](../../doc/models/get-pwn-performance-consent-response.md).

## Example Usage

```php
$aname = '1533445500-00088';

$apiResponse = $pWNController->getPWNPerformanceConsent($aname);
```

## Example Response *(as JSON)*

```json
{
  "consent": "false"
}
```

