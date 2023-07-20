
# Node Status Info

## Structure

`NodeStatusInfo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `machineID` | `?string` | Optional | - | getMachineID(): ?string | setMachineID(?string machineID): void |
| `systemUUID` | `?string` | Optional | - | getSystemUUID(): ?string | setSystemUUID(?string systemUUID): void |
| `bootID` | `?string` | Optional | - | getBootID(): ?string | setBootID(?string bootID): void |
| `kernelVersion` | `?string` | Optional | - | getKernelVersion(): ?string | setKernelVersion(?string kernelVersion): void |
| `osImage` | `?string` | Optional | - | getOsImage(): ?string | setOsImage(?string osImage): void |
| `containerRuntimeVersion` | `?string` | Optional | - | getContainerRuntimeVersion(): ?string | setContainerRuntimeVersion(?string containerRuntimeVersion): void |
| `kubeletVersion` | `?string` | Optional | - | getKubeletVersion(): ?string | setKubeletVersion(?string kubeletVersion): void |
| `kubeProxyVersion` | `?string` | Optional | - | getKubeProxyVersion(): ?string | setKubeProxyVersion(?string kubeProxyVersion): void |
| `operatingSystem` | `?string` | Optional | - | getOperatingSystem(): ?string | setOperatingSystem(?string operatingSystem): void |
| `architecture` | `?string` | Optional | - | getArchitecture(): ?string | setArchitecture(?string architecture): void |

## Example (as JSON)

```json
{
  "machineID": "machineID8",
  "systemUUID": "systemUUID8",
  "bootID": "bootID0",
  "kernelVersion": "kernelVersion4",
  "osImage": "osImage2"
}
```

