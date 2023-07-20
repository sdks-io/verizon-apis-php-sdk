
# Service File

Response to get file of a service.

## Structure

`ServiceFile`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | System generated unique UUID.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getId(): ?string | setId(?string id): void |
| `serviceName` | `?string` | Optional | Service name to which the file is going to be associated.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getServiceName(): ?string | setServiceName(?string serviceName): void |
| `serviceVersion` | `?string` | Optional | Version of the service being used.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[0-9\.]+$` | getServiceVersion(): ?string | setServiceVersion(?string serviceVersion): void |
| `file` | `?string` | Optional | File which is to be uploaded should be provided in formData.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9.\-_]+$` | getFile(): ?string | setFile(?string file): void |
| `categoryName` | `?string` | Optional | Name of the workload being used in the service.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getCategoryName(): ?string | setCategoryName(?string categoryName): void |
| `categoryVersion` | `?string` | Optional | Version of the workload being used in the service.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9.\-_]+$` | getCategoryVersion(): ?string | setCategoryVersion(?string categoryVersion): void |
| `categoryType` | `?string` | Optional | Type of the workload being used in the service eg: use WORKLOAD_TGZ to upload the workload file in tgz format.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getCategoryType(): ?string | setCategoryType(?string categoryType): void |
| `validationStatus` | `?string` | Optional | Gives the success and failure response for the validation.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9-_ .]+$` | getValidationStatus(): ?string | setValidationStatus(?string validationStatus): void |
| `createdDate` | `?DateTime` | Optional | System captured creation date and time when tag is created. | getCreatedDate(): ?\DateTime | setCreatedDate(?\DateTime createdDate): void |
| `lastModifiedDate` | `?DateTime` | Optional | System captured date and time when the tag was last modified. | getLastModifiedDate(): ?\DateTime | setLastModifiedDate(?\DateTime lastModifiedDate): void |
| `createdBy` | `?string` | Optional | User information who created the tag.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getCreatedBy(): ?string | setCreatedBy(?string createdBy): void |
| `updatedBy` | `?string` | Optional | Last user information who made changes to tag.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getUpdatedBy(): ?string | setUpdatedBy(?string updatedBy): void |

## Example (as JSON)

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

