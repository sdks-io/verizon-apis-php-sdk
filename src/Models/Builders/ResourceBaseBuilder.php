<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ResourceBase;

/**
 * Builder for model ResourceBase
 *
 * @see ResourceBase
 */
class ResourceBaseBuilder
{
    /**
     * @var ResourceBase
     */
    private $instance;

    private function __construct(ResourceBase $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new resource base Builder object.
     */
    public static function init(): self
    {
        return new self(new ResourceBase());
    }

    /**
     * Sets unit field.
     */
    public function unit(?string $value): self
    {
        $this->instance->setUnit($value);
        return $this;
    }

    /**
     * Sets value field.
     */
    public function value(?int $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Sets max field.
     */
    public function max(?int $value): self
    {
        $this->instance->setMax($value);
        return $this;
    }

    /**
     * Sets min field.
     */
    public function min(?int $value): self
    {
        $this->instance->setMin($value);
        return $this;
    }

    /**
     * Initializes a new resource base object.
     */
    public function build(): ResourceBase
    {
        return CoreHelper::clone($this->instance);
    }
}
