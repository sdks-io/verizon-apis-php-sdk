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
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\HyperPreciseLocationResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\BullseyeServiceRequest;
use VerizonLib\Models\BullseyeServiceResult;
use VerizonLib\Server;

class DeviceServiceManagementController extends BaseController
{
    /**
     * Enable/disable hyper-precise service for a device.
     *
     * @param BullseyeServiceRequest $body List of devices and hyper-precise required statuses.
     *
     * @return ApiResponse Response from the API call
     */
    public function updateDeviceHyperPreciseStatus(BullseyeServiceRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/devices/services')
            ->server(Server::HYPER_PRECISE_LOCATION)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad request.', HyperPreciseLocationResultException::class))
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    'Unauthorized request. Access token is missing or invalid.',
                    HyperPreciseLocationResultException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init('Forbidden request.', HyperPreciseLocationResultException::class)
            )
            ->throwErrorOn(
                '404',
                ErrorType::init('Bad request. Not found.', HyperPreciseLocationResultException::class)
            )
            ->throwErrorOn(
                '409',
                ErrorType::init('Bad request. Conflict state.', HyperPreciseLocationResultException::class)
            )
            ->throwErrorOn(
                '500',
                ErrorType::init('Internal Server Error.', HyperPreciseLocationResultException::class)
            )
            ->type(BullseyeServiceResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Gets the list of a status for hyper-precise location devices.
     *
     * @param string $imei A unique identifier for a device.
     * @param string $accountNumber A unique identifier for an account.
     *
     * @return ApiResponse Response from the API call
     */
    public function getDeviceHyperPreciseStatus(string $imei, string $accountNumber): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/devices/services')
            ->server(Server::HYPER_PRECISE_LOCATION)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(QueryParam::init('imei', $imei), QueryParam::init('accountNumber', $accountNumber));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad request.', HyperPreciseLocationResultException::class))
            ->throwErrorOn(
                '401',
                ErrorType::init(
                    'Unauthorized request. Access token is missing or invalid.',
                    HyperPreciseLocationResultException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::init('Forbidden request.', HyperPreciseLocationResultException::class)
            )
            ->throwErrorOn(
                '404',
                ErrorType::init('Bad request. Not found.', HyperPreciseLocationResultException::class)
            )
            ->throwErrorOn(
                '409',
                ErrorType::init('Bad request. Conflict state.', HyperPreciseLocationResultException::class)
            )
            ->throwErrorOn(
                '500',
                ErrorType::init('Internal Server Error.', HyperPreciseLocationResultException::class)
            )
            ->type(BullseyeServiceResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
