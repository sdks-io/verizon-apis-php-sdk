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
use VerizonLib\Exceptions\DeviceLocationResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\ManagedAccountCancelRequest;
use VerizonLib\Models\ManagedAccountCancelResponse;
use VerizonLib\Models\ManagedAccountsAddRequest;
use VerizonLib\Models\ManagedAccountsAddResponse;
use VerizonLib\Models\ManagedAccountsGetAllResponse;
use VerizonLib\Models\ManagedAccountsProvisionRequest;
use VerizonLib\Models\ManagedAccountsProvisionResponse;
use VerizonLib\Server;

class BillingController extends BaseController
{
    /**
     * This endpoint allows user to add managed accounts to a primary account.
     *
     *
     * @param ManagedAccountsAddRequest $body Service name and list of accounts to add
     *
     * @return ApiResponse Response from the API call
     */
    public function addAccount(ManagedAccountsAddRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/managedaccounts/actions/add')
            ->server(Server::SUBSCRIPTION_SERVER)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error', DeviceLocationResultException::class))
            ->type(ManagedAccountsAddResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Activates a managed billing service relationship between a managed account and the primary account.
     *
     * @param ManagedAccountsProvisionRequest $body Service name and list of accounts to add
     *
     * @return ApiResponse Response from the API call
     */
    public function managedAccountAction(ManagedAccountsProvisionRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/managedaccounts/actions/provision')
            ->server(Server::SUBSCRIPTION_SERVER)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error', DeviceLocationResultException::class))
            ->type(ManagedAccountsProvisionResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Deactivates a managed billing service relationship between a managed account and the primary account.
     *
     *
     * @param ManagedAccountCancelRequest $body Service name and list of accounts to add
     *
     * @return ApiResponse Response from the API call
     */
    public function cancelManagedAccountAction(ManagedAccountCancelRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/managedaccounts/actions/cancel')
            ->server(Server::SUBSCRIPTION_SERVER)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error', DeviceLocationResultException::class))
            ->type(ManagedAccountCancelResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows user to retrieve the list of all accounts managed by a primary account.
     *
     * @param string $accountName Primary account identifier
     * @param string $serviceName Service name
     *
     * @return ApiResponse Response from the API call
     */
    public function listManagedAccount(string $accountName, string $serviceName): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/managedaccounts/{accountName}/service/{serviceName}'
        )
            ->server(Server::SUBSCRIPTION_SERVER)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(
                TemplateParam::init('accountName', $accountName),
                TemplateParam::init('serviceName', $serviceName)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error', DeviceLocationResultException::class))
            ->type(ManagedAccountsGetAllResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
