
# Service

A customer service on 5G MEC platform using 5G MEC portal.

## Structure

`Service`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | System generated unique UUID.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getId(): ?string | setId(?string id): void |
| `name` | `string` | Required | Name of the service needs to be deployed.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getName(): string | setName(string name): void |
| `description` | `?string` | Optional | Description of the service needs to be deployed.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `(^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s*]+$)\|(^\s*$)` | getDescription(): ?string | setDescription(?string description): void |
| `version` | `string` | Required | Version of the service needs to be deployed.<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[0-9\.]+$` | getVersion(): string | setVersion(string version): void |
| `metadata` | [`?(ServiceOnboardingAdditionalParams[])`](../../doc/models/service-onboarding-additional-params.md) | Optional | Properties are metadata attributes.<br>**Constraints**: *Maximum Items*: `2048` | getMetadata(): ?array | setMetadata(?array metadata): void |
| `tags` | [`?(ServiceTag[])`](../../doc/models/service-tag.md) | Optional | List of service tags.<br>**Constraints**: *Maximum Items*: `2048` | getTags(): ?array | setTags(?array tags): void |
| `categories` | `?(string[])` | Optional | Can be any name just to define it under a category.<br>**Constraints**: *Maximum Items*: `10000`, *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s]+$` | getCategories(): ?array | setCategories(?array categories): void |
| `isFavourite` | `?bool` | Optional | Boolean value to set/unset the service as favorite. | getIsFavourite(): ?bool | setIsFavourite(?bool isFavourite): void |
| `isDeleted` | `?bool` | Optional | Boolean to support soft delete of a version of a service. | getIsDeleted(): ?bool | setIsDeleted(?bool isDeleted): void |
| `compatibility` | [`?(Compatibility[])`](../../doc/models/compatibility.md) | Optional | Compatibility would have the attribute CSP which is Cloud service provider e.g. AWS_PUBLIC_CLOUD, AWS_WL, AWS_OUTPOST, AZURE_EDGE, AZURE_PUBLIC_CLOUD.<br>**Constraints**: *Maximum Items*: `2048` | getCompatibility(): ?array | setCompatibility(?array compatibility): void |
| `resource` | [`?ServiceResource`](../../doc/models/service-resource.md) | Optional | Resource of the service. | getResource(): ?ServiceResource | setResource(?ServiceResource resource): void |
| `createdDate` | `?DateTime` | Optional | Auto-derived time of creation. Part of response only. | getCreatedDate(): ?\DateTime | setCreatedDate(?\DateTime createdDate): void |
| `lastModifiedDate` | `?DateTime` | Optional | Last modified time. Part of response only. | getLastModifiedDate(): ?\DateTime | setLastModifiedDate(?\DateTime lastModifiedDate): void |
| `createdBy` | `?string` | Optional | User who created the service. Part of response only.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getCreatedBy(): ?string | setCreatedBy(?string createdBy): void |
| `lastModifiedBy` | `?string` | Optional | User who last modified the service. Part of response only.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getLastModifiedBy(): ?string | setLastModifiedBy(?string lastModifiedBy): void |
| `error` | [`?ServiceError`](../../doc/models/service-error.md) | Optional | Errors related to service. | getError(): ?ServiceError | setError(?ServiceError error): void |
| `errorResponse` | [`?EdgeServiceOnboardingResult`](../../doc/models/edge-service-onboarding-result.md) | Optional | Error response attribute of a service. | getErrorResponse(): ?EdgeServiceOnboardingResult | setErrorResponse(?EdgeServiceOnboardingResult errorResponse): void |
| `state` | [`?string(ServiceStateEnum)`](../../doc/models/service-state-enum.md) | Optional | Can have any value as - DRAFT, DESIGN, TESTING, PUBLISH, CERTIFY, READY_TO_USE, DEPRECATE, DELETED.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getState(): ?string | setState(?string state): void |
| `status` | [`?string(ServiceStatusEnum)`](../../doc/models/service-status-enum.md) | Optional | Can have any value as - DRAFT_INPROGRESS, DRAFT_COMPLETE, DESIGN_INPROGRESS, DESIGN_FAILED, DESIGN_COMPLETED, VALIDATION_INPROGRESS,  VALIDATION_FAILED, VALIDATION_COMPLETED, TESTING_INPROGRESS, TESTING_FAILED, TESTING_COMPLETED, READY_TO_USE_INPROGRESS, READY_TO_USE_FAILED, READY_TO_USE_COMPLETED, READY_TO_PRIVATE_USE_INPROGRESS, READY_TO_PRIVATE_USE_FAILED, READY_TO_PRIVATE_USE_COMPLETED,  PUBLISH_INPROGRESS,  PUBLISH_FAILED,  PUBLISH_COMPLETED,  CERTIFY_INPROGRESS,  CERTIFY_FAILED, CERTIFY_COMPLETED, DEPRECATE_INPROGRESS,  DEPRECATE_FAILED, DEPRECATE_COMPLETED, MARKDELETE_INPROGRESS, MARKDELETE_FAILED, MARKDELETE_COMPLETED. | getStatus(): ?string | setStatus(?string status): void |
| `type` | [`?string(ServiceTypeEnum)`](../../doc/models/service-type-enum.md) | Optional | Service Type e.g. Installation, Operations, Custom.<br>**Constraints**: *Maximum Length*: `100`, *Pattern*: `^[a-zA-Z0-9-_.]+$` | getType(): ?string | setType(?string type): void |
| `serviceHandlerId` | [`?ServiceHandlerId`](../../doc/models/service-handler-id.md) | Optional | Auto-generated Id of serviceHandlerId created. | getServiceHandlerId(): ?ServiceHandlerId | setServiceHandlerId(?ServiceHandlerId serviceHandlerId): void |
| `observabilityTemplate` | [`?ObservabilityTemplate`](../../doc/models/observability-template.md) | Optional | Attribute of service. | getObservabilityTemplate(): ?ObservabilityTemplate | setObservabilityTemplate(?ObservabilityTemplate observabilityTemplate): void |
| `serviceSwaggerSpecId` | [`?ServiceSwaggerSpecId`](../../doc/models/service-swagger-spec-id.md) | Optional | Auto-generated Id of service handler Swagger specification file uploaded. | getServiceSwaggerSpecId(): ?ServiceSwaggerSpecId | setServiceSwaggerSpecId(?ServiceSwaggerSpecId serviceSwaggerSpecId): void |
| `workflows` | [`?(Workflow[])`](../../doc/models/workflow.md) | Optional | **Constraints**: *Maximum Items*: `8192` | getWorkflows(): ?array | setWorkflows(?array workflows): void |
| `workloads` | [`?(Workload[])`](../../doc/models/workload.md) | Optional | **Constraints**: *Maximum Items*: `2048` | getWorkloads(): ?array | setWorkloads(?array workloads): void |
| `dependencies` | [`?(ServiceDependency[])`](../../doc/models/service-dependency.md) | Optional | Dependencies of the service.<br>**Constraints**: *Maximum Items*: `2048` | getDependencies(): ?array | setDependencies(?array dependencies): void |
| `boundaries` | [`?(Boundary[])`](../../doc/models/boundary.md) | Optional | Boundaries would have attributes csp, region and zoneId.<br>**Constraints**: *Maximum Items*: `10000` | getBoundaries(): ?array | setBoundaries(?array boundaries): void |

## Example (as JSON)

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
  "workloads": [
    {
      "description": "MEC SD Workload.",
      "packageType": "HELM",
      "helmHelmrepo": {
        "helmChartName": "mongodb",
        "helmChartVersion": "12.1.10"
      },
      "name": "dev-api-demo-repo",
      "repositoryType": "HELM",
      "uploadType": "PULL_FROM_REPO"
    }
  ],
  "name": "dev-api-test-service-mdp-1",
  "version": "1.0.0",
  "tags": [
    {
      "key": "vnsp.mec.verizon.com/servicetype",
      "value": "My service"
    }
  ],
  "type": "MY_SERVICE",
  "id": "id0",
  "description": "description0",
  "metadata": [
    {
      "key": "key3",
      "value": "value5"
    },
    {
      "key": "key4",
      "value": "value6"
    },
    {
      "key": "key5",
      "value": "value7"
    }
  ]
}
```

