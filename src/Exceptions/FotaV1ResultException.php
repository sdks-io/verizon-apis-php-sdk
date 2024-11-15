<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Exceptions;

/**
 * Response in case of any errors.
 */
class FotaV1ResultException extends ApiException
{
    /**
     * @var string
     */
    private $errorCode;

    /**
     * @var string
     */
    private $errorMessage;

    /**
     * @param string $reason
     * @param \VerizonLib\Http\HttpRequest $request
     * @param \VerizonLib\Http\HttpResponse $response
     * @param string $errorCode
     * @param string $errorMessage
     */
    public function __construct(
        string $reason,
        \VerizonLib\Http\HttpRequest $request,
        \VerizonLib\Http\HttpResponse $response,
        string $errorCode,
        string $errorMessage
    ) {
        parent::__construct($reason, $request, $response);
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
    }

    /**
     * Returns Error Code.
     * Error response code.
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    /**
     * Sets Error Code.
     * Error response code.
     *
     * @required
     * @maps errorCode
     */
    public function setErrorCode(string $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * Returns Error Message.
     * Description of the error.
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * Sets Error Message.
     * Description of the error.
     *
     * @required
     * @maps errorMessage
     */
    public function setErrorMessage(string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }
}
