<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class DeviceListWithServiceAddress1 implements \JsonSerializable
{
    /**
     * @var M5gBideviceId1[]|null
     */
    private $deviceId;

    /**
     * @var M5gBiprimaryPlaceofuse|null
     */
    private $primaryPlaceofuse;

    /**
     * Returns Device Id.
     *
     * @return M5gBideviceId1[]|null
     */
    public function getDeviceId(): ?array
    {
        return $this->deviceId;
    }

    /**
     * Sets Device Id.
     *
     * @maps deviceId
     *
     * @param M5gBideviceId1[]|null $deviceId
     */
    public function setDeviceId(?array $deviceId): void
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Primary Placeofuse.
     */
    public function getPrimaryPlaceofuse(): ?M5gBiprimaryPlaceofuse
    {
        return $this->primaryPlaceofuse;
    }

    /**
     * Sets Primary Placeofuse.
     *
     * @maps primaryPlaceofuse
     */
    public function setPrimaryPlaceofuse(?M5gBiprimaryPlaceofuse $primaryPlaceofuse): void
    {
        $this->primaryPlaceofuse = $primaryPlaceofuse;
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
        if (isset($this->deviceId)) {
            $json['deviceId']          = $this->deviceId;
        }
        if (isset($this->primaryPlaceofuse)) {
            $json['primaryPlaceofuse'] = $this->primaryPlaceofuse;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
