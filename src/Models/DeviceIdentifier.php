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
 * Device Id details.
 */
class DeviceIdentifier implements \JsonSerializable
{
    /**
     * @var string
     */
    private $kind;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string|null
     */
    private $mdn;

    /**
     * @param string $kind
     * @param string $id
     */
    public function __construct(string $kind, string $id)
    {
        $this->kind = $kind;
        $this->id = $id;
    }

    /**
     * Returns Kind.
     * Kind of device.
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * Sets Kind.
     * Kind of device.
     *
     * @required
     * @maps kind
     */
    public function setKind(string $kind): void
    {
        $this->kind = $kind;
    }

    /**
     * Returns Id.
     * Device Identity number.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Device Identity number.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Mdn.
     * Device MDN number.
     */
    public function getMdn(): ?string
    {
        return $this->mdn;
    }

    /**
     * Sets Mdn.
     * Device MDN number.
     *
     * @maps mdn
     */
    public function setMdn(?string $mdn): void
    {
        $this->mdn = $mdn;
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
        $json['kind']    = $this->kind;
        $json['id']      = $this->id;
        if (isset($this->mdn)) {
            $json['mdn'] = $this->mdn;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}