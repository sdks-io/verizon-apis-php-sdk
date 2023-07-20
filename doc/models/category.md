
# Category

A user can create a category and use the same during service creation request.

## Structure

`Category`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Auto-generated unique Id eg: 58296746-57ee-44f8-8107-399b61d53967.<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getId(): ?string | setId(?string id): void |
| `categoryName` | `string` | Required | Any string value which is described as a category name.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9 \-_]+$` | getCategoryName(): string | setCategoryName(string categoryName): void |
| `categoryDescription` | `?string` | Optional | Brief description about the category being created.<br>**Constraints**: *Maximum Length*: `500`, *Pattern*: `^[a-zA-Z0-9?$@#()\[\]'!,+\-=_:.&*%\s]+$` | getCategoryDescription(): ?string | setCategoryDescription(?string categoryDescription): void |
| `isVerizonCertified` | `?bool` | Optional | Boolean value which implies if the category is verizon certified or not by default it is false.<br>**Default**: `false` | getIsVerizonCertified(): ?bool | setIsVerizonCertified(?bool isVerizonCertified): void |
| `createdDate` | `?DateTime` | Optional | System captured creation date and time when tag is created. | getCreatedDate(): ?\DateTime | setCreatedDate(?\DateTime createdDate): void |
| `lastModifiedDate` | `?DateTime` | Optional | System captured date and time when the tag was last modified. | getLastModifiedDate(): ?\DateTime | setLastModifiedDate(?\DateTime lastModifiedDate): void |
| `createdBy` | `?string` | Optional | User information who created the tag.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getCreatedBy(): ?string | setCreatedBy(?string createdBy): void |
| `updatedBy` | `?string` | Optional | Last user information who made changes to tag.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getUpdatedBy(): ?string | setUpdatedBy(?string updatedBy): void |

## Example (as JSON)

```json
{
  "id": "uuid",
  "categoryName": "Video Camera Monitoring",
  "categoryDescription": "Category",
  "isVerizonCertified": false,
  "createdDate": "2006-01-02T15:04:05Z",
  "lastModifiedDate": "2006-01-02T15:04:05Z",
  "createdBy": "User",
  "updatedBy": "User"
}
```

