<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Controllers;

use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\FotaV3ResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\CampaignStatusEnum;
use VerizonLib\Models\DeviceFirmwareUpgrade;
use VerizonLib\Models\V3CampaignDevice;
use VerizonLib\Models\V3CampaignHistory;
use VerizonLib\Server;

class SoftwareManagementReportsV3Controller extends BaseController
{
    /**
     * Retrieve a list of campaigns for an account that have a specified campaign status.
     *
     * @param string $acc Account identifier.
     * @param string $campaignStatus Campaign status.
     * @param string|null $lastSeenCampaignId Last seen campaign Id.
     *
     * @return ApiResponse Response from the API call
     */
    public function getCampaignHistoryByStatus(
        string $acc,
        string $campaignStatus,
        ?string $lastSeenCampaignId = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/reports/{acc}/firmware/campaigns')
            ->server(Server::SOFTWARE_MANAGEMENT_V3)
            ->auth('global')
            ->parameters(
                TemplateParam::init('acc', $acc),
                QueryParam::init('campaignStatus', $campaignStatus)
                    ->serializeBy([CampaignStatusEnum::class, 'checkValue']),
                QueryParam::init('lastSeenCampaignId', $lastSeenCampaignId)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', FotaV3ResultException::class))
            ->type(V3CampaignHistory::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve campaign history for a specific device.
     *
     * @param string $acc Account identifier.
     * @param string $deviceId Device IMEI identifier.
     *
     * @return ApiResponse Response from the API call
     */
    public function getDeviceFirmwareUpgradeHistory(string $acc, string $deviceId): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/reports/{acc}/devices/{deviceId}')
            ->server(Server::SOFTWARE_MANAGEMENT_V3)
            ->auth('global')
            ->parameters(TemplateParam::init('acc', $acc), TemplateParam::init('deviceId', $deviceId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', FotaV3ResultException::class))
            ->type(DeviceFirmwareUpgrade::class, 1)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve a list of all devices in a campaign and the status of each device.
     *
     * @param string $acc Account identifier.
     * @param string $campaignId Campaign identifier.
     * @param string|null $lastSeenDeviceId Last seen device identifier.
     *
     * @return ApiResponse Response from the API call
     */
    public function getCampaignDeviceStatus(
        string $acc,
        string $campaignId,
        ?string $lastSeenDeviceId = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/reports/{acc}/campaigns/{campaignId}/devices')
            ->server(Server::SOFTWARE_MANAGEMENT_V3)
            ->auth('global')
            ->parameters(
                TemplateParam::init('acc', $acc),
                TemplateParam::init('campaignId', $campaignId),
                QueryParam::init('lastSeenDeviceId', $lastSeenDeviceId)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', FotaV3ResultException::class))
            ->type(V3CampaignDevice::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
