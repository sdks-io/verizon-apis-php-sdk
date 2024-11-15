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
 * Specifies the callback service that is being subscribed to and the URL where the listening service
 * is running.
 */
class CallbackRegistrationRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $accountName;

    /**
     * @var string
     */
    private $serviceName;

    /**
     * @var string
     */
    private $endpoint;

    /**
     * @var array|null
     */
    private $httpHeaders;

    /**
     * @param string $accountName
     * @param string $serviceName
     * @param string $endpoint
     */
    public function __construct(string $accountName, string $serviceName, string $endpoint)
    {
        $this->accountName = $accountName;
        $this->serviceName = $serviceName;
        $this->endpoint = $endpoint;
    }

    /**
     * Returns Account Name.
     * The name of the billing account for which callback messages will be sent. Format: "##########-#####".
     */
    public function getAccountName(): string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * The name of the billing account for which callback messages will be sent. Format: "##########-#####".
     *
     * @required
     * @maps accountName
     */
    public function setAccountName(string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Service Name.
     * The name of the callback service, which identifies the type and format of messages that will be sent
     * to the registered URL.
     */
    public function getServiceName(): string
    {
        return $this->serviceName;
    }

    /**
     * Sets Service Name.
     * The name of the callback service, which identifies the type and format of messages that will be sent
     * to the registered URL.
     *
     * @required
     * @maps serviceName
     */
    public function setServiceName(string $serviceName): void
    {
        $this->serviceName = $serviceName;
    }

    /**
     * Returns Endpoint.
     * The URL for your web server.
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * Sets Endpoint.
     * The URL for your web server.
     *
     * @required
     * @maps endpoint
     */
    public function setEndpoint(string $endpoint): void
    {
        $this->endpoint = $endpoint;
    }

    /**
     * Returns Http Headers.
     * Your HTTP headers.
     */
    public function getHttpHeaders(): ?array
    {
        return $this->httpHeaders;
    }

    /**
     * Sets Http Headers.
     * Your HTTP headers.
     *
     * @maps httpHeaders
     */
    public function setHttpHeaders(?array $httpHeaders): void
    {
        $this->httpHeaders = $httpHeaders;
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
        $json['accountName']     = $this->accountName;
        $json['serviceName']     = $this->serviceName;
        $json['endpoint']        = $this->endpoint;
        if (isset($this->httpHeaders)) {
            $json['httpHeaders'] = $this->httpHeaders;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}