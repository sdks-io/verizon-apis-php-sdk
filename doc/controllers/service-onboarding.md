# Service Onboarding

```php
$serviceOnboardingController = $client->getServiceOnboardingController();
```

## Class Name

`ServiceOnboardingController`

## Methods

* [List Services](../../doc/controllers/service-onboarding.md#list-services)
* [Register Service](../../doc/controllers/service-onboarding.md#register-service)
* [Upload Service Workload File](../../doc/controllers/service-onboarding.md#upload-service-workload-file)
* [List Service Details](../../doc/controllers/service-onboarding.md#list-service-details)
* [Start Service Claim Sand Box Testing](../../doc/controllers/service-onboarding.md#start-service-claim-sand-box-testing)
* [Remove Service](../../doc/controllers/service-onboarding.md#remove-service)
* [Stop Service Testing](../../doc/controllers/service-onboarding.md#stop-service-testing)
* [Mark Service as Ready for Public Use](../../doc/controllers/service-onboarding.md#mark-service-as-ready-for-public-use)
* [Start Service Onboarding](../../doc/controllers/service-onboarding.md#start-service-onboarding)
* [Get Service Job Status](../../doc/controllers/service-onboarding.md#get-service-job-status)
* [Start Service Publishing](../../doc/controllers/service-onboarding.md#start-service-publishing)


# List Services

Fetch all organizational services in the platform.

```php
function listServices(
    string $accountName,
    ?string $correlationId = null,
    ?string $name = null,
    ?string $q = null,
    ?int $limit = null,
    ?int $offSet = null,
    ?string $sortKey = 'createdDate',
    ?string $sortDir = null,
    ?bool $detailsFlag = true
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |
| `name` | `?string` | Query, Optional | Name of the service whose information needs to be fetched.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `q` | `?string` | Query, Optional | Use the comma (:) character to separate multiple values eg type=myService:workloads.packageType=Helm,YAML:state=DRAFTED,VALIDATION_COMPLETED.<br>**Constraints**: *Maximum Length*: `2048`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!\/,+\-=_:.&*%\s]+$` |
| `limit` | `?int` | Query, Optional | Number of items to return.<br>**Constraints**: `>= 0`, `<= 1024` |
| `offSet` | `?int` | Query, Optional | Id of the last respose value in the previous list.<br>**Constraints**: `>= 0`, `<= 1024` |
| `sortKey` | `?string` | Query, Optional | Sorts the response by an attribute. Default is createdDate.<br>**Default**: `'createdDate'`<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `sortDir` | [`?string(SortDirectionEnum)`](../../doc/models/sort-direction-enum.md) | Query, Optional | Sorts the response. Use asc for ascending or desc for descending order. The default is desc.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `detailsFlag` | `?bool` | Query, Optional | Default as true. If it is true, then it will return all details.<br>**Default**: `true` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`Services`](../../doc/models/services.md).

## Example Usage

```php
$accountName = 'test_account1';

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$name = 'dev-api-test-service-mdp-1';

$q = 'type=myService:workloads.packageType=Helm,YAML:state=DRAFTED,VALIDATION_COMPLETED';

$limit = 256;

$offSet = 255;

$sortKey = 'createdDate';

$sortDir = SortDirectionEnum::DESC;

$detailsFlag = true;

$apiResponse = $serviceOnboardingController->listServices(
    $accountName,
    $correlationId,
    $name,
    $q,
    $limit,
    $offSet,
    $sortKey,
    $sortDir,
    $detailsFlag
);
```

## Example Response *(as JSON)*

```json
{
  "totalRecords": 1,
  "serviceResList": [
    {
      "boundaries": [],
      "categories": [
        "MongodbSensor"
      ],
      "compatibility": [
        {
          "csp": "AWS_WL"
        }
      ],
      "createdBy": "acme-user",
      "createdDate": "2022-08-03T13:31:52.000Z",
      "error": {},
      "errorResponse": {},
      "id": "b32321d2-4ee3-458b-a70b-e956525d46c9",
      "lastModifiedBy": "acme-user",
      "lastModifiedDate": "2022-08-03T13:31:52.000Z",
      "name": "dev-api-test-service-mdp-1",
      "state": "DRAFT",
      "status": "DRAFT_INPROGRESS",
      "tags": [
        {
          "key": "vnsp.mec.verizon.com/servicetype",
          "value": "My service"
        }
      ],
      "type": "MY_SERVICE",
      "version": "1.0.0",
      "workloads": [
        {
          "createdBy": "acme-user",
          "createdDate": "2022-08-03T13:31:52.000Z",
          "description": "MEC SD Workload.",
          "files": [],
          "helmHelmrepo": {
            "helmChartName": "mongodb",
            "helmChartVersion": "12.1.10"
          },
          "id": "cf5e0af0-0dfc-4b6b-be95-08fc28e5f4ad",
          "lastModifiedDte": "0001-01-01T00:00:00.000Z",
          "name": "dev-api-demo-repo",
          "packageType": "HELM",
          "repositoryType": "HELM",
          "updatedBy": "acme-user",
          "uploadType": "PULL_FROM_REPO"
        }
      ]
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 404 | Not Found. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |


# Register Service

Create a new service within user's organization.

```php
function registerService(string $accountName, Service $body, ?string $correlationId = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `body` | [`Service`](../../doc/models/service.md) | Body, Required | - |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`Service`](../../doc/models/service.md).

## Example Usage

```php
$accountName = 'test_account1';

$body = ServiceBuilder::init(
    'dev-api-test-service-mdp-1',
    '1.0.0'
)
    ->tags(
        [
            ServiceTagBuilder::init()
                ->key('vnsp.mec.verizon.com/servicetype')
                ->value('My service')
                ->build()
        ]
    )
    ->categories(
        [
            'MongodbSensor'
        ]
    )
    ->compatibility(
        [
            CompatibilityBuilder::init()
                ->csp(CSPCompatibilityEnum::AWS_WL)
                ->build()
        ]
    )
    ->type(ServiceTypeEnum::MY_SERVICE)
    ->workloads(
        [
            WorkloadBuilder::init(
                'dev-api-demo-repo'
            )
                ->description('MEC SD Workload.')
                ->packageType(ServiceDependencyPackageTypeEnum::HELM)
                ->uploadType(UploadTypeEnum::PULL_FROM_REPO)
                ->repositoryType(WorkloadRepositoryTypeEnum::HELM)
                ->helmHelmrepo(
                    ServiceOnboardingHelmHelmrepoBuilder::init(
                        'mongodb',
                        '12.1.10'
                    )->build()
                )->build()
        ]
    )->build();

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$apiResponse = $serviceOnboardingController->registerService(
    $accountName,
    $body,
    $correlationId
);
```

## Example Response *(as JSON)*

```json
{
  "categories": [
    "MongodbSensor"
  ],
  "compatibility": [
    {
      "csp": "AWS_WL"
    }
  ],
  "createdBy": "acme-user",
  "createdDate": "2022-08-03T13:31:52.000Z",
  "error": {},
  "errorResponse": {},
  "id": "b32321d2-4ee3-458b-a70b-e956525d46c9",
  "lastModifiedBy": "acme-user",
  "lastModifiedDate": "2022-08-03T13:31:52.000Z",
  "name": "dev-api-test-service-mdp-1",
  "tags": [
    {
      "key": "services.mec.verizon.com/servicetype",
      "value": "My service"
    }
  ],
  "type": "MY_SERVICE",
  "version": "1.0.0",
  "workloads": [
    {
      "createdBy": "acme-user",
      "createdDate": "2022-08-03T13:31:52.000Z",
      "description": "MEC SD Workload.",
      "helmHelmrepo": {
        "helmChartName": "mongodb",
        "helmChartVersion": "12.1.10"
      },
      "id": "cf5e0af0-0dfc-4b6b-be95-08fc28e5f4ad",
      "lastModifiedDte": "2022-08-03T13:31:52.000Z",
      "name": "dev-api-demo-repo",
      "packageType": "HELM",
      "repositoryType": "HELM",
      "updatedBy": "acme-user",
      "uploadType": "PULL_FROM_REPO"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 403 | Forbidden. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 404 | Not found. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 415 | Unsupported media type. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 429 | Too many requests. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |


# Upload Service Workload File

Upload workload payload/package in the MEC platform.

```php
function uploadServiceWorkloadFile(
    string $accountName,
    string $serviceName,
    string $version,
    string $categoryType,
    string $categoryName,
    FileWrapper $payload,
    ?string $correlationId = null,
    ?string $categoryVersion = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `serviceName` | `string` | Template, Required | Service name to which the file is going to be associated.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `version` | `string` | Template, Required | Version of the service being used.<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[0-9\.]+$` |
| `categoryType` | [`string(CategoryTypeEnum)`](../../doc/models/category-type-enum.md) | Query, Required | Type of the file being uploaded.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9-_.]+$` |
| `categoryName` | `string` | Query, Required | `workloadName` used in the service while creation.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9-_.]+$` |
| `payload` | `FileWrapper` | Form, Required | Payload/file which is to be uploaded should be provided in formData. |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |
| `categoryVersion` | `?string` | Query, Optional | It is mandatory for only service file, not mandatory for workload and workflow file.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[0-9\.]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ServiceFile`](../../doc/models/service-file.md).

## Example Usage

```php
$accountName = 'test_account1';

$serviceName = 'doccheck';

$version = '1.0.0';

$categoryType = CategoryTypeEnum::GENERAL_VALIDATION;

$categoryName = 'gst-server-workload';

$payload = FileWrapper::createFromPath('dummy_file');

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$categoryVersion = '1.0.0';

$apiResponse = $serviceOnboardingController->uploadServiceWorkloadFile(
    $accountName,
    $serviceName,
    $version,
    $categoryType,
    $categoryName,
    $payload,
    $correlationId,
    $categoryVersion
);
```

## Example Response *(as JSON)*

```json
{
  "id": "uuid",
  "serviceName": "gst-server",
  "serviceVersion": "1.0.0",
  "file": "values.yaml",
  "categoryName": "gst-server-workload",
  "categoryVersion": "1.0.0",
  "categoryType": "WORKLOAD_VALUES",
  "validationStatus": "Validation Success",
  "createdDate": "2006-01-02T15:04:05Z",
  "lastModifiedDate": "2006-01-02T15:04:05Z",
  "createdBy": "User",
  "updatedBy": "User"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 404 | Not found. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |


# List Service Details

Fetch a service details within user's organization using service name and version.

```php
function listServiceDetails(
    string $accountName,
    string $serviceName,
    string $version,
    ?string $correlationId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `serviceName` | `string` | Template, Required | Name of the service whose information needs to be fetched.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `version` | `string` | Template, Required | Version of service whose information needs to be fetched.<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[0-9\.]+$` |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`Service`](../../doc/models/service.md).

## Example Usage

```php
$accountName = 'test_account1';

$serviceName = 'dev-api-test-service-mdp-1';

$version = '1.0.0';

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$apiResponse = $serviceOnboardingController->listServiceDetails(
    $accountName,
    $serviceName,
    $version,
    $correlationId
);
```

## Example Response *(as JSON)*

```json
{
  "categories": [
    "MongodbSensor"
  ],
  "compatibility": [
    {
      "csp": "AWS_WL"
    }
  ],
  "createdBy": "acme-user",
  "createdDate": "2022-08-03T13:31:52.000Z",
  "error": {},
  "errorResponse": {},
  "id": "b32321d2-4ee3-458b-a70b-e956525d46c9",
  "lastModifiedBy": "acme-user",
  "lastModifiedDate": "2022-08-03T13:31:52.000Z",
  "name": "dev-api-test-service-mdp-1",
  "tags": [
    {
      "key": "services.mec.verizon.com/servicetype",
      "value": "My service"
    }
  ],
  "type": "MY_SERVICE",
  "version": "1.0.0",
  "workloads": [
    {
      "createdBy": "acme-user",
      "createdDate": "2022-08-03T13:31:52.000Z",
      "description": "MEC SD Workload.",
      "helmHelmrepo": {
        "helmChartName": "mongodb",
        "helmChartVersion": "12.1.10"
      },
      "id": "cf5e0af0-0dfc-4b6b-be95-08fc28e5f4ad",
      "lastModifiedDte": "2022-08-03T13:31:52.000Z",
      "name": "dev-api-demo-repo",
      "packageType": "HELM",
      "repositoryType": "HELM",
      "updatedBy": "acme-user",
      "uploadType": "PULL_FROM_REPO"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 404 | Not Found. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| Default | Unexpected error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |


# Start Service Claim Sand Box Testing

Initiate testing of a service in sandbox environment per claim based on service's compatibility(s).

```php
function startServiceClaimSandBoxTesting(
    string $accountName,
    string $serviceId,
    string $claimId,
    ClusterInfoDetails $body,
    ?string $correlationId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `serviceId` | `string` | Template, Required | An id of the service created e.g. UUID.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `claimId` | `string` | Template, Required | Id of the claim created e.g. UUID.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `body` | [`ClusterInfoDetails`](../../doc/models/cluster-info-details.md) | Body, Required | - |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ServiceManagementResult`](../../doc/models/service-management-result.md).

## Example Usage

```php
$accountName = 'test_account1';

$serviceId = 'b32321d2-4ee3-458b-a70b-e956525d46c9';

$claimId = '58296746-57ee-44f8-8107-399b61d58356';

$body = ClusterInfoDetailsBuilder::init(
    'ctc-1',
    'default'
)->build();

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$apiResponse = $serviceOnboardingController->startServiceClaimSandBoxTesting(
    $accountName,
    $serviceId,
    $claimId,
    $body,
    $correlationId
);
```

## Example Response *(as JSON)*

```json
{
  "jobId": "0c6e8560-e154-40f9-961e-28da3698436d",
  "status": "Inprogress",
  "state": "DRAFT"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| Default | Unexpected error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |


# Remove Service

Remove a service from user's organization.

```php
function removeService(
    string $accountName,
    string $serviceName,
    string $version,
    ?string $correlationId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `serviceName` | `string` | Template, Required | Name of the service which is about to be deleted.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `version` | `string` | Template, Required | Version of the service which is about to be deleted.<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[0-9\.]+$` |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`EdgeServiceOnboardingDeleteResult`](../../doc/models/edge-service-onboarding-delete-result.md).

## Example Usage

```php
$accountName = 'test_account1';

$serviceName = 'dev-api-test-service-mdp-1';

$version = '1.0.0';

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$apiResponse = $serviceOnboardingController->removeService(
    $accountName,
    $serviceName,
    $version,
    $correlationId
);
```

## Example Response *(as JSON)*

```json
{
  "message": "service deleted succesfully",
  "subStatus": "service delete - success"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 404 | Not found. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |


# Stop Service Testing

Start service certification process. On successful completion of this process, service's status will change to certified.

```php
function stopServiceTesting(
    string $accountName,
    string $serviceName,
    string $version,
    ?string $correlationId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `serviceName` | `string` | Template, Required | Name of the service e.g. any sub string of serviceName.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `version` | `string` | Template, Required | Version of service which is to be certified.<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[0-9\.]+$` |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ServiceManagementResult`](../../doc/models/service-management-result.md).

## Example Usage

```php
$accountName = 'test_account1';

$serviceName = 'dev-api-test-service-mdp-1';

$version = '1.0.0';

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$apiResponse = $serviceOnboardingController->stopServiceTesting(
    $accountName,
    $serviceName,
    $version,
    $correlationId
);
```

## Example Response *(as JSON)*

```json
{
  "jobId": "0c6e8560-e154-40f9-961e-28da3698436d",
  "status": "Inprogress",
  "state": "DRAFT"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| Default | Unexpected error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |


# Mark Service as Ready for Public Use

Start the process to change a service's status to "Ready to Use". On success, service's status will be changed to "Ready to Use". Only a ready to use service can be deployed in production environment.

```php
function markServiceAsReadyForPublicUse(
    string $accountName,
    string $serviceName,
    string $version,
    ?string $correlationId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `serviceName` | `string` | Template, Required | Name of the service e.g. any sub string of serviceName.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `version` | `string` | Template, Required | Version of the service which is already certified and is ready for public use.<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[0-9\.]+$` |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ServiceManagementResult`](../../doc/models/service-management-result.md).

## Example Usage

```php
$accountName = 'test_account1';

$serviceName = 'dev-api-test-service-mdp-1';

$version = '1.0.0';

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$apiResponse = $serviceOnboardingController->markServiceAsReadyForPublicUse(
    $accountName,
    $serviceName,
    $version,
    $correlationId
);
```

## Example Response *(as JSON)*

```json
{
  "jobId": "0c6e8560-e154-40f9-961e-28da3698436d",
  "status": "Inprogress",
  "state": "DRAFT"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| Default | Unexpected error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |


# Start Service Onboarding

Start service onboarding process to kick off service artifact validation and making the service ready for sandbox testing. On successful completion of this process system will generate claims for each selected cloud provider using which user can start sandbox testing.

```php
function startServiceOnboarding(
    string $accountName,
    string $serviceName,
    string $version,
    ?string $correlationId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `serviceName` | `string` | Template, Required | Name of the service which is to be onboarded.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `version` | `string` | Template, Required | Version of service which is to be onboarded.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[0-9\.]+$` |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9-]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ServiceManagementResult`](../../doc/models/service-management-result.md).

## Example Usage

```php
$accountName = 'test_account1';

$serviceName = 'dev-api-test-service-mdp-1';

$version = '1.0.0';

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$apiResponse = $serviceOnboardingController->startServiceOnboarding(
    $accountName,
    $serviceName,
    $version,
    $correlationId
);
```

## Example Response *(as JSON)*

```json
{
  "jobId": "0c6e8560-e154-40f9-961e-28da3698436d",
  "status": "Inprogress",
  "state": "DRAFT"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 403 | Forbidden. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 404 | Not found. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 415 | Unsupported media type. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 429 | Too many requests. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |


# Get Service Job Status

Check current status of job for a service using job ID.

```php
function getServiceJobStatus(string $accountName, string $jobId, ?string $correlationId = null): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `jobId` | `string` | Template, Required | Auto-generated Id of the job.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[A-Za-z0-9_-]+$` |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`CurrentStatus`](../../doc/models/current-status.md).

## Example Usage

```php
$accountName = 'test_account1';

$jobId = '0c6e8560-e154-40f9-961e-28da3698436d';

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$apiResponse = $serviceOnboardingController->getServiceJobStatus(
    $accountName,
    $jobId,
    $correlationId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "STARTED"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 404 | Not found. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |


# Start Service Publishing

Start publishing a service. On successful completion, service's status can be marked as Publish.

```php
function startServicePublishing(
    string $accountName,
    string $serviceName,
    string $version,
    ?string $correlationId = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `accountName` | `string` | Header, Required | User account name.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `serviceName` | `string` | Template, Required | Name of the service e.g. any sub string of serviceName.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` |
| `version` | `string` | Template, Required | Version of service which is to be published.<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[0-9\.]+$` |
| `correlationId` | `?string` | Header, Optional | **Constraints**: *Maximum Length*: `50`, *Pattern*: `^[a-zA-Z0-9-]+$` |

## Response Type

This method returns a `VerizonLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type [`ServiceManagementResult`](../../doc/models/service-management-result.md).

## Example Usage

```php
$accountName = 'test_account1';

$serviceName = 'dev-api-test-service-mdp-1';

$version = '1.0.0';

$correlationId = '9958f2f8-c4e3-46e0-8982-356de6515ae9';

$apiResponse = $serviceOnboardingController->startServicePublishing(
    $accountName,
    $serviceName,
    $version,
    $correlationId
);
```

## Example Response *(as JSON)*

```json
{
  "jobId": "0c6e8560-e154-40f9-961e-28da3698436d",
  "status": "Inprogress",
  "state": "DRAFT"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 401 | Unauthorized. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| 500 | Internal Server Error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |
| Default | Unexpected error. | [`EdgeServiceOnboardingResultErrorException`](../../doc/models/edge-service-onboarding-result-error-exception.md) |

