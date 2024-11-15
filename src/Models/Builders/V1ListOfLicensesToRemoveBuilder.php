<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\V1ListOfLicensesToRemove;

/**
 * Builder for model V1ListOfLicensesToRemove
 *
 * @see V1ListOfLicensesToRemove
 */
class V1ListOfLicensesToRemoveBuilder
{
    /**
     * @var V1ListOfLicensesToRemove
     */
    private $instance;

    private function __construct(V1ListOfLicensesToRemove $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new v1 list of licenses to remove Builder object.
     */
    public static function init(): self
    {
        return new self(new V1ListOfLicensesToRemove());
    }

    /**
     * Sets count field.
     */
    public function count(?int $value): self
    {
        $this->instance->setCount($value);
        return $this;
    }

    /**
     * Sets has more data field.
     */
    public function hasMoreData(?bool $value): self
    {
        $this->instance->setHasMoreData($value);
        return $this;
    }

    /**
     * Sets update time field.
     */
    public function updateTime(?\DateTime $value): self
    {
        $this->instance->setUpdateTime($value);
        return $this;
    }

    /**
     * Sets device list field.
     */
    public function deviceList(?array $value): self
    {
        $this->instance->setDeviceList($value);
        return $this;
    }

    /**
     * Initializes a new v1 list of licenses to remove object.
     */
    public function build(): V1ListOfLicensesToRemove
    {
        return CoreHelper::clone($this->instance);
    }
}
