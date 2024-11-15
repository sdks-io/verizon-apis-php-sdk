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
use VerizonLib\Exceptions\ConnectivityManagementResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\ConnectivityManagementSuccessResult;
use VerizonLib\Models\DeviceManagementResult;
use VerizonLib\Models\SMSMessagesQueryResult;
use VerizonLib\Models\SMSSendRequest;
use VerizonLib\Server;

class SMSController extends BaseController
{
    /**
     * The messages are queued on the ThingSpace Platform and sent as soon as possible, but they may be
     * delayed due to traffic and routing considerations.
     *
     * @param SMSSendRequest $body Request to send SMS.
     *
     * @return ApiResponse Response from the API call
     */
    public function sendSMSToDevice(SMSSendRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/m2m/v1/sms')
            ->server(Server::THINGSPACE)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', ConnectivityManagementResultException::class))
            ->type(DeviceManagementResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * When HTTP status is 202, a URL will be returned in the Location header of the form
     * /sms/{aname}/history?next={token}. This URL can be used to request the next set of messages.
     *
     * @param string $aname Account name.
     * @param int|null $next Continue the previous query from the URL in Location Header.
     *
     * @return ApiResponse Response from the API call
     */
    public function listDevicesSMSMessages(string $aname, ?int $next = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/m2m/v1/sms/{aname}/history')
            ->server(Server::THINGSPACE)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(TemplateParam::init('aname', $aname), QueryParam::init('next', $next));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', ConnectivityManagementResultException::class))
            ->type(SMSMessagesQueryResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Tells the ThingSpace Platform to start sending mobile-originated SMS messages through the
     * EnhancedConnectivityService callback service. SMS messages from devices are queued until they are
     * retrieved by your application, either by callback or synchronously with GET
     * /sms/{accountName}/history.
     *
     * @param string $aname Account name.
     *
     * @return ApiResponse Response from the API call
     */
    public function startQueuedSMSDelivery(string $aname): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/m2m/v1/sms/{aname}/startCallbacks')
            ->server(Server::THINGSPACE)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(TemplateParam::init('aname', $aname));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', ConnectivityManagementResultException::class))
            ->type(ConnectivityManagementSuccessResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
