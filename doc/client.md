
# Client Class Documentation

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `vZM2mToken` | `string` | M2M Session Token |
| `environment` | Environment | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `oauthClientId` | `string` | OAuth 2 Client ID |
| `oauthClientSecret` | `string` | OAuth 2 Client Secret |
| `oauthToken` | `OauthToken` | Object for storing information about the OAuth token |
| `oauthScopes` | `string(OauthScopeEnum)[]` |  |

The API client can be initialized as follows:

```php
$client = VerizonClientBuilder::init()
    ->oauthClientId('OAuthClientId')
    ->oauthClientSecret('OAuthClientSecret')
    ->vZM2mToken('VZ-M2M-Token')
    ->oauthScopes([
        VerizonLib\Models\OauthScopeEnum::DISCOVERYREAD,
        VerizonLib\Models\OauthScopeEnum::SERVICEPROFILEREAD,
        VerizonLib\Models\OauthScopeEnum::SERVICEPROFILEWRITE,
        VerizonLib\Models\OauthScopeEnum::SERVICEREGISTRYREAD,
        VerizonLib\Models\OauthScopeEnum::SERVICEREGISTRYWRITE,
        VerizonLib\Models\OauthScopeEnum::TS_MEC_FULLACCESS,
        VerizonLib\Models\OauthScopeEnum::TS_MEC_LIMITACCESS,
        VerizonLib\Models\OauthScopeEnum::TS_APPLICATION_RO,
        VerizonLib\Models\OauthScopeEnum::EDGEDISCOVERYREAD,
        VerizonLib\Models\OauthScopeEnum::EDGESERVICEPROFILEREAD,
        VerizonLib\Models\OauthScopeEnum::EDGESERVICEPROFILEWRITE,
        VerizonLib\Models\OauthScopeEnum::EDGESERVICEREGISTRYREAD,
        VerizonLib\Models\OauthScopeEnum::EDGESERVICEREGISTRYWRITE,
        VerizonLib\Models\OauthScopeEnum::READ,
        VerizonLib\Models\OauthScopeEnum::WRITE
    ])
    ->environment('Production')
    ->build();
```

API calls return an `ApiResponse` object that includes the following fields:

| Field | Description |
|  --- | --- |
| `getStatusCode` | Status code of the HTTP response |
| `getHeaders` | Headers of the HTTP response as a Hash |
| `getResult` | The deserialized body of the HTTP response as a String |

## Verizon Client

The gateway for the SDK. This class acts as a factory for the Controllers and also holds the configuration of the SDK.

## Controllers

| Name | Description |
|  --- | --- |
| getM5gEdgePlatformsController() | Gets M5gEdgePlatformsController |
| getServiceEndpointsController() | Gets ServiceEndpointsController |
| getServiceProfilesController() | Gets ServiceProfilesController |
| getDeviceManagementController() | Gets DeviceManagementController |
| getAccountsController() | Gets AccountsController |
| getDeviceGroupsController() | Gets DeviceGroupsController |
| getSMSController() | Gets SMSController |
| getSessionManagementController() | Gets SessionManagementController |
| getConnectivityCallbacksController() | Gets ConnectivityCallbacksController |
| getAccountRequestsController() | Gets AccountRequestsController |
| getServicePlansController() | Gets ServicePlansController |
| getDeviceProfileManagementController() | Gets DeviceProfileManagementController |
| getDeviceMonitoringController() | Gets DeviceMonitoringController |
| getUICCDeviceProfileManagementController() | Gets UICCDeviceProfileManagementController |
| getDevicesLocationsController() | Gets DevicesLocationsController |
| getExclusionsController() | Gets ExclusionsController |
| getDevicesLocationSubscriptionsController() | Gets DevicesLocationSubscriptionsController |
| getDeviceLocationCallbacksController() | Gets DeviceLocationCallbacksController |
| getUsageTriggerManagementController() | Gets UsageTriggerManagementController |
| getBillingController() | Gets BillingController |
| getSoftwareManagementSubscriptionsV1Controller() | Gets SoftwareManagementSubscriptionsV1Controller |
| getSoftwareManagementLicensesV1Controller() | Gets SoftwareManagementLicensesV1Controller |
| getFirmwareV1Controller() | Gets FirmwareV1Controller |
| getSoftwareManagementCallbacksV1Controller() | Gets SoftwareManagementCallbacksV1Controller |
| getSoftwareManagementReportsV1Controller() | Gets SoftwareManagementReportsV1Controller |
| getSoftwareManagementSubscriptionsV2Controller() | Gets SoftwareManagementSubscriptionsV2Controller |
| getSoftwareManagementLicensesV2Controller() | Gets SoftwareManagementLicensesV2Controller |
| getCampaignsV2Controller() | Gets CampaignsV2Controller |
| getSoftwareManagementCallbacksV2Controller() | Gets SoftwareManagementCallbacksV2Controller |
| getSoftwareManagementReportsV2Controller() | Gets SoftwareManagementReportsV2Controller |
| getClientLoggingController() | Gets ClientLoggingController |
| getServerLoggingController() | Gets ServerLoggingController |
| getConfigurationFilesController() | Gets ConfigurationFilesController |
| getSoftwareManagementSubscriptionsV3Controller() | Gets SoftwareManagementSubscriptionsV3Controller |
| getSoftwareManagementLicensesV3Controller() | Gets SoftwareManagementLicensesV3Controller |
| getCampaignsV3Controller() | Gets CampaignsV3Controller |
| getSoftwareManagementReportsV3Controller() | Gets SoftwareManagementReportsV3Controller |
| getFirmwareV3Controller() | Gets FirmwareV3Controller |
| getAccountDevicesController() | Gets AccountDevicesController |
| getSoftwareManagementCallbacksV3Controller() | Gets SoftwareManagementCallbacksV3Controller |
| getSIMSecureForIoTLicensesController() | Gets SIMSecureForIoTLicensesController |
| getAccountSubscriptionsController() | Gets AccountSubscriptionsController |
| getPerformanceMetricsController() | Gets PerformanceMetricsController |
| getDiagnosticsSubscriptionsController() | Gets DiagnosticsSubscriptionsController |
| getDiagnosticsObservationsController() | Gets DiagnosticsObservationsController |
| getDiagnosticsHistoryController() | Gets DiagnosticsHistoryController |
| getDiagnosticsSettingsController() | Gets DiagnosticsSettingsController |
| getDiagnosticsCallbacksController() | Gets DiagnosticsCallbacksController |
| getDiagnosticsFactoryResetController() | Gets DiagnosticsFactoryResetController |
| getTargetsController() | Gets TargetsController |
| getCloudConnectorSubscriptionsController() | Gets CloudConnectorSubscriptionsController |
| getCloudConnectorDevicesController() | Gets CloudConnectorDevicesController |
| getDeviceServiceManagementController() | Gets DeviceServiceManagementController |
| getDeviceReportsController() | Gets DeviceReportsController |
| getHyperPreciseLocationCallbacksController() | Gets HyperPreciseLocationCallbacksController |
| getAnomalySettingsController() | Gets AnomalySettingsController |
| getAnomalyTriggersController() | Gets AnomalyTriggersController |
| getMECSitesController() | Gets MECSitesController |
| getServiceLaunchProfilesController() | Gets ServiceLaunchProfilesController |
| getServiceLaunchRequestsController() | Gets ServiceLaunchRequestsController |
| getServiceInstancesController() | Gets ServiceInstancesController |
| getServiceInstanceOperationsController() | Gets ServiceInstanceOperationsController |
| getServiceOnboardingController() | Gets ServiceOnboardingController |
| getServiceMetadataController() | Gets ServiceMetadataController |
| getRepositoriesController() | Gets RepositoriesController |
| getCSPProfilesController() | Gets CSPProfilesController |
| getServiceClaimsController() | Gets ServiceClaimsController |
| getOauthAuthorizationController() | Gets OauthAuthorizationController |

