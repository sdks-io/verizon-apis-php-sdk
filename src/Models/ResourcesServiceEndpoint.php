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
 * Service Endpoint path, address, and port.
 */
class ResourcesServiceEndpoint implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $uRI;

    /**
     * @var string|null
     */
    private $fQDN;

    /**
     * @var string|null
     */
    private $iPv4Address;

    /**
     * @var string|null
     */
    private $iPv6Address;

    /**
     * @var int|null
     */
    private $port;

    /**
     * Returns U RI.
     * URI of Service Endpoint if available.
     */
    public function getURI(): ?string
    {
        return $this->uRI;
    }

    /**
     * Sets U RI.
     * URI of Service Endpoint if available.
     *
     * @maps URI
     */
    public function setURI(?string $uRI): void
    {
        $this->uRI = $uRI;
    }

    /**
     * Returns F QDN.
     * FQDN of Service Endpoint if available.
     */
    public function getFQDN(): ?string
    {
        return $this->fQDN;
    }

    /**
     * Sets F QDN.
     * FQDN of Service Endpoint if available.
     *
     * @maps FQDN
     */
    public function setFQDN(?string $fQDN): void
    {
        $this->fQDN = $fQDN;
    }

    /**
     * Returns I Pv 4 Address.
     * IPv4 Address of Service Endpoint if available.
     */
    public function getIPv4Address(): ?string
    {
        return $this->iPv4Address;
    }

    /**
     * Sets I Pv 4 Address.
     * IPv4 Address of Service Endpoint if available.
     *
     * @maps IPv4Address
     */
    public function setIPv4Address(?string $iPv4Address): void
    {
        $this->iPv4Address = $iPv4Address;
    }

    /**
     * Returns I Pv 6 Address.
     * IPv6 Address of Service Endpoint if available.
     */
    public function getIPv6Address(): ?string
    {
        return $this->iPv6Address;
    }

    /**
     * Sets I Pv 6 Address.
     * IPv6 Address of Service Endpoint if available.
     *
     * @maps IPv6Address
     */
    public function setIPv6Address(?string $iPv6Address): void
    {
        $this->iPv6Address = $iPv6Address;
    }

    /**
     * Returns Port.
     * Port information of Service Endpoint if IPv4 or IPv6 is mentioned.
     */
    public function getPort(): ?int
    {
        return $this->port;
    }

    /**
     * Sets Port.
     * Port information of Service Endpoint if IPv4 or IPv6 is mentioned.
     *
     * @maps port
     */
    public function setPort(?int $port): void
    {
        $this->port = $port;
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
        if (isset($this->uRI)) {
            $json['URI']         = $this->uRI;
        }
        if (isset($this->fQDN)) {
            $json['FQDN']        = $this->fQDN;
        }
        if (isset($this->iPv4Address)) {
            $json['IPv4Address'] = $this->iPv4Address;
        }
        if (isset($this->iPv6Address)) {
            $json['IPv6Address'] = $this->iPv6Address;
        }
        if (isset($this->port)) {
            $json['port']        = $this->port;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
