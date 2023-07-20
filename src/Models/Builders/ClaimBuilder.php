<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\Claim;

/**
 * Builder for model Claim
 *
 * @see Claim
 */
class ClaimBuilder
{
    /**
     * @var Claim
     */
    private $instance;

    private function __construct(Claim $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new claim Builder object.
     */
    public static function init(): self
    {
        return new self(new Claim());
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
     * Sets claim status field.
     */
    public function claimStatus(?string $value): self
    {
        $this->instance->setClaimStatus($value);
        return $this;
    }

    /**
     * Sets sand box state field.
     */
    public function sandBoxState(?string $value): self
    {
        $this->instance->setSandBoxState($value);
        return $this;
    }

    /**
     * Sets sand box status field.
     */
    public function sandBoxStatus(?string $value): self
    {
        $this->instance->setSandBoxStatus($value);
        return $this;
    }

    /**
     * Sets environment field.
     */
    public function environment(?string $value): self
    {
        $this->instance->setEnvironment($value);
        return $this;
    }

    /**
     * Sets claim type field.
     */
    public function claimType(?string $value): self
    {
        $this->instance->setClaimType($value);
        return $this;
    }

    /**
     * Sets start time stamp field.
     */
    public function startTimeStamp(?\DateTime $value): self
    {
        $this->instance->setStartTimeStamp($value);
        return $this;
    }

    /**
     * Sets service instance id field.
     */
    public function serviceInstanceId(?string $value): self
    {
        $this->instance->setServiceInstanceId($value);
        return $this;
    }

    /**
     * Sets csp profile id field.
     */
    public function cspProfileId(?string $value): self
    {
        $this->instance->setCspProfileId($value);
        return $this;
    }

    /**
     * Sets service id field.
     */
    public function serviceId(?string $value): self
    {
        $this->instance->setServiceId($value);
        return $this;
    }

    /**
     * Sets end time stamp field.
     */
    public function endTimeStamp(?\DateTime $value): self
    {
        $this->instance->setEndTimeStamp($value);
        return $this;
    }

    /**
     * Sets created date field.
     */
    public function createdDate(?\DateTime $value): self
    {
        $this->instance->setCreatedDate($value);
        return $this;
    }

    /**
     * Sets last modified date field.
     */
    public function lastModifiedDate(?\DateTime $value): self
    {
        $this->instance->setLastModifiedDate($value);
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
     * Sets last modified by field.
     */
    public function lastModifiedBy(?string $value): self
    {
        $this->instance->setLastModifiedBy($value);
        return $this;
    }

    /**
     * Initializes a new claim object.
     */
    public function build(): Claim
    {
        return CoreHelper::clone($this->instance);
    }
}