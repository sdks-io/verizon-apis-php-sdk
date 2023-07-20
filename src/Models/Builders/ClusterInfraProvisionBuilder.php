<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ClusterInfraProvision;

/**
 * Builder for model ClusterInfraProvision
 *
 * @see ClusterInfraProvision
 */
class ClusterInfraProvisionBuilder
{
    /**
     * @var ClusterInfraProvision
     */
    private $instance;

    private function __construct(ClusterInfraProvision $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new cluster infra provision Builder object.
     */
    public static function init(): self
    {
        return new self(new ClusterInfraProvision());
    }

    /**
     * Sets cluster id field.
     */
    public function clusterId(?string $value): self
    {
        $this->instance->setClusterId($value);
        return $this;
    }

    /**
     * Sets provision id field.
     */
    public function provisionId(?string $value): self
    {
        $this->instance->setProvisionId($value);
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets modified at field.
     */
    public function modifiedAt(?string $value): self
    {
        $this->instance->setModifiedAt($value);
        return $this;
    }

    /**
     * Sets organization id field.
     */
    public function organizationId(?string $value): self
    {
        $this->instance->setOrganizationId($value);
        return $this;
    }

    /**
     * Sets partner id field.
     */
    public function partnerId(?string $value): self
    {
        $this->instance->setPartnerId($value);
        return $this;
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
     * Sets running state field.
     */
    public function runningState(?string $value): self
    {
        $this->instance->setRunningState($value);
        return $this;
    }

    /**
     * Sets running status field.
     */
    public function runningStatus(?string $value): self
    {
        $this->instance->setRunningStatus($value);
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
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets total steps field.
     */
    public function totalSteps(?int $value): self
    {
        $this->instance->setTotalSteps($value);
        return $this;
    }

    /**
     * Initializes a new cluster infra provision object.
     */
    public function build(): ClusterInfraProvision
    {
        return CoreHelper::clone($this->instance);
    }
}