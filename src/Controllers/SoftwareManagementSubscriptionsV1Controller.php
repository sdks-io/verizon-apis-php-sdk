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
use VerizonLib\Exceptions\FotaV1ResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\AccountLicenseInfo;
use VerizonLib\Models\V1AccountSubscription;
use VerizonLib\Server;

class SoftwareManagementSubscriptionsV1Controller extends BaseController
{
    /**
     * This subscriptions endpoint retrieves an account's current Software Management Service subscription
     * status.
     *
     * @param string $account Account identifier in "##########-#####".
     *
     * @return ApiResponse Response from the API call
     */
    public function getAccountSubscriptionStatus(string $account): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/subscriptions/{account}')
            ->server(Server::SOFTWARE_MANAGEMENT_V1)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(TemplateParam::init('account', $account));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', FotaV1ResultException::class))
            ->type(V1AccountSubscription::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns information about an account's Software Management Services licenses and a list of licensed
     * devices.
     *
     * @param string $account Account identifier in "##########-#####".
     * @param string $startIndex The zero-based number of the first record to return. Set
     *        startIndex=0 for the first request. If there are more than 1,000 devices in the
     *        response, set startIndex=1000 for the second request, 2000 for the third request,
     *        etc.
     *
     * @return ApiResponse Response from the API call
     */
    public function getAccountLicenseStatus(string $account, string $startIndex): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/licenses/{account}/index/{startIndex}')
            ->server(Server::SOFTWARE_MANAGEMENT_V1)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(TemplateParam::init('account', $account), TemplateParam::init('startIndex', $startIndex));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Unexpected error.', FotaV1ResultException::class))
            ->type(AccountLicenseInfo::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
