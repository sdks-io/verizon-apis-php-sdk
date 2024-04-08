# MEC

```php
$mECController = $client->getMECController();
```

## Class Name

`MECController`

## Methods

* [KPI List](../../doc/controllers/mec.md#kpi-list)
* [Get Profile List](../../doc/controllers/mec.md#get-profile-list)
* [Change Pmec Device State-Activate](../../doc/controllers/mec.md#change-pmec-device-state-activate)
* [Change Pmec Device State-Bulk Deactivate](../../doc/controllers/mec.md#change-pmec-device-state-bulk-deactivate)
* [Change Pmec Device Profile](../../doc/controllers/mec.md#change-pmec-device-profile)
* [Change Pmec Device I Paddress Bulk](../../doc/controllers/mec.md#change-pmec-device-i-paddress-bulk)
* [Get MEC Performance Consent](../../doc/controllers/mec.md#get-mec-performance-consent)


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

$apiResponse = $mECController->kPIList($aname);
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

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`MECProfileList`](../../doc/models/mec-profile-list.md).

## Example Usage

```php
$aname = '0342351414-00001';

$apiResponse = $mECController->getProfileList($aname);
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


# Change Pmec Device State-Activate

```php
function changePmecDeviceStateActivate(ChangePmecDeviceStateActivateRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ChangePmecDeviceStateActivateRequest`](../../doc/models/change-pmec-device-state-activate-request.md) | Body, Required | - |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ChangeMecDeviceStateResponse`](../../doc/models/change-mec-device-state-response.md).

## Example Usage

```php
$body = ChangePmecDeviceStateActivateRequestBuilder::init(
    '0342351414-00001',
    [
        MECDeviceListBuilder::init(
            [
                MECDeviceIdBuilder::init(
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

$apiResponse = $mECController->changePmecDeviceStateActivate($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "c7b45cf2-cab1-4e42-82f8-20350f4c4ea3"
}
```


# Change Pmec Device State-Bulk Deactivate

```php
function changePmecDeviceStateBulkDeactivate(ChangePmecDeviceStateBulkDeactivateRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ChangePmecDeviceStateBulkDeactivateRequest`](../../doc/models/change-pmec-device-state-bulk-deactivate-request.md) | Body, Required | - |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ChangeMecDeviceStateResponse`](../../doc/models/change-mec-device-state-response.md).

## Example Usage

```php
$body = ChangePmecDeviceStateBulkDeactivateRequestBuilder::init(
    '0342351414-00001',
    [
        MECDeviceListBuilder::init(
            [
                MECDeviceIdBuilder::init(
                    '99948099913031600000',
                    'iccid'
                )->build()
            ]
        )->build(),
        MECDeviceListBuilder::init(
            [
                MECDeviceIdBuilder::init(
                    '99948099913031700000',
                    'iccid'
                )->build()
            ]
        )->build()
    ]
)->build();

$apiResponse = $mECController->changePmecDeviceStateBulkDeactivate($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "c7b45cf2-cab1-4e42-82f8-20350f4c4ea3"
}
```


# Change Pmec Device Profile

```php
function changePmecDeviceProfile(ChangePmecDeviceProfileRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ChangePmecDeviceProfileRequest`](../../doc/models/change-pmec-device-profile-request.md) | Body, Required | - |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ChangeMecDeviceProfileResponse`](../../doc/models/change-mec-device-profile-response.md).

## Example Usage

```php
$body = ChangePmecDeviceProfileRequestBuilder::init(
    '0342351414-00001',
    [
        MECDeviceListBuilder::init(
            [
                MECDeviceIdBuilder::init(
                    '99948099913024600000',
                    'iccid'
                )->build()
            ]
        )->build()
    ],
    'HSS EsmProfile Enterprise 5G internet'
)->build();

$apiResponse = $mECController->changePmecDeviceProfile($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "c7b45cf2-cab1-4e42-82f8-20350f4c4ea3"
}
```


# Change Pmec Device I Paddress Bulk

```php
function changePmecDeviceIPaddressBulk(ChangePmecDeviceStateBulkDeactivateRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ChangePmecDeviceStateBulkDeactivateRequest`](../../doc/models/change-pmec-device-state-bulk-deactivate-request.md) | Body, Required | - |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ChangeMecDeviceIPAddressResponse`](../../doc/models/change-mec-device-ip-address-response.md).

## Example Usage

```php
$body = ChangePmecDeviceStateBulkDeactivateRequestBuilder::init(
    '0342351414-00001',
    [
        MECDeviceListBuilder::init(
            [
                MECDeviceIdBuilder::init(
                    '99948099913031600000',
                    'iccid'
                )->build()
            ]
        )->build(),
        MECDeviceListBuilder::init(
            [
                MECDeviceIdBuilder::init(
                    '99948099913031700000',
                    'iccid'
                )->build()
            ]
        )->build()
    ]
)->build();

$apiResponse = $mECController->changePmecDeviceIPaddressBulk($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "c7b45cf2-cab1-4e42-82f8-20350f4c4ea3"
}
```


# Get MEC Performance Consent

```php
function getMECPerformanceConsent(string $aname): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `aname` | `string` | Template, Required | Account name. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`GetMECPerformanceConsentResponse`](../../doc/models/get-mec-performance-consent-response.md).

## Example Usage

```php
$aname = '1533445500-00088';

$apiResponse = $mECController->getMECPerformanceConsent($aname);
```

## Example Response *(as JSON)*

```json
{
  "consent": "false"
}
```

