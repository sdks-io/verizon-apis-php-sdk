<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\NodeStatusAllocatable;

/**
 * Builder for model NodeStatusAllocatable
 *
 * @see NodeStatusAllocatable
 */
class NodeStatusAllocatableBuilder
{
    /**
     * @var NodeStatusAllocatable
     */
    private $instance;

    private function __construct(NodeStatusAllocatable $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new node status allocatable Builder object.
     */
    public static function init(): self
    {
        return new self(new NodeStatusAllocatable());
    }

    /**
     * Sets cpu count field.
     */
    public function cpuCount(?int $value): self
    {
        $this->instance->setCpuCount($value);
        return $this;
    }

    /**
     * Sets ephemeral storage kb field.
     */
    public function ephemeralStorageKB(?int $value): self
    {
        $this->instance->setEphemeralStorageKB($value);
        return $this;
    }

    /**
     * Sets memory kb field.
     */
    public function memoryKB(?int $value): self
    {
        $this->instance->setMemoryKB($value);
        return $this;
    }

    /**
     * Initializes a new node status allocatable object.
     */
    public function build(): NodeStatusAllocatable
    {
        return CoreHelper::clone($this->instance);
    }
}
