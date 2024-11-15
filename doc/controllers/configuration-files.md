# Configuration Files

```php
$configurationFilesController = $client->getConfigurationFilesController();
```

## Class Name

`ConfigurationFilesController`

## Methods

* [Get List of Files](../../doc/controllers/configuration-files.md#get-list-of-files)
* [Upload Config File](../../doc/controllers/configuration-files.md#upload-config-file)


# Get List of Files

You can retrieve a list of configuration or supplementary of files for an account.

```php
function getListOfFiles(string $acc, string $distributionType): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acc` | `string` | Template, Required | Account identifier. |
| `distributionType` | `string` | Query, Required | Filter the distributionType to only retrieve files for a specific distribution type. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`RetrievesAvailableFilesResponseList`](../../doc/models/retrieves-available-files-response-list.md).

## Example Usage

```php
$acc = '0402196254-00001';

$distributionType = 'HTTP';

$apiResponse = $configurationFilesController->getListOfFiles(
    $acc,
    $distributionType
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV2ResultException`](../../doc/models/fota-v2-result-exception.md) |


# Upload Config File

Uploads a configuration/supplementary file for an account. ThingSpace generates a fileName after the upload and is returned in the response.

```php
function uploadConfigFile(
    string $acc,
    ?FileWrapper $fileupload = null,
    ?string $fileVersion = null,
    ?string $make = null,
    ?string $model = null,
    ?string $localTargetPath = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `acc` | `string` | Template, Required | Account identifier. |
| `fileupload` | `?FileWrapper` | Form, Optional | The file to upload. |
| `fileVersion` | `?string` | Form, Optional | Version of the file. |
| `make` | `?string` | Form, Optional | The software-applicable device make. |
| `model` | `?string` | Form, Optional | The software-applicable device model. |
| `localTargetPath` | `?string` | Form, Optional | Local target path on the device. |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`UploadConfigurationFilesResponse`](../../doc/models/upload-configuration-files-response.md).

## Example Usage

```php
$acc = '0402196254-00001';

$fileVersion = '1.0';

$make = 'Verizon';

$model = 'VZW1';

$localTargetPath = '/VZWFOTA/hello-world.txt';

$apiResponse = $configurationFilesController->uploadConfigFile(
    $acc,
    null,
    $fileVersion,
    $make,
    $model,
    $localTargetPath
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Unexpected error. | [`FotaV2ResultException`](../../doc/models/fota-v2-result-exception.md) |

