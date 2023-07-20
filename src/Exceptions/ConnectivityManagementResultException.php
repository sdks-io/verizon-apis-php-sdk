<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Exceptions;

/**
 * Response to errors.
 */
class ConnectivityManagementResultException extends ApiException
{
    /**
     * @var string|null
     */
    private $errorCode;

    /**
     * @var string|null
     */
    private $errorMessage;

    /**
     * Returns Error Code.
     * Code of the error.
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    /**
     * Sets Error Code.
     * Code of the error.
     *
     * @maps errorCode
     */
    public function setErrorCode(?string $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * Returns Error Message.
     * Details of the error.
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * Sets Error Message.
     * Details of the error.
     *
     * @maps errorMessage
     */
    public function setErrorMessage(?string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }
}