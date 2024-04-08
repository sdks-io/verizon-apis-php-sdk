<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\ESIMRestErrorResponseException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\ESIMProfileRequest;
use VerizonLib\Models\ESIMRequestResponse;
use VerizonLib\Models\ProfileRequest2;
use VerizonLib\Server;

class SIMActionsController extends BaseController
{
    /**
     * Uses the profile to activate the SIM.
     *
     * @param ESIMProfileRequest $body Device Profile Query
     *
     * @return ApiResponse Response from the API call
     */
    public function setactivateUsingPOST(ESIMProfileRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/m2m/v1/devices/profile/actions/activate')
            ->server(Server::THINGSPACE)
            ->auth('oAuth2')
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

    /**
     * Uses the profile to deactivate the SIM.
     *
     * @param ProfileRequest2 $body Device Profile Query
     *
     * @return ApiResponse Response from the API call
     */
    public function setdeactivateUsingPOST(ProfileRequest2 $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/m2m/v1/devices/profile/actions/deactivate')
            ->server(Server::THINGSPACE)
            ->auth('oAuth2')
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