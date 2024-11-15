<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Controllers;

use Core\Authentication\Auth;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\FotaV3ResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\V3LicenseAssignedRemovedResult;
use VerizonLib\Models\V3LicenseIMEI;
use VerizonLib\Models\V3LicenseSummary;
use VerizonLib\Server;

class SoftwareManagementLicensesV3Controller extends BaseController
{
    /**
     * The endpoint allows user to list license usage.
     *
     * @param string $acc Account identifier.
     * @param string|null $lastSeenDeviceId Last seen device identifier.
     *
     * @return ApiResponse Response from the API call
     */
    public function getAccountLicensesStatus(string $acc, ?string $lastSeenDeviceId = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/licenses/{acc}')
            ->server(Server::SOFTWARE_MANAGEMENT_V3)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(TemplateParam::init('acc', $acc), QueryParam::init('lastSeenDeviceId', $lastSeenDeviceId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', FotaV3ResultException::class))
            ->type(V3LicenseSummary::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows user to assign licenses to a list of devices.
     *
     * @param string $acc Account identifier.
     * @param V3LicenseIMEI $body License assignment.
     *
     * @return ApiResponse Response from the API call
     */
    public function assignLicensesToDevices(string $acc, V3LicenseIMEI $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/licenses/{acc}/assign')
            ->server(Server::SOFTWARE_MANAGEMENT_V3)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(
                TemplateParam::init('acc', $acc),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', FotaV3ResultException::class))
            ->type(V3LicenseAssignedRemovedResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows user to remove licenses from a list of devices.
     *
     * @param string $acc Account identifier.
     * @param V3LicenseIMEI $body License removal.
     *
     * @return ApiResponse Response from the API call
     */
    public function removeLicensesFromDevices(string $acc, V3LicenseIMEI $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/licenses/{acc}/remove')
            ->server(Server::SOFTWARE_MANAGEMENT_V3)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(
                TemplateParam::init('acc', $acc),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', FotaV3ResultException::class))
            ->type(V3LicenseAssignedRemovedResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
