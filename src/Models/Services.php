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
 * Response to get all services.
 */
class Services implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $totalRecords;

    /**
     * @var Service[]|null
     */
    private $serviceResList;

    /**
     * Returns Total Records.
     * Will display the total number of records fetched.
     */
    public function getTotalRecords(): ?int
    {
        return $this->totalRecords;
    }

    /**
     * Sets Total Records.
     * Will display the total number of records fetched.
     *
     * @maps totalRecords
     */
    public function setTotalRecords(?int $totalRecords): void
    {
        $this->totalRecords = $totalRecords;
    }

    /**
     * Returns Service Res List.
     * Response to fetch all services.
     *
     * @return Service[]|null
     */
    public function getServiceResList(): ?array
    {
        return $this->serviceResList;
    }

    /**
     * Sets Service Res List.
     * Response to fetch all services.
     *
     * @maps serviceResList
     *
     * @param Service[]|null $serviceResList
     */
    public function setServiceResList(?array $serviceResList): void
    {
        $this->serviceResList = $serviceResList;
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
        if (isset($this->totalRecords)) {
            $json['totalRecords']   = $this->totalRecords;
        }
        if (isset($this->serviceResList)) {
            $json['serviceResList'] = $this->serviceResList;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}