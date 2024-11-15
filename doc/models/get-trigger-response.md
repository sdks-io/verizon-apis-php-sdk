
# Get Trigger Response

## Structure

`GetTriggerResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountName` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getAccountName(): ?string | setAccountName(?string accountName): void |
| `comparator` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getComparator(): ?string | setComparator(?string comparator): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `groupName` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getGroupName(): ?string | setGroupName(?string groupName): void |
| `modifiedAt` | `?DateTime` | Optional | - | getModifiedAt(): ?\DateTime | setModifiedAt(?\DateTime modifiedAt): void |
| `notificationGroupName` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getNotificationGroupName(): ?string | setNotificationGroupName(?string notificationGroupName): void |
| `organizationName` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getOrganizationName(): ?string | setOrganizationName(?string organizationName): void |
| `smsType` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getSmsType(): ?string | setSmsType(?string smsType): void |
| `threshold` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getThreshold(): ?string | setThreshold(?string threshold): void |
| `thresholdUnit` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getThresholdUnit(): ?string | setThresholdUnit(?string thresholdUnit): void |
| `triggerCategory` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getTriggerCategory(): ?string | setTriggerCategory(?string triggerCategory): void |
| `triggerCycle` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getTriggerCycle(): ?string | setTriggerCycle(?string triggerCycle): void |
| `triggerId` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getTriggerId(): ?string | setTriggerId(?string triggerId): void |
| `triggerName` | `?string` | Optional | **Constraints**: *Minimum Length*: `3`, *Maximum Length*: `32`, *Pattern*: `^[A-Za-z0-9]{3,32}$` | getTriggerName(): ?string | setTriggerName(?string triggerName): void |

## Example (as JSON)

```json
{
  "accountName": "accountName2",
  "comparator": "comparator4",
  "createdAt": "2016-03-13T12:52:32.123Z",
  "groupName": "groupName8",
  "modifiedAt": "2016-03-13T12:52:32.123Z"
}
```

