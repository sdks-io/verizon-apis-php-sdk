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
 * List of devices to add or remove.
 */
class FirmwareUpgradeChangeRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string[]
     */
    private $deviceList;

    /**
     * @param string $type
     * @param string[] $deviceList
     */
    public function __construct(string $type, array $deviceList)
    {
        $this->type = $type;
        $this->deviceList = $deviceList;
    }

    /**
     * Returns Type.
     * Possible values are `append` or `remove`
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Possible values are `append` or `remove`
     *
     * @required
     * @maps type
     * @factory \VerizonLib\Models\FirmwareTypeListEnum::checkValue
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Device List.
     * The IMEIs of the devices.
     *
     * @return string[]
     */
    public function getDeviceList(): array
    {
        return $this->deviceList;
    }

    /**
     * Sets Device List.
     * The IMEIs of the devices.
     *
     * @required
     * @maps deviceList
     *
     * @param string[] $deviceList
     */
    public function setDeviceList(array $deviceList): void
    {
        $this->deviceList = $deviceList;
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
        $json['type']       = FirmwareTypeListEnum::checkValue($this->type);
        $json['deviceList'] = $this->deviceList;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
