<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

/**
 * Error message.
 */
class IErrorMessage implements \JsonSerializable
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
     * @var string|null
     */
    private $httpStatusCode;

    /**
     * @var string|null
     */
    private $detailErrorMessage;

    /**
     * Returns Error Code.
     * Error Code.
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }

    /**
     * Sets Error Code.
     * Error Code.
     *
     * @maps errorCode
     * @factory \VerizonLib\Models\ErrorResponseCodeEnum::checkValue
     */
    public function setErrorCode(?string $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * Returns Error Message.
     * Details and additional information about the error code.
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * Sets Error Message.
     * Details and additional information about the error code.
     *
     * @maps errorMessage
     */
    public function setErrorMessage(?string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * Returns Http Status Code.
     * HTML error code and description.
     */
    public function getHttpStatusCode(): ?string
    {
        return $this->httpStatusCode;
    }

    /**
     * Sets Http Status Code.
     * HTML error code and description.
     *
     * @maps httpStatusCode
     * @factory \VerizonLib\Models\HttpStatusCodeEnum::checkValue
     */
    public function setHttpStatusCode(?string $httpStatusCode): void
    {
        $this->httpStatusCode = $httpStatusCode;
    }

    /**
     * Returns Detail Error Message.
     * More detail and information about the HTML error code.
     */
    public function getDetailErrorMessage(): ?string
    {
        return $this->detailErrorMessage;
    }

    /**
     * Sets Detail Error Message.
     * More detail and information about the HTML error code.
     *
     * @maps detailErrorMessage
     */
    public function setDetailErrorMessage(?string $detailErrorMessage): void
    {
        $this->detailErrorMessage = $detailErrorMessage;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->errorCode)) {
            $json['errorCode']          = ErrorResponseCodeEnum::checkValue($this->errorCode);
        }
        if (isset($this->errorMessage)) {
            $json['errorMessage']       = $this->errorMessage;
        }
        if (isset($this->httpStatusCode)) {
            $json['httpStatusCode']     = HttpStatusCodeEnum::checkValue($this->httpStatusCode);
        }
        if (isset($this->detailErrorMessage)) {
            $json['detailErrorMessage'] = $this->detailErrorMessage;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
