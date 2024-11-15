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
use VerizonLib\Exceptions\GIORestErrorResponseException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\GIORequestResponse;
use VerizonLib\Models\GIOSMSSendRequest;
use VerizonLib\Models\SMSEventHistoryRequest;
use VerizonLib\Models\SmsMessagesResponse;
use VerizonLib\Models\SuccessResponse;
use VerizonLib\Server;

class DeviceSMSMessagingController extends BaseController
{
    /**
     * Sends an SMS message to one device. Messages are queued on the M2M MC Platform and sent as soon as
     * possible, but they may be delayed due to traffic and routing considerations.
     *
     * @param GIOSMSSendRequest $body SMS message to an indiividual device.
     *
     * @return ApiResponse Response from the API call
     */
    public function sendAnSmsMessage(GIOSMSSendRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/m2m/v1/sms')
            ->server(Server::THINGSPACE)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error response', GIORestErrorResponseException::class))
            ->type(GIORequestResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves queued SMS messages sent by all M2M MC devices associated with an account.
     *
     * @param string $accountName Numeric account name
     * @param string|null $next Continue the previous query from the pageUrl in Location Header
     *
     * @return ApiResponse Response from the API call
     */
    public function getSmsMessages(string $accountName, ?string $next = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/m2m/v1/sms/{accountName}/history')
            ->server(Server::THINGSPACE)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(TemplateParam::init('accountName', $accountName), QueryParam::init('next', $next));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error response', GIORestErrorResponseException::class))
            ->type(SmsMessagesResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Starts delivery of SMS messages for the specified account.
     *
     * @param string $accountName Numeric account name
     *
     * @return ApiResponse Response from the API call
     */
    public function startSmsMessageDelivery(string $accountName): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/m2m/v1/sms/{accountName}/startCallbacks')
            ->server(Server::THINGSPACE)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(TemplateParam::init('accountName', $accountName));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error response', GIORestErrorResponseException::class))
            ->type(SuccessResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns a list of sms history for a given device during a specified time frame.
     *
     * @param SMSEventHistoryRequest $body Device Query
     *
     * @return ApiResponse Response from the API call
     */
    public function listSmsMessageHistory(SMSEventHistoryRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/m2m/v1/devices/sms/history/actions/list')
            ->server(Server::THINGSPACE)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error response', GIORestErrorResponseException::class))
            ->type(GIORequestResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
