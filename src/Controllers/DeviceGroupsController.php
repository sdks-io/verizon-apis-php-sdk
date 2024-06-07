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
use VerizonLib\Exceptions\ConnectivityManagementResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\ConnectivityManagementSuccessResult;
use VerizonLib\Models\CreateDeviceGroupRequest;
use VerizonLib\Models\DeviceGroup;
use VerizonLib\Models\DeviceGroupDevicesData;
use VerizonLib\Models\DeviceGroupUpdateRequest;
use VerizonLib\Server;

class DeviceGroupsController extends BaseController
{
    /**
     * Returns a list of all device groups in a specified account.
     *
     * @param string $aname Account name.
     *
     * @return ApiResponse Response from the API call
     */
    public function listDeviceGroups(string $aname): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/m2m/v1/groups/{aname}')
            ->server(Server::THINGSPACE)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(TemplateParam::init('aname', $aname));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', ConnectivityManagementResultException::class))
            ->type(DeviceGroup::class, 1)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Deletes a device group from the account. Devices in the group are moved to the default device group
     * and are not deleted from the account.
     *
     * @param string $aname Account name.
     * @param string $gname Group name.
     *
     * @return ApiResponse Response from the API call
     */
    public function deleteDeviceGroup(string $aname, string $gname): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/m2m/v1/groups/{aname}/name/{gname}')
            ->server(Server::THINGSPACE)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(TemplateParam::init('aname', $aname), TemplateParam::init('gname', $gname));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', ConnectivityManagementResultException::class))
            ->type(ConnectivityManagementSuccessResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * When HTTP status is 202, a URL will be returned in the Location header of the form
     * /groups/{aname}/name/{gname}/?next={token}. This URL can be used to request the next set of groups.
     *
     * @param string $aname Account name.
     * @param string $gname Group name.
     * @param int|null $next Continue the previous query from the pageUrl pagetoken.
     *
     * @return ApiResponse Response from the API call
     */
    public function getDeviceGroupInformation(string $aname, string $gname, ?int $next = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/m2m/v1/groups/{aname}/name/{gname}')
            ->server(Server::THINGSPACE)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(
                TemplateParam::init('aname', $aname),
                TemplateParam::init('gname', $gname),
                QueryParam::init('next', $next)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', ConnectivityManagementResultException::class))
            ->type(DeviceGroupDevicesData::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Make changes to a device group, including changing the name and description, and adding or removing
     * devices.
     *
     * @param string $aname Account name.
     * @param string $gname Group name.
     * @param DeviceGroupUpdateRequest $body Request to update device group.
     *
     * @return ApiResponse Response from the API call
     */
    public function updateDeviceGroup(string $aname, string $gname, DeviceGroupUpdateRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/m2m/v1/groups/{aname}/name/{gname}')
            ->server(Server::THINGSPACE)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(
                TemplateParam::init('aname', $aname),
                TemplateParam::init('gname', $gname),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', ConnectivityManagementResultException::class))
            ->type(ConnectivityManagementSuccessResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Create a new device group and optionally add devices to the group. Device groups can make it easier
     * to manage similar devices and to get reports on their usage.
     *
     * @param CreateDeviceGroupRequest $body A request to create a new device group.
     *
     * @return ApiResponse Response from the API call
     */
    public function createDeviceGroup(CreateDeviceGroupRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/m2m/v1/groups')
            ->server(Server::THINGSPACE)
            ->auth(Auth::and('thingspace_oauth', 'VZ-M2M-Token'))
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error response.', ConnectivityManagementResultException::class))
            ->type(ConnectivityManagementSuccessResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
