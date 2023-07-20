<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ServiceSwaggerSpecId;

/**
 * Builder for model ServiceSwaggerSpecId
 *
 * @see ServiceSwaggerSpecId
 */
class ServiceSwaggerSpecIdBuilder
{
    /**
     * @var ServiceSwaggerSpecId
     */
    private $instance;

    private function __construct(ServiceSwaggerSpecId $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new service swagger spec id Builder object.
     */
    public static function init(): self
    {
        return new self(new ServiceSwaggerSpecId());
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Initializes a new service swagger spec id object.
     */
    public function build(): ServiceSwaggerSpecId
    {
        return CoreHelper::clone($this->instance);
    }
}