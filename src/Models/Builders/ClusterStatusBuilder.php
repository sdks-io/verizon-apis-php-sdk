<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ClusterStatus;
use VerizonLib\Models\ClusterStatusExtra;

/**
 * Builder for model ClusterStatus
 *
 * @see ClusterStatus
 */
class ClusterStatusBuilder
{
    /**
     * @var ClusterStatus
     */
    private $instance;

    private function __construct(ClusterStatus $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new cluster status Builder object.
     */
    public static function init(): self
    {
        return new self(new ClusterStatus());
    }

    /**
     * Sets conditions field.
     */
    public function conditions(?array $value): self
    {
        $this->instance->setConditions($value);
        return $this;
    }

    /**
     * Sets token field.
     */
    public function token(?string $value): self
    {
        $this->instance->setToken($value);
        return $this;
    }

    /**
     * Sets published blueprint field.
     */
    public function publishedBlueprint(?string $value): self
    {
        $this->instance->setPublishedBlueprint($value);
        return $this;
    }

    /**
     * Sets nodes field.
     */
    public function nodes(?array $value): self
    {
        $this->instance->setNodes($value);
        return $this;
    }

    /**
     * Sets system task count field.
     */
    public function systemTaskCount(?int $value): self
    {
        $this->instance->setSystemTaskCount($value);
        return $this;
    }

    /**
     * Sets custom task count field.
     */
    public function customTaskCount(?int $value): self
    {
        $this->instance->setCustomTaskCount($value);
        return $this;
    }

    /**
     * Sets auxiliary task count field.
     */
    public function auxiliaryTaskCount(?int $value): self
    {
        $this->instance->setAuxiliaryTaskCount($value);
        return $this;
    }

    /**
     * Sets projects field.
     */
    public function projects(?array $value): self
    {
        $this->instance->setProjects($value);
        return $this;
    }

    /**
     * Sets extra field.
     */
    public function extra(?ClusterStatusExtra $value): self
    {
        $this->instance->setExtra($value);
        return $this;
    }

    /**
     * Initializes a new cluster status object.
     */
    public function build(): ClusterStatus
    {
        return CoreHelper::clone($this->instance);
    }
}
