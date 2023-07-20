<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\V2ListOfLicensesToRemoveRequest;

/**
 * Builder for model V2ListOfLicensesToRemoveRequest
 *
 * @see V2ListOfLicensesToRemoveRequest
 */
class V2ListOfLicensesToRemoveRequestBuilder
{
    /**
     * @var V2ListOfLicensesToRemoveRequest
     */
    private $instance;

    private function __construct(V2ListOfLicensesToRemoveRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new v2 list of licenses to remove request Builder object.
     */
    public static function init(array $deviceList): self
    {
        return new self(new V2ListOfLicensesToRemoveRequest($deviceList));
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
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
     * Initializes a new v2 list of licenses to remove request object.
     */
    public function build(): V2ListOfLicensesToRemoveRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
