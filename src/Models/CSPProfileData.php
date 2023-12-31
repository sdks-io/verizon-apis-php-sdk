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
 * Response to CSP profile list.
 */
class CSPProfileData implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $count;

    /**
     * @var CSPProfile[]|null
     */
    private $cspProfileList;

    /**
     * Returns Count.
     * Total number of records available.
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * Sets Count.
     * Total number of records available.
     *
     * @maps count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    /**
     * Returns Csp Profile List.
     * List of all available CSP profile available within the user's organization.
     *
     * @return CSPProfile[]|null
     */
    public function getCspProfileList(): ?array
    {
        return $this->cspProfileList;
    }

    /**
     * Sets Csp Profile List.
     * List of all available CSP profile available within the user's organization.
     *
     * @maps cspProfileList
     *
     * @param CSPProfile[]|null $cspProfileList
     */
    public function setCspProfileList(?array $cspProfileList): void
    {
        $this->cspProfileList = $cspProfileList;
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
        if (isset($this->count)) {
            $json['count']          = $this->count;
        }
        if (isset($this->cspProfileList)) {
            $json['cspProfileList'] = $this->cspProfileList;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
