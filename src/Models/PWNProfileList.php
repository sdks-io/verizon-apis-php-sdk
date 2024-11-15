<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class PWNProfileList implements \JsonSerializable
{
    /**
     * @var PWNProfile[]|null
     */
    private $profiles;

    /**
     * Returns Profiles.
     *
     * @return PWNProfile[]|null
     */
    public function getProfiles(): ?array
    {
        return $this->profiles;
    }

    /**
     * Sets Profiles.
     *
     * @maps profiles
     *
     * @param PWNProfile[]|null $profiles
     */
    public function setProfiles(?array $profiles): void
    {
        $this->profiles = $profiles;
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
        if (isset($this->profiles)) {
            $json['profiles'] = $this->profiles;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}