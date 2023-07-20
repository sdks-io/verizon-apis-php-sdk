<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ServiceManagementResult;

/**
 * Builder for model ServiceManagementResult
 *
 * @see ServiceManagementResult
 */
class ServiceManagementResultBuilder
{
    /**
     * @var ServiceManagementResult
     */
    private $instance;

    private function __construct(ServiceManagementResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new service management result Builder object.
     */
    public static function init(): self
    {
        return new self(new ServiceManagementResult());
    }

    /**
     * Sets job id field.
     */
    public function jobId(?string $value): self
    {
        $this->instance->setJobId($value);
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
     * Sets state field.
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Initializes a new service management result object.
     */
    public function build(): ServiceManagementResult
    {
        return CoreHelper::clone($this->instance);
    }
}
