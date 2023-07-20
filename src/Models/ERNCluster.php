<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class ERNCluster implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var NamespaceIdItem[]|null
     */
    private $nameSpace;

    /**
     * Returns Id.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     * User display name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * User display name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Name Space.
     *
     * @return NamespaceIdItem[]|null
     */
    public function getNameSpace(): ?array
    {
        return $this->nameSpace;
    }

    /**
     * Sets Name Space.
     *
     * @maps nameSpace
     *
     * @param NamespaceIdItem[]|null $nameSpace
     */
    public function setNameSpace(?array $nameSpace): void
    {
        $this->nameSpace = $nameSpace;
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
            $json['id']        = $this->id;
        }
        if (isset($this->name)) {
            $json['name']      = $this->name;
        }
        if (isset($this->nameSpace)) {
            $json['nameSpace'] = $this->nameSpace;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
