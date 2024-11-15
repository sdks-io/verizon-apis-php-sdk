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
 * Response to return the provisioning history of a specified device during a specified time period.
 */
class DeviceProvisioningHistoryListResult implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $hasMoreData;

    /**
     * @var ProvisioningHistory[]|null
     */
    private $provisioningHistory;

    /**
     * Returns Has More Data.
     * False for a status 200 response.True for a status 202 response, indicating that there is more data
     * to be retrieved.
     */
    public function getHasMoreData(): ?bool
    {
        return $this->hasMoreData;
    }

    /**
     * Sets Has More Data.
     * False for a status 200 response.True for a status 202 response, indicating that there is more data
     * to be retrieved.
     *
     * @maps hasMoreData
     */
    public function setHasMoreData(?bool $hasMoreData): void
    {
        $this->hasMoreData = $hasMoreData;
    }

    /**
     * Returns Provisioning History.
     * The provisioning history of a specified device during a specified time period.
     *
     * @return ProvisioningHistory[]|null
     */
    public function getProvisioningHistory(): ?array
    {
        return $this->provisioningHistory;
    }

    /**
     * Sets Provisioning History.
     * The provisioning history of a specified device during a specified time period.
     *
     * @maps provisioningHistory
     *
     * @param ProvisioningHistory[]|null $provisioningHistory
     */
    public function setProvisioningHistory(?array $provisioningHistory): void
    {
        $this->provisioningHistory = $provisioningHistory;
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
        if (isset($this->hasMoreData)) {
            $json['hasMoreData']         = $this->hasMoreData;
        }
        if (isset($this->provisioningHistory)) {
            $json['provisioningHistory'] = $this->provisioningHistory;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
