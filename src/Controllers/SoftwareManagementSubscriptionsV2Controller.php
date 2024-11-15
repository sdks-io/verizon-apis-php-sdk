<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Controllers;

use Core\Authentication\Auth;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\FotaV2ResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\FotaV2Subscription;
use VerizonLib\Server;

class SoftwareManagementSubscriptionsV2Controller extends BaseController
{
    /**
     * This endpoint retrieves a FOTA subscription by account.
     *
     * @param string $account Account identifier.
     *
     * @return ApiResponse Response from the API call
     */
    public function getAccountSubscriptionStatus(string $account): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/subscriptions/{account}')
            ->server(Server::SOFTWARE_MANAGEMENT_V2)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(TemplateParam::init('account', $account));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', FotaV2ResultException::class))
            ->type(FotaV2Subscription::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}