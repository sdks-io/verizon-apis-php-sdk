# SIM Securefor Io T Licenses

```php
$sIMSecureforIoTLicensesController = $client->getSIMSecureforIoTLicensesController();
```

## Class Name

`SIMSecureforIoTLicensesController`

## Methods

* [Assign License to Devices](../../doc/controllers/sim-securefor-io-t-licenses.md#assign-license-to-devices)
* [Unassign License to Devices](../../doc/controllers/sim-securefor-io-t-licenses.md#unassign-license-to-devices)


# Assign License to Devices

Assigns SIM-Secure for IoT licenses to SIMs.

```php
function assignLicenseToDevices(AssignLicenseRequest $body, ?string $xRequestID = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AssignLicenseRequest`](../../doc/models/assign-license-request.md) | Body, Required | Request to assign license to devices. |
| `xRequestID` | `?string` | Header, Optional | Transaction Id. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`SecuritySuccessResult`](../../doc/models/security-success-result.md).

## Example Usage

```php
$body = AssignLicenseRequestBuilder::init()
    ->accountName('0000123456-00001')
    ->devices(
        [
            LicenseDeviceListBuilder::init()
                ->deviceIds(
                    [
                        LicenseDeviceIdBuilder::init()
                            ->id('864508030109877')
                            ->kind('IMEI')
                            ->build()
                    ]
                )
                ->build()
        ]
    )
    ->skuNumber('SIMSec-IoT-Lt')
    ->build();

$apiResponse = $sIMSecureForIoTLicensesController->assignLicenseToDevices($body);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "c3f3d17c-79ff-4b35-82df-94446785b6e0"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| 401 | Unauthorized request. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| 403 | Request Forbidden. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| 404 | Not Found / Does not exist. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| 406 | Format / Request Unacceptable. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| 429 | Too many requests. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| Default | Error response. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |


# Unassign License to Devices

Unassigns SIM-Secure for IoT Flexible and Flexible Bundle license from SIMs.

```php
function unassignLicenseToDevices(string $xRequestID): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `xRequestID` | `string` | Header, Required | Transaction Id. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`SecuritySuccessResult`](../../doc/models/security-success-result.md).

## Example Usage

```php
$xRequestID = 'X-Request-ID2';

$apiResponse = $sIMSecureForIoTLicensesController->unassignLicenseToDevices($xRequestID);
```

## Example Response *(as JSON)*

```json
{
  "requestId": "1f28c944-d007-44c9-9543-003b8820cc69"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| 401 | Unauthorized request. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| 403 | Request forbidden. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| 404 | Not Found / Does not exist. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| 406 | Format / Request Unacceptable. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| 429 | Too many requests. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |
| Default | Error response. | [`SecurityResultException`](../../doc/models/security-result-exception.md) |

