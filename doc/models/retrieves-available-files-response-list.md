
# Retrieves Available Files Response List

## Structure

`RetrievesAvailableFilesResponseList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `availableFilesResponse` | [`?(RetrievesAvailableFilesResponse[])`](../../doc/models/retrieves-available-files-response.md) | Optional | **Constraints**: *Maximum Items*: `100` | getAvailableFilesResponse(): ?array | setAvailableFilesResponse(?array availableFilesResponse): void |

## Example (as JSON)

```json
{
  "AvailableFilesResponse": [
    {
      "fileName": "fileName2",
      "fileVersion": "fileVersion4",
      "releaseNote": "releaseNote0",
      "make": "make2",
      "model": "model6"
    }
  ]
}
```

