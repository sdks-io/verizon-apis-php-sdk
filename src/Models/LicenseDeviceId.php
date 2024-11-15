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
 * Id of the devices.
 */
class LicenseDeviceId implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $kind;

    /**
     * Returns Id.
     * For 4G devices, IMEI (decimal, up to 15 digits) for unassign and ICCID (decimal, up to 20 digits)
     * for assign.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * For 4G devices, IMEI (decimal, up to 15 digits) for unassign and ICCID (decimal, up to 20 digits)
     * for assign.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Kind.
     * For 4G devices, ICCID (decimal, up to 20 digits) for unassign and IMEI (decimal, up to 15 digits)
     * for assign.
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Sets Kind.
     * For 4G devices, ICCID (decimal, up to 20 digits) for unassign and IMEI (decimal, up to 15 digits)
     * for assign.
     *
     * @maps kind
     */
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
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
        if (isset($this->id)) {
            $json['id']   = $this->id;
        }
        if (isset($this->kind)) {
            $json['kind'] = $this->kind;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}