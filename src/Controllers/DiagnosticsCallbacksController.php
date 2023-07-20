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
use Core\Request\Parameters\QueryParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\DeviceDiagnosticsResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\CallbackRegistrationRequest;
use VerizonLib\Models\DeviceDiagnosticsCallback;
use VerizonLib\Server;

class DiagnosticsCallbacksController extends BaseController
{
    /**
     * This endpoint allows user to delete a registered callback URL and credential.
     *
     * @param string $accountName Account identifier.
     * @param string $serviceName Service name for callback notification.
     *
     * @return ApiResponse Response from the API call
     */
    public function unregisterDiagnosticsCallback(string $accountName, string $serviceName): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/callbacks')
            ->server(Server::DEVICE_DIAGNOSTICS)
            ->auth('global')
            ->parameters(
                QueryParam::init('accountName', $accountName),
                QueryParam::init('serviceName', $serviceName)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', DeviceDiagnosticsResultException::class))
            ->type(DeviceDiagnosticsCallback::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows user to get the registered callback information of an existing diagnostics
     * subscription.
     *
     * @param string $accountName Account identifier.
     *
     * @return ApiResponse Response from the API call
     */
    public function getDiagnosticsSubscriptionCallbackInfo(string $accountName): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/callbacks')
            ->server(Server::DEVICE_DIAGNOSTICS)
            ->auth('global')
            ->parameters(QueryParam::init('accountName', $accountName));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', DeviceDiagnosticsResultException::class))
            ->type(DeviceDiagnosticsCallback::class, 1)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows user update the callback HTTPS address of an existing diagnostics subscription.
     *
     * @param CallbackRegistrationRequest $body Callback URL registration request.
     *
     * @return ApiResponse Response from the API call
     */
    public function registerDiagnosticsCallbackURL(CallbackRegistrationRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/callbacks')
            ->server(Server::DEVICE_DIAGNOSTICS)
            ->auth('global')
            ->parameters(HeaderParam::init('Content-Type', '*/*'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', DeviceDiagnosticsResultException::class))
            ->type(DeviceDiagnosticsCallback::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
