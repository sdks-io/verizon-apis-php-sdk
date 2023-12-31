<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\IPPool;

/**
 * Builder for model IPPool
 *
 * @see IPPool
 */
class IPPoolBuilder
{
    /**
     * @var IPPool
     */
    private $instance;

    private function __construct(IPPool $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new ippool Builder object.
     */
    public static function init(): self
    {
        return new self(new IPPool());
    }

    /**
     * Sets pool name field.
     */
    public function poolName(?string $value): self
    {
        $this->instance->setPoolName($value);
        return $this;
    }

    /**
     * Sets pool type field.
     */
    public function poolType(?string $value): self
    {
        $this->instance->setPoolType($value);
        return $this;
    }

    /**
     * Sets is default pool field.
     */
    public function isDefaultPool(?bool $value): self
    {
        $this->instance->setIsDefaultPool($value);
        return $this;
    }

    /**
     * Initializes a new ippool object.
     */
    public function build(): IPPool
    {
        return CoreHelper::clone($this->instance);
    }
}
