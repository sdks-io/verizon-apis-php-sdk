
# Service Instances Result

## Structure

`ServiceInstancesResult`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `count` | `?int` | Optional | - | getCount(): ?int | setCount(?int count): void |
| `next` | `?string` | Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-\=\?/]{1,64}$` | getNext(): ?string | setNext(?string next): void |
| `previous` | `?string` | Optional | **Constraints**: *Maximum Length*: `64`, *Pattern*: `^[\w\d_\.\#\$\%\|^\&\*\@\!\-\=\?/]{1,64}$` | getPrevious(): ?string | setPrevious(?string previous): void |
| `resultSet` | [`?(ServiceInstancesResultSetItem[])`](../../doc/models/service-instances-result-set-item.md) | Optional | **Constraints**: *Maximum Items*: `100` | getResultSet(): ?array | setResultSet(?array resultSet): void |

## Example (as JSON)

```json
{
  "count": 459,
  "next": "/mec/workflow/v1/service/instances?customerid=acme&offset=15",
  "resultSet": [
    {
      "service": {
        "createdAt": "2022-08-22T17:19:55.161Z",
        "customerId": "acme",
        "deploymentType": "PublicMEC",
        "id": "eda2cb4e-50ef-4ae8-b304-7d2f0f7a21c1",
        "labels": {},
        "modifiedAt": "2022-08-22T17:19:55.161Z",
        "name": "PQAService-Demo-08182022",
        "nameSpace": "default",
        "projectName": "vesa-pi7-pubmec-dev-proj",
        "revision": {
          "additionalParams": [],
          "version": "1.0.0"
        },
        "serviceName": "PQAService-Demo-08182022",
        "solutionRegulations": [
          {
            "region": "us-west-2",
            "zones": [
              {
                "zone": "us-west-2-wl1-den-wlz-1"
              }
            ]
          }
        ],
        "userId": "acme-user",
        "workLoadType": "container"
      },
      "state": "NOT_READY",
      "status": "SERVICE_INSTANCE_LAUNCH - IN_PROGRESS",
      "statusUrl": "statusUrl1",
      "requestId": "requestId7",
      "correlationId": "correlationId5"
    }
  ],
  "previous": "previous8"
}
```

