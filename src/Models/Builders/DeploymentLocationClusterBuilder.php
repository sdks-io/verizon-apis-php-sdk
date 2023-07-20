<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeploymentLocationCluster;

/**
 * Builder for model DeploymentLocationCluster
 *
 * @see DeploymentLocationCluster
 */
class DeploymentLocationClusterBuilder
{
    /**
     * @var DeploymentLocationCluster
     */
    private $instance;

    private function __construct(DeploymentLocationCluster $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new deployment location cluster Builder object.
     */
    public static function init(): self
    {
        return new self(new DeploymentLocationCluster());
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
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
     * Initializes a new deployment location cluster object.
     */
    public function build(): DeploymentLocationCluster
    {
        return CoreHelper::clone($this->instance);
    }
}