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
use VerizonLib\Exceptions\ReadySimRestErrorResponseException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\TriggerValueResponse;
use VerizonLib\Models\TriggerValueResponse2;
use VerizonLib\Server;

class RetrieveTheTriggersController extends BaseController
{
    /**
     * Retrieves all of the available triggers for pseudo-MDN.
     *
     * @return ApiResponse Response from the API call
     */
    public function getAllAvailableTriggers(): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/m2m/v2/triggers')
            ->server(Server::THINGSPACE)
            ->auth('oAuth2');

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error response', ReadySimRestErrorResponseException::class))
            ->type(TriggerValueResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieve the triggers associated with an account name.
     *
     * @param string $accountName The account name
     *
     * @return ApiResponse Response from the API call
     */
    public function getAllTriggersByAccountName(string $accountName): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/m2m/v2/triggers/accounts/{accountName}')
            ->server(Server::THINGSPACE)
            ->auth('oAuth2')
            ->parameters(TemplateParam::init('accountName', $accountName));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error response', ReadySimRestErrorResponseException::class))
            ->type(TriggerValueResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves all of the triggers for the specified account associated with the PromoAlert category
     *
     * @return ApiResponse Response from the API call
     */
    public function getAllTriggersByTriggerCategory(): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/m2m/v2/triggers/categories/PromoAlerts')
            ->server(Server::THINGSPACE)
            ->auth('oAuth2');

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error response', ReadySimRestErrorResponseException::class))
            ->type(TriggerValueResponse2::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrives a specific trigger by its ID.
     *
     * @param string $triggerId The ID of a specific trigger
     *
     * @return ApiResponse Response from the API call
     */
    public function getTriggersById(string $triggerId): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/m2m/v2/triggers/{triggerId}')
            ->server(Server::THINGSPACE)
            ->auth('oAuth2')
            ->parameters(TemplateParam::init('triggerId', $triggerId));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('0', ErrorType::init('Error response', ReadySimRestErrorResponseException::class))
            ->type(TriggerValueResponse2::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}