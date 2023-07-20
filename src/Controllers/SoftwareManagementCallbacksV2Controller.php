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
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\FotaV2ResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\CallbackSummary;
use VerizonLib\Models\FotaV2CallbackRegistrationRequest;
use VerizonLib\Models\FotaV2CallbackRegistrationResult;
use VerizonLib\Models\FotaV2SuccessResult;
use VerizonLib\Server;

class SoftwareManagementCallbacksV2Controller extends BaseController
{
    /**
     * This endpoint allows user to create the HTTPS callback address.
     *
     * @param string $account Account identifier.
     * @param FotaV2CallbackRegistrationRequest $body Callback URL registration.
     *
     * @return ApiResponse Response from the API call
     */
    public function registerCallback(string $account, FotaV2CallbackRegistrationRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/callbacks/{account}')
            ->server(Server::SOFTWARE_MANAGEMENT_V2)
            ->auth('global')
            ->parameters(
                TemplateParam::init('account', $account),
                HeaderParam::init('Content-Type', '*/*'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', FotaV2ResultException::class))
            ->type(FotaV2CallbackRegistrationResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows user to get the registered callback information.
     *
     * @param string $account Account identifier.
     *
     * @return ApiResponse Response from the API call
     */
    public function listRegisteredCallbacks(string $account): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/callbacks/{account}')
            ->server(Server::SOFTWARE_MANAGEMENT_V2)
            ->auth('global')
            ->parameters(TemplateParam::init('account', $account));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', FotaV2ResultException::class))
            ->type(CallbackSummary::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows user to update the HTTPS callback address.
     *
     * @param string $account Account identifier.
     * @param FotaV2CallbackRegistrationRequest $body Callback URL registration.
     *
     * @return ApiResponse Response from the API call
     */
    public function updateCallback(string $account, FotaV2CallbackRegistrationRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/callbacks/{account}')
            ->server(Server::SOFTWARE_MANAGEMENT_V2)
            ->auth('global')
            ->parameters(
                TemplateParam::init('account', $account),
                HeaderParam::init('Content-Type', '*/*'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', FotaV2ResultException::class))
            ->type(FotaV2CallbackRegistrationResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows user to delete a previously registered callback URL.
     *
     * @param string $account Account identifier.
     *
     * @return ApiResponse Response from the API call
     */
    public function deregisterCallback(string $account): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/callbacks/{account}')
            ->server(Server::SOFTWARE_MANAGEMENT_V2)
            ->auth('global')
            ->parameters(TemplateParam::init('account', $account));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', FotaV2ResultException::class))
            ->type(FotaV2SuccessResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}