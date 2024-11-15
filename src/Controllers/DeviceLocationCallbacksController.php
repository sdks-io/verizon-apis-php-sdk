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
use VerizonLib\Exceptions\DeviceLocationResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\CallbackRegistrationResult;
use VerizonLib\Models\CallbackServiceNameEnum;
use VerizonLib\Models\DeviceLocationCallback;
use VerizonLib\Models\DeviceLocationSuccessResult;
use VerizonLib\Models\TransactionID;
use VerizonLib\Server;

class DeviceLocationCallbacksController extends BaseController
{
    /**
     * Cancel an asynchronous report request.
     *
     * @param string $accountName Account identifier in "##########-#####".
     * @param string $txid The `transactionId` value.
     *
     * @return ApiResponse Response from the API call
     */
    public function cancelAsyncReport(string $accountName, string $txid): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/devicelocations/{txid}')
            ->server(Server::DEVICE_LOCATION)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(QueryParam::init('accountName', $accountName), TemplateParam::init('txid', $txid));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Unexpected error.', DeviceLocationResultException::class))
            ->type(TransactionID::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns a list of all registered callback URLs for the account.
     *
     * @param string $accountName Account number.
     *
     * @return ApiResponse Response from the API call
     */
    public function listRegisteredCallbacks(string $accountName): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/callbacks/{accountName}')
            ->server(Server::DEVICE_LOCATION)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(TemplateParam::init('accountName', $accountName));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', DeviceLocationResultException::class))
            ->type(DeviceLocationCallback::class, 1)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Provide a URL to receive messages from a ThingSpace callback service.
     *
     * @param string $accountName Account number.
     * @param DeviceLocationCallback $body Request to register a callback.
     *
     * @return ApiResponse Response from the API call
     */
    public function registerCallback(string $accountName, DeviceLocationCallback $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/callbacks/{accountName}')
            ->server(Server::DEVICE_LOCATION)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(
                TemplateParam::init('accountName', $accountName),
                HeaderParam::init('Content-Type', '*/*'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', DeviceLocationResultException::class))
            ->type(CallbackRegistrationResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Deregister a URL to stop receiving callback messages.
     *
     * @param string $accountName Account number.
     * @param string $service Callback service name.
     *
     * @return ApiResponse Response from the API call
     */
    public function deregisterCallback(string $accountName, string $service): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/callbacks/{accountName}/name/{service}')
            ->server(Server::DEVICE_LOCATION)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(
                TemplateParam::init('accountName', $accountName),
                TemplateParam::init('service', $service)->serializeBy([CallbackServiceNameEnum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', DeviceLocationResultException::class))
            ->type(DeviceLocationSuccessResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
