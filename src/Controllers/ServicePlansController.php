<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Controllers;

use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\ConnectivityManagementResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\ServicePlan;
use VerizonLib\Server;

class ServicePlansController extends BaseController
{
    /**
     * Returns a list of all data service plans that are associated with a specified billing account. When
     * you send a request to /devices/actions/activate to activate a line of service you must specify the
     * code for one of the service plans associated with your account.
     *
     * @param string $aname Account name.
     *
     * @return ApiResponse Response from the API call
     */
    public function listAccountServicePlans(string $aname): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/plans/{aname}')
            ->server(Server::M2M)
            ->auth('global')
            ->parameters(TemplateParam::init('aname', $aname));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', ConnectivityManagementResultException::class))
            ->type(ServicePlan::class, 1)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
