<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AccessIntents;
use VerizonLib\Models\PlacementIntents;
use VerizonLib\Models\ServicesProfileRegistration;

/**
 * Builder for model ServicesProfileRegistration
 *
 * @see ServicesProfileRegistration
 */
class ServicesProfileRegistrationBuilder
{
    /**
     * @var ServicesProfileRegistration
     */
    private $instance;

    private function __construct(ServicesProfileRegistration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new services profile registration Builder object.
     */
    public static function init(): self
    {
        return new self(new ServicesProfileRegistration());
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
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets service name field.
     */
    public function serviceName(?string $value): self
    {
        $this->instance->setServiceName($value);
        return $this;
    }

    /**
     * Sets service version field.
     */
    public function serviceVersion(?string $value): self
    {
        $this->instance->setServiceVersion($value);
        return $this;
    }

    /**
     * Sets current version field.
     */
    public function currentVersion(?string $value): self
    {
        $this->instance->setCurrentVersion($value);
        return $this;
    }

    /**
     * Sets version field.
     */
    public function version(?string $value): self
    {
        $this->instance->setVersion($value);
        return $this;
    }

    /**
     * Sets state field.
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Sets customer id field.
     */
    public function customerID(?string $value): self
    {
        $this->instance->setCustomerID($value);
        return $this;
    }

    /**
     * Sets created by field.
     */
    public function createdBy(?string $value): self
    {
        $this->instance->setCreatedBy($value);
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
     * Sets last updated by field.
     */
    public function lastUpdatedBy(?string $value): self
    {
        $this->instance->setLastUpdatedBy($value);
        return $this;
    }

    /**
     * Sets last updated at field.
     */
    public function lastUpdatedAt(?string $value): self
    {
        $this->instance->setLastUpdatedAt($value);
        return $this;
    }

    /**
     * Sets linked service instances field.
     */
    public function linkedServiceInstances(?array $value): self
    {
        $this->instance->setLinkedServiceInstances($value);
        return $this;
    }

    /**
     * Unsets linked service instances field.
     */
    public function unsetLinkedServiceInstances(): self
    {
        $this->instance->unsetLinkedServiceInstances();
        return $this;
    }

    /**
     * Sets access intents field.
     */
    public function accessIntents(?AccessIntents $value): self
    {
        $this->instance->setAccessIntents($value);
        return $this;
    }

    /**
     * Sets placement intents field.
     */
    public function placementIntents(?PlacementIntents $value): self
    {
        $this->instance->setPlacementIntents($value);
        return $this;
    }

    /**
     * Sets deployment locations field.
     */
    public function deploymentLocations(?array $value): self
    {
        $this->instance->setDeploymentLocations($value);
        return $this;
    }

    /**
     * Unsets deployment locations field.
     */
    public function unsetDeploymentLocations(): self
    {
        $this->instance->unsetDeploymentLocations();
        return $this;
    }

    /**
     * Initializes a new services profile registration object.
     */
    public function build(): ServicesProfileRegistration
    {
        return CoreHelper::clone($this->instance);
    }
}
