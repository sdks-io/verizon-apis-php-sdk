<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Controllers;

use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use VerizonLib\Exceptions\EdgeServiceLaunchResultException;
use VerizonLib\Http\ApiResponse;
use VerizonLib\Models\ServiceResumeResult;
use VerizonLib\Models\UserRoleEnum;
use VerizonLib\Server;

class ServiceInstanceOperationsController extends BaseController
{
    /**
     * Suspend a service Instance
     *
     * @param string $serviceInstanceId
     * @param string $userId
     * @param string $requestId
     * @param string $userRole
     * @param string $customerId
     * @param string|null $correlationId
     *
     * @return ApiResponse Response from the API call
     */
    public function serviceSuspend(
        string $serviceInstanceId,
        string $userId,
        string $requestId,
        string $userRole,
        string $customerId,
        ?string $correlationId = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/v1/service/instances/{serviceInstanceId}/suspend'
        )
            ->server(Server::SERVICES)
            ->auth('global')
            ->parameters(
                TemplateParam::init('serviceInstanceId', $serviceInstanceId),
                HeaderParam::init('userId', $userId),
                HeaderParam::init('requestId', $requestId),
                HeaderParam::init('user_role', $userRole)->serializeBy([UserRoleEnum::class, 'checkValue']),
                HeaderParam::init('customerId', $customerId),
                HeaderParam::init('correlationId', $correlationId)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad Request.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn('401', ErrorType::init('Unauthorized.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn('403', ErrorType::init('Forbidden.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn('404', ErrorType::init('Not found.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn(
                '415',
                ErrorType::init('Unsupported media type.', EdgeServiceLaunchResultException::class)
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn(
                '500',
                ErrorType::init('Internal Server Error.', EdgeServiceLaunchResultException::class)
            )
            ->throwErrorOn('0', ErrorType::init('Unexpected error.', EdgeServiceLaunchResultException::class))
            ->type(ServiceResumeResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * remove a service Instance
     *
     * @param string $serviceInstanceId
     * @param string $userId
     * @param string $requestId
     * @param string $userRole
     * @param string $customerId
     * @param string|null $correlationId
     *
     * @return ApiResponse Response from the API call
     */
    public function serviceRemove(
        string $serviceInstanceId,
        string $userId,
        string $requestId,
        string $userRole,
        string $customerId,
        ?string $correlationId = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/v1/service/instances/{serviceInstanceId}/remove'
        )
            ->server(Server::SERVICES)
            ->auth('global')
            ->parameters(
                TemplateParam::init('serviceInstanceId', $serviceInstanceId),
                HeaderParam::init('userId', $userId),
                HeaderParam::init('requestId', $requestId),
                HeaderParam::init('user_role', $userRole)->serializeBy([UserRoleEnum::class, 'checkValue']),
                HeaderParam::init('customerId', $customerId),
                HeaderParam::init('correlationId', $correlationId)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad Request.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn('401', ErrorType::init('Unauthorized.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn('403', ErrorType::init('Forbidden.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn('404', ErrorType::init('Not found.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn(
                '415',
                ErrorType::init('Unsupported media type.', EdgeServiceLaunchResultException::class)
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn(
                '500',
                ErrorType::init('Internal Server Error.', EdgeServiceLaunchResultException::class)
            )
            ->throwErrorOn('0', ErrorType::init('Unexpected error.', EdgeServiceLaunchResultException::class))
            ->type(ServiceResumeResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Resumes a suspended Service Instance
     *
     * @param string $serviceInstanceId
     * @param string $userId
     * @param string $requestId
     * @param string $userRole
     * @param string $customerId
     * @param string|null $correlationId
     *
     * @return ApiResponse Response from the API call
     */
    public function serviceResume(
        string $serviceInstanceId,
        string $userId,
        string $requestId,
        string $userRole,
        string $customerId,
        ?string $correlationId = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/v1/service/instances/{serviceInstanceId}/resume'
        )
            ->server(Server::SERVICES)
            ->auth('global')
            ->parameters(
                TemplateParam::init('serviceInstanceId', $serviceInstanceId),
                HeaderParam::init('userId', $userId),
                HeaderParam::init('requestId', $requestId),
                HeaderParam::init('user_role', $userRole)->serializeBy([UserRoleEnum::class, 'checkValue']),
                HeaderParam::init('customerId', $customerId),
                HeaderParam::init('correlationId', $correlationId)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad Request.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn('401', ErrorType::init('Unauthorized.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn('403', ErrorType::init('Forbidden.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn('404', ErrorType::init('Not found.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn(
                '415',
                ErrorType::init('Unsupported media type.', EdgeServiceLaunchResultException::class)
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn(
                '500',
                ErrorType::init('Internal Server Error.', EdgeServiceLaunchResultException::class)
            )
            ->throwErrorOn('0', ErrorType::init('Unexpected error.', EdgeServiceLaunchResultException::class))
            ->type(ServiceResumeResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * upgrade a service Instance
     *
     * @param string $serviceInstanceId
     * @param string $userId
     * @param string $requestId
     * @param string $userRole
     * @param string $customerId
     * @param string|null $correlationId
     *
     * @return ApiResponse Response from the API call
     */
    public function serviceUpgrade(
        string $serviceInstanceId,
        string $userId,
        string $requestId,
        string $userRole,
        string $customerId,
        ?string $correlationId = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/v1/service/instances/{serviceInstanceId}/upgrade'
        )
            ->server(Server::SERVICES)
            ->auth('global')
            ->parameters(
                TemplateParam::init('serviceInstanceId', $serviceInstanceId),
                HeaderParam::init('userId', $userId),
                HeaderParam::init('requestId', $requestId),
                HeaderParam::init('user_role', $userRole)->serializeBy([UserRoleEnum::class, 'checkValue']),
                HeaderParam::init('customerId', $customerId),
                HeaderParam::init('correlationId', $correlationId)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad Request.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn('401', ErrorType::init('Unauthorized.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn('403', ErrorType::init('Forbidden.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn('404', ErrorType::init('Not found.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn(
                '415',
                ErrorType::init('Unsupported media type.', EdgeServiceLaunchResultException::class)
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests.', EdgeServiceLaunchResultException::class))
            ->throwErrorOn(
                '500',
                ErrorType::init('Internal Server Error.', EdgeServiceLaunchResultException::class)
            )
            ->throwErrorOn('0', ErrorType::init('Unexpected error.', EdgeServiceLaunchResultException::class))
            ->type(ServiceResumeResult::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
