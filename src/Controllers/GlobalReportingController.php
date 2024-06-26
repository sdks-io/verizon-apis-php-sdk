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
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\ESIMRestErrorResponseException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\ESIMProvhistoryRequest;
use VerizonLib\Models\ESIMRequestResponse;
use VerizonLib\Models\ESIMStatusResponse;
use VerizonLib\Server;

class GlobalReportingController extends BaseController
{
    /**
     * Get the status of a request made with the Device Actions.
     *
     * @param string $accountname
     * @param string $requestID
     *
     * @return ApiResponse Response from the API call
     */
    public function requeststatususingGET(string $accountname, string $requestID): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/m2m/v2/accounts/{accountname}/requests/{requestID}/status'
        )
            ->server(Server::THINGSPACE)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(
                TemplateParam::init('accountname', $accountname),
                TemplateParam::init('requestID', $requestID)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad request', ESIMRestErrorResponseException::class))
            ->throwErrorOn('401', ErrorType::init('Unauthorized', ESIMRestErrorResponseException::class))
            ->throwErrorOn('403', ErrorType::init('Forbidden', ESIMRestErrorResponseException::class))
            ->throwErrorOn(
                '404',
                ErrorType::init('Not Found / Does not exist', ESIMRestErrorResponseException::class)
            )
            ->throwErrorOn(
                '406',
                ErrorType::init('Format / Request Unacceptable', ESIMRestErrorResponseException::class)
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests', ESIMRestErrorResponseException::class))
            ->throwErrorOn('0', ErrorType::init('Error response', ESIMRestErrorResponseException::class))
            ->type(ESIMStatusResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retreive the provisioning history of a specific device or devices.
     *
     * @param ESIMProvhistoryRequest $body Device Provisioning History
     *
     * @return ApiResponse Response from the API call
     */
    public function deviceprovhistoryUsingPOST(ESIMProvhistoryRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/m2m/v2/devices/history/actions/list')
            ->server(Server::THINGSPACE)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad request', ESIMRestErrorResponseException::class))
            ->throwErrorOn('401', ErrorType::init('Unauthorized', ESIMRestErrorResponseException::class))
            ->throwErrorOn('403', ErrorType::init('Forbidden', ESIMRestErrorResponseException::class))
            ->throwErrorOn(
                '404',
                ErrorType::init('Not Found / Does not exist', ESIMRestErrorResponseException::class)
            )
            ->throwErrorOn(
                '406',
                ErrorType::init('Format / Request Unacceptable', ESIMRestErrorResponseException::class)
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests', ESIMRestErrorResponseException::class))
            ->throwErrorOn('0', ErrorType::init('Error response', ESIMRestErrorResponseException::class))
            ->type(ESIMRequestResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
